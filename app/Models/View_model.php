<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class View_model extends Model
{
    protected $table = 'tampilan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_karyawan', 'usia', 'status_vaksin_1', 'status_vaksin_2', 'prov', 'kota', 'kec', 'desa'];
 
    // public function getKaryawan($id = false)
    // {
    //     if ($id === false) {
    //     } else {
    //         return $this->getWhere(['id' => $id]);
    //     }
    // }
    public function getKaryawan($id)
    {
            $sql = 'SELECT * FROM employees WHERE id ='.$id;
            $query = $this->db->query($sql);
            return $query->getResult();
    }

    public function getEmployee($id) 
    {
        $builder = $this->db->table($this->table);
        $builder->select('id', 'nama_karyawan', 'usia', 'status_vaksin_1', 'status_vaksin_2');
        $builder->join('villages', 'villages.id_desa = employees.desa');
        $builder->join('districts', 'districts.id_kec = villages.district_id');
        $builder->join('regencies', 'regencies.id_kec = district.regency_id');
        $builder->join('province', 'province.id_kec = regencies.province_id');
        $builder->where(['id' => $id]);

        return $builder->get();
    }
 
    // public function saveKaryawan($data)
    // {
    //     $builder = $this->db->table($this->table);
    //     return $builder->insert($data);
    // }

    // public function editKaryawan($data, $id)
    // {
    //     $builder = $this->db->table($this->table);
    //     $builder->where('id', $id);
    //     return $builder->update($data);
    // }

    // public function hapusKaryawan($id)
    // {
    //     $builder = $this->db->table($this->table);
    //     return $builder->delete(['id' => $id]);
    // }
}