<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MasterSeeder extends Seeder
{
    public function run()
    {
        // Jalankan semua seeder secara berurutan
        $this->call('AdminSeeder');
        $this->call('AnggotaSeeder');
        $this->call('KategoriSeeder');
        $this->call('RakSeeder');
        $this->call('BukuSeeder');
    }
}

