<?php

class Database {

    // variable database
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db   = "tabel";

    // variable koneksi
    public $conn;

    // function otomatis dijalankan
    public function __construct() {

        // membuat koneksi
        $this->conn = new mysqli(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );

        // cek koneksi
        if ($this->conn->connect_error) {

            die("Connection failed : "
            . $this->conn->connect_error);
        }

        echo "Koneksi berhasil";
    }
}

?>