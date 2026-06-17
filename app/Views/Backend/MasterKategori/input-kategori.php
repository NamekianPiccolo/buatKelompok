<?php
/**
 * @var array $kategori
 */
?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li>Master Data</li>
				<li class="active">Tambah Data Kategori</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tambah Data Kategori</h1>
			</div>
		</div><!--/.row-->
				
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Form Tambah Kategori</div>
					<div class="panel-body">
						<form role="form" action="<?= base_url('admin/simpan-data-kategori') ?>" method="POST">
                            <div class="form-group">
                                <label>Nama Kategori</label>
                                <input class="form-control" name="nama_kategori" required autofocus placeholder="Masukkan nama kategori">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                            <a href="<?= base_url('admin/master-data-kategori') ?>" class="btn btn-default">Batal</a>
                        </form>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
	</div><!--/.main-->