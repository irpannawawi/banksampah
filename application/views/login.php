<!DOCTYPE html>
<html>
<head>
	<title>Bank Sampah</title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<style type="text/css">
		.form-control{
			margin-top: 5px;
			margin-bottom: 5px;
		}
	</style>
</head>
<body style="background: #80ffaa">
	<div class="row">
		<div class="col-lg-2 col-md-2 bg-light" style="margin: auto; margin-top: 50px;">
			<div class="alert alert-danger"> 
				<?php if(isset($error)){ print_r($error); } ?>
			</div>
			<h2 align="center">Login</h2>
			<?php echo form_open('public_login/login') ?>
			<input class="form-control" type="text" name="no_rekening" placeholder="No Rekening" autocomplete="off">
			<input class="form-control" type="password" name="pin" placeholder="********">
			<button class="form-control btn btn-primary">Masuk</button>
			<a href="#" style="font-size: 15px;">Lupa pin?</a>
			<br />
			<a href="#">Cara daftar?</a>
		</div>
	</div>
</body>
</html>