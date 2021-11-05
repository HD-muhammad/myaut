<?php

use PHPUnit\Framework\TestCase;

require_once "Functions.php";

class Test extends TestCase
{
    public function test_luas()
    {
        $Pjg = new Functions();

        $TestPanjang = 20;
        $pjg = $Pjg -> luas_persegi($TestPanjang);
        
        $this->assertEquals(400, $pjg);
    }

    public function test_md5()
    {
        $Md = new Functions();

        $TestString = "Muhammad Hadi";
        $md = $Md -> md5_digest($TestString);
        
        $this->assertEquals("6fba7e5717168773159cb6208cbefd27", $md);
    }
    
    public function test_kg()
    {
        $Kg = new Functions();

        $TestBerat = 5;
        $kg = $Kg -> kilogram_to_gram($TestBerat);
        
        $this->assertEquals(5000, $kg);
    }

    public function test_genap_ganjil()
    {
        $Agk = new Functions();

        $TestAngka = 24311;
        $agk = $Agk -> genap_or_ganjil($TestAngka);
        
        $this->assertEquals("Ganjil", $agk);
    }

    public function test_check_prima()
    {
        $Prm = new Functions();

        $TestAngka= 11437;
        $prm = $Prm -> check_prima($TestAngka);
        
        $this->assertEquals("Prima", $prm);
    }
}

?>