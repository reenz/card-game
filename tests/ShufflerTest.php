<?php
use PHPUnit\Framework\TestCase;

require_once './src/Shuffler.php';

class ShufflerTest extends TestCase
{
    public function testShuffleCards()
    {
        $shuffler = new Shuffler();
        $inputArray = array(1, 2, 3, 4);
        $originalArray = $inputArray;
        $shuffler->shuffleCards($inputArray);
        $this->assertNotEquals($originalArray, $inputArray);
        $this->assertTrue(is_array($inputArray));
    }
}
