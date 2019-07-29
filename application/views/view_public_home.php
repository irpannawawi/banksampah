<!DOCTYPE html>
<html>
<head>
	<title>Bank Sampah</title>
	<?php require 'template/cdn_bootstrap.php'; ?>
	<style type="text/css">
		.menu-item{
			height: 250px;
		}
	</style>
</head>
<body style="background: #80ffaa">
<div class="container">
	<div class="row" style="margin-top: 20px;">
		<div class="col-lg-3 col-md-3 menu-item bg-primary" style="font-size: 15px; color: white; padding-left: 20px;">
			
			<table class="table">
				<tr>
					<td colspan="2">
						<span class="fa fa-user"></span><br />
						<?php echo $this->session->username; ?>		
					</td>
				</tr>
				<tr>
					<td>
						Saldo :
					</td>
					<td>
						Rp.<?php echo $nasabah->saldo; ?>
					</td>
				</tr>
				<tr>
					<td>
						No Rekening :
					</td>
					<td>
						 <?php echo $nasabah->no_rekening; ?>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<a href="<?php echo site_url('public_login/logout'); ?>" style="width: 100%; " class="btn btn-danger">Keluar</a>
					</td>
				</tr>
			</table>
		
				
		</div>
		<div class="col-lg-3 col-md-3 menu-item">
			<a href="<?php echo site_url('public_transfer'); ?>" style="width: 100%; height: 100%; font-size: 30px" class="btn btn-primary">
				<span class="fa fa-share"></span><br />
				Transfer
				<hr />
				<span style="font-size: 15px">Kirim uang ke sesama pengguna aplikasi bank sampah!</span>
			</a>
		</div>
		<div class="col-lg-3 col-md-3 menu-item">
			<a href="<?php echo site_url('public_log'); ?>" style="width: 100%; height: 100%; font-size: 30px" class="btn btn-primary">
				<span class="fa fa-paste"></span><br />
				Log
				<hr />
				<span style="font-size: 15px">Cek aktivitas penarikan dan penyetoran!</span>
			</a>
		</div>
		<div class="col-lg-3 col-md-3 menu-item belum-siap">
			<a href="#" style="width: 100%; height: 100%; font-size: 30px" class="btn btn-primary">
				<span class="fa fa-cogs"></span><br />
				Pengaturan
				<hr />
				<span style="font-size: 15px">Edit data diri!</span>
			</a>
		
			
	</div>
</div>
	



	<script type="text/javascript">
    $('.belum-siap').click(function(){
      alert('fitur belum siap');
    });
  </script>
</body>
</html>