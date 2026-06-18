	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li>Transaksi</li>
				<li class="active">Data Peminjaman</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Peminjaman</h1>
			</div>
		</div><!--/.row-->
				
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
                        <a href="<?= base_url('admin/peminjaman-step1') ?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah Data Peminjaman</a>
                    </div>
					<div class="panel-body">
						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-sortable="true">ID Peminjaman</th>
						        <th data-sortable="true">Anggota</th>
						        <th data-sortable="true">Tgl Pinjam</th>
						        <th data-sortable="true">Tgl Kembali</th>
						        <th data-sortable="true">Status</th>
						        <th data-sortable="true">Opsi</th>
						    </tr>
						    </thead>
                            <tbody>
                                <?php foreach($dataPeminjaman as $p): ?>
                                <tr>
                                    <td><?= $p['id_peminjaman'] ?></td>
                                    <td><?= $p['nama_anggota'] ?></td>
                                    <td><?= $p['tgl_pinjam'] ?></td>
                                    <td><?= $p['tgl_kembali'] ?></td>
                                    <td><?= $p['status_peminjaman'] ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/detail-peminjaman/'.$p['id_peminjaman']) ?>" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-eye-open"></span> Detail</a>
                                        <a href="<?= base_url('admin/cetak-peminjaman/'.$p['id_peminjaman']) ?>" target="_blank" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-print"></span> Cetak</a>
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
