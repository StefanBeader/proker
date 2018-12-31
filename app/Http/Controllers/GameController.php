<?php

namespace App\Http\Controllers;

use App\Repositories\HandsRepository;
use App\Services\CardImage;
use App\Services\DrawCard;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function bet()
    {

    }

    public function firstHand()
    {
        $cards = [];
        $cardIds = [];
        while (count($cards) < 5) {
            $card = (new DrawCard())->card;
            if (!in_array($card->id, $cardIds)) {
                $cardImage = (new CardImage($card))->getCardImage();
                $cards[] = $cardImage;
                $cardIds[] = $card->id;
            }
        }

        (new HandsRepository())->storeHand($cardIds);

        return view('game/game', compact('cards'));
    }

    public function secondHand(Request $request)
    {
        $firstHand = (new HandsRepository())->getFirstHand(1);

        $cards = [];
        $secondHandIds = [];
        foreach ($request->all() as $key => $value) {
            if (strpos($key, 'card') !== false) {
                $secondHandIds[] = $firstHand->$key;
                $card = (new DrawCard())->drawCardWithId($firstHand->$key);
                $cardImage = (new CardImage($card))->getCardImage();
                $cards[$key] = $cardImage;

            }
        }

        $key = 'card_1';
        while (count($cards) < 5) {
            $card = (new DrawCard())->card;
            if (!in_array($card->id, $secondHandIds)) {
                $cardImage = (new CardImage($card))->getCardImage();
                $key = array_key_exists($key, $cards) ? ($this->generateKey($key)) : $key;
                $cards[$key] = $cardImage;
                $secondHandIds[] = $card->id;
            }

        }
        ksort($cards);

        return view('game/game', compact('cards'));
    }

    private function generateKey($key)
    {
        list($string, $number) = explode('_', $key);
        return $string . '_' . ($number++);
    }
}
