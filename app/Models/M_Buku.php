<?php 
namespace App\Models; 
use CodeIgniter\Model; 
  
class M_Buku extends Model 
{ 
    protected $table = 'tbl_buku'; 
    protected $primaryKey = 'id_buku';
    protected $allowedFields = ['id_buku', 'judul_buku', 'pengarang', 'penerbit', 'tahun', 'jumlah_eksemplar', 'id_kategori', 'id_rak', 'keterangan', 'cover_buku', 'e_book'];
 
    public function getDataBuku($where = false) 
    { 
        if ($where === false) { 
            $builder = $this->db->table($this->table); 
            $builder->select('*'); 
            $builder->orderBy('judul_buku','ASC'); 
            return $builder->get(); 
        } else { 
            $builder = $this->db->table($this->table); 
            $builder->select('*'); 
            $builder->where($where); 
            $builder->orderBy('judul_buku','ASC'); 
            return $builder->get(); 
        } 
    } 
     
    public function getDataBukuJoin($where = false) 
    { 
        if ($where === false) { 
            $builder = $this->db->table($this->table); 
            $builder->select('tbl_buku.*, tbl_kategori.nama_kategori, tbl_rak.nama_rak'); 
            $builder->join('tbl_kategori','tbl_kategori.id_kategori = tbl_buku.id_kategori'); 
            $builder->join('tbl_rak','tbl_rak.id_rak = tbl_buku.id_rak'); 
            $builder->orderBy('tbl_buku.judul_buku','ASC'); 
            return $builder->get(); 
        } else { 
            $builder = $this->db->table($this->table); 
            $builder->select('tbl_buku.*, tbl_kategori.nama_kategori, tbl_rak.nama_rak'); 
            $builder->where($where); 
            $builder->join('tbl_kategori','tbl_kategori.id_kategori = tbl_buku.id_kategori'); 
            $builder->join('tbl_rak','tbl_rak.id_rak = tbl_buku.id_rak'); 
            $builder->orderBy('tbl_buku.judul_buku','ASC'); 
            return $builder->get(); 
        } 
    } 
 
    public function saveDataBuku($data) 
    { 
        $builder = $this->db->table($this->table); 
        return $builder->insert($data); 
    } 
 
    public function updateDataBuku($data, $where) 
    { 
        $builder = $this->db->table($this->table); 
        $builder->where($where); 
        return $builder->update($data); 
    }

    public function deleteDataBukuByWhere($where)
    {
        $builder = $this->db->table($this->table);
        $builder->where($where);
        return $builder->delete();
    }
     
    public function autoNumber() { 
        $builder = $this->db->table($this->table); 
        $builder->select("id_buku"); 
        $builder->orderBy("id_buku", "DESC"); 
        $builder->limit(1); 
        return $builder->get(); 
    } 
} 
?>
