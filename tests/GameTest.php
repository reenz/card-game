<?php
use PHPUnit\Framework\TestCase;

require_once './src/Game.php';

class GameTest extends TestCase
{
    private $game;
    protected function setUp()
    {
        $this->game = new Game();
       
    }

    public function testGetPlayers()
    {
        $this->game->deal();
        $players = $this->game->getPlayers();
        $expectedCards = 7;
        foreach ($players as $player) {
            $this->assertEquals($expectedCards, count($player->getCards()));
        }
    }
}
