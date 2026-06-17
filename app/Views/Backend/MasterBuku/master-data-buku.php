<?php
/**
 * @var array $dataBuku
 */
?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li>Master Data</li>
				<li class="active">Data Buku</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Buku</h1>
			</div>
		</div><!--/.row-->
				
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
                        <a href="<?= base_url('admin/input-data-buku') ?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah Data Buku</a>
                    </div>
					<div class="panel-body">
						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-sortable="true">ID Buku</th>
						        <th data-sortable="true">Judul Buku</th>
						        <th data-sortable="true">Pengarang</th>
						        <th data-sortable="true">Penerbit</th>
						        <th data-sortable="true">Tahun</th>
						        <th data-sortable="true">Jumlah</th>
						        <th data-sortable="true">Kategori</th>
						        <th data-sortable="true">Rak</th>
						        <th data-sortable="true">Cover</th>
						        <th data-sortable="true">E-Book</th>
						        <th data-sortable="true">Opsi</th>
						    </tr>
						    </thead>
                            <tbody>
                                <?php foreach($dataBuku as $b): ?>
                                <tr>
                                    <td><?= $b['id_buku'] ?></td>
                                    <td><?= esc($b['judul_buku']) ?></td>
                                    <td><?= esc($b['pengarang']) ?></td>
                                    <td><?= esc($b['penerbit']) ?></td>
                                    <td><?= $b['tahun'] ?></td>
                                    <td><?= $b['jumlah_eksemplar'] ?></td>
                                    <td><?= esc($b['nama_kategori']) ?></td>
                                    <td><?= esc($b['nama_rak']) ?></td>
                                    <td>
                                        <?php if($b['cover_buku']): ?>
                                            <img src="<?= base_url('Assets/CoverBuku/'.$b['cover_buku']) ?>" width="50">
                                        <?php else: ?>
                                            -
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if($b['e_book']): ?>
                                            <a href="<?= base_url('Assets/E-Book/'.$b['e_book']) ?>" target="_blank" class="btn btn-info btn-xs">Lihat E-Book</a>
                                        <?php else: ?>
                                            -
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('admin/edit-data-buku/'.sha1($b['id_buku'])) ?>" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                        <a href="#" onclick="doDelete('<?= sha1($b['id_buku']) ?>')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
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

    <script type="text/javascript">
        function doDelete(idDelete) {
            Swal.fire({
                title: "Hapus Data Buku?",
                text: "Data ini akan terhapus permanen!!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!'
            })
            .then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '<?= base_url('admin/hapus-data-buku') ?>/' + idDelete;
                }
            });
        }
    </script>
