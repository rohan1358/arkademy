<?php 
$id = $_GET['id'];
include ('koneksi.php');
mysqli_query($koneksi, "DELETE FROM product where id='$id'");
header('Location: 6.c.php')
 ?>