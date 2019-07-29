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
		<h2>Input Sampah</h2>
		<?php echo form_open('input_sampah/input'); ?>
		<input class="form-control" type="text" name="no_rekening" placeholder="No Rekening" autocomplete="off">
		<select class="form-control" name="jenis">
			<?php foreach ($harga as $row) { ?>
				<option value="<?php echo $row->jenis; ?>"><?php echo $row->jenis; ?></option>
			<?php } ?>
		</select>
		<input class="form-control" type="text" name="jumlah" placeholder="Jumlah(Kg)" autocomplete="off">
		<input class="form-control" type="password" name="password" placeholder="Password Admin">
		<input class="form-control btn btn-primary" type="submit" name="submit" value="Input">
		<a class="btn btn-danger form-control" href="<?php echo site_url('admin'); ?>">Kembali</a>
	<div>
		<?php if ($status == '1') {
			echo "<div class=\"alert alert-success\">
  					<strong>Success!</strong></div>";
		}elseif ($status == '0') {
			echo "<div class=\"alert alert-danger\">
  					<strong>Gagal!</strong></div>";
		}else{
			echo "";
		} ?>
	</div>
	</div>
</div>




</body>
</html>