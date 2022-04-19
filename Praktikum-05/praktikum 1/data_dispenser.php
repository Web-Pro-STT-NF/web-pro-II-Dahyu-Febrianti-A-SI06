<?php
include_once "class_dispenser.php";

$minuman = new Minuman("Kopi", 3000);
$minuman->isiUlangAir(2000);
echo "<br/>";
$minuman->tampilanDispenser();
echo "<br/>";
$minuman->cetak();
echo "<br/>";
$minuman->isiGelas();
echo "<br/>";
$minuman->isiUlangGelas();
echo "<br/>";
$minuman->tampilanDispenser();