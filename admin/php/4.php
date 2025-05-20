<!-- function
 1. function yang kita buat
 2. function bawaan strlen

-->
<?php
function callname()
{
    echo "Nama saya rey <br>";
}

function callNameLagi()
{
    return "Nama Saya Wawan";
}

function perkalian()
{
    $angka1 = 10;
    $angka2 = 20;
    $total = $angka1 * $angka2;
    return $total;
}
callname();
echo callNameLagi();
echo "<br>";
echo "Hasil Perkalian adalah : " . perkalian();
echo perkalian(30, 20);
echo perkalian(50, 30);
