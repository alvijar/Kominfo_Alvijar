<?php

namespace App\Controllers;

use App\Models\Data_Keluarga;
use App\Models\Data_Pribadi;
use App\Models\Kemampuan;

class LandingPage extends BaseController
{
    public function index()
    {
        return view('landingpage');
        $model = new Data_Pribadi();
        $model = new Data_Keluarga();
        $model = new Kemampuan();
        $data['identitas_pribadi'] = $model->getdatapribadi();
        $data['data_keluarga'] = $model->getdatakeluarga();
        $data['kemampuan'] = $model->getkemampuan();
		return view('landingpage',$data);
    }
}
