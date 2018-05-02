#!/usr/bin/php

<?php

require_once './src/Shuffler.php';
require_once './src/Card.php';

class Deck
{
    private $deckArray = array();
    private $suitArray = array("♥", "♣", "♠", "◆");
    private $valueArray = array("A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K");

    public function __construct()
    {
        $this->populateDeck();
    }

    public function getDeckArrayCount()
    {
        return count($this->deckArray);
    }

    public function getDeck()
    {
        return $this->deckArray;
    }

    public function getSuitArrayCount()
    {
        return count($this->suitArray);
    }

    public function shuffleCards()
    {
        $shuffler = new Shuffler();
        $shuffler->shuffleCards($this->deckArray);
    }

    public function getCardFromDeck()
    {
        return array_shift($this->deckArray);
    }

    private function populateDeck()
    {
        foreach ($this->suitArray as $suit) {
            foreach ($this->valueArray as $value) {
                array_push($this->deckArray, new Card($value, $suit));
            }
        }
        return ($this->deckArray);
    }
}
?>