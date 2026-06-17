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
				<li class="active">Data Kategori</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Kategori</h1>
			</div>
		</div><!--/.row-->
				
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
                        <a href="<?= base_url('admin/input-data-kategori') ?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah Data Kategori</a>
                    </div>
					<div class="panel-body">
						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-sortable="true">No</th>
						        <th data-sortable="true">Nama Kategori</th>
						        <th data-sortable="true">Opsi</th>
						    </tr>
						    </thead>
                            <tbody>
                                <?php $no=1; foreach($kategori as $kat): ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= esc($kat['nama_kategori']) ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/edit-data-kategori/'.sha1($kat['id_kategori'])) ?>" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                        <a href="#" onclick="doDelete('<?= sha1($kat['id_kategori']) ?>')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
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
                title: "Hapus Data Kategori?",
                text: "Data ini akan terhapus permanen!!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!'
            })
            .then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '<?= base_url('admin/hapus-data-kategori') ?>/' + idDelete;
                }
            });
        }
    </script>
