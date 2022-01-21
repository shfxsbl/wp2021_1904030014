<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'wpsmt5';

$conn = mysqli_connect($host, $user, $pass, $db);

$result = mysqli_query($conn, 'SELECT * FROM calon_mhs');

// AMBIL DATA DARI TABEL CALON MAHASISWA
//mysqli_fetch_row($result);
//mysqli_fetch_assoc();
//mysqli_fetch_array();

while ($camaba = mysqli_fetch_array($result)){
    var_dump($camaba);
}

?>