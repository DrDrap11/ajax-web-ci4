<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class Olt_model extends Model
{
    protected $table = 'olt';
    protected $primaryKey = 'olt_id';
    protected $allowedFields = ['olt_id', 'olt_nama'];
 
    protected $useSoftDeletes   = TRUE;
    protected $dateFormat       = 'datetime';
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';
    protected $deletedField     = 'deleted_at';

    public function getOlt($id)
    {
        
        $builder = $this->db->table($this->table);
        
        $query = $builder->getWhere(['olt_id' => $id]);
        return $query->getRow();
    }

}