<html>
<body>


<form action="index.php" method="post">
  Pilih Barang Yang Akan Anda Beli: <select name="NamaBarang">
    <option selected> - Pilih Barang - </option>
    <option value="1"> Baju </option>
    <option value="2"> Celana </option>
  </select>
  <br>
  Jumlah Barang: <input type="text" name="JumlahBarang"><br>
  <input type="submit">
</form>


</body>
</html>

<?php

$NamaBarang = $_POST["NamaBarang"];
$JumlahBarang = $_POST["JumlahBarang"];
$HargaSatuan = NULL;
$Diskon = NULL;


if ($NamaBarang == 1) {
  $NamaBarang = "Baju";
  $HargaSatuan = 165000;
} elseif ($NamaBarang == 2) { 
  $NamaBarang = "Celana";
  $HargaSatuan = 105000;
} else {
  $HargaSatuan = 0;
}

$Total = $HargaSatuan * $JumlahBarang;

if ($Total >= 500000) {
  $Diskon = 5/100;
}

$SubTotal = $Total - ($Total * $Diskon);

echo "Nota Pembelian
<br>------------------------
<br>
<br> Nama Barang : $NamaBarang
<br> Jumlah Barang : $JumlahBarang
<br> Harga Satuan : $HargaSatuan
<br> Diskon : $Diskon
<br> Total : $Total
<br> Total Yang Harus Di Bayarkan : $SubTotal
";

?>