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
        return $this->db->table('identitas_pribadi')
        ->join('data_keluarga','data_keluarga.KTP=identitas_pribadi.No_Urut')
        ->join('kemampuan','kemampuan.ID_Kemampuan=identitas_pribadi.No_Urut')
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