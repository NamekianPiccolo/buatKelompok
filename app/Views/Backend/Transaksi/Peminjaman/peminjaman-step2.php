	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li>Transaksi</li>
				<li class="active">Peminjaman Step 2</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Transaksi Peminjaman Buku</h1>
			</div>
		</div><!--/.row-->
				
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><strong>Form Peminjaman - Step 2</strong></div>
					<div class="panel-body">

                        <!-- Data Anggota -->
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Data Anggota</h3>
                                <hr />
                                <table class="table table-striped">
                                    <tr>
                                        <td width="150"><strong>ID Anggota</strong></td>
                                        <td>: <?= $anggota['id_anggota'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Nama Anggota</strong></td>
                                        <td>: <?= $anggota['nama_anggota'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Jenis Kelamin</strong></td>
                                        <td>: <?= $anggota['jk'] == 'L' ? 'Laki-laki' : 'Perempuan' ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>No. Telp</strong></td>
                                        <td>: <?= $anggota['no_telp'] ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <!-- Form Simpan Transaksi -->
                        <form role="form" action="<?= base_url('admin/simpan-transaksi-peminjaman') ?>" method="POST">
                            <input type="hidden" name="id_anggota" value="<?= $anggota['id_anggota'] ?>">
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>ID Peminjaman</label>
                                        <input class="form-control" name="id_peminjaman" value="<?= $id_peminjaman ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Tanggal Pinjam</label>
                                        <input type="date" class="form-control" name="tgl_pinjam" value="<?= date('Y-m-d') ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Tanggal Kembali (H+7)</label>
                                        <input type="date" class="form-control" name="tgl_kembali" value="<?= date('Y-m-d', strtotime('+7 days')) ?>" required>
                                    </div>
                                </div>
                            </div>
                            
                            <h3>Keranjang Peminjaman Buku</h3>
                            <hr />
                            <table data-toggle="table">
                                <thead>
                                    <tr>
                                        <th data-sortable="true">No</th>
                                        <th data-sortable="true">Judul Buku</th>
                                        <th data-sortable="true">Pengarang</th>
                                        <th data-sortable="true">Penerbit</th>
                                        <th data-sortable="true">Tahun</th>
                                        <th data-sortable="true">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    if(empty($temp)):
                                    ?>
                                        <tr>
                                            <td colspan="6" class="text-center text-muted"><em>Belum ada buku yang dipilih. Klik tombol "Pinjam" di daftar buku di bawah.</em></td>
                                        </tr>
                                    <?php else: ?>
                                        <?php foreach($temp as $t): ?>
                                        <tr>
                                            <td data-sortable="true"><?php echo $no = $no + 1; ?></td>
                                            <td data-sortable="true"><?php echo $t['judul_buku']; ?></td>
                                            <td data-sortable="true"><?php echo $t['pengarang']; ?></td>
                                            <td data-sortable="true"><?php echo $t['penerbit']; ?></td>
                                            <td data-sortable="true"><?php echo $t['tahun']; ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/hapus-temp/'.$t['id_temp']) ?>" onclick="return confirm('Hapus buku ini dari keranjang?')">
                                                    <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-trash"></span> Hapus</button>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>

                            <br />
                            <?php if(count($temp) > 0): ?>
                                <a href="<?= base_url('admin/simpan-transaksi-peminjaman') ?>">
                                    <!-- Link tidak dipakai, gunakan button submit di form -->
                                </a>
                                <button type="submit" class="btn btn-primary btn-block">
                                    <span class="glyphicon glyphicon-save"></span> Simpan Transaksi Peminjaman Buku
                                </button>
                            <?php endif; ?>
                        </form>

					</div>
				</div>
			</div>
		</div><!--/.row-->

        <!-- Daftar Buku yang Tersedia untuk Dipinjam -->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
                        <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                            <thead>
                            <tr>
                                <th data-sortable="true">No</th>
                                <th data-sortable="true">Judul Buku</th>
                                <th data-sortable="true">Pengarang</th>
                                <th data-sortable="true">Penerbit</th>
                                <th data-sortable="true">Tahun</th>
                                <th data-sortable="true">Jumlah Eksemplar</th>
                                <th data-sortable="true">Kategori Buku</th>
                                <th data-sortable="true">Keterangan</th>
                                <th data-sortable="true">Rak</th>
                                <th data-sortable="true">Opsi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 0;
                            foreach($dataBuku as $data):
                            ?>
                            <tr>
                                <td data-sortable="true"><?php echo $no = $no + 1; ?></td>
                                <td data-sortable="true"><?php echo $data['judul_buku']; ?></td>
                                <td data-sortable="true"><?php echo $data['pengarang']; ?></td>
                                <td data-sortable="true"><?php echo $data['penerbit']; ?></td>
                                <td data-sortable="true"><?php echo $data['tahun']; ?></td>
                                <td data-sortable="true"><?php echo $data['jumlah_eksemplar']; ?></td>
                                <td data-sortable="true"><?php echo $data['nama_kategori']; ?></td>
                                <td data-sortable="true"><?php echo $data['keterangan']; ?></td>
                                <td data-sortable="true"><?php echo $data['nama_rak']; ?></td>
                                <td data-sortable="true">
                                    <?php if($data['jumlah_eksemplar'] != "0"): ?>
                                        <a href="<?= base_url('admin/simpan-temp-pinjam/'.sha1($data['id_buku'])) ?>">
                                            <button type="button" class="btn btn-primary">Pinjam Buku</button>
                                        </a>
                                    <?php else: ?>
                                        <button type="button" class="btn btn-default" disabled>Stok Habis</button>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div><!--/.main-->
