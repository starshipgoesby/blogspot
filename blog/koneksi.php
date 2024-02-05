<?php

$GLOBALS['conn'] = connectDB();
// Fungsi koneksi ke database
function connectDB() {
    $dbhost = "localhost"; // Ganti dengan host Anda
    $dbusername = "root"; // Ganti dengan username Anda
    $dbpassword = ""; // Ganti dengan password Anda
    $dbname = "portfolio_db"; // Ganti dengan nama database Anda

    $conn = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi database gagal: " . $conn->connect_error);
    }

    return $conn;
}

?>