<?php

namespace App\Repositories;

use App\Models\Hand;

class HandsRepository {

    public function storeHand(array $cards, int $amount)
    {
        $hand = new Hand();
        $hand->user_id = 1; //TODO change to loged in User id
        $hand->card_1 = $cards[0];
        $hand->card_2 = $cards[1];
        $hand->card_3 = $cards[2];
        $hand->card_4 = $cards[3];
        $hand->card_5 = $cards[4];
        $hand->amount = $amount;
        $hand->save();
    }

    public function getFirstHand($user_id)
    {
        return Hand::where('user_id', $user_id)
            ->select('card_1', 'card_2', 'card_3', 'card_4', 'card_5')
            ->orderByDesc('created_at')
            ->first();
    }
}