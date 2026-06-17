<!DOCTYPE html>
<html>
<head>
    <title>Cetak Peminjaman</title>
    <style>
        body { font-family: sans-serif; }
        .container { width: 800px; margin: 0 auto; border: 1px solid #000; padding: 20px; }
        .header { text-align: center; border-bottom: 2px solid #000; margin-bottom: 20px; }
        .header h2 { margin: 0; }
        .info { margin-bottom: 20px; }
        .info table { width: 100%; }
        .info table td { padding: 5px; }
        .data { margin-bottom: 20px; }
        .data table { width: 100%; border-collapse: collapse; }
        .data table th, .data table td { border: 1px solid #000; padding: 8px; text-align: left; }
        .qr { text-align: right; }
    </style>
</head>
<body onload="window.print()">
    <div class="container">
        <div class="header">
            <h2>BUKTI PEMINJAMAN BUKU</h2>
            <p>PERPUSTAKAAN UMUM</p>
        </div>

        <div class="info">
            <table>
                <tr>
                    <td width="150">ID Peminjaman</td>
                    <td width="10">:</td>
                    <td><?= $peminjaman['id_peminjaman'] ?></td>
                </tr>
                <tr>
                    <td>Nama Anggota</td>
                    <td>:</td>
                    <td><?= $peminjaman['nama_anggota'] ?></td>
                </tr>
                <tr>
                    <td>Tanggal Pinjam</td>
                    <td>:</td>
                    <td><?= $peminjaman['tgl_pinjam'] ?></td>
                </tr>
                <tr>
                    <td>Tanggal Kembali</td>
                    <td>:</td>
                    <td><?= $peminjaman['tgl_kembali'] ?></td>
                </tr>
            </table>
        </div>

        <div class="data">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Buku</th>
                        <th>Judul Buku</th>
                        <th>Pengarang</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($detail as $d): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $d['id_buku'] ?></td>
                        <td><?= $d['judul_buku'] ?></td>
                        <td><?= $d['pengarang'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="qr">
            <?php if(file_exists('Assets/QRCode/'.$peminjaman['id_peminjaman'].'.png')): ?>
                <img src="<?= base_url('Assets/QRCode/'.$peminjaman['id_peminjaman'].'.png') ?>" width="100">
            <?php endif; ?>
            <p>Admin: <?= session()->get('namaAgt') ?></p>
        </div>
    </div>
</body>
</html>
