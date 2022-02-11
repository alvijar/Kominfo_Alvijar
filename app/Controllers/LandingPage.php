<?php

namespace App\Controllers;

use App\Models\Data_Keluarga;
use App\Models\Data_Pribadi;
use App\Models\Kemampuan;
use CodeIgniter\Exceptions\PageNotFoundException;

class LandingPage extends BaseController
{
    public function index()
    {
        $datapribadi = new Data_Pribadi();
        $data['identitas_p'] = $datapribadi->findAll();

        $datakeluarga = new Data_Keluarga();
        $data['data_k'] = $datakeluarga->findAll();
        
        $kemampuan = new Kemampuan();
        $data['kemampuan_'] = $kemampuan->findAll();

        echo view('landingpage', $data);
    }
    // READ DATA
    public function tampil_datapribadi($id){
        $datapribadi = new Data_Pribadi();
        $data['identitas_pribadi'] = $datapribadi->where('No_Urut', $id)->first();
       
        if(!$datapribadi['identitas_pribadi']){
            throw PageNotFoundException::forPageNotFound();
        }
        echo view('landingpage',$data);
    }
    public function tampil_datakeluarga($id){
        $datakeluarga = new Data_Keluarga();
        $data['data_keluarga'] = $datakeluarga->where('KTP', $id)->first();
        
        if(!$datakeluarga['KTP']){
            throw PageNotFoundException::forPageNotFound();
        }
        echo view('landingpage',$data);
    }
    public function tampil_kemampuan($id){
        $kemampuan = new Kemampuan();
        $data['kemampuan'] = $kemampuan->where('ID_Kemampuan', $id)->first();
		
        if(!$kemampuan['ID_Kemampuan']){
            throw PageNotFoundException::forPageNotFound();
        }
        echo view('landingpage',$data);
    }

    // CREATE DATA
    public function tambah_datapribadi()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(['title' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if($isDataValid){
            $news = new Data_Pribadi();
            $news->insert([
                "Nama_Lengkap" => $this->request->getPost('Nama_Lengkap'),
                "Status_Kawin" => $this->request->getPost('Status_Kawin'),
                "Agama" => $this->request->getPost('Agama'),
                "Tempat" => $this->request->getPost('Tempat'),
                "Tgl_Lahir" => $this->request->getPost('Tgl_Lahir'),
                "J_Kelamin" => $this->request->getPost('J_Kelamin'),
                "Kewarganegaraan" => $this->request->getPost('Kewarganegaraan'),
                "Pendidikan_Terakhir" => $this->request->getPost('Pendidikan_Terakhir'),
                "KTP" => $this->request->getPost('KTP'),
                "ID_Kemampuan" => $this->request->getPost('ID_Kemampuan'),
                "Agama" => $this->request->getPost('Agama')
            ]);
            return redirect('landingpage');
        }
		
        // tampilkan form create
        echo view('admin_create_news');
    }
}
