<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas Pemweb</title>
</head>
<body>
<?php

$username = $_POST["username"];
$rincian = $_POST["rincian"];
$harga_s = $_POST["harga"];
$lunas = $_POST["lunas"];

if ($username == "" ||
	$rincian == "" ||
	$harga_s == "" ||
	!is_numeric($harga_s)
) {
	header("location: index.php");
}

date_default_timezone_set("Asia/Jakarta");
$harga = (int)$harga_s;
$tanggal = date("d/m/y");
$waktu = date("H:i");

// echo $username . "<br>";
// echo $rincian . "<br>";
// echo $harga . "<br>";
// echo $lunas . "<br>";
// echo $tanggal . " - " . $waktu;

$_POST["harga"] = $harga;

$redir_destination = "invoice.php";
header("location: " . $redir_destination);

?>
</body>
</html>

<!-- 
username
rincian barang
harga
tanggal pembelian
lunas
 -->