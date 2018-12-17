<?php

include"koneksi.php";

$id=$_GET['id'];

$delete="delete from barang where id='$id'";
$query=mysql_query($delete);

if ($query) {
	echo "<script>alert('Penghapusan Data Berhasil Disimpan') </script>";
	echo "<meta http-equiv='refresh' content='1 url=tampil_data.php'>";
}
else{
	echo "<script>alert('Penghapusan Data Gagal Disimpan') </script>";
	echo "<meta http-equiv='refresh' content='1 url=tampil_data.php'>";
}
?>