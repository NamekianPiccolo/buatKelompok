<?= $this->include('Backend/Template/header') ?>
<?= $this->include('Backend/Template/sidebar') ?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li>Transaksi</li>
				<li class="active">Tambah Data Peminjaman</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tambah Data Peminjaman</h1>
			</div>
		</div><!--/.row-->
				
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Form Tambah Peminjaman</div>
					<div class="panel-body">
                        
                        <form role="form" action="<?= base_url('admin/tambah-buku-peminjaman') ?>" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Pilih Buku</label>
                                        <select class="form-control" name="id_buku" required>
                                            <option value="">- Pilih Buku -</option>
                                            <?php foreach($buku as $b): ?>
                                            <option value="<?= $b['id_buku'] ?>"><?= $b['judul_buku'] ?> - <?= $b['pengarang'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>&nbsp;</label>
                                        <button type="submit" class="btn btn-primary" style="display:block;">Tambah Buku</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        
                        <hr>
                        
						<form role="form" action="<?= base_url('admin/simpan-peminjaman') ?>" method="POST">
                            <div class="form-group">
                                <label>ID Peminjaman</label>
                                <input class="form-control" name="id_peminjaman" value="<?= $id_peminjaman ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Anggota</label>
                                <select class="form-control" name="id_anggota" required>
                                    <option value="">- Pilih Anggota -</option>
                                    <?php foreach($anggota as $a): ?>
                                    <option value="<?= $a['id_anggota'] ?>"><?= $a['id_anggota'] ?> - <?= $a['nama_anggota'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Pinjam</label>
                                <input type="date" class="form-control" name="tgl_pinjam" value="<?= date('Y-m-d') ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Kembali</label>
                                <input type="date" class="form-control" name="tgl_kembali" value="<?= date('Y-m-d', strtotime('+3 days')) ?>" required>
                            </div>
                            
                            <h4>Buku yang Dipinjam</h4>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID Buku</th>
                                        <th>Judul Buku</th>
                                        <th>Pengarang</th>
                                        <th>Penerbit</th>
                                        <th>Tahun</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(empty($temp)): ?>
                                        <tr>
                                            <td colspan="6" class="text-center">Belum ada buku yang dipilih</td>
                                        </tr>
                                    <?php else: ?>
                                        <?php foreach($temp as $t): ?>
                                        <tr>
                                            <td><?= $t['id_buku'] ?></td>
                                            <td><?= $t['judul_buku'] ?></td>
                                            <td><?= $t['pengarang'] ?></td>
                                            <td><?= $t['penerbit'] ?></td>
                                            <td><?= $t['tahun'] ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/hapus-buku-peminjaman/'.$t['id_temp']) ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>

                            <?php if(!empty($temp)): ?>
                                <button type="submit" class="btn btn-success">Proses Peminjaman</button>
                            <?php else: ?>
                                <button type="button" class="btn btn-success" disabled>Proses Peminjaman</button>
                            <?php endif; ?>
                            <a href="<?= base_url('admin/transaksi-peminjaman') ?>" class="btn btn-default">Kembali</a>
                        </form>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
	</div><!--/.main-->

<?= $this->include('Backend/Template/footer') ?>
