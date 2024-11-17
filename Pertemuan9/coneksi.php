<?php
// 4 variabel wajib

$servername = 'localhost';
$username = 'root';
$password = '';
$database ='tb_mahasiswa';

$koneksi = mysqli_connect ($servername, $username, $password, $database);

if ($koneksi->connect_error)
{
    die("Koneksi gagal ke databases : " . $koneksi->connect_eror);
}


// echo "Koneksi Berhasil";
// var_dump($koneksi);

?>