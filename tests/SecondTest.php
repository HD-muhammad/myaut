<?php

use PHPUnit\Framework\TestCase;

require_once "Wordcount.php";

class SecondTest extends TestCase
{
    public function testCountWords()
    {
        $Wc = new WordCount();

        $TestSentence = "My name is Joko Widodo"; 
        $WordCount = $Wc->countWords($TestSentence);

        $this->assertEquals(5, $WordCount); 
    }
}