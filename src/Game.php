<?php

require_once './src/Deck.php';
require_once './src/Player.php';
require_once './src/Card.php';

class Game
{
    private $deck;
    private $playerArray = array();
    private $playerCount;

    public function __construct($playerCount = 4)
    {
        $this->playerCount = $playerCount;
        $this->addPlayers();
        $this->deck = new Deck();
    }

    public function shuffleCards()
    {
        $this->deck->shuffleCards();
    }

    public function deal($noOfCardsToDeal = 7)
    {
        for ($i = 0; $i < $noOfCardsToDeal; $i++) {
           $this->getCardsFromDeck();
        }
    }

    public function getCardsFromDeck()
    {
        foreach ($this->playerArray as $player) {
            $player->addCard($this->deck->getCardFromDeck());
        }
    }

    public function getPlayers()
    {
        return $this->playerArray;
    }

    private function addPlayers()
    {
        for ($i = 0; $i < $this->playerCount; $i++) {
            array_push($this->playerArray, new Player($i + 1));
        }
    }

}
