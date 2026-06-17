	<script src="<?= base_url('Assets/js/jquery-1.11.1.min.js') ?>"></script>
	<script src="<?= base_url('Assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('Assets/js/chart.min.js') ?>"></script>
	<script src="<?= base_url('Assets/js/chart-data.js') ?>"></script>
	<script src="<?= base_url('Assets/js/easypiechart.js') ?>"></script>
	<script src="<?= base_url('Assets/js/easypiechart-data.js') ?>"></script>
	<script src="<?= base_url('Assets/js/bootstrap-datepicker.js') ?>"></script>
	<script src="<?= base_url('Assets/js/bootstrap-table.js') ?>"></script>
	<script src="<?= base_url('Assets/js/sweetalert2.min.js') ?>"></script>
	<script>
		!function ($) {
			// Biarkan Bootstrap menangani collapse secara otomatis via data-toggle
			// Sinkronisasi ikon +/- menggunakan event bawaan Bootstrap
			$(document).on("show.bs.collapse", "#sub-item-1, #sub-item-2", function(){
				$(this).closest('li.parent').find('span.icon em')
					.removeClass("glyphicon-plus").addClass("glyphicon-minus");
			});
			$(document).on("hide.bs.collapse", "#sub-item-1, #sub-item-2", function(){
				$(this).closest('li.parent').find('span.icon em')
					.removeClass("glyphicon-minus").addClass("glyphicon-plus");
			});
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
	<?php if(session()->getFlashdata('pesan')): ?>
	<script>
		Swal.fire({
			title: "Informasi",
			text: "<?= session()->getFlashdata('pesan') ?>",
			icon: "success",
			confirmButtonText: "OK",
		});
	</script>
	<?php endif; ?>

	<?php if(session()->getFlashdata('success')): ?>
	<script>
		Swal.fire({
			title: "Berhasil!",
			text: "<?= session()->getFlashdata('success') ?>",
			icon: "success",
			confirmButtonText: "OK",
		});
	</script>
	<?php endif; ?>

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

	<?php if(session()->getFlashdata('warning')): ?>
	<script>
		Swal.fire({
			title: "Peringatan!",
			text: "<?= session()->getFlashdata('warning') ?>",
			icon: "warning",
			confirmButtonText: "OK",
		});
	</script>
	<?php endif; ?>

	<?php if(session()->getFlashdata('info')): ?>
	<script>
		Swal.fire({
			title: "Informasi",
			text: "<?= session()->getFlashdata('info') ?>",
			icon: "info",
			confirmButtonText: "OK",
		});
	</script>
	<?php endif; ?>
</body>

</html>
