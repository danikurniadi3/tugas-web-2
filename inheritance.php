<?php

class Mobil
{
  public $toyota = true;
}

class Truk extends Mobil
{
  public $hino = true;
}

$kendaraan1 = new Truk();
$kendaraan2 = new Mobil();

if (property_exists($kendaraan1, "hino")) {
  echo "Saya mempunyai kendaraan beroda 4 tapi berjenis truk!";
}

class gerobak extends Mobil
{
  public $gerobak_sayur = true;
}
$kendaraan1 = new Truk();
$kendaraan2 = new Mobil();
$kendaraan3 = new gerobak();

if (property_exists($kendaraan3, "gerobak_sayur")) {
  echo "<br>";
  echo "Saya mempunyai kendaraan beroda 4 tapi berjenis gerobak!";
}

?>