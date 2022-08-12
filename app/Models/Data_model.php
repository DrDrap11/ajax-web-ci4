<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class Data_model extends Model
{
    protected $table = 'data';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'tipe_project', 'nama_cluster', 'tipe_cluster', 'area', 'kabupaten', 'kecamatan',	'kelurahan', 'olt', 'longi_lati', 'perizinan', 'kompetitor', 'lokal_operator', 'tiang_listrik', 'jumlah_rumah',	'rumah_kosong',	'fasil_umum', 'rata_daya', 'anak_kecil', 'kendaraan', 'ac', 'internet_bisnis', 'jumlah_peminat', 'harga_iconnet', 'penggunaan_internet', 'jml_perangkat', 'alokasi_budget', 'sampling_minat', 'harga_iconnet_2', 'penggunaan_internet_2', 'jml_perangkat_2', 'alokasi_budget_2', 'sampling_minat_2', 'harga_iconnet_3', 'penggunaan_internet_3', 'jml_perangkat_3', 'alokasi_budget_3', 'sampling_minat_3', 'jumlah_fat',	'daftar_fat', 'ket', 'nilai_roi', 'score', 'kelayakan', 'status_drawing', 'maps', 'jml_fat_ploating', 'home_pass', 'approval', 'no_pa', 'status_pembangunan', 'plan_pembangunan', 'create_date'];
 
    protected $useSoftDeletes   = TRUE;
    protected $dateFormat       = 'datetime';
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';
    protected $deletedField     = 'deleted_at';

    public function getData($id)
    {
        
        $builder = $this->db->table($this->table);
        $builder->join('villages', 'villages.id_desa = data.kelurahan', 'LEFT');
        $builder->join('districts', 'districts.id_kec = villages.district_id', 'LEFT');
        $builder->join('regencies', 'regencies.id_kota = districts.regency_id', 'LEFT');
        $builder->join('area', 'area.id_area = regencies.area_id', 'LEFT');
        $query = $builder->getWhere(['id' => $id]);
        return $query->getRow();
    }

}