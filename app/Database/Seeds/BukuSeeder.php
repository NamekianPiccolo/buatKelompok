<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BukuSeeder extends Seeder
{
    public function run()
    {
        // Hapus data lama
        $this->db->table('tbl_buku')->truncate();

        $data = [
            [
                'id_buku'          => 'BK-001',
                'judul_buku'       => 'Pemrograman Web dengan CI4',
                'pengarang'        => 'Antigravity',
                'penerbit'         => 'Google Deepmind',
                'tahun'            => '2026',
                'jumlah_eksemplar' => 10,
                'id_kategori'      => 1, // Teknologi
                'id_rak'           => 1, // Rak A1
                'keterangan'       => 'Buku panduan dasar CodeIgniter 4',
                'cover_buku'       => null,
                'e_book'           => null
            ],
            [
                'id_buku'          => 'BK-002',
                'judul_buku'       => 'Dasar-Dasar Artificial Intelligence',
                'pengarang'        => 'Deepmind Team',
                'penerbit'         => 'Tech Press',
                'tahun'            => '2025',
                'jumlah_eksemplar' => 5,
                'id_kategori'      => 1, // Teknologi
                'id_rak'           => 2, // Rak A2
                'keterangan'       => 'Pengenalan konsep dasar kecerdasan buatan',
                'cover_buku'       => null,
                'e_book'           => null
            ],
            [
                'id_buku'          => 'BK-003',
                'judul_buku'       => 'Sejarah Dunia Yang Disembunyikan',
                'pengarang'        => 'Jonathan Black',
                'penerbit'         => 'Pustaka Raya',
                'tahun'            => '2015',
                'jumlah_eksemplar' => 3,
                'id_kategori'      => 4, // Sejarah
                'id_rak'           => 3, // Rak B1
                'keterangan'       => 'Sejarah alternatif dunia',
                'cover_buku'       => null,
                'e_book'           => null
            ],
        ];

        $this->db->table('tbl_buku')->insertBatch($data);
        echo "Buku seeder berhasil dijalankan!\n";
    }
}
