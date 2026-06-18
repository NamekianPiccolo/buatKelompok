<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li>Laporan</li>
            <li class="active">Laporan Anggota</li>
        </ol>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Laporan Anggota</h1>
        </div>
    </div><!--/.row-->
            
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="<?= base_url('admin/cetak-laporan-anggota') ?>" target="_blank" class="btn btn-success"><span class="glyphicon glyphicon-print"></span> Cetak Laporan (Print)</a>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Anggota</th>
                                <th>Nama Anggota</th>
                                <th>Jenis Kelamin</th>
                                <th>No. Telp</th>
                                <th>Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach($anggota as $a): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $a['id_anggota'] ?></td>
                                <td><?= esc($a['nama_anggota']) ?></td>
                                <td><?= ($a['jk'] == 'L') ? 'Laki-laki' : 'Perempuan' ?></td>
                                <td><?= esc($a['no_telp']) ?></td>
                                <td><?= esc($a['alamat']) ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row-->	
</div><!--/.main-->
