<!DOCTYPE html>
<html>
<head>
	<title>Bank Sampah</title>
	<?php require 'template/cdn_bootstrap.php'; ?>
	<style type="text/css">
		.log{
			margin: 5px;
		}
	</style>
</head>
<body style="background: #80ffaa;">
	<div class="container-fluid">
		<a href="<?php echo site_url('public_home'); ?>" class="btn btn-danger">&lt;Kembali</a>
		<div class="row">
			<div class="col-lg-4 col-md-4 bg-light">
				<h3>Log Setor</h3>

				<table class="table table-bordered table-hover  table-striped">
					<tr>
						<th>No</th>
						<th>Jenis</th>
						<th>Jumlah(kg)</th>
						<th>Harga</th>
						<th>Tanggal</th>
					</tr>

					<?php $n = 0; foreach ($input as $in) { $n++; ?>
					<tr>
						<td><?php echo $n; ?></td>
						<td><?php echo $in->jenis; ?></td>
						<td><?php echo $in->jumlah; ?></td>
						<td>Rp.<?php echo $in->harga; ?></td>
						<td><?php echo $in->tanggal; ?></td>
					</tr>
					 <?php } ?>
				</table>
			</div>
			<div class="col-lg-4 col-md-4 bg-light">
				<h3>Log Penarikan</h3>
				<table class="table table-bordered table-hover  table-striped">
					<tr>
						<th>No</th>
						<th>Tanggal</th>
						<th>Jumlah</th>
					</tr>

					<?php $n = 0; foreach ($penarikan as $in) { $n++; ?>
					<tr>
						<td><?php echo $n; ?></td>
						<td><?php echo $in->tanggal; ?></td>
						<td>Rp.<?php echo $in->jumlah; ?></td>
					</tr>
					 <?php } ?>
				</table>
			</div>
			<div class="col-lg-4 col-md-4 bg-light">
				<h3>Log Transfer</h3>
				<table class="table table-bordered table-hover  table-striped">
					<tr>
						<th>No</th>
						<th>Tujuan</th>
						<th>Tanggal</th>
						<th>Jumlah</th>
					</tr>

					<?php $n = 0; foreach ($transfer as $in) { $n++; ?>
					<tr>
						<td><?php echo $n; ?></td>
						<td><?php echo $in->no_rekening_tujuan; ?></td>
						<td><?php echo $in->tanggal; ?></td>
						<td>Rp.<?php echo $in->jumlah; ?></td>
					</tr>
					 <?php } ?>
				</table>
			</div>
		</div>



				
			
				
		</div>
	</div>
</body>
</html>