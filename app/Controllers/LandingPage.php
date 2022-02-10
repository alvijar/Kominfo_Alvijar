<?php

namespace App\Controllers;

use App\Models\dataKeluarga;
use App\Models\dataPribadi;
use App\Models\kemampuan;

class LandingPage extends BaseController
{
    public function index()
    {
        return view('landingpage');
        $model = new dataPribadi();
        $model = new dataKeluarga();
        $model = new kemampuan();
        $data['identitas_pribadi'] = $model->getdatapribadi();
        $data['data_keluarga'] = $model->getdatakeluarga();
        $data['kemampuan'] = $model->getkemampuan();
		return view('landingpage',$data);
    }
}
