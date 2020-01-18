<?php

//mengupdate / meng edit data
include ("koneksi.php");

$id = $_POST['id'];
$casier = $_POST['casier'];
$produk = $_POST['produk'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];

mysqli_query($koneksi, "UPDATE product SET casier='$casier', produk='$produk', kategori='$kategori', harga='$harga' WHERE id='$id'");

  header("Location: list.php");
?>