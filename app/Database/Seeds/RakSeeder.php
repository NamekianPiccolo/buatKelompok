<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RakSeeder extends Seeder
{
    public function run()
    {
        // Hapus data lama
        $this->db->table('tbl_rak')->truncate();

        $data = [
            ['nama_rak' => 'Rak A1'],
            ['nama_rak' => 'Rak A2'],
            ['nama_rak' => 'Rak B1'],
            ['nama_rak' => 'Rak B2'],
            ['nama_rak' => 'Rak C1'],
            ['nama_rak' => 'Rak C2'],
        ];

        $this->db->table('tbl_rak')->insertBatch($data);
        echo "Rak seeder berhasil dijalankan!\n";
    }
}
