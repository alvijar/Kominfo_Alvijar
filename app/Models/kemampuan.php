<?php

namespace App\Models;

use CodeIgniter\Model;

class Kemampuan extends Model
{
    protected $table = "kemampuan";
    protected $primaryKey = "ID_Kemampuan";
    protected $allowedFields = ['Dapat_Baca_Huruf'];
    protected $useAutoIncrement = true;
    protected $useTimestamps = false;
    
    public function getkemampuan(){
        return $this->db->table('kemampuan')
        ->get()->getResultArray();
    }
    
}