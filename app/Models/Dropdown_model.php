<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class Dropdown_model extends Model{
    // protected $table = 'wilayah_2022';
    // protected $allowedFields = ['kode', 'nama'];
    public function __construct() {
        parent::__construct();
        $db = \Config\Database::connect();
    }
    public function getarea() {
        $sql = 'SELECT * FROM area';
        $query =  $this->db->query($sql);
         
        return $query->getResult();
    }
    public function getkota($postData) {
        $sql = 'SELECT * FROM regencies where area_id ='.$postData['area'] ;
        $query =  $this->db->query($sql);
         
        return $query->getResult();
    }    

    public function getkecamatan($postData) {
        $sql = 'SELECT * FROM districts where regency_id ='.$postData['kota'] ;
        $query =  $this->db->query($sql);
         
        return $query->getResult();
    }   
    
    public function getdesa($postData) {
        $sql = 'SELECT * FROM villages where district_id ='.$postData['kec'] ;
        $query =  $this->db->query($sql);
         
        return $query->getResult();
    }   

    public function getdaya() {
        $sql = 'SELECT * FROM rata_daya' ;
        $query =  $this->db->query($sql);
         
        return $query->getResult();
    }

    public function getolt() {
        $sql = 'SELECT * FROM olt' ;
        $query =  $this->db->query($sql);
         
        return $query->getResult();
    }

    public function get_tipe_project() {
        $sql = 'SELECT * FROM tipe_project' ;
        $query =  $this->db->query($sql);
         
        return $query->getResult();
    }

    public function get_tipe_cluster() {
        $sql = 'SELECT * FROM tipe_cluster' ;
        $query =  $this->db->query($sql);
         
        return $query->getResult();
    }

    public function get_survey_harga() {
        $sql = 'SELECT * FROM survey_harga';
        $query =  $this->db->query($sql);
         
        return $query->getResult();
    }

    public function get_survey_net() {
        $sql = 'SELECT * FROM survey_net';
        $query =  $this->db->query($sql);
         
        return $query->getResult();
    }

    public function get_survey_budget() {
        $sql = 'SELECT * FROM survey_budget';
        $query =  $this->db->query($sql);
         
        return $query->getResult();
    }

    public function get_survey_minat() {
        $sql = 'SELECT * FROM survey_minat';
        $query =  $this->db->query($sql);
         
        return $query->getResult();
    }

    public function get_status_drawing() {
        $sql = 'SELECT * FROM status_drawing';
        $query =  $this->db->query($sql);
         
        return $query->getResult();
    }

    public function get_status_pembangunan() {
        $sql = 'SELECT * FROM status_pembangunan';
        $query =  $this->db->query($sql);
         
        return $query->getResult();
    }
}