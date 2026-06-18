<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Transaksi</title>
    <style>
        body { font-family: sans-serif; color: #333; }
        .header { text-align: center; border-bottom: 3px double #000; padding-bottom: 10px; margin-bottom: 20px; }
        .header h2 { margin: 0 0 5px 0; }
        .header p { margin: 0; font-size: 14px; }
        .title { text-align: center; margin-bottom: 20px; }
        .title h3 { margin: 0; text-transform: uppercase; }
        .filter-info { font-size: 12px; margin-bottom: 10px; font-style: italic; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        table th, table td { border: 1px solid #000; padding: 8px; text-align: left; font-size: 12px; }
        table th { background-color: #f2f2f2; }
        .footer-print { margin-top: 40px; text-align: right; font-size: 12px; }
    </style>
</head>
<body onload="window.print()">
    <div class="header">
        <h2>PERPUSTAKAAN UMUM KITA</h2>
        <p>Alamat: Jalan Raya Coding No. 101, Jakarta | Telp: (021) 123456</p>
    </div>
    
    <div class="title">
        <h3>Laporan Transaksi Peminjaman Perpustakaan</h3>
        <p style="margin: 5px 0 0 0; font-size: 11px;">Dicetak pada: <?= date('d-m-Y H:i:s') ?></p>
    </div>

    <div class="filter-info">
        Filter - 
        Tanggal: <?= (!empty($tgl_mulai)) ? date('d/m/Y', strtotime($tgl_mulai)) : 'Awal' ?> s/d <?= (!empty($tgl_selesai)) ? date('d/m/Y', strtotime($tgl_selesai)) : 'Akhir' ?> 
        | Status: <?= esc($status ?: 'Semua') ?>
    </div>
    
    <table>
        <thead>
            <tr>
                <th width="40">No</th>
                <th width="100">ID Peminjaman</th>
                <th>Nama Anggota</th>
                <th width="100">Tgl Pinjam</th>
                <th width="100">Tgl Kembali</th>
                <th width="90">Status</th>
                <th>Buku Yang Dipinjam</th>
            </tr>
        </thead>
        <tbody>
            <?php if(empty($peminjaman)): ?>
            <tr>
                <td colspan="7" style="text-align: center;">Tidak ada data transaksi.</td>
            </tr>
            <?php else: ?>
                <?php $no = 1; foreach($peminjaman as $p): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $p['id_peminjaman'] ?></td>
                    <td><?= esc($p['nama_anggota']) ?></td>
                    <td><?= date('d/m/Y', strtotime($p['tgl_pinjam'])) ?></td>
                    <td><?= date('d/m/Y', strtotime($p['tgl_kembali'])) ?></td>
                    <td><?= esc($p['status_peminjaman']) ?></td>
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

    <div class="footer-print">
        <p>Jakarta, <?= date('d F Y') ?></p>
        <br><br><br>
        <p><b>Petugas Perpustakaan</b></p>
    </div>
</body>
</html>
