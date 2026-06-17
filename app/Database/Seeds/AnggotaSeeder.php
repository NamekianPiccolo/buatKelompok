<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AnggotaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_anggota'   => 'AGT001',
                'nama_anggota' => 'Budi Santoso',
                'jk'           => 'L',
                'no_telp'      => '08123456789',
                'alamat'       => 'Jl. Merdeka No. 1'
            ],
            [
                'id_anggota'   => 'AGT002',
                'nama_anggota' => 'Siti Aminah',
                'jk'           => 'P',
                'no_telp'      => '08129876543',
                'alamat'       => 'Jl. Mawar No. 5'
            ],
            [
                'id_anggota'   => 'AGT003',
                'nama_anggota' => 'Andi Wijaya',
                'jk'           => 'L',
                'no_telp'      => '08134567890',
                'alamat'       => 'Jl. Melati No. 10'
            ]
        ];

        $this->db->table('tbl_anggota')->insertBatch($data);
    }
}
