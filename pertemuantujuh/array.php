<?php

$arr = [1,2,3,4,5,6,7,8,9,10];

echo "Ini cetak langsung : " . $arr[0];
echo"<br>";


//FOR
for($i = 0; $i < 9; $i++){
    echo "ini index ke : " . $i . "yang nilai nya : " . $arr[$i];
    echo "<br>";
}

//WHILE
$awal = 0;
while($awal < 9){

    echo "ini while array yang nilai nya : " .$arr[$awal];
    echo "<br>";
    $awal++; 
}

// Do While

$awal1 = 0;
do {
    echo "ini do while perulangan while yang nilainya  : " . $arr[$awal1];
    echo "<br>";
    $awal1++;
}
while ($awal1 < 9 );




?>