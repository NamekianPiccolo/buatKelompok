<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li>Transaksi</li>
            <li><a href="<?= base_url('admin/data-transaksi-peminjaman') ?>">Data Peminjaman</a></li>
            <li class="active">Detail</li>
        </ol>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Detail Peminjaman Buku</h1>
        </div>
    </div><!--/.row-->
            
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Informasi Transaksi Peminjaman</strong></div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <td width="200"><strong>ID Peminjaman</strong></td>
                            <td><?= $peminjaman['id_peminjaman'] ?></td>
                        </tr>
                        <tr>
                            <td><strong>Nama Anggota</strong></td>
                            <td><?= $peminjaman['nama_anggota'] ?></td>
                        </tr>
                        <tr>
                            <td><strong>Tanggal Pinjam</strong></td>
                            <td><?= date('d-m-Y', strtotime($peminjaman['tgl_pinjam'])) ?></td>
                        </tr>
                        <tr>
                            <td><strong>Tanggal Kembali</strong></td>
                            <td><?= date('d-m-Y', strtotime($peminjaman['tgl_kembali'])) ?></td>
                        </tr>
                        <tr>
                            <td><strong>Status Peminjaman</strong></td>
                            <td>
                                <?php if ($peminjaman['status_peminjaman'] == 'Dipinjam'): ?>
                                    <span class="label label-warning">Dipinjam</span>
                                <?php else: ?>
                                    <span class="label label-success">Dikembalikan</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Admin Pencatat</strong></td>
                            <td><?= $peminjaman['nama_admin'] ?? 'Admin' ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-4 text-center">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>QR Code Validasi</strong></div>
                <div class="panel-body">
                    <?php if(file_exists('Assets/QRCode/'.$peminjaman['id_peminjaman'].'.png')): ?>
                        <div style="margin-bottom: 10px;">
                            <img src="<?= base_url('Assets/QRCode/'.$peminjaman['id_peminjaman'].'.png') ?>" width="160" style="border: 1px solid #ddd; padding: 10px; background: #fff; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.08);"><br>
                        </div>
                        <div style="font-family: monospace; font-size: 11px; margin-top: 5px; word-break: break-all; background: #f9f9f9; padding: 5px; border: 1px solid #eee; border-radius: 3px;">
                            <strong>QR ID (Hash):</strong><br>
                            <?= sha1($peminjaman['id_peminjaman']) ?>
                        </div>
                        <div style="font-family: monospace; font-size: 13px; margin-top: 5px; font-weight: bold;">
                            <strong>Code QR:</strong> <?= $peminjaman['id_peminjaman'] ?>
                        </div>
                    <?php else: ?>
                        <span class="text-danger">QR Code tidak ditemukan</span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Daftar Buku Yang Dipinjam</strong></div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="50">No</th>
                                <th>ID Buku</th>
                                <th>Judul Buku</th>
                                <th>Pengarang</th>
                                <th>Status Buku</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach($detail as $d): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $d['id_buku'] ?></td>
                                <td><?= $d['judul_buku'] ?></td>
                                <td><?= $d['pengarang'] ?></td>
                                <td>
                                    <?php if ($d['status_kembali'] == 'Belum'): ?>
                                        <span class="label label-danger">Belum Kembali</span>
                                    <?php else: ?>
                                        <span class="label label-success">Sudah Kembali</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <hr />
                    <a href="<?= base_url('admin/data-transaksi-peminjaman') ?>" class="btn btn-default">
                        <span class="glyphicon glyphicon-arrow-left"></span> Kembali
                    </a>
                    <a href="<?= base_url('admin/cetak-peminjaman/'.$peminjaman['id_peminjaman']) ?>" target="_blank" class="btn btn-info">
                        <span class="glyphicon glyphicon-print"></span> Cetak Bukti
                    </a>
                </div>
            </div>
        </div>
    </div>
</div><!--/.main-->
