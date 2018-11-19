<?php
include "koneksi.php";
$nama=$_POST['nama'];
$hrg=$_POST['hrg'];
$pro=$_POST['pro'];
$ket=$_POST['des'];
$stok=$_POST['stok'];
$foto=$_POST['foto'];


$insert="insert into produk(Nama, Harga, Produksi, Deskripsi, Stok, Gambar) values ('$nama', '$hrg', '$pro', '$ket', '$stok', '$foto')";

$mysqli->query($insert);

header('Location:insert.php');

?>