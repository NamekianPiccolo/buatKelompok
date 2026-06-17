<?php
/**
 * @var array $anggota
 */
?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li>Master Data</li>
				<li class="active">Edit Data Anggota</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Data Anggota</h1>
			</div>
		</div><!--/.row-->
				
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Form Edit Anggota</div>
					<div class="panel-body">
						<form role="form" action="<?= base_url('admin/update-data-anggota') ?>" method="POST">
                            <div class="form-group">
                                <label>ID Anggota</label>
                                <input class="form-control" name="id_anggota" value="<?= $anggota['id_anggota'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Nama Anggota</label>
                                <input class="form-control" name="nama_anggota" value="<?= $anggota['nama_anggota'] ?>" required autofocus>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" name="jk" required>
                                    <option value="">- Pilih Jenis Kelamin -</option>
                                    <option value="L" <?= ($anggota['jk'] == 'L') ? 'selected' : '' ?>>Laki-laki</option>
                                    <option value="P" <?= ($anggota['jk'] == 'P') ? 'selected' : '' ?>>Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>No. Telp</label>
                                <input class="form-control" name="no_telp" value="<?= $anggota['no_telp'] ?>" required onkeypress="return goodchars(event, '0123456789', this)">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat" rows="3" required><?= $anggota['alamat'] ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Data</button>
                            <a href="<?= base_url('admin/master-data-anggota') ?>" class="btn btn-default">Batal</a>
                        </form>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
	</div><!--/.main-->

    <script type="text/javascript">
        function goodchars(e, chars, el) {
            var key = e.key || String.fromCharCode(e.keyCode || e.which);
            return chars.indexOf(key) !== -1;
        }
    </script>
