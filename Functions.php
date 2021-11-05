<?php
// File : Functions.php
class Functions
{
    public function luas_persegi($panjang)
    {
        return $panjang*$panjang;
    }

    public function md5_digest($string)
    {
        $salt = "827103845";
        return md5($string.$salt);
    }

    public function kilogram_to_gram($berat)
    {
        return $berat*1000;
    }

    public function genap_or_ganjil($angka)
    {
        if ($angka % 2 == 0){ 
            $kondisi = "Genap";
        }else {
            $kondisi = "Ganjil";
        }
        return $kondisi;
    }

    public function check_prima($angka)
    {
        $check = 0;
        for ($i = 1; $i <= $angka; $i++)
        {
            if ($angka % $i == 0)
            {
                $check++;
            }
        }
        if ($check == 2){
            $kondisi = "Prima";
        }
        else
        {
            $kondisi = "Bukan Prima";
        }
        return $kondisi;
    }

}
?>