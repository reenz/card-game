<?php
use PHPUnit\Framework\TestCase;

require_once './src/Card.php';

class CardTest extends TestCase
{
    private $card;
    protected function setUp()
    {
        $this->card = new Card("A", "◆");
    }

    public function testGetValue()
    {
        $this->assertEquals("A", $this->card->getValue());
    }

    public function testGetSuit()
    {
        $this->assertEquals("◆", $this->card->getSuit());
    }
}
?>
