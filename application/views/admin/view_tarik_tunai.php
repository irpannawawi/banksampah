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
		<div class="col-lg-2 col-md-2 bg-light" style="margin: auto; margin-top: 20px;">
			<h2>Tarik Tunai</h2>
			<?php echo form_open('tarik_tunai/process'); ?>
			<input class="form-control" type="text" name="no_rekening" placeholder="No Rekening">
			<input class="form-control" type="number" name="jumlah" placeholder="Jumlah">
			<input class="form-control" type="password" name="password" placeholder="Password Admin">
			<input class="form-control btn btn-primary" type="submit" name="Tarik">
			<a class="btn btn-danger form-control" href="<?php echo site_url('admin'); ?>" style="margin-bottom: 10px;">Kembali</a>

<?php
	if ($status === "1") {
		echo "<div class=\"alert alert-success\">
  <strong>Success!</strong> 
</div>";
	}elseif ($status === "0") {
		echo "<div class=\"alert alert-danger\">
  <strong>Failed!</strong> 
</div>";
	}
?>
		</div>
	</div>
	



</body>
</html>