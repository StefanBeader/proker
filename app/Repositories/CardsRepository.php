<?php

namespace App\Repositories;

use App\Models\Card;

class CardsRepository {

    public function drawCard($value, $suit)
    {
        return Card::where(['value' => $value, 'suit_id' => $suit])->first();
    }
}