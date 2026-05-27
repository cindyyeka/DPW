<?php

class Koneksi_db
{
    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "tabel";

    private $koneksi = false;
    public $hasil = array();

    public function connect()
    {
        if (!$this->koneksi) {
            $mysql = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

            if ($mysql) {
                $this->koneksi = true;
                return true;
            } else {
                array_push($this->hasil, mysqli_connect_error());
                return false;
            }
        } else {
            return true;
        }
    }
}

?>