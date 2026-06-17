<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MasterSeeder extends Seeder
{
    public function run()
    {
        // Kategori
        $kategori = [
            ['nama_kategori' => 'Teknologi'],
            ['nama_kategori' => 'Sains'],
            ['nama_kategori' => 'Novel'],
            ['nama_kategori' => 'Sejarah']
        ];
        $this->db->table('tbl_kategori')->insertBatch($kategori);

        // Rak
        $rak = [
            ['nama_rak' => 'Rak A1'],
            ['nama_rak' => 'Rak A2'],
            ['nama_rak' => 'Rak B1'],
            ['nama_rak' => 'Rak B2']
        ];
        $this->db->table('tbl_rak')->insertBatch($rak);

        // Buku
        $buku = [
            [
                'id_buku' => 'BK-001',
                'judul_buku' => 'Pemrograman Web dengan CI4',
                'pengarang' => 'Antigravity',
                'penerbit' => 'Google Deepmind',
                'tahun' => '2026',
                'jumlah_eksemplar' => 10,
                'id_kategori' => 1,
                'id_rak' => 1,
                'keterangan' => 'Buku panduan CI4'
            ],
            [
                'id_buku' => 'BK-002',
                'judul_buku' => 'Dasar-dasar AI',
                'pengarang' => 'Deepmind Team',
                'penerbit' => 'Tech Press',
                'tahun' => '2025',
                'jumlah_eksemplar' => 5,
                'id_kategori' => 1,
                'id_rak' => 2,
                'keterangan' => 'Buku dasar AI'
            ]
        ];
        $this->db->table('tbl_buku')->insertBatch($buku);
    }
}
