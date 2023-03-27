<?php
class kendaraan
{
  // Properties
  public $merek;
  public $jml_roda;
  public $harga;
  public $warna;
  public $bhn_bakar;

  // Methods
  function set_merek($merek)
  {
    $this->merek = $merek;
  }
  function get_merek()
  {
    return $this->merek;
  }
  function set_jml_roda($jml_roda)
  {
    $this->jml_roda = $jml_roda;
  }
  function get_jml_roda()
  {
    return $this->jml_roda;
  }
  function set_harga($harga)
  {
    $this->harga = $harga;
  }
  function get_harga()
  {
    return $this->harga;
  }
  function set_warna($warna)
  {
    $this->warna = $warna;
  }
  function get_warna()
  {
    return $this->warna;
  }
  function set_bhn_bakar($bhn_bakar)
  {
    $this->bhn_bakar = $bhn_bakar;
  }
  function get_bhn_bakar()
  {
    return $this->bhn_bakar;
  }
}

$kendaraan2 = new kendaraan();
$kendaraan2->set_merek('Toyota yaris');
$kendaraan2->set_jml_roda('4');
$kendaraan2->set_harga('160.000.000');
$kendaraan2->set_warna('merah');
$kendaraan2->set_bhn_bakar('premium');
echo "Name: " . $kendaraan2->get_merek();
echo "<br>";
echo "jumlah roda: " . $kendaraan2->get_jml_roda();
echo "<br>";
echo "harga: " . $kendaraan2->get_harga();
echo "<br>";
echo "warna: " . $kendaraan2->get_warna();
echo "<br>";
echo "bahan bakar: " . $kendaraan2->get_bhn_bakar();
echo "<br>";

$kendaraan3 = new kendaraan();
$kendaraan3->set_merek('Honda Scoopy');
$kendaraan3->set_jml_roda('2');
$kendaraan3->set_harga('13.000.000');
$kendaraan3->set_warna('putih');
$kendaraan3->set_bhn_bakar('premium');
echo "----------------------------------";
echo "<br>";
echo "Name: " . $kendaraan3->get_merek();
echo "<br>";
echo "jumlah roda: " . $kendaraan3->get_jml_roda();
echo "<br>";
echo "harga: " . $kendaraan3->get_harga();
echo "<br>";
echo "warna: " . $kendaraan3->get_warna();
echo "<br>";
echo "bahan bakar: " . $kendaraan3->get_bhn_bakar();
echo "<br>";

$kendaraan4 = new kendaraan();
$kendaraan4->set_merek('Isuzu panther');
$kendaraan4->set_jml_roda('4');
$kendaraan4->set_harga('170.000.000');
$kendaraan4->set_warna('hitam');
$kendaraan4->set_bhn_bakar('Solar');
echo "----------------------------------";
echo "<br>";
echo "Name: " . $kendaraan4->get_merek();
echo "<br>";
echo "jumlah roda: " . $kendaraan4->get_jml_roda();
echo "<br>";
echo "harga: " . $kendaraan4->get_harga();
echo "<br>";
echo "warna: " . $kendaraan4->get_warna();
echo "<br>";
echo "bahan bakar: " . $kendaraan4->get_bhn_bakar();
?>