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

	<div>
		<div class="col-lg-3 col-md-3 bg-light" style="margin-top: 15px;">
			<h2>Transfer</h2>
			<?php echo form_open('transfer') ?>
			<input class="form-control" type="text" name="no_rekening" placeholder="No Rekening" autocomplete="off">
			<input class="form-control" type="text" name="no_rekening_tujuan" placeholder="No Rekening Tujuan" autocomplete="off">
			<input class="form-control" type="text" name="jumlah" placeholder="Jumlah" autocomplete="off">
			<input class="form-control" type="password" name="password" placeholder="Password Admin">
			<input class="form-control btn btn-primary" type="submit" name="submit" value="Kirim">
			<a class="btn btn-danger form-control" href="<?php echo site_url('admin'); ?>">Kembali</a>
		</div>
	</div>
	
</body>
</html>