<?php

namespace App\Models;

use CodeIgniter\Model;

class dataKeluarga extends Model
{
    protected $table = "identitas_pribadi";
    protected $primaryKey = "No_Urut";

    protected $useAutoIncrement = true;
    protected $useTimestamps = false;
    
    public function getdatakeluarga(){
        $allowedFields = ['No_Urut','Nama_Lengkap','Status_Kawin','Agama','Tempat','Tgl_Lahir','J_Kelamin','Kewarganegaraan','Pendidikan_Terakhir','Kartu_Keluarga','ID_Kemampuan'];
    }
}