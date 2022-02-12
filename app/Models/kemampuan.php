<?php

namespace App\Models;

use CodeIgniter\Model;

class kemampuan extends Model
{
    protected $table = "kemampuan";
    protected $primaryKey = "ID_Kemampuan";
    protected $allowedFields = ['ID_Kemampuan','Dapat_Baca_Huruf'];
    protected $useAutoIncrement = true;
    protected $useTimestamps = false;
    
    public function getkemampuan(){
        $session = session();
        $data = $session->get('ID_Kemampuan');
        return $this->db->table('kemampuan')
        ->where('ID_Kemampuan',['ID_Kemampuan'=> $data])
        ->get()->getResultArray();
    }
}