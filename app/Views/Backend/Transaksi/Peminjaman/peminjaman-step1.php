	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li>Transaksi</li>
				<li class="active">Peminjaman Step 1</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Transaksi Peminjaman</h1>
			</div>
		</div><!--/.row-->
				
		<div class="row">
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">Pilih Anggota</div>
					<div class="panel-body">
						<form role="form" action="<?= base_url('admin/peminjaman-step2') ?>" method="POST">
                            <div class="form-group">
                                <label>Pilih Anggota</label>
                                <select class="form-control" name="id_anggota" required>
                                    <option value="">- Pilih Anggota -</option>
                                    <?php foreach($dataAnggota as $row): ?>
                                        <option value="<?= $row['id_anggota'] ?>"><?= $row['id_anggota'] ?> - <?= $row['nama_anggota'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Lanjut ke Step 2</button>
                            <a href="<?= base_url('admin/data-transaksi-peminjaman') ?>" class="btn btn-default">Batal</a>
                        </form>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
	</div><!--/.main-->
