<?php
class database {
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "portfolio_db";

    function __construct()
    { $koneksi = mysqli_connect($this->host, $this->username,$this->password, $this->database);
        if($koneksi) {
            echo "Koneksi Database Berhasil";
        } else {
            echo "Koneksi Database Tidak Berhasil";
        }
        
    }
}

?>