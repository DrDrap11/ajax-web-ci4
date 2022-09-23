<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Olt_model;

class Olt extends Controller
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

        echo view('header', $uname);
        echo view('olt_view');
        echo view('footer');
    }

    public function addOlt()
    {
        $oltModel = new \App\Models\Olt_model();
        $db      = \Config\Database::connect();

        //Insert data into db

        $data = [
            'olt_nama'     => $this->request->getPost('olt_nama'),
        ];
        
        $query = $oltModel->insert($data);
        if ($query) {
            echo json_encode(['code' => 1, 'msg' => 'Data karyawan behasil ditambahkan']);
        } else {
            echo json_encode(['code' => 0, 'msg' => 'Data karyawan gagal ditambahkan']);
        }
        
    }

    public function getAllOlt()
    {
        //DB Details
        $dbDetails = array(
            "host" => $this->db->hostname,
            "user" => $this->db->username,
            "pass" => $this->db->password,
            "db" => $this->db->database,
        );

        // $table = "employees"; //langsung dr tabel employees
        $table = "olt";
        $primaryKey = "olt_id";

        $columns = array(
            array(
                "db" => "olt_id",
                "dt" => 0,
                "formatter" => function ($d, $row) {
                    return "<div class='btn-group'>
                                  <a class='btn btn-warning btn-edit kota' data-id='" . $row['olt_id'] . "' data-bs-toggle='modal' data-bs-target='#editModal' id='updateBtn' style='margin-right: 10px'><i class='ti ti-edit'></i></a>
                                  <button class='btn btn btn-danger' data-id='" . $row['olt_id'] . "' id='deleteOltBtn'> <i class='ti ti-trash'></i></button>
                             </div>";
                }
            ),
            array("db" => "olt_id",                     "dt" => 1),
            array("db" => "olt_nama",               "dt" => 2)
        );
        // $session = session();
        // $user_id = $_SESSION["user_id"];
        // $role = $_SESSION["role"];

        echo json_encode(
            \SSP::simple($_GET, $dbDetails, $table, $primaryKey, $columns, null, "deleted_at IS NULL")
        );
    }

    public function deleteOlt()
    {
        $dataModel = new \App\Models\Olt_model();
        $data_id = $this->request->getPost('id');
        $query = $dataModel->delete($data_id);

        if ($query) {
            echo json_encode(['code' => 1, 'msg' => 'Data behasil dihapus']);
        } else {
            echo json_encode(['code' => 0, 'msg' => 'Data gagal dihapus']);
        }
    }

    public function editOlt()
    {
        $model = new Olt_model();
        $id = $this->request->getPost("edit_id");

        $data['olt'] = $model->getOlt($id);
        // echo json_encode($data);
        // $data['employee'] = $model->getEmployee($id)->getResult();
        return $this->response->setJSON($data);
        // var_dump($data);
    }

    public function updateOlt()
    {
        $validation = \Config\Services::validation();
        $model = new Olt_model;

            $id = $this->request->getPost("edit_id");
            $data = [
                'olt_nama'          => $this->request->getPost('olt_nama'),
            ];

            $update = $model->update($id, $data);

            if ($update) {
                $output = ['status' => 'Data berhasil diupdate'];
                return $this->response->setJSON($output);
            } else {
                $output = ['status' => 'Data gagal diupdate'];
                return $this->response->setJSON($output);
            }
        // }
    }

}
