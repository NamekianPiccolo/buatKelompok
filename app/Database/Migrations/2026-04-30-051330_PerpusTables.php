<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PerpusTables extends Migration
{
    public function up()
    {
        // tbl_admin
        $this->forge->addField([
            'id_admin' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama_admin' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'akses_level' => [
                'type' => 'INT',
                'constraint' => 1,
                'default' => 3, // 2: Kepala Perpus, 3: Admin Perpus
            ],
            'status' => [
                'type' => 'INT',
                'constraint' => 1,
                'default' => 0, // 0: active, 1: deleted
            ],
        ]);
        $this->forge->addKey('id_admin', true);
        $this->forge->createTable('tbl_admin');

        // tbl_kategori
        $this->forge->addField([
            'id_kategori' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_kategori' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id_kategori', true);
        $this->forge->createTable('tbl_kategori');

        // tbl_rak
        $this->forge->addField([
            'id_rak' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_rak' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id_rak', true);
        $this->forge->createTable('tbl_rak');

        // tbl_anggota
        $this->forge->addField([
            'id_anggota' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'nama_anggota' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'jk' => [
                'type' => 'ENUM',
                'constraint' => ['L', 'P'],
            ],
            'no_telp' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'alamat' => [
                'type' => 'TEXT',
            ],
        ]);
        $this->forge->addKey('id_anggota', true);
        $this->forge->createTable('tbl_anggota');

        // tbl_buku
        $this->forge->addField([
            'id_buku' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'judul_buku' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'pengarang' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'penerbit' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'tahun' => [
                'type' => 'VARCHAR',
                'constraint' => '4',
            ],
            'jumlah_eksemplar' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'id_kategori' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'id_rak' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'keterangan' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'cover_buku' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'e_book' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_buku', true);
        $this->forge->createTable('tbl_buku');

        // tbl_peminjaman
        $this->forge->addField([
            'id_peminjaman' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'tgl_pinjam' => [
                'type' => 'DATE',
            ],
            'tgl_kembali' => [
                'type' => 'DATE',
            ],
            'id_anggota' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'id_admin' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'status_peminjaman' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'default' => 'Dipinjam',
            ],
        ]);
        $this->forge->addKey('id_peminjaman', true);
        $this->forge->createTable('tbl_peminjaman');

        // tbl_detail_peminjaman
        $this->forge->addField([
            'id_detail' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_peminjaman' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'id_buku' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'status_kembali' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'default' => 'Belum',
            ],
        ]);
        $this->forge->addKey('id_detail', true);
        $this->forge->createTable('tbl_detail_peminjaman');

        // tbl_temp_peminjaman
        $this->forge->addField([
            'id_temp' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_buku' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
        ]);
        $this->forge->addKey('id_temp', true);
        $this->forge->createTable('tbl_temp_peminjaman');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_temp_peminjaman');
        $this->forge->dropTable('tbl_detail_peminjaman');
        $this->forge->dropTable('tbl_peminjaman');
        $this->forge->dropTable('tbl_buku');
        $this->forge->dropTable('tbl_anggota');
        $this->forge->dropTable('tbl_rak');
        $this->forge->dropTable('tbl_kategori');
        $this->forge->dropTable('tbl_admin');
    }
}

