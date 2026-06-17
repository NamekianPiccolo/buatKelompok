<?= $this->include('Backend/Template/header') ?>
<?= $this->include('Backend/Template/sidebar') ?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li>Master Data</li>
				<li class="active">Edit Data Rak</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Data Rak</h1>
			</div>
		</div><!--/.row-->
				
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Form Edit Rak</div>
					<div class="panel-body">
						<form role="form" action="<?= base_url('admin/update-data-rak') ?>" method="POST">
                            <div class="form-group">
                                <label>Nama Rak</label>
                                <input type="hidden" name="id_rak" value="<?= $rak['id_rak'] ?>">
                                <input class="form-control" name="nama_rak" value="<?= $rak['nama_rak'] ?>" required autofocus>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Data</button>
                            <a href="<?= base_url('admin/master-data-rak') ?>" class="btn btn-default">Batal</a>
                        </form>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
	</div><!--/.main-->

<?= $this->include('Backend/Template/footer') ?>
