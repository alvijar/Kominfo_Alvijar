<?php

namespace App\Models;

use CodeIgniter\Model;

class dataPribadi extends Model
{
    protected $table = "identitas_pribadi";
    protected $primaryKey = "No_Urut";

    protected $useAutoIncrement = true;
    protected $useTimestamps = false;
    
    public function getdatapribadi(){
        $allowedFields = ['No_Urut','Nama_Lengkap','Status_Kawin','Agama','Tempat','Tgl_Lahir','J_Kelamin','Kewarganegaraan','Pendidikan_Terakhir','Kartu_Keluarga','ID_Kemampuan'];
    }
}