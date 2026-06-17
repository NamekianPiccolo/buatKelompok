<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Admin</title>

<link href="<?= base_url('Assets/css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('Assets/css/datepicker3.css') ?>" rel="stylesheet">
<link href="<?= base_url('Assets/css/styles.css') ?>" rel="stylesheet">
<link href="<?= base_url('Assets/css/sweetalert2.min.css') ?>" rel="stylesheet">

<!--[if lt IE 9]>
<script src="<?= base_url('Assets/js/html5shiv.js') ?>"></script>
<script src="<?= base_url('Assets/js/respond.min.js') ?>"></script>
<![endif]-->

</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in Admin</div>
				<div class="panel-body">
					<form role="form" action="<?= base_url('admin/autentikasi') ?>" method="POST">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="username" type="text" autofocus required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" required>
							</div>
							<button type="submit" class="btn btn-primary btn-block">Login</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
	<script src="<?= base_url('Assets/js/jquery-1.11.1.min.js') ?>"></script>
	<script src="<?= base_url('Assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('Assets/js/chart.min.js') ?>"></script>
	<script src="<?= base_url('Assets/js/chart-data.js') ?>"></script>
	<script src="<?= base_url('Assets/js/easypiechart.js') ?>"></script>
	<script src="<?= base_url('Assets/js/easypiechart-data.js') ?>"></script>
	<script src="<?= base_url('Assets/js/bootstrap-datepicker.js') ?>"></script>
	<script src="<?= base_url('Assets/js/sweetalert2.min.js') ?>"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
	<?php if(session()->getFlashdata('error')): ?>
	<script>
		Swal.fire({
			title: "Gagal!",
			text: "<?= session()->getFlashdata('error') ?>",
			icon: "error",
			confirmButtonText: "OK",
		});
	</script>
	<?php endif; ?>
</body>

</html>
