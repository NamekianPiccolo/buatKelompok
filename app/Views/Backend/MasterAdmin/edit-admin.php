<?php
/**
 * @var array $admin
 */
?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li>Master Data</li>
				<li class="active">Edit Data Admin</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Data Admin</h1>
			</div>
		</div><!--/.row-->
				
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Form Edit Admin</div>
					<div class="panel-body">
						<form role="form" action="<?= base_url('admin/update-data-admin') ?>" method="POST">
                            <div class="form-group">
                                <label>Nama Admin</label>
                                <input class="form-control" name="nama_admin" value="<?= $admin['nama_admin'] ?>" required autofocus>
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" name="username" value="<?= $admin['username'] ?>" required onkeypress="return goodchars(event, 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', this)">
                            </div>
                            <div class="form-group">
                                <label>Password (Kosongkan jika tidak diubah)</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                                <label>Akses Level</label>
                                <select class="form-control" name="akses_level" required>
                                    <option value="">- Pilih Akses Level -</option>
                                    <option value="2" <?= ($admin['akses_level'] == 2) ? 'selected' : '' ?>>Kepala Perpustakaan</option>
                                    <option value="3" <?= ($admin['akses_level'] == 3) ? 'selected' : '' ?>>Admin Perpustakaan</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Data</button>
                            <a href="<?= base_url('admin/master-data-admin') ?>" class="btn btn-default">Batal</a>
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
