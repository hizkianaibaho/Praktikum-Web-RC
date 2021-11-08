<?php
function penjumlahan ($x , $y)
{
    $total = $x+$y;
    
    echo "penjumlahan dari : ";
    echo " $x+$y = $total";
}

function pengurangan ($x , $y)
{
    $total = $x-$y;
    echo "penjumlahan dari : ";
    echo " $x-$y = $total";
}

function perkalian ($x , $y)
{
    $total = $x*$y;
    echo "penjumlahan dari : ";
    echo " $x*$y = $total";
}

function pembagian ($x , $y)
{
    $total = $x/$y;
    echo "penjumlahan dari : ";
    echo " $x/$y = $total";
}

function modulus ($x , $y)
{
    $total = $x%$y;
    echo "penjumlahan dari : ";
    echo " $x%$y = $total";
}

penjumlahan(10, 5);
pengurangan(10, 5);
perkalian(10, 5);
pembagian(10, 5);
modulus(10, 5);
?>
