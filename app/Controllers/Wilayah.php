<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\WilayahModel;

class Wilayah extends BaseController
{
    public function index() {
        $session = session();
        $uname['user_name'] = $session->get('user_name');

        // helper(['form', 'url']);
        $model = new WilayahModel();
        $data['prov'] = $model->getprovinsi();
        
        // var_dump($data);
        echo view('header', $uname);
        echo view('wilayah_view', $data);
        echo view('footer');
    }

    public function getKota() {
 
        $model = new WilayahModel();
 
        $postData = array(
            'prov' => $this->request->getPost('prov'),
        );
 
        $data = $model->getkota($postData);
        
        // var_dump($data);
        echo json_encode($data);
    }    

    public function getKecamatan() {
 
        $model = new WilayahModel();
 
        $postData = array(
            'kota' => $this->request->getPost('kota'),
        );
 
        $data = $model->getkecamatan($postData);
        
        // var_dump($data);
        echo json_encode($data);
    }    

    public function getDesa() {
 
        $model = new WilayahModel();
 
        $postData = array(
            'kec' => $this->request->getPost('kec'),
        );
 
        $data = $model->getdesa($postData);
        
        // var_dump($data);
        echo json_encode($data);
    }    

}
