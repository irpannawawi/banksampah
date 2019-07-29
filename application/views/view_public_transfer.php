<!DOCTYPE html>
<html>
<head>
	<title>Bank Sampah</title>
	<?php require 'template/cdn_bootstrap.php'; ?>
	<style type="text/css">
		.form-control{
			margin-top: 5px;
		}
	</style>
</head>
<body style="background: #80ffaa">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 form bg-light" style="margin: auto; margin-top: 50px;">
				<div id="msg">
						
				</div>
				<h2>Transfer uang</h2>
					<input class="form-control" type="text" id="no_rekening_tujuan" placeholder="No rekening tujuan" autocomplete="off">
					<input class="form-control" type="number" id="jumlah" placeholder="Jumlah" autocomplete="off">
					<input class="form-control" type="password" id="pin" placeholder="pin" autocomplete="off">
					<button class="form-control btn-primary btn-send"><span class="fa fa-send"></span>Kirim</button>
					<a class="btn btn-danger form-control" href="<?php echo site_url('public_home'); ?>" style="margin-bottom: 25px;">Batal</a>
					
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			$('.btn-send').click(function(){
				var norek = $('#no_rekening_tujuan').val();
				var jumlah = $('#jumlah').val();
				var pin = $('#pin').val();
				var url = '<?php echo site_url('public_transfer/transfer'); ?>';
				$.post(url,{ no_rekening : norek, pin : pin, jumlah : jumlah },function(data){
					$('#msg').html(data);
				});

				norek = $('#no_rekening_tujuan').val("");
				jumlah = $('#jumlah').val("");
				pin = $('#pin').val("");
				
			})
		})
	</script>
</body>
</html>