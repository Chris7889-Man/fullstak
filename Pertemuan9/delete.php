<?php

include 'coneksi.php';

if (isset($_GET['stambuk']))
{
    $stambuk = $_GET['stambuk'];
    $sql = "DELETE FROM data_mahasiswa WHERE stambuk = '$stambuk' ";


    if($koneksi->query($sql) === TRUE)
    {
        header('Location: index.php');
    }
    else
    {
        echo "Eror : " . $koneksi->error;
    }
}

?>