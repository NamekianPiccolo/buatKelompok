<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Hapus semua data admin lama
        $this->db->table('tbl_admin')->truncate();

        // Password: developer
        $data = [
            'username'    => 'developer',
            'password'    => '$2y$10$kNkX.sJcHm7X4/Kmcd9MR.lUdLlPw/di6cCf56n4w1J/NNKh2FopS',
            'nama_admin'  => 'Developer Admin',
            'akses_level' => 1,
            'status'      => 0
        ];

        $this->db->table('tbl_admin')->insert($data);
        echo "Admin seeder berhasil! Username: developer | Password: developer\n";
    }
}
