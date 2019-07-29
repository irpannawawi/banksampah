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
	<div class=" col-lg-3 col-md-3" style="margin: auto;">	
	<?php echo form_open('nasabah/search'); ?>
	<input class="form-control" type="search" name="no_rekening">
	<input class="form-control" type="submit" name="submit">


	<?php if (isset($userdata)) { ?>
	 <div class="card" >
    	<div class="card-body">
	     	<h4 class="card-title"><?php echo $userdata->nama; ?></h4>
	  		<table class="table table-striped">
	  			<tr>
	  				<td>No Rekening :</td>
	  				<td><?php echo $userdata->no_rekening; ?></td>
	  			</tr>
	  			<tr>
	  				<td>Alamat :</td>
	  				<td><?php echo $userdata->alamat; ?></td>
	  			</tr>
	  			<tr>
	  				<td>Tanggal Lahir :</td>
	  				<td><?php echo $userdata->tanggal_lahir; ?></td>
	  			</tr>
	  			<tr>
	  				<td>Saldo :</td>
	  				<td>Rp.<?php echo $userdata->saldo; ?></td>
	  			</tr>
	  			<tr>
	  				<td colspan="2">
	  				<a class="btn btn-danger" href="<?php echo site_url('nasabah/delete/').$userdata->no_rekening; ?>">Hapus</a>
	  				<a class="btn btn-warning" href="<?php echo site_url('nasabah/edit').$userdata->no_rekening; ?>">Edit</a>
	  			</td>
	  			</tr>
	  		</table>
	     	
    	</div>
  	</div>			
	<?php }?>
	</div>
</div>


	


	

</body>
</html>