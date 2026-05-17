<?php

class Manusia
{
    // Property
    protected $nama;
    protected $nik = "3521121909070001";
    protected $umur;

    // Setter Nama
    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    // Getter Nama
    public function getNama()
    {
        return $this->nama;
    }

    // Setter Umur
    public function setUmur($umur)
    {
        $this->umur = $umur;
    }

    // Getter Umur
    public function getUmur()
    {
        return $this->umur;
    }

    // Getter NIK
    public function getNik()
    {
        return "NIK : " . $this->nik;
    }
}
?>