<?php

//fungsi tanpa parameter
function aturan(){
    echo "Aturan selama bimbingan IT <br>";
    echo "1. Jangan terlambat <br>";
    echo "2. Bawa leptop <br>" ;
    echo "3. Mandi <br>" ;
    // ada nilai/hasil yang kita tampilkan atau kembalikan.
    // baru pakai return pengunaannya hannya 1 kali
}

aturan();
echo "<br>";

// Fungsi paka parameter
function balok($panjang , $lebar, $tinggi){
    $hasil = $panjang * $lebar * $tinggi;
    return $hasil;
}

echo "Hasil balok : " . balok(5,2,5,) ."<br>";
echo "Hasil balok : " . balok(51,22,422) . "<br>";
 
?>