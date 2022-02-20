<?php

namespace App\Models;

use CodeIgniter\Model;

class Data_Pribadi extends Model
{
    protected $table = "identitas_pribadi";
    protected $primaryKey = "No_Urut";
    protected $allowedFields = ['Nama_Lengkap',
    'Status_Kawin','Agama','Tempat','Tgl_Lahir','J_Kelamin','Kewarganegaraan',
    'Pendidikan_Terakhir','KTP','ID_Kemampuan'];
    protected $useAutoIncrement = true;
    protected $useTimestamps = false;
    
    public function getdatapribadi(){
        $builder = $this->db->table('identitas_pribadi');
        $builder->join('data_keluarga','data_keluarga.KTP=identitas_pribadi.KTP');
        $builder->join('kemampuan','kemampuan.ID_Kemampuan=identitas_pribadi.ID_Kemampuan');
        $query = $builder->get();
        return $query->getResult();
    }
}