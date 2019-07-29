<!DOCTYPE html>
<html>
<head>
	<title>Admin | Bank Sampah </title>
	<?php require 'template/cdn_bootstrap.php'; ?>
	<style type="text/css">
		.form-control{
			margin-top: 15px;
		}
		body{
			background: cyan;
		}
	</style>
</head>
<body>
	<?php echo form_open('admin/login'); ?>

<div class="conrainer">
	<div class="row" style="margin-top: 250px;">
		<div class="col-lg-2 col-md-2 bg-light" style="margin: auto; margin-top: 25px;">
			<?php if($status == '0'){ ?>
			<div class="alert alert-danger">
  			 Username atau password salah !
			</div>
			<?php  }  ?>
			<h2>Admin Login</h2>
			<input type="text" name="username" autocomplete="off" placeholder="Username" class="form-control">
			<input type="password" name="password" placeholder="********" class="form-control">
			<button class="btn btn-primary form-control" style="margin-bottom: 25px;">Masuk</button>
		</div>
	</div>
</div>
<?php if (!empty($msg)) {
	echo $msg;
} ?>
</body>
</html>