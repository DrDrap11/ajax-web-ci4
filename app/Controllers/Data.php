<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Data_model;
use App\Models\Dropdown_model;

class Data extends Controller
{

    public function __construct()
    {
        require_once APPPATH . 'ThirdParty/ssp.php';
        $this->db = db_connect();
    }

    public function index()
    {
        $session = session();
        $uname['user_name'] = $session->get('user_name');
        $uname['role'] = $session->get('role');

        $model = new Dropdown_model();
        $data['area'] = $model->getarea();
        $data['daya'] = $model->getdaya();
        $data['olt'] = $model->getolt();
        $data['tipe_project'] = $model->get_tipe_project();
        $data['tipe_cluster'] = $model->get_tipe_cluster();
        $data['survey_harga'] = $model->get_survey_harga();
        $data['survey_net'] = $model->get_survey_net();
        $data['survey_budget'] = $model->get_survey_budget();
        $data['survey_minat'] = $model->get_survey_minat();
        $data['status_drawing'] = $model->get_status_drawing();
        $data['status_pembangunan'] = $model->get_status_pembangunan();

        echo view('header', $uname);
        echo view('data_view', $data);
        echo view('footer');
    }

    public function addData()
    {
        $dataModel = new \App\Models\Data_model();
        $wilayahModel = new \App\Models\Dropdown_model();
        $db      = \Config\Database::connect();
        $builder = $db->table('data');

        $session = session();
        $user_id = $_SESSION['user_id'];
        $score = 0;
        // if( $this->request->getPost('izin') == 1)$score += 3;
        // if( $this->request->getPost('kompetitor') == 0)$score += 20;	
        // if( $this->request->getPost('kompetitor') == 1)$score += 10;		
        // if( $this->request->getPost('tiang') == 1)$score += 10;		
        // if( $this->request->getPost('operator') == 0)$score += 5;		
        // if( $this->request->getPost('jml_rumah') >= 100)$score += 5;
        // if( $this->request->getPost('jml_rumah') < 100 && $this->request->getPost('jml_rumah') >= 20)$score += 2;
        // if( $this->request->getPost('rmh_kosong') == 1)$score += 5;
        // if( $this->request->getPost('fasil') == 1)$score += 5;
        // if( $this->request->getPost('daya') == 2 || $this->request->getPost('daya') == 8)$score += 5;
        // if( $this->request->getPost('daya') == 3 || $this->request->getPost('daya') == 9)$score += 3;
        // if( $this->request->getPost('anak') == 1)$score += 4;
        // if( $this->request->getPost('kendaraan') == 1)$score += 9;
        // if( $this->request->getPost('ac') == 1)$score += 4;
        // if( $this->request->getPost('budget') == 3)$score += 5;
        // if( $this->request->getPost('budget') == 4 || $this->request->getPost('budget') == 5)$score += 10;
        // if( $this->request->getPost('budget2') == 3)$score += 5;
        // if( $this->request->getPost('budget2') == 4 || $this->request->getPost('budget2') == 5)$score += 10;
        // if( $this->request->getPost('budget3') == 3)$score += 5;
        // if( $this->request->getPost('budget3') == 4 || $this->request->getPost('budget3') == 5)$score += 10;
        // if( $this->request->getPost('harga') == 3 || $this->request->getPost('harga') == 4 || $this->request->getPost('harga') == 5)$score += 5;
        // if( $this->request->getPost('harga2') == 3 || $this->request->getPost('harga2') == 4 || $this->request->getPost('harga2') == 5)$score += 5;
        // if( $this->request->getPost('harga3') == 3 || $this->request->getPost('harga3') == 4 || $this->request->getPost('harga3') == 5)$score += 5;
        // if( $this->request->getPost('minat') == 1)$score += 10;
        // if( $this->request->getPost('minat') == 2)$score += 5;
        // if( $this->request->getPost('minat2') == 1)$score += 10;
        // if( $this->request->getPost('minat2') == 2)$score += 5;
        // if( $this->request->getPost('minat3') == 1 )$score += 10;
        // if( $this->request->getPost('minat3') == 2)$score += 5;
        // if( $this->request->getPost('bisnis') == 1)$score += 5;
        
         // if( $this->request->getPost('izin') == 1)$score += 3;
        // if( $this->request->getPost('kompetitor') == 0)$score += 20;	
        // if( $this->request->getPost('kompetitor') == 1)$score += 10;		
        // if( $this->request->getPost('tiang') == 1)$score += 10;		
        // if( $this->request->getPost('operator') == 0)$score += 5;		
        // if( $this->request->getPost('jml_rumah') >= 100)$score += 5;
        // if( $this->request->getPost('jml_rumah') < 100 && $this->request->getPost('jml_rumah') >= 20)$score += 2;
        // if( $this->request->getPost('rmh_kosong') == 1)$score += 5;
        // if( $this->request->getPost('fasil') == 1)$score += 5;
        // if( $this->request->getPost('daya') == 2 || $this->request->getPost('daya') == 8)$score += 5;
        // if( $this->request->getPost('daya') == 3 || $this->request->getPost('daya') == 9)$score += 3;
        // if( $this->request->getPost('anak') == 1)$score += 4;
        // if( $this->request->getPost('kendaraan') == 1)$score += 9;
        // if( $this->request->getPost('ac') == 1)$score += 4;
        // if( $this->request->getPost('budget') == 3)$score += 5;
        // if( $this->request->getPost('budget') == 4 || $this->request->getPost('budget') == 5)$score += 10;
        // if( $this->request->getPost('budget2') == 3)$score += 5;
        // if( $this->request->getPost('budget2') == 4 || $this->request->getPost('budget2') == 5)$score += 10;
        // if( $this->request->getPost('budget3') == 3)$score += 5;
        // if( $this->request->getPost('budget3') == 4 || $this->request->getPost('budget3') == 5)$score += 10;
        // if( $this->request->getPost('harga') == 3 || $this->request->getPost('harga') == 4 || $this->request->getPost('harga') == 5)$score += 5;
        // if( $this->request->getPost('harga2') == 3 || $this->request->getPost('harga2') == 4 || $this->request->getPost('harga2') == 5)$score += 5;
        // if( $this->request->getPost('harga3') == 3 || $this->request->getPost('harga3') == 4 || $this->request->getPost('harga3') == 5)$score += 5;
        // if( $this->request->getPost('minat') == 1)$score += 10;
        // if( $this->request->getPost('minat') == 2)$score += 5;
        // if( $this->request->getPost('minat2') == 1)$score += 10;
        // if( $this->request->getPost('minat2') == 2)$score += 5;
        // if( $this->request->getPost('minat3') == 1 )$score += 10;
        // if( $this->request->getPost('minat3') == 2)$score += 5;
        // if( $this->request->getPost('bisnis') == 1)$score += 5;
        
        if( $this->request->getPost('izin') == 1)$score += 5;
        if( $this->request->getPost('izin') == 0)$score += 0;
        if( $this->request->getPost('kompetitor') == 0)$score += 20;	
        if( $this->request->getPost('kompetitor') == 1)$score += 10;
        if( $this->request->getPost('kompetitor') == 2)$score += 5;
        if( $this->request->getPost('kompetitor') >= 3)$score += 0;
        if( $this->request->getPost('tiang') == 1)$score += 10;
        if( $this->request->getPost('tiang') == 0)$score += 0;
        if( $this->request->getPost('operator') == 0)$score += 5;
        if( $this->request->getPost('operator') == 1)$score += 0;
        if( $this->request->getPost('jml_rumah') > 100)$score += 5;
        if( $this->request->getPost('jml_rumah') <= 100 && $this->request->getPost('jml_rumah') >= 20)$score += 2;
        if( $this->request->getPost('jml_rumah') <20 )$score += 0;
        if( $this->request->getPost('rmh_kosong') == 1)$score += 5;
        if( $this->request->getPost('rmh_kosong') == 0)$score += 0;
        if( $this->request->getPost('fasil') == 1)$score += 5;
        if( $this->request->getPost('fasil') == 0)$score += 0;
        if( $this->request->getPost('daya') == 3 || $this->request->getPost('daya') == 9)$score += 5;
        if( $this->request->getPost('daya') == 2 || $this->request->getPost('daya') == 8 )$score += 3;
        if( $this->request->getPost('daya') == 1 || $this->request->getPost('daya') == 4 || $this->request->getPost('daya') == 5 || $this->request->getPost('daya') == 6 || $this->request->getPost('daya') == 7 || $this->request->getPost('daya') == 10 ||$this->request->getPost('daya') == 11 ||$this->request->getPost('daya') == 12|| $this->request->getPost('daya') == 13)$score += 0;
        if( $this->request->getPost('daya') == 1 )$score += 3;
        if( $this->request->getPost('anak') == 1)$score += 5;
        if( $this->request->getPost('anak') == 0)$score += 0;
        if( $this->request->getPost('kendaraan') == 1)$score += 5;
        if( $this->request->getPost('kendaraan') == 0)$score += 0;
        if( $this->request->getPost('ac') == 1)$score += 5;
        if( $this->request->getPost('ac') == 0)$score += 0;
        if( $this->request->getPost('budget') == 4 || $this->request->getPost('budget') == 5) $score += 10;
        if( $this->request->getPost('budget') == 3)$score += 5;
        if( $this->request->getPost('budget') == 1 || $this->request->getPost('budget') == 2) $score += 0;
        if( $this->request->getPost('budget2') == 4 || $this->request->getPost('budget_2') == 5) $score += 10;
        if( $this->request->getPost('budget2') == 3)$score += 5;
        if( $this->request->getPost('budget2') == 1 || $this->request->getPost('budget2') == 2) $score += 0;
        if( $this->request->getPost('budget3') == 4 || $this->request->getPost('budget3') == 5) $score += 10;
        if( $this->request->getPost('budget3') == 3)$score += 5;
        if( $this->request->getPost('budget3') == 1 || $this->request->getPost('alokasi_budge3') == 2) $score += 0; 
        if( $this->request->getPost('harga') == 3 || $this->request->getPost('harga') == 4 || $this->request->getPost('harga') == 5)$score += 5;
        if( $this->request->getPost('harga') == 1 || $this->request->getPost('harga') == 2)$score += 0;
        if( $this->request->getPost('harga2') == 3 || $this->request->getPost('harga2') == 4 || $this->request->getPost('harga') == 5)$score += 5;
        if( $this->request->getPost('harga2') == 1 || $this->request->getPost('harga2') == 2)$score += 0;
        if( $this->request->getPost('harga3') == 3 || $this->request->getPost('harga3') == 4 || $this->request->getPost('harga') == 5)$score += 5;
        if( $this->request->getPost('harga3') == 1 || $this->request->getPost('harga3') == 2)$score += 0;
        if( $this->request->getPost('minat') == 1)$score += 10;
        if( $this->request->getPost('minat') == 2)$score += 5;
        if( $this->request->getPost('minat') == 3)$score += 0;
        if( $this->request->getPost('minat2') == 1)$score += 10;
        if( $this->request->getPost('minat2') == 2)$score += 5;
        if( $this->request->getPost('minat2') == 3)$score += 0;
        if( $this->request->getPost('minat3') == 1)$score += 10;
        if( $this->request->getPost('minat3') == 2)$score += 5;
        if( $this->request->getPost('minat3') == 3)$score += 0;
        if( $this->request->getPost('bisnis') == 1)$score += 5;
        if( $this->request->getPost('bisnis') == 0)$score += 0;
    
        if($score >= 80){
            $kelayakan = 1;
        }else{
            $kelayakan = 0;
        }

        $array = [
            'user_id'   => $user_id,
        ];
            
        $data = [
            'tipe_project'          => $this->request->getPost('tp_project'),
            'nama_cluster'          => $this->request->getPost('nama'),
            'tipe_cluster'          => $this->request->getPost('tipe_cluster'),
            'kelurahan'             => $this->request->getPost('desa'),
            'olt'                   => $this->request->getPost('olt'),
            'longi_lati'            => $this->request->getPost('ll'),
            'perizinan'             => $this->request->getPost('izin'),
            'kompetitor'            => $this->request->getPost('kompetitor'),
            'lokal_operator'        => $this->request->getPost('operator'),
            'tiang_listrik'         => $this->request->getPost('tiang'),
            'jumlah_rumah'          => $this->request->getPost('jml_rumah'),
            'rumah_kosong'          => $this->request->getPost('rmh_kosong'),
            'fasil_umum'            => $this->request->getPost('fasil'),
            'rata_daya'             => $this->request->getPost('daya'),
            'anak_kecil'            => $this->request->getPost('anak'),
            'kendaraan'             => $this->request->getPost('kendaraan'),
            'ac'                    => $this->request->getPost('ac'),
            'internet_bisnis'       => $this->request->getPost('bisnis'),
            'jumlah_peminat'        => $this->request->getPost('peminat'),
            'harga_iconnet'         => $this->request->getPost('harga'),
            'penggunaan_internet'   => $this->request->getPost('internet'),
            'jml_perangkat'         => $this->request->getPost('perangkat'),
            'alokasi_budget'        => $this->request->getPost('budget'),
            'sampling_minat'        => $this->request->getPost('minat'),
            'harga_iconnet_2'       => $this->request->getPost('harga2'),
            'penggunaan_internet_2' => $this->request->getPost('internet2'),
            'jml_perangkat_2'       => $this->request->getPost('perangkat2'),
            'alokasi_budget_2'      => $this->request->getPost('budget2'),
            'sampling_minat_2'      => $this->request->getPost('minat2'),
            'harga_iconnet_3'       => $this->request->getPost('harga3'),
            'penggunaan_internet_3' => $this->request->getPost('internet3'),
            'jml_perangkat_3'       => $this->request->getPost('perangkat3'),
            'alokasi_budget_3'      => $this->request->getPost('budget3'),
            'sampling_minat_3'      => $this->request->getPost('minat3'),
            'jumlah_fat'            => $this->request->getPost('fat'),
            'daftar_fat'            => $this->request->getPost('daftar_fat'),
            'ket'                   => $this->request->getPost('ket'),
            'nilai_roi'             => $this->request->getPost('roi'),
            'score'                 => $score,
            'kelayakan'             => $kelayakan,
            'status_drawing'        => $this->request->getPost('drawing'),
            'maps'                  => $this->request->getPost('maps'),
            'jml_fat_ploating'      => $this->request->getPost('ploating'),
            'home_pass'             => $this->request->getPost('home_pass'),
            'approval'              => $this->request->getPost('approval'),
            'no_pa'                 => $this->request->getPost('no_pa'),
            'status_pembangunan'    => $this->request->getPost('stts_pembangunan'),
            'plan_pembangunan'      => $this->request->getPost('planbangun'),
        ];
        
        $builder->set($array);
        $builder->set($data);
        //$query = $employeeModel->insert($data);
        $query = $builder->insert();
        if ($query) {
            echo json_encode(['code' => 1, 'msg' => $user_id]);
        } else {
            echo json_encode(['code' => 0, 'msg' => $score]);
        }
        
    }

    public function getKota() {
 
        $model = new Dropdown_model();
 
        $postData = array(
            'area' => $this->request->getPost('area'),
        );
 
        $data = $model->getkota($postData);
        
        // var_dump($data);
        echo json_encode($data);
    }    

    public function getKecamatan() {
 
        $model = new Dropdown_model();
 
        $postData = array(
            'kota' => $this->request->getPost('kota'),
        );
 
        $data = $model->getkecamatan($postData);
        
        // var_dump($data);
        echo json_encode($data);
    }    

    public function getDesa() {
 
        $model = new Dropdown_model();
 
        $postData = array(
            'kec' => $this->request->getPost('kec'),
        );
 
        $data = $model->getdesa($postData);
        
        // var_dump($data);
        echo json_encode($data);
    }    

    public function getAllData()
    {
        //DB Details
        $dbDetails = array(
            "host" => $this->db->hostname,
            "user" => $this->db->username,
            "pass" => $this->db->password,
            "db" => $this->db->database,
        );

        $table = <<<EOT
        (
            SELECT data.id, data.user_id, data.tipe_project, data.nama_cluster, data.tipe_cluster, data.kelurahan,
            data.olt, data.longi_lati, data.kompetitor, data.jumlah_rumah, data.rata_daya, data.jumlah_peminat, data.harga_iconnet, data.penggunaan_internet, data.jml_perangkat,
            data.alokasi_budget, data.sampling_minat, data.harga_iconnet_2, data.penggunaan_internet_2, data.jml_perangkat_2, data.alokasi_budget_2, data.sampling_minat_2,
            data.harga_iconnet_3, data.penggunaan_internet_3, data.jml_perangkat_3, data.alokasi_budget_3, data.sampling_minat_3, data.jumlah_fat, data.daftar_fat, data.ket,
            data.nilai_roi, data.score, data.status_drawing, data.maps, data.jml_fat_ploating, data.home_pass, data.no_pa,data.status_pembangunan,
            data.plan_pembangunan, data.created_at, data.deleted_at, villages.desa, districts.kec, regencies.kota, area.area_nama, tipe_project.tp_jenis, tipe_cluster.tc_jenis, 
            olt.olt_nama, rata_daya.rd_jenis, sh.sh_jenis, sn.sn_jenis, sb.sb_jenis, sm.sm_jenis, status_drawing.sd_jenis, status_pembangunan.sp_jenis,
            sh2.sh_jenis AS sh_jenis2,
            sn2.sn_jenis AS sn_jenis2,
            sb2.sb_jenis AS sb_jenis2,
            sm2.sm_jenis AS sm_jenis2,
            sh3.sh_jenis AS sh_jenis3,
            sn3.sn_jenis AS sn_jenis3,
            sb3.sb_jenis AS sb_jenis3,
            sm3.sm_jenis AS sm_jenis3,
            data.perizinan, IF(data.perizinan = 1, 'Mudah', 'Sulit') AS izin,
            data.lokal_operator, IF(data.lokal_operator = 1, 'Ada', 'Tidak Ada') AS lo,
            data.tiang_listrik, IF(data.tiang_listrik = 1, 'Ada', 'Tidak Ada') AS tl,
            data.rumah_kosong, IF(data.rumah_kosong = 1, 'Sedikit <10', 'Banyak >10') AS rk,
            data.fasil_umum, IF(data.fasil_umum = 1, 'Ada', 'Tidak Ada') AS fu,
            data.anak_kecil, IF(data.anak_kecil = 1, 'Ada', 'Tidak Ada') AS ak,
            data.kendaraan, IF(data.kendaraan = 1, 'Mobil', 'Motor') AS kndrn,
            data.ac, IF(data.ac = 1, 'Ada', 'Tidak Ada') AS airc,
            data.internet_bisnis, IF(data.internet_bisnis = 1, 'Ada', 'Tidak Ada') AS ib,
            data.kelayakan, IF(data.kelayakan = 1, 'Layak', 'Tidak Layak') AS layak,
            data.approval, IF(data.approval = 1, 'Setuju', 'Tidak Setuju') AS approv
            FROM data
            LEFT JOIN villages ON villages.id_desa = data.kelurahan
            LEFT JOIN districts ON districts.id_kec = villages.district_id
            LEFT JOIN regencies ON regencies.id_kota = districts.regency_id
            LEFT JOIN area ON area.id_area = regencies.area_id
            LEFT JOIN tipe_project ON tipe_project.tp_id = data.tipe_project
            LEFT JOIN tipe_cluster ON tipe_cluster.tc_id = data.tipe_cluster
            LEFT JOIN olt ON olt.olt_id = data.olt
            LEFT JOIN rata_daya ON rata_daya.rd_id = data.rata_daya
            LEFT JOIN survey_harga sh ON sh.sh_id = data.harga_iconnet
            LEFT JOIN survey_net sn ON sn.sn_id = data.penggunaan_internet
            LEFT JOIN survey_budget sb ON sb.sb_id = data.alokasi_budget
            LEFT JOIN survey_minat sm ON sm.sm_id = data.sampling_minat
            LEFT JOIN survey_harga sh2 ON sh2.sh_id = data.harga_iconnet_2
            LEFT JOIN survey_net sn2 ON sn2.sn_id = data.penggunaan_internet_2
            LEFT JOIN survey_budget sb2 ON sb2.sb_id = data.alokasi_budget_2
            LEFT JOIN survey_minat sm2 ON sm2.sm_id = data.sampling_minat_2
            LEFT JOIN survey_harga sh3 ON sh3.sh_id = data.harga_iconnet_3
            LEFT JOIN survey_net sn3 ON sn3.sn_id = data.penggunaan_internet_3
            LEFT JOIN survey_budget sb3 ON sb3.sb_id = data.alokasi_budget_3
            LEFT JOIN survey_minat sm3 ON sm3.sm_id = data.sampling_minat_3
            LEFT JOIN status_drawing ON status_drawing.sd_id = data.status_drawing
            LEFT JOIN status_pembangunan ON status_pembangunan.sp_id = data.status_pembangunan
        ) temp
        EOT;//dari tabel view tp data tidak otomatis update
        $primaryKey = "id";

        $columns = array(
            array(
                "db" => "id",
                "dt" => 0,
                "formatter" => function ($d, $row) {
                    return "<div class='btn-group'>
                                  <a class='btn btn-warning btn-edit kota' data-id='" . $row['id'] . "' data-bs-toggle='modal' data-bs-target='#editModal' id='updateBtn' style='margin-right: 10px'><i class='ti ti-edit'></i></a>
                                  <button class='btn btn btn-danger' data-id='" . $row['id'] . "' id='deleteDataBtn'> <i class='ti ti-trash'></i></button>
                             </div>";
                }
            ),
            array("db" => "id",                     "dt" => 1),
            array("db" => "tp_jenis",               "dt" => 2),
            array("db" => "nama_cluster",           "dt" => 3),
            array("db" => "tc_jenis",               "dt" => 4),
            array("db" => "area_nama",              "dt" => 5),
            array("db" => "kota",                   "dt" => 6),
            array("db" => "kec",                    "dt" => 7),
            array("db" => "desa",                   "dt" => 8),
            array("db" => "olt_nama",               "dt" => 9),
            array("db" => "longi_lati",             "dt" => 10),
            array("db" => "izin",                   "dt" => 11),
            array("db" => "kompetitor",             "dt" => 12),
            array("db" => "lo",                     "dt" => 13),
            array("db" => "tl",                     "dt" => 14),
            array("db" => "jumlah_rumah",           "dt" => 15),
            array("db" => "rk",                     "dt" => 16),
            array("db" => "fu",                     "dt" => 17),
            array("db" => "rd_jenis",               "dt" => 18),
            array("db" => "ak",                     "dt" => 19),
            array("db" => "kndrn",                  "dt" => 20),
            array("db" => "airc",                   "dt" => 21),
            array("db" => "ib",                     "dt" => 22),
            array("db" => "jumlah_peminat",         "dt" => 23),
            array("db" => "sh_jenis",               "dt" => 24),
            array("db" => "sn_jenis",               "dt" => 25),
            array("db" => "jml_perangkat",          "dt" => 26),
            array("db" => "sb_jenis",               "dt" => 27),
            array("db" => "sm_jenis",               "dt" => 28),
            array("db" => "sh_jenis2",              "dt" => 29),
            array("db" => "sn_jenis2",              "dt" => 30),
            array("db" => "jml_perangkat_2",        "dt" => 31),
            array("db" => "sb_jenis2",              "dt" => 32),
            array("db" => "sm_jenis2",              "dt" => 33),
            array("db" => "sh_jenis3",              "dt" => 34),
            array("db" => "sn_jenis3",              "dt" => 35),
            array("db" => "jml_perangkat_3",        "dt" => 36),
            array("db" => "sb_jenis3",              "dt" => 37),
            array("db" => "sm_jenis3",              "dt" => 38),
            array("db" => "jumlah_fat",             "dt" => 39),
            array("db" => "daftar_fat",             "dt" => 40),
            array("db" => "ket",                    "dt" => 41),
            array("db" => "nilai_roi",              "dt" => 42),
            array("db" => "score",                  "dt" => 43),
            array("db" => "layak",                  "dt" => 44),
            array("db" => "sd_jenis",               "dt" => 45),
            array("db" => "maps",                   "dt" => 46),
            array("db" => "jml_fat_ploating",       "dt" => 47),
            array("db" => "home_pass",              "dt" => 48),
            array("db" => "approv",                 "dt" => 49),
            array("db" => "no_pa",                  "dt" => 50),
            array("db" => "sp_jenis",               "dt" => 51),
            array("db" => "plan_pembangunan",       "dt" => 52),
            array("db" => "created_at",             "dt" => 53),
        );
        $session = session();
        $user_id = $_SESSION["user_id"];
        $role = $_SESSION["role"];

        if($role === "Admin") {
            echo json_encode(
                \SSP::simple($_GET, $dbDetails, $table, $primaryKey, $columns, null, "deleted_at IS NULL")
            );
        } else {
            echo json_encode(
                \SSP::simple($_GET, $dbDetails, $table, $primaryKey, $columns, null, "user_id = '$user_id' AND deleted_at IS NULL")
            );
        }
    }

    public function deleteData()
    {
        $dataModel = new \App\Models\Data_model();
        $data_id = $this->request->getPost('id');
        $query = $dataModel->delete($data_id);

        if ($query) {
            echo json_encode(['code' => 1, 'msg' => 'Data behasil dihapus']);
        } else {
            echo json_encode(['code' => 0, 'msg' => 'Data gagal dihapus']);
        }
    }

    public function edit()
    {
        $model = new Data_model();
        $id = $this->request->getPost("edit_id");

        $data['data'] = $model->getData($id);
        return $this->response->setJSON($data);
    }

    public function update()
    {
        $model = new Data_model;

        $score = 0;
        if( $this->request->getPost('izin') == 1)$score += 5;
        if( $this->request->getPost('izin') == 0)$score += 0;
        if( $this->request->getPost('kompetitor') == 0)$score += 20;	
        if( $this->request->getPost('kompetitor') == 1)$score += 10;
        if( $this->request->getPost('kompetitor') == 2)$score += 5;
        if( $this->request->getPost('kompetitor') == 3)$score += 0;		
        if( $this->request->getPost('tiang_listrik') == 1)$score += 10;
        if( $this->request->getPost('tiang_listrik') == 0)$score += 0;		
        if( $this->request->getPost('lokal_operator') == 0)$score += 5;
        if( $this->request->getPost('lokal_operator') == 1)$score += 0;		
        if( $this->request->getPost('jumlah_rumah') > 100)$score += 5;
        if( $this->request->getPost('jumlah_rumah') <= 100 && $this->request->getPost('jumlah_rumah') >= 20)$score += 2;
        if( $this->request->getPost('jumlah_rumah') < 20 )$score += 0;
        if( $this->request->getPost('rumah_kosong') == 1)$score += 5;
        if( $this->request->getPost('rumah_kosong') == 0)$score += 0;
        if( $this->request->getPost('fasil_umum') == 1)$score += 5;
        if( $this->request->getPost('fasil_umum') == 0)$score += 0;
        if( $this->request->getPost('rata_daya') == 2 || $this->request->getPost('rata_daya') == 8)$score += 3;
        if( $this->request->getPost('rata_daya') == 3 || $this->request->getPost('rata_daya') == 9)$score += 5;
        if( $this->request->getPost('rata_daya') == 1 || $this->request->getPost('rata_daya') == 4 || $this->request->getPost('rata_daya') == 5 || $this->request->getPost('rata_daya') == 6 || $this->request->getPost('rata_daya') == 7 || $this->request->getPost('rata_daya') == 10 ||$this->request->getPost('rata_daya') == 11 ||$this->request->getPost('rata_daya') == 12|| $this->request->getPost('rata_daya') == 13)$score += 0;
        if( $this->request->getPost('anak_kecil') == 1)$score += 5;
        if( $this->request->getPost('anak_kecil') == 0)$score += 0;
        if( $this->request->getPost('kendaraan') == 1)$score += 5;
        if( $this->request->getPost('kendaraan') == 0)$score += 0;
        if( $this->request->getPost('ac') == 1)$score += 5;
        if( $this->request->getPost('ac') == 0)$score += 0;
        if( $this->request->getPost('alokasi_budget') == 3)$score += 5;
        if( $this->request->getPost('alokasi_budget') == 4 || $this->request->getPost('alokasi_budget') == 5)$score += 10;
        if( $this->request->getPost('alokasi_budget') == 1 || $this->request->getPost('alokasi_budget') == 2)$score += 0;
        if( $this->request->getPost('alokasi_budget_2') == 3)$score += 5;
        if( $this->request->getPost('alokasi_budget_2') == 4 || $this->request->getPost('alokasi_budget_2') == 5)$score += 10;
        if( $this->request->getPost('alokasi_budget_2') == 1 || $this->request->getPost('alokasi_budget_2') == 2)$score += 0;
        if( $this->request->getPost('alokasi_budget_3') == 3)$score += 5;
        if( $this->request->getPost('alokasi_budget_3') == 4 || $this->request->getPost('alokasi_budget_3') == 5)$score += 10;
        if( $this->request->getPost('alokasi_budget_3') == 1 || $this->request->getPost('alokasi_budget_3') == 2)$score += 0;
        if( $this->request->getPost('harga_iconnet') == 3 || $this->request->getPost('harga_iconnet') == 4 || $this->request->getPost('harga_iconnet') == 5)$score += 5;
        if( $this->request->getPost('harga_iconnet') == 1 || $this->request->getPost('harga_iconnet') == 2)$score += 0;
        if( $this->request->getPost('harga_iconnet_2') == 3 || $this->request->getPost('harga_iconnet_2') == 4 || $this->request->getPost('harga_iconnet_2') == 5)$score += 5;
        if( $this->request->getPost('harga_iconnet_2') == 1 || $this->request->getPost('harga_iconnet_2') == 2)$score += 0;
        if( $this->request->getPost('harga_iconnet_3') == 3 || $this->request->getPost('harga_iconnet_3') == 4 || $this->request->getPost('harga_iconnet_3') == 5)$score += 5;
        if( $this->request->getPost('harga_iconnet_3') == 1 || $this->request->getPost('harga_iconnet_3') == 2)$score += 0;
        if( $this->request->getPost('sampling_minat') == 1)$score += 10;
        if( $this->request->getPost('sampling_minat') == 2)$score += 5;
        if( $this->request->getPost('sampling_minat') == 3)$score += 0;
        if( $this->request->getPost('sampling_minat_2') == 1)$score += 10;
        if( $this->request->getPost('sampling_minat_2') == 2)$score += 5;
        if( $this->request->getPost('sampling_minat_2') == 3)$score += 0;
        if( $this->request->getPost('sampling_minat_3') == 1 )$score += 10;
        if( $this->request->getPost('sampling_minat_3') == 2)$score += 5;
        if( $this->request->getPost('sampling_minat_3') == 3)$score += 0;
        if( $this->request->getPost('internet_bisnis') == 1)$score += 5;
        if( $this->request->getPost('internet_bisnis') == 0)$score += 0;
        
    
        if($score >= 80){
            $kelayakan = 1;
        }else{
            $kelayakan = 0;
        }
            $id = $this->request->getPost("edit_id");
            $data = [
                'tipe_project'          => $this->request->getPost('tipe_project'),
                'nama_cluster'          => $this->request->getPost('nama_cluster'),
                'tipe_cluster'          => $this->request->getPost('tipe_cluster'),
                'kelurahan'             => $this->request->getPost('desa'),
                'olt'                   => $this->request->getPost('olt'),
                'longi_lati'            => $this->request->getPost('longi_lati'),
                'perizinan'             => $this->request->getPost('izin'),
                'kompetitor'            => $this->request->getPost('kompetitor'),
                'lokal_operator'        => $this->request->getPost('lokal_operator'),
                'tiang_listrik'         => $this->request->getPost('tiang_listrik'),
                'jumlah_rumah'          => $this->request->getPost('jumlah_rumah'),
                'rumah_kosong'          => $this->request->getPost('rumah_kosong'),
                'fasil_umum'            => $this->request->getPost('fasil_umum'),
                'rata_daya'             => $this->request->getPost('rata_daya'),
                'anak_kecil'            => $this->request->getPost('anak_kecil'),
                'kendaraan'             => $this->request->getPost('kendaraan'),
                'ac'                    => $this->request->getPost('ac'),
                'internet_bisnis'       => $this->request->getPost('internet_bisnis'),
                'jumlah_peminat'        => $this->request->getPost('jumlah_peminat'),
                'harga_iconnet'         => $this->request->getPost('harga_iconnet'),
                'penggunaan_internet'   => $this->request->getPost('penggunaan_internet'),
                'jml_perangkat'         => $this->request->getPost('jml_perangkat'),
                'alokasi_budget'        => $this->request->getPost('alokasi_budget'),
                'sampling_minat'        => $this->request->getPost('sampling_minat'),
                'harga_iconnet_2'       => $this->request->getPost('harga_iconnet_2'),
                'penggunaan_internet_2' => $this->request->getPost('penggunaan_internet_2'),
                'jml_perangkat_2'       => $this->request->getPost('jml_perangkat_2'),
                'alokasi_budget_2'      => $this->request->getPost('alokasi_budget_2'),
                'sampling_minat_2'      => $this->request->getPost('sampling_minat_2'),
                'harga_iconnet_3'       => $this->request->getPost('harga_iconnet_3'),
                'penggunaan_internet_3' => $this->request->getPost('penggunaan_internet_3'),
                'jml_perangkat_3'       => $this->request->getPost('jml_perangkat_3'),
                'alokasi_budget_3'      => $this->request->getPost('alokasi_budget_3'),
                'sampling_minat_3'      => $this->request->getPost('sampling_minat_3'),             
                'jumlah_fat'            => $this->request->getPost('jumlah_fat'),
                'daftar_fat'            => $this->request->getPost('daftar_fat'),
                'ket'                   => $this->request->getPost('ket'),
                'nilai_roi'             => $this->request->getPost('nilai_roi'),
                'score'                 => $score,
                'kelayakan'             => $kelayakan,
                'status_drawing'        => $this->request->getPost('status_drawing'),
                'maps'                  => $this->request->getPost('maps'),
                'jml_fat_ploating'      => $this->request->getPost('jml_fat_ploating'),
                'home_pass'             => $this->request->getPost('home_pass'),
                'approval'              => $this->request->getPost('approval'),
                'no_pa'                 => $this->request->getPost('no_pa'),
                'status_pembangunan'    => $this->request->getPost('status_pembangunan'),
                'plan_pembangunan'      => $this->request->getPost('plan_pembangunan')

            ];
            $update = $model->update($id, $data);

            if ($update) {
                $output = ['status' => 'Data berhasil diupdate'];
                return $this->response->setJSON($output);
            } else {
                $output = ['status' => 'Data gagal diupdate'];
                return $this->response->setJSON($output);
            }
    }


    //----------------------- Import csv -----------------------//
    public function importData()
    {
        $session = session();
        //$user_id['user_id'] = $session->get('user_id');
        $user_id = $_SESSION['user_id'];

        if ($this->request->getMethod() == "post") {

            $file = $this->request->getFile("file");
            $file_name = $file->getTempName();
            $datas = array();
            $csv_data = array_map('str_getcsv', file($file_name));

            if (count($csv_data) > 0) {

                $index = 0;

                foreach ($csv_data as $data) {
                    if ($index > 0) {
                        $datas[] = array(
                            "tipe_project"          => $data[2],
                            "nama_cluster"          => $data[3],
                            "tipe_cluster"          => $data[4],
                            "kelurahan"             => $data[5],
                            "olt"                   => $data[6],
                            "longi_lati"            => $data[7],
                            "perizinan"             => $data[8],
                            "kompetitor"            => $data[9],
                            "lokal_operator"        => $data[10],
                            "tiang_listrik"         => $data[11],
                            "jumlah_rumah"          => $data[12],
                            "rumah_kosong"          => $data[13],
                            "fasil_umum"            => $data[14],
                            "rata_daya"             => $data[15],
                            "anak_kecil"            => $data[16],
                            "kendaraan"             => $data[17],
                            "ac"                    => $data[18],
                            "internet_bisnis"       => $data[19],
                            "jumlah_peminat"        => $data[20],
                            "harga_iconnet"         => $data[21],
                            "penggunaan_internet"   => $data[22],
                            "jml_perangkat"         => $data[23],
                            "alokasi_budget"        => $data[24],
                            "sampling_minat"        => $data[25],
                            "harga_iconnet_2"       => $data[26],
                            "penggunaan_internet_2" => $data[27],
                            "jml_perangkat_2"       => $data[28],
                            "alokasi_budget_2"      => $data[29],
                            "sampling_minat_2"      => $data[30],
                            "harga_iconnet_3"       => $data[31],
                            "penggunaan_internet_3" => $data[32],
                            "jml_perangkat_3"       => $data[33],
                            "alokasi_budget_3"      => $data[34],
                            "sampling_minat_3"      => $data[35],
                            "jumlah_fat"            => $data[36],
                            "daftar_fat"            => $data[37],
                            "ket"                   => $data[38],
                            "nilai_roi"             => $data[39],
                            "score"                 => $data[40],
                            "kelayakan"             => $data[41],
                            "status_drawing"        => $data[42],
                            "maps"                  => $data[43],
                            "jml_fat_ploating"      => $data[44],
                            "home_pass"             => $data[45],
                            "approval"              => $data[46],
                            "no_pa"                 => $data[47],
                            "status_pembangunan"    => $data[48],
                            "plan_pembangunan"      => $data[49],
                            "user_id"               => $user_id,
                        );
                    }
                    $index++;
                }

                $builder = $this->db->table('data');
                $builder->insertBatch($datas);
                $session = session();
                $session->setFlashdata("success", "Data saved successfully");
                return redirect()->to(base_url('/data'));
            }
        }
    return redirect()->route('/data');    }
}
