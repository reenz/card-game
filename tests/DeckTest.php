<?php
use PHPUnit\Framework\TestCase;

require_once './src/Deck.php';

class DeckTest extends TestCase
{
    private $deck;

    protected function setUp()
    {
        $this->deck = new Deck();
    }

    public function testGetDeckArrayCount()
    {
        $expectedCardsInDeck = 52;
        $actualCardsInDeck = $this->deck->getDeckArrayCount();
        $this->assertEquals($expectedCardsInDeck, $actualCardsInDeck);
    }

    public function testSuitDeckArrayCount()
    {
        $expectedSuitsInDeck = 4;
        $actualSuitsInDeck = $this->deck->getSuitArrayCount();
        $this->assertEquals($expectedSuitsInDeck, $actualSuitsInDeck);
    }

    public function testShuffleCards()
    {
        $actualDeck = $this->deck->getDeck();
        $this->deck->shuffleCards();
        $deckAfterShuffle = $this->deck->getDeck();  
        print_r($deckAfterShuffle);
        $this->assertNotEquals($deckAfterShuffle, $actualDeck);
    }

    public function testGetCardFromDeck()
    {
        $expectedRemainingCards = 51;
        $this->deck->getCardFromDeck();
        $actualRemainingCardsInDeck = $this->deck->getDeckArrayCount();
        $this->assertEquals($expectedRemainingCards, $actualRemainingCardsInDeck);
    }

}
