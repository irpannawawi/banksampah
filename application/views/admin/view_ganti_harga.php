<!DOCTYPE html>
<html>
<head>
	<title>Bank Sampah</title>
<?php require 'template/cdn_bootstrap.php'; ?>
<style type="text/css">
		.form-control{
			margin-top: 15px; 
		}
	</style>
</head>
<body>
	<?php require 'template/navbar.php'; ?>

<div class="row">
	<div class="col-lg-2 col-md-2 bg-light" style="margin-top: 25px; margin-left: 10px; ">
		<h2>Atur Harga</h2>
		<?php echo form_open('ganti_harga/input'); ?>
	<input class="form-control" type="text" name="jenis">
	<input class="form-control" type="number" name="harga">
	<input class="form-control btn btn-primary" type="submit" name="submit" value="Tambah">
	<a class="form-control btn btn-danger" href="<?php echo site_url('admin'); ?>">Kembali</a>
	</div>
</div>

	<div class="row" style="margin-top: 15px;">
		<div class="col-lg-3 col-md-4" style="margin-left: 10px;">
			<h2>Harga Sampah</h2>
<table class="table table-striped">
	<tr class="bg-light">
		<th>No</th>
		<th>Jenis</th>
		<th>Harga/Kg</th>
		<th>Aksi</th>
	</tr>

	<?php $n=0; foreach ($harga as $row) { $n++; ?>
	<tr>
		<td><?php echo $n; ?></td>
		<td><?php echo $row->jenis; ?></td>
		<td>Rp.<?php echo $row->harga; ?></td>
		<td><a class="btn btn-danger" href="<?php echo site_url('/ganti_harga/hapus/').$row->id_harga_sampah; ?>">Hapus</a></td>
	</tr>
	<?php } ?>
	
</table>
		</div>
	</div>


</body>
</html>