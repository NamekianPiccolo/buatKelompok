<?php
/**
 * @var array $admin
 * @var array $data_user
 */
?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li>Master Data</li>
				<li class="active">Data Admin</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Admin</h1>
			</div>
		</div><!--/.row-->
				
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
                        <a href="<?= base_url('admin/input-data-admin') ?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah Data Admin</a>
                    </div>
					<div class="panel-body">
						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-sortable="true">No</th>
						        <th data-sortable="true">Nama Admin</th>
						        <th data-sortable="true">Username</th>
						        <th data-sortable="true">Akses Level</th>
						        <th data-sortable="true">Opsi</th>
						    </tr>
						    </thead>
                            <tbody>
                                <?php $no=1; foreach($data_user as $admin): ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $admin['nama_admin'] ?></td>
                                    <td><?= $admin['username'] ?></td>
                                    <td>
                                        <?php if($admin['akses_level'] == 2): ?>
                                            Kepala Perpustakaan
                                        <?php elseif($admin['akses_level'] == 3): ?>
                                            Admin Perpustakaan
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('admin/edit-data-admin/'.sha1($admin['id_admin'])) ?>" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                        <a href="#" onclick="doDelete('<?= sha1($admin['id_admin']) ?>')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
                                        
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
                title: "Hapus Data Admin?",
                text: "Data ini akan terhapus permanen!!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!'
            })
            .then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '<?= base_url('admin/hapus-data-admin') ?>/' + idDelete;
                }
            });
        }
    </script>
