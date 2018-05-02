<?php

require_once "./src/Card.php";

class Player
{
    private $playerID;
    private $cards = array();

    public function __construct($playerID)
    {
        $this->$playerID = $playerID;
    }

    public function addCard($card)
    {   
        array_push($this->cards, $card);
    }

    public function getCards()
    {
        return ($this->cards);
    }
}
