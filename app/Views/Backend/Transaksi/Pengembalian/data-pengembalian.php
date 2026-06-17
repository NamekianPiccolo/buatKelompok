	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li>Transaksi</li>
				<li class="active">Data Pengembalian</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Pengembalian</h1>
			</div>
		</div><!--/.row-->
				
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Daftar Buku yang Belum Dikembalikan</div>
					<div class="panel-body">
						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-sortable="true">ID Peminjaman</th>
						        <th data-sortable="true">Anggota</th>
						        <th data-sortable="true">Buku</th>
						        <th data-sortable="true">Tgl Pinjam</th>
						        <th data-sortable="true">Tgl Kembali</th>
						        <th data-sortable="true">Status</th>
						        <th data-sortable="true">Opsi</th>
						    </tr>
						    </thead>
                            <tbody>
                                <?php 
                                $db = \Config\Database::connect();
                                foreach($peminjaman as $p): 
                                    $detail = $db->table('tbl_detail_peminjaman')
                                                 ->select('tbl_detail_peminjaman.*, tbl_buku.judul_buku')
                                                 ->join('tbl_buku', 'tbl_buku.id_buku = tbl_detail_peminjaman.id_buku', 'LEFT')
                                                 ->where(['id_peminjaman' => $p['id_peminjaman'], 'status_kembali' => 'Belum'])
                                                 ->get()->getResultArray();
                                    
                                    foreach($detail as $d):
                                ?>
                                <tr>
                                    <td><?= $p['id_peminjaman'] ?></td>
                                    <td><?= $p['nama_anggota'] ?></td>
                                    <td><?= $d['judul_buku'] ?></td>
                                    <td><?= $p['tgl_pinjam'] ?></td>
                                    <td><?= $p['tgl_kembali'] ?></td>
                                    <td><span class="label label-danger">Belum Kembali</span></td>
                                    <td>
                                        <a href="#" onclick="doReturn('<?= $p['id_peminjaman'] ?>', '<?= $d['id_buku'] ?>')" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-check"></span> Kembalikan</a>
                                    </td>
                                </tr>
                                <?php 
                                    endforeach;
                                endforeach; 
                                ?>
                            </tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
	</div><!--/.main-->

    <script type="text/javascript">
        function doReturn(idPeminjaman, idBuku) {
            Swal.fire({
                title: "Kembalikan Buku?",
                text: "Apakah anda yakin buku ini sudah dikembalikan?",
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Kembalikan!'
            })
            .then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '<?= base_url('admin/kembalikan-buku') ?>/' + idPeminjaman + '/' + idBuku;
                }
            });
        }
    </script>
