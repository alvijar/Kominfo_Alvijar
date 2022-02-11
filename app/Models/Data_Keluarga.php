<?php

namespace App\Models;

use CodeIgniter\Model;

class Data_Keluarga extends Model
{
    protected $table = "data_keluarga";
    protected $primaryKey = "KTP";
    protected $allowedFields = ['KTP','Kartu_Keluarga','Alamat'];
    protected $useAutoIncrement = true;
    protected $useTimestamps = false;
    
    public function getdatakeluarga(){
        $session = session();
        $data = $session->get('KTP');
        return $this->db->table('data_keluarga')
        ->where('KTP',['KTP'=> $data])
        ->get()->getResultArray();
    }
}