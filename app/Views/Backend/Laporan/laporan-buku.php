<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li>Laporan</li>
            <li class="active">Laporan Buku</li>
        </ol>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Laporan Buku</h1>
        </div>
    </div><!--/.row-->
            
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="<?= base_url('admin/cetak-laporan-buku') ?>" target="_blank" class="btn btn-success"><span class="glyphicon glyphicon-print"></span> Cetak Laporan (Print)</a>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Buku</th>
                                <th>Judul Buku</th>
                                <th>Pengarang</th>
                                <th>Penerbit</th>
                                <th>Tahun</th>
                                <th>Jumlah</th>
                                <th>Kategori</th>
                                <th>Rak</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach($dataBuku as $b): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $b['id_buku'] ?></td>
                                <td><?= esc($b['judul_buku']) ?></td>
                                <td><?= esc($b['pengarang']) ?></td>
                                <td><?= esc($b['penerbit']) ?></td>
                                <td><?= $b['tahun'] ?></td>
                                <td><?= $b['jumlah_eksemplar'] ?></td>
                                <td><?= esc($b['nama_kategori']) ?></td>
                                <td><?= esc($b['nama_rak']) ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row-->	
</div><!--/.main-->
