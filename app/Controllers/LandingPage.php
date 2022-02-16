<?php

namespace App\Controllers;

use App\Models\Data_Keluarga;
use App\Models\Data_Pribadi;
use App\Models\Kemampuan;
use CodeIgniter\Exceptions\PageNotFoundException;

class LandingPage extends BaseController
{
    public function __construct()
    {
        //membuat user model untuk konek ke database 
        $this->datapribadi = new Data_Pribadi();
    }
    public function index()
    {
        $model = new Data_Pribadi();
        $data['identitas_p'] = $model->getdatapribadi();
        
        return view('landingpage', $data);
    }
    public function membuat(){
        $model = new Data_Keluarga();
        $data['data_k'] = $model->getdatakeluarga();
        
        return view('landingpage',$data);
    }
    public function tampil_kemampuan($id){
        $kemampuan = new Kemampuan();
        $data['kemampuan_'] = $kemampuan->where('ID_Kemampuan', $id)->first();
		
        if(!$kemampuan['ID_Kemampuan']){
            throw PageNotFoundException::forPageNotFound();
        }
        echo view('landingpage',$data);
    }

    // CREATE DATA
    public function tambah_datapribadi()
    {
       //ambil data dari form post membuat
       $data = $this->request->getPost();
       //var_dump($data);
       //ambil data penduduk di database yang nik sama 
       $identitas_p = $this->Data_Pribadi->where('No_Urut', $data['No_Urut'])->first();
       if($identitas_p){
           //jika nik sudah terdaftar
           session()->setFlashdata('info', '<div class="alert alert-danger text-center">NIK sudah terpakai!</div>');
           return redirect()->to('Create');
       }else{
               //masukan data ke tabel penduduk
               $this->Data_Pribadi->save([
                   'No_Urut' => $data['No_Urut'],
                   'Nama_Lengkap' => $data['Nama_Lengkap'],
                   'Status_Kawin' => $data['Status_Kawin'],
                   'Agama' => $data['Agama'],
                   'Tempat' => $data['Tempat'],
                   'Tgl_Lahir' => $data['Tgl_Lahir'],
                   'J_Kelamin' => $data['J_Kelamin'],
                   'Kewarganegaraan' => $data['Kewarganegaraan'],
                   'Pendidikan_Terakhir' => $data['Pendidikan_Terakhir'],
                   'KTP' => $data['KTP'],
                   'ID_Kemampuan' => $data['ID_Kemampuan']    
               ]);
               //masukan data ke keluarga
               $this->Data_Keluarga = new Data_Keluarga();
               $this->Data_Keluarga->save([
                   'KTP' => $data['KTP'],
                   'Kartu_Keluarga' => $data['Kartu_Keluarga'],
                   'Alamat' => $data['Alamat']
               ]);
               //masukan data ke kemampuan
               $this->Kemampuan = new Kemampuan();
               $this->Kemampuan->save([
                   'ID_Kemampuan' => $data['ID_Kemampuan'],
                   'Dapat_Baca_Huruf' => $data['Dapat_Baca_Huruf']
               ]);
               
           } 
    //    //arahkan ke halaman lread
    //    session()->setFlashdata('info', 'Anda Berhasil Memasukan Data, Silahkan Cek!');
    //    return redirect()->to('Read');
    }
}
