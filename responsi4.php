<style>
  body{
    text-align: left;
    margin: 100px;
    font-family: vidaloka;
    font-size: 20px;
    background: linear-gradient(to top, #E6E6FA 0%, #F0E68C 100%);
  }
</style>
<?php
if (isset($_POST['Input']))
{
  $nama=$_POST['nama'];
  echo "Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: $nama<br><br>";
}
if (isset($_POST['Input']))
{
  $alamat=$_POST['alamat'];
  echo "Alamat &nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: $alamat<br><br>";
}
if (isset($_POST['Input']))
{
  $barang=$_POST['barang'];
  echo "Barang &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: $barang<br><br>";
}
if (isset($_POST['Input']))
{
  $berat=$_POST['berat'];
  echo "Berat (kg) &nbsp&nbsp;&nbsp;&nbsp;: $berat<br><br>";
}
if (isset($_POST['Input']))
{
  $jarak=$_POST['jarak'];
  echo "Jarak (km) &nbsp&nbsp;&nbsp;: $jarak<br><br>";
}
if (isset($_POST['Input']))
{
  $biaya = 5000;
  $total = $jarak * $biaya ;
  echo "<br>";
  echo "Total biaya pengiriman adalah <u><b> Rp. $total</b></u>";
}
if (isset($_POST['Input']))
{
  $metode=$_POST['metode'];
  echo "  dan dilakukan secara $metode<br><br>";
  echo "~~~Terima Kasih~~~";
}
$fp = fopen("lihat.txt", "a+");
fputs($fp,"$nama|$alamat|$barang|$berat|$jarak|$metode|$total\n");
fclose($fp);

echo "<ul><li><a href=responsi5.php> Lihat Daftar Pelanggan </a></li></ul><br>";
?>