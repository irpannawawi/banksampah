<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bank Sampah</title>

   
  <?php require 'template/cdn_bootstrap.php'; ?>

  <style type="text/css">
  	.form-control{
  		margin-top: 10px;
  	}
  </style>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({ defaultDate: "-20y" });
  } );
  </script>
  
</head>
<body>
	<?php require 'template/navbar.php'; ?>



	<div class="row">
		<div class="col-lg-3 bg-light" style="margin: auto; margin-top: 15px; margin-bottom: 15px;">
			<h2>Tambah Nasabah Baru</h2>
			<?php echo form_open('tambah_nasabah/tambah'); ?>

			<input class="form-control" type="text" name="nama" placeholder="Nama" autocomplete="off">
			<input class="form-control" type="text" name="pin" placeholder="pin" autocomplete="off">
			<textarea class="form-control" name="alamat" placeholder="Alamat lengkap"></textarea>
			<input class="form-control" type="text" name="tempat_lahir" size="6" placeholder="Kota Kelahiran" autocomplete="off"> 
			<input class="form-control" type="text" name="tanggal_lahir" id="datepicker" size="8" placeholder="Tanggal" autocomplete="off">
			<input class="form-control" type="text" name="pekerjaan" placeholder="Pekerjaan" autocomplete="off">
			<input class="form-control btn btn-primary" type="submit" name="submit" value="Tambah">
			<a class="form-control btn btn-danger" href="<?php echo site_url('/admin'); ?>" >Kembali</a>
		</div>
	</div>
<?php if (!empty($no_rekening)) { ?>
	<div class="row msg">
		<div class="col-lg-3" style="margin: auto;">
			<div class="alert alert-info alert-dismissible">
		    	<button type="button" class="close" data-dismiss="alert">&times;</button>
		    	<strong>Berhasil!</strong>
		    </div>
		    <h2>Data nasabah</h2>
			<table class="table table-striped" style="margin-bottom: 25px;">
				<tr>
					<td>No Rekening</td>
					<td><?php echo $no_rekening; ?></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><?php echo $nama; ?></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><?php echo $alamat; ?></td>
				</tr>
				<tr>
					<td>Tanggal lahir</td>
					<td><?php echo $tanggal_lahir; ?></td>
				</tr>
				<tr>
					<td>Saldo</td>
					<td><?php echo $saldo; ?></td>
				</tr>
			</table>
		<?php } ?>
		</div>
	</div>
<script type="text/javascript">
	$('.close').click(function(){
		$('.msg').hide();
	})
</script>
	

</body>
</html>