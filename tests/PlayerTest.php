<?php
use PHPUnit\Framework\TestCase;

require_once './src/Player.php';

class PlayerTest extends TestCase
{
    private $player;
    
    protected function setUp()
    {
        $this->player = new Player("1");
    }

    public function testAddCard()
    {
        $expected = array("A◆");
        $this->player->addCard("A◆");
        $actual = $this->player->getCards() ;
        $this->assertEquals($expected, $actual);
    }
}
?>
