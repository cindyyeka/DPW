<?php

class buah2
{
    public $nama;
    public $warna;
    public $berat;

    function setNama($n)
    {
        $this->nama = $n;
    }

    protected function setWarna($w)
    {
        $this->warna = $w;
    }

    private function setBerat($b)
    {
        $this->berat = $b;
    }

    public function isiDataBuah($nama, $warna, $berat)
    {
        $this->setNama($nama);
        $this->setWarna($warna);
        $this->setBerat($berat);
    }

    public function tampilkanData()
    {
        echo "Nama Buah : " . $this->nama . "<br>";
        echo "Warna Buah : " . $this->warna . "<br>";
        echo "Berat Buah : " . $this->berat . " gram<br>";
    }
}

$mango = new buah2();
$mango->isiDataBuah("Mango", "Yellow", "300");

echo "<h2>Data Buah 2</h2>";
$mango->tampilkanData();

echo "<hr>";
echo "<b>Kesimpulan:</b><br>";
echo "Method public dapat dipanggil dari luar class. 
Method protected dan private tidak dapat dipanggil langsung dari luar class. 
Agar tetap bisa digunakan, method tersebut dipanggil melalui method public di dalam class.";

?>