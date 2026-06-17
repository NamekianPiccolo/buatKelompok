<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Anggota extends Model
{
    protected $table = 'tbl_anggota';
    protected $primaryKey = 'id_anggota';
    protected $allowedFields = ['id_anggota', 'nama_anggota', 'jk', 'no_telp', 'alamat'];

    public function getDataAnggota($where = false)
    {
        if ($where === false) {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->orderBy('nama_anggota', 'ASC');
            return $builder->get();
        } else {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->where($where);
            $builder->orderBy('nama_anggota', 'ASC');
            return $builder->get();
        }
    }

    public function saveDataAnggota($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function updateDataAnggota($data, $where)
    {
        $builder = $this->db->table($this->table);
        $builder->where($where);
        return $builder->update($data);
    }

    public function deleteDataAnggotaByWhere($where)
    {
        $builder = $this->db->table($this->table);
        $builder->where($where);
        return $builder->delete();
    }

    public function autoNumber()
    {
        $builder = $this->db->table($this->table);
        $builder->select('id_anggota');
        $builder->orderBy('id_anggota', 'DESC');
        $builder->limit(1);
        return $builder->get();
    }
}
