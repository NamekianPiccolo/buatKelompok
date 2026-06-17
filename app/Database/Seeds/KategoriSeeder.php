<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        // Hapus data lama
        $this->db->table('tbl_kategori')->truncate();

        $data = [
            ['nama_kategori' => 'Teknologi'],
            ['nama_kategori' => 'Sains'],
            ['nama_kategori' => 'Novel'],
            ['nama_kategori' => 'Sejarah'],
            ['nama_kategori' => 'Komik'],
            ['nama_kategori' => 'Pendidikan'],
        ];

        $this->db->table('tbl_kategori')->insertBatch($data);
        echo "Kategori seeder berhasil dijalankan!\n";
    }
}
