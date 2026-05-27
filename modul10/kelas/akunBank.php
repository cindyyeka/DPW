<?php

class akunBank
{
    protected $accountNumber;
    protected $jmlUang;
    protected $nama;

    public function __construct($nomorAkun, $nominal, $nama = "Tanpa Nama")
    {
        $this->accountNumber = $nomorAkun;
        $this->jmlUang = $nominal;
        $this->nama = $nama;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getNomorAkun()
    {
        return $this->accountNumber;
    }

    public function tambahUang($jumlah)
    {
        $this->jmlUang += $jumlah;
    }

    public function kurangiUang($jumlah)
    {
        if ($jumlah <= $this->jmlUang) {
            $this->jmlUang -= $jumlah;
        } else {
            echo "Saldo tidak cukup untuk dikurangi sebesar Rp " . number_format($jumlah, 0, ',', '.') . "<br>";
        }
    }

    public function tampilkanUang()
    {
        return $this->jmlUang;
    }

    public function hitungPajak()
    {
        return $this->jmlUang * 0.11;
    }
}

?>