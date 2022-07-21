<style>
	body{
		margin: 150px;
		font-family: vidaloka;
		font-size: 23px;
		background: linear-gradient(to top, #FAEBD7 0%,  #D8BFD8 100%); 
	}
</style>
<?php
echo "<head><title>Daftar Pelanggan</title></head>";
$fp = fopen("lihat.txt","r");
echo "<table border=0>";

while ($isi= fgets($fp,80)){
	$pisah = explode("|", $isi);
	echo "<tr><td>Nama </td><td>: $pisah[0]</td></tr>";
	echo "<tr><td>Alamat </td><td>: $pisah[1]</td></tr>";
	echo "<tr><td>Barang </td><td>: $pisah[2]</td></tr>";
	echo "<tr><td>Berat </td><td>: $pisah[3]</td></tr>";
	echo "<tr><td>Jarak </td><td>: $pisah[4]</td></tr>";
	echo "<tr><td>Metode </td><td>: $pisah[5]</td></tr>";
	echo "<tr><td>Total</td><td>: $pisah[6]</td></tr> 
	<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
}

	echo "</table>";
	echo "<a href=index.html> Klik Disini </a> Kembali Cek Biaya Pengiriman ";
?>