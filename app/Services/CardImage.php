<?php

namespace App\Services;

use App\Models\Card;

class CardImage {

    private $card;

    public function __construct(Card $card)
    {
        $this->card = $card;
    }

    /**
     * @return string
     */
    public function getCardImage():string
    {
        $deck = 'default';
        return "images/cards/{$deck}/{$this->card->value}_of_{$this->card->suit->label}.png";
    }
}