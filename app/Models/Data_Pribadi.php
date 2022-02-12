<?php

namespace App\Models;

use CodeIgniter\Model;

class Data_Pribadi extends Model
{
    protected $table = "identitas_pribadi";
    protected $primaryKey = "No_Urut";
    protected $allowedFields = ['No_Urut','Nama_Lengkap',
    'Status_Kawin','Agama','Tempat','Tgl_Lahir','J_Kelamin','Kewarganegaraan',
    'Pendidikan_Terakhir','KTP','ID_Kemampuan'];
    protected $useAutoIncrement = true;
    protected $useTimestamps = false;
    
    public function getdatapribadi(){
        $session = session();
        $data = $session->get('No_Urut');
        return $this->db->table('identitas_pribadi')
        ->where('No_Urut',['No_Urut'=> $data])
        ->get()->getResultArray();
    }
    // public function getalamat(){
    //     return $this->db->table('data_keluarga')
    //     ->get()->getResultArray();
    // }
    // public function getkemampuan(){
    //     return $this->db->table('kemampuan')
    //     ->get()->getResultArray();
    // }
}