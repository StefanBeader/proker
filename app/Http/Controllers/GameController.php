<?php

namespace App\Http\Controllers;

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

        return view('game/game', compact('cards'));
    }

    public function secondHand(Request $request)
    {
        $cardsToKeep = $request->all();
        var_dump($cardsToKeep);die();
        return view('game/game', compact('cards'));
    }
}
