<?php

namespace App\Models;

use CodeIgniter\Model;

class Data_Pribadi extends Model
{
    protected $_table = "identitas_pribadi";
    protected $primaryKey = "No_Urut";
    protected $allowedFields = ['No_Urut','Nama_Lengkap','Status_Kawin','Agama','Tempat','Tgl_Lahir','J_Kelamin','Kewarganegaraan','Pendidikan_Terakhir','Kartu_Keluarga','ID_Kemampuan'];
    protected $useAutoIncrement = true;
    protected $useTimestamps = false;
    
    public function getdatapribadi(){
        $session = session();
        $data = $session->get('no_urut');
        return $this->db->table('identitas_pribadi')
        ->where('no_urut',['no_urut'=> $data])
        ->get()->getResultArray();
    }
    // code tabel agama menggunakan enum
    public function getagama(){
        return $this->db->table('agama')
        ->get()->getResultArray();
    }
    
}