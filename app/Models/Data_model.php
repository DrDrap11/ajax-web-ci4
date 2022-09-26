<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class Data_model extends Model
{
    protected $table = 'data';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'tipe_project', 'nama_cluster', 'tipe_cluster', 'kelurahan', 'olt', 
                                'longi_lati', 'perizinan', 'kompetitor', 'lokal_operator', 'tiang_listrik', 
                                'jumlah_rumah',	'rumah_kosong',	'fasil_umum', 'rata_daya', 'anak_kecil', 
                                'kendaraan', 'ac', 'internet_bisnis', 'jumlah_peminat', 'harga_iconnet', 
                                'penggunaan_internet', 'jml_perangkat', 'alokasi_budget', 'sampling_minat', 
                                'harga_iconnet_2', 'penggunaan_internet_2', 'jml_perangkat_2', 'alokasi_budget_2', 
                                'sampling_minat_2', 'harga_iconnet_3', 'penggunaan_internet_3', 'jml_perangkat_3', 
                                'alokasi_budget_3', 'sampling_minat_3', 'jumlah_fat', 'daftar_fat', 'ket', 
                                'nilai_roi', 'score', 'kelayakan', 'status_drawing', 'maps', 'jml_fat_ploating', 
                                'home_pass', 'approval', 'no_pa', 'status_pembangunan', 'plan_pembangunan', 'create_date'];
 
    protected $useSoftDeletes   = TRUE;
    protected $dateFormat       = 'datetime';
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';
    protected $deletedField     = 'deleted_at';

    public function getData($id)
    {
        
        $builder = $this->db->table($this->table);
        $builder->select('*, sh.sh_jenis AS sh_jenis1, sn.sn_jenis AS sn_jenis1, sb.sb_jenis AS sb_jenis1, 
                            sm.sm_jenis AS sm_jenis1, sh2.sh_jenis AS sh_jenis2, sn2.sn_jenis AS sn_jenis2, 
                            sb2.sb_jenis AS sb_jenis2, sm2.sm_jenis AS sm_jenis2, sh3.sh_jenis AS sh_jenis3, 
                            sn3.sn_jenis AS sn_jenis3, sb3.sb_jenis AS sb_jenis3, sm3.sm_jenis AS sm_jenis3');
        $builder->join('tipe_project', 'tipe_project.tp_id = data.tipe_project', 'LEFT');
        $builder->join('tipe_cluster', 'tipe_cluster.tc_id = data.tipe_cluster', 'LEFT');
        $builder->join('villages', 'villages.id_desa = data.kelurahan', 'LEFT');
        $builder->join('districts', 'districts.id_kec = villages.district_id', 'LEFT');
        $builder->join('regencies', 'regencies.id_kota = districts.regency_id', 'LEFT');
        $builder->join('area', 'area.id_area = regencies.area_id', 'LEFT');
        $builder->join('olt', 'olt.olt_id = data.olt', 'LEFT');      
        $builder->join('rata_daya', 'rata_daya.rd_id = data.rata_daya', 'LEFT');
        $builder->join('status_drawing', 'status_drawing.sd_id = data.status_drawing', 'LEFT');
        $builder->join('status_pembangunan', 'status_pembangunan.sp_id = data.status_pembangunan', 'LEFT');
        $builder->join('survey_harga sh', 'sh.sh_id = data.harga_iconnet', 'LEFT');
        $builder->join('survey_net sn', 'sn.sn_id = data.penggunaan_internet', 'LEFT');
        $builder->join('survey_budget sb', 'sb.sb_id = data.alokasi_budget', 'LEFT');
        $builder->join('survey_minat sm', 'sm.sm_id = data.sampling_minat', 'LEFT');
        $builder->join('survey_harga sh2', 'sh2.sh_id = data.harga_iconnet_2', 'LEFT');
        $builder->join('survey_net sn2', 'sn2.sn_id = data.penggunaan_internet_2', 'LEFT');
        $builder->join('survey_budget sb2', 'sb2.sb_id = data.alokasi_budget_2', 'LEFT');
        $builder->join('survey_minat sm2', 'sm2.sm_id = data.sampling_minat_2', 'LEFT');
        $builder->join('survey_harga sh3', 'sh3.sh_id = data.harga_iconnet_3', 'LEFT');
        $builder->join('survey_net sn3', 'sn3.sn_id = data.penggunaan_internet_3', 'LEFT');     
        $builder->join('survey_budget sb3', 'sb3.sb_id = data.alokasi_budget_3', 'LEFT');
        $builder->join('survey_minat sm3', 'sm3.sm_id = data.sampling_minat_3', 'LEFT');
        $query = $builder->getWhere(['id' => $id]);
        return $query->getRow();
    }

}