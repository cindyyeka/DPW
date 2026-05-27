<?php

class buah
{
    public $nama;
    protected $warna;
    private $berat;

    public function setWarna($warna)
    {
        $this->warna = $warna;
    }

    public function getWarna()
    {
        return $this->warna;
    }

    public function setBerat($berat)
    {
        $this->berat = $berat;
    }

    public function getBerat()
    {
        return $this->berat;
    }
}

$mango = new buah();

$mango->nama = "Mango";
$mango->setWarna("Yellow");
$mango->setBerat("300");

echo "<h2>Data Buah</h2>";
echo "Nama Buah : " . $mango->nama . "<br>";
echo "Warna Buah : " . $mango->getWarna() . "<br>";
echo "Berat Buah : " . $mango->getBerat() . " gram<br>";

echo "<hr>";
echo "<b>Kesimpulan:</b><br>";
echo "Properti public dapat diakses langsung dari luar class. 
Properti protected dan private tidak dapat diakses langsung, sehingga harus menggunakan method getter dan setter.";

?>