<!DOCTYPE html>
<html>
<head>
	<title> Edit Data </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="library/css/bootstrap.css">
	<script src="library/js/jquery.js"></script>
	<script src="library/js/bootstrap.js"></script>
</head>
<body>

<div class="container-fluid">
	<div class="row" style="background-color:#000000">
		<div class="col-md-12 text-center text-muted">
			<h4>KELOLA DATA BARANG</h4>
		</div>
	</div>
</div> <br>


			<?php
			include"koneksi.php";
			
			$id=$_GET['id'];
			$sql="select * from barang where id='$id'";
			$query=mysql_query($sql);
			while ($data=mysql_fetch_array($query)) {
		

			?>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
			<b>Update Data Barang</b> <br><br>
	<form action="" method="POST" >
			<input type="textfield" name="id" value="<?php echo $data['id']; ?>" hidden>
			<div class="form-group">
			<label>Kode :</label><input type="text" size="10" class="form-control" name="Kode" value="<?php echo $data['kode'];?>">
		</div>
			<div class="form-group">
			<label>Nama :</label><input type="text" size="10" class="form-control" name="Nama" value="<?php echo $data['nama']; ?>">
		</div>
			<div class="form-group">
			<label>Deskripsi :</label><textarea class="form-control" name="Deskripsi" ><?php echo $data['deskripsi']; ?></textarea>
		</div>
			<div class="form-group">
			<label>Stok :</label><input type="text" size="10" class="form-control" name="Stok" value="<?php echo $data['stok']; ?>">
		</div>
			<div class="form-group">
			<label>Harga :</label><input type="text" size="10" class="form-control" name="Harga" value="<?php echo $data['harga']; ?>">
		</div>
			<div class="form-group">
			<label>Berat :</label><input type="text" size="3" class="form-control" name="Berat" value="<?php echo $data['berat'] ?>"><i>gram</i>
		</div>
		<br>
		<div class="text-right">
				<a href="tampil_data.php" class="btn btn-primary">Tampil Data</a>
			<input type="submit" class="btn btn-success" name="Simpan" value="Simpan">
		</div>
	</form>
</div>
	<div class="col-md-4"></div>
</div>
<?php } ?>


</body>
</html>

<?php
include"koneksi.php";

if (isset($_POST['Simpan'])) {
	$id=$_POST['id'];
	$kode=$_POST['Kode'];
	$nama=$_POST['Nama'];
	$deskripsi=$_POST['Deskripsi'];
	$stok=$_POST['Stok'];
	$harga=$_POST['Harga'];
	$berat=$_POST['Berat'];

	$update="update barang set kode='$kode', nama='$nama', deskripsi='deskripsi', stok='$stok', harga='$harga', berat='$berat' where id='$id'";
	$query=mysql_query($update);

	if ($query) {
		echo "<script>alert('Data Berhasil di ubah')</script>";
		echo "<meta http-equiv='refresh' content='1 url=tampil_data.php'>";
	}
	else{
		echo "<script>alert('Data Gagal di ubah')</script>";
		echo "<meta http-equiv='refresh' content='1 url=tampil_data.php'";
	}
}
