<?php

namespace App\Models;

use CodeIgniter\Model;

class kemampuan extends Model
{
    protected $table = "identitas_pribadi";
    protected $primaryKey = "No_Urut";
    protected $allowedFields = ['ID_Kemampuan','Dapat_Baca_Huruf'];
    protected $useAutoIncrement = true;
    protected $useTimestamps = false;
    
    public function getkemampuan(){
        $session = session();
        $data = $session->get('KTP');
        return $this->db->table('data_keluarga')
        ->where('KTP',['KTP'=> $data])
        ->get()->getResultArray();
    }

    // code tabel agama menggunakan enum
    public function getdapatbacahuruf(){
        return $this->db->table('Dapat_Baca_Huruf')
        ->get()->getResultArray();
    }
}