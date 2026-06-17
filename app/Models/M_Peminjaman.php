<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Peminjaman extends Model
{
    public function getDataPeminjaman($where = false)
    {
        if ($where === false) {
            $builder = $this->db->table('tbl_peminjaman');
            $builder->select('tbl_peminjaman.*, tbl_anggota.nama_anggota');
            $builder->join('tbl_anggota', 'tbl_anggota.id_anggota = tbl_peminjaman.id_anggota', 'LEFT');
            $builder->orderBy('id_peminjaman', 'DESC');
            return $builder->get();
        } else {
            $builder = $this->db->table('tbl_peminjaman');
            $builder->select('tbl_peminjaman.*, tbl_anggota.nama_anggota');
            $builder->join('tbl_anggota', 'tbl_anggota.id_anggota = tbl_peminjaman.id_anggota', 'LEFT');
            $builder->where($where);
            $builder->orderBy('id_peminjaman', 'DESC');
            return $builder->get();
        }
    }

    public function autoNumber()
    {
        $builder = $this->db->table('tbl_peminjaman');
        $builder->select("id_peminjaman");
        $builder->orderBy("id_peminjaman", "DESC");
        $builder->limit(1);
        return $builder->get();
    }

    public function getTemp()
    {
        $builder = $this->db->table('tbl_temp_peminjaman');
        $builder->select('tbl_temp_peminjaman.*, tbl_buku.judul_buku, tbl_buku.pengarang, tbl_buku.penerbit, tbl_buku.tahun');
        $builder->join('tbl_buku', 'tbl_buku.id_buku = tbl_temp_peminjaman.id_buku', 'LEFT');
        $builder->orderBy('tbl_temp_peminjaman.id_temp', 'DESC');
        return $builder->get();
    }

    public function cekTemp($id)
    {
        $builder = $this->db->table('tbl_temp_peminjaman');
        $builder->where('id_buku', $id);
        return $builder->get();
    }

    public function saveTemp($data)
    {
        $builder = $this->db->table('tbl_temp_peminjaman');
        return $builder->insert($data);
    }

    public function deleteTemp($id)
    {
        $builder = $this->db->table('tbl_temp_peminjaman');
        $builder->where('id_temp', $id);
        return $builder->delete();
    }

    public function getTempById($id)
    {
        $builder = $this->db->table('tbl_temp_peminjaman');
        $builder->where('id_temp', $id);
        return $builder->get()->getRowArray();
    }

    public function emptyTemp()
    {
        $builder = $this->db->table('tbl_temp_peminjaman');
        return $builder->emptyTable();
    }

    public function savePeminjaman($data)
    {
        $builder = $this->db->table('tbl_peminjaman');
        return $builder->insert($data);
    }

    public function saveDetailPeminjaman($data)
    {
        $builder = $this->db->table('tbl_detail_peminjaman');
        return $builder->insert($data);
    }

    public function detailPeminjaman($id)
    {
        $builder = $this->db->table('tbl_detail_peminjaman');
        $builder->select('tbl_detail_peminjaman.*, tbl_buku.judul_buku, tbl_buku.pengarang, tbl_buku.penerbit, tbl_buku.tahun');
        $builder->join('tbl_buku', 'tbl_buku.id_buku = tbl_detail_peminjaman.id_buku', 'LEFT');
        $builder->where('tbl_detail_peminjaman.id_peminjaman', $id);
        return $builder->get();
    }
}
