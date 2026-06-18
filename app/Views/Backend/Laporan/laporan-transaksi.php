<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li>Laporan</li>
            <li class="active">Laporan Transaksi</li>
        </ol>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Laporan Transaksi</h1>
        </div>
    </div><!--/.row-->
            
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Filter Laporan Transaksi</div>
                <div class="panel-body">
                    <form method="GET" action="<?= base_url('admin/laporan-transaksi') ?>" class="form-inline" style="margin-bottom: 20px;">
                        <div class="form-group" style="margin-right: 15px;">
                            <label for="tgl_mulai" style="margin-right: 5px;">Tanggal Mulai:</label>
                            <input type="date" name="tgl_mulai" id="tgl_mulai" class="form-control" value="<?= esc($tgl_mulai) ?>">
                        </div>
                        <div class="form-group" style="margin-right: 15px;">
                            <label for="tgl_selesai" style="margin-right: 5px;">Tanggal Selesai:</label>
                            <input type="date" name="tgl_selesai" id="tgl_selesai" class="form-control" value="<?= esc($tgl_selesai) ?>">
                        </div>
                        <div class="form-group" style="margin-right: 15px;">
                            <label for="status" style="margin-right: 5px;">Status:</label>
                            <select name="status" id="status" class="form-control">
                                <option value="Semua" <?= ($status == 'Semua') ? 'selected' : '' ?>>Semua</option>
                                <option value="Dipinjam" <?= ($status == 'Dipinjam') ? 'selected' : '' ?>>Dipinjam</option>
                                <option value="Dikembalikan" <?= ($status == 'Dikembalikan') ? 'selected' : '' ?>>Dikembalikan</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                        <a href="<?= base_url('admin/laporan-transaksi') ?>" class="btn btn-default">Reset</a>
                    </form>

                    <div style="margin-bottom: 15px;">
                        <a href="<?= base_url('admin/cetak-laporan-transaksi?tgl_mulai='.$tgl_mulai.'&tgl_selesai='.$tgl_selesai.'&status='.$status) ?>" target="_blank" class="btn btn-success"><span class="glyphicon glyphicon-print"></span> Cetak Laporan (Print)</a>
                    </div>

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Peminjaman</th>
                                <th>Nama Anggota</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Status</th>
                                <th>Buku Yang Dipinjam</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(empty($peminjaman)): ?>
                            <tr>
                                <td colspan="7" class="text-center">Tidak ada data transaksi yang ditemukan.</td>
                            </tr>
                            <?php else: ?>
                                <?php $no = 1; foreach($peminjaman as $p): ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $p['id_peminjaman'] ?></td>
                                    <td><?= esc($p['nama_anggota']) ?></td>
                                    <td><?= $p['tgl_pinjam'] ?></td>
                                    <td><?= $p['tgl_kembali'] ?></td>
                                    <td>
                                        <?php if($p['status_peminjaman'] == 'Dipinjam'): ?>
                                            <span class="label label-warning">Dipinjam</span>
                                        <?php else: ?>
                                            <span class="label label-success">Dikembalikan</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <ul style="margin: 0; padding-left: 15px;">
                                            <?php foreach($p['detail'] as $d): ?>
                                                <li><?= esc($d['judul_buku']) ?> (<?= esc($d['id_buku']) ?>) - <i><?= $d['status_kembali'] ?> Kembali</i></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row-->	
</div><!--/.main-->
