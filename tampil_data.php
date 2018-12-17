<!DOCTYPE html>
<html>
<head>
	<title>tabel</title>
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

<div class="container-fluid">
	<div class="row">
		<div class="col-md-11">
			Data barang
		</div>
		<div class="col-md-1">
		<a href="forminput.php" type="button" class="btn btn-success">TAMBAH</a>
	</div>
	</div>
</div>		
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-hover table-bordered">
				<tr>
					<th class="text-center">Kode</th>
					<th class="text-center">Nama</th>
					<th class="text-center">Harga</th>
					<th class="text-center">Aksi</th>
				</tr>
				<?php
					include"koneksi.php";

					$sql="select * from barang";
					$query=mysql_query($sql);
					while ($data=mysql_fetch_array($query)) {
				?>
				<tr class="warning text-center">
					<td>    <?php echo $data['kode']; ?>    </td>
					<td>	<?php echo $data['nama']; ?>	</td>
					<td>	Rp.<?php echo $data['harga']; ?>	</td>
					<td><a href="edit.php?id=<?php echo$data['id'];?>">Edit</a>

					<a class="text-danger"href="hapus.php?id=<?php echo$data['id'];?>">Hapus</a></td>
				</tr>
				<?php }
				?>
			</table>
		</div>
	</div>
</div>
</body>
</html>