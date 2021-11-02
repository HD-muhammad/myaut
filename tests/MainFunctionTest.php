<?php

use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "MainFunctions.php"; 

class MainFunctionTest extends TestCase
{
    public function test_sha256()
    {
        $Enc = new MainFunctions();

        $TestString = "I Like Mice"; // 4 Kata ..
        $enc = $Enc->sha256_digest($TestString);

        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals("0aac2eba7dbf2ba7fead6e87c5f7775ecc0cc4012e8378c51a37fd97bb7fdbf8", $enc); 
    }

    
    public function test_tomorrow()
    {
        $day = new MainFunctions();

        $tmw = $day->tomorrow();

        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals("Wednesday", $tmw);
    }
}