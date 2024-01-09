<?php
$scars = array("Ferrary" , "lamborghini aventador" , "audi");
$negara = ["Singapura" , "indonesia" , "jepang" ];
$kota = array("singapura" , "indramayu" , "jepara");

var_dump($kota);
$kota[] ="Bogor";
echo "<br>";
var_dump($negara);
var_dump($kota);
$kota[4] = "Jayapura";
echo"<br>";
var_dump($kota);
?>