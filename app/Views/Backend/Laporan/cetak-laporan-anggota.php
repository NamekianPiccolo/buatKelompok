<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Anggota</title>
    <style>
        body { font-family: sans-serif; color: #333; }
        .header { text-align: center; border-bottom: 3px double #000; padding-bottom: 10px; margin-bottom: 20px; }
        .header h2 { margin: 0 0 5px 0; }
        .header p { margin: 0; font-size: 14px; }
        .title { text-align: center; margin-bottom: 20px; }
        .title h3 { margin: 0; text-transform: uppercase; }
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
        <h3>Laporan Data Anggota Perpustakaan</h3>
        <p style="margin: 5px 0 0 0; font-size: 12px;">Dicetak pada: <?= date('d-m-Y H:i:s') ?></p>
    </div>
    
    <table>
        <thead>
            <tr>
                <th width="40">No</th>
                <th width="100">ID Anggota</th>
                <th>Nama Anggota</th>
                <th width="120">Jenis Kelamin</th>
                <th width="120">No. Telp</th>
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

    <div class="footer-print">
        <p>Jakarta, <?= date('d F Y') ?></p>
        <br><br><br>
        <p><b>Petugas Perpustakaan</b></p>
    </div>
</body>
</html>
