<?php

namespace App\Models;

use CodeIgniter\Model;

class Data_Keluarga extends Model
{
    protected $table = "data_keluarga";
    protected $primaryKey = "KTP";
    protected $allowedFields = ['KTP','Kartu_Keluarga','Alamat','ID_Kemampuan'];
    protected $useAutoIncrement = false;
    protected $useTimestamps = false;
    
    public function getdatakeluarga(){
        return $this->db->table('data_keluarga')
        ->get()->getResultArray();
    }

}