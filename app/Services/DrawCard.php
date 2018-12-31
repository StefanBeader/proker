<?php

namespace App\Services;

use App\Repositories\CardsRepository;

class DrawCard {

    private $value;
    private $suit;
    public $card;

    public function __construct()
    {
        $this->card = $this->getCard();
    }

    private function setValue():int
    {
        return rand(2, 14);
    }

    private function setSuit():int
    {
        return rand(1, 4);
    }

    private function getCard()
    {
        $repo = new CardsRepository();
        return $repo->drawCard(
            $this->value = $this->setValue(),
            $this->suit = $this->setSuit());
    }

    public function drawCardWithId($id)
    {
        $repo = new CardsRepository();
        return $repo->drawCardWithId($id);
    }

}