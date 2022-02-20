<?php

namespace App\Controllers;

use App\Models\Data_Keluarga;
use App\Models\Data_Pribadi;
use App\Models\Kemampuan;

class LandingPage extends BaseController
{
    // construct Bisa memanggil lebih dari 1 model
    public function __construct()
    {
        //membuat data penduduk untuk konek ke database 
        $this->datapribadi = new Data_Pribadi();
        $this->datakeluarga = new Data_Keluarga();
        $this->kemampuan = new Kemampuan();
    }
    public function index()
    {
        $data['identitas_pribadi'] = $this->datapribadi->getdatapribadi();
        return view('CRUD/landingpage', $data);
    }
    public function membuatkemampuan(){
        $model = new Kemampuan();
        $data['kemampuan'] = $model->getkemampuan();
        
        return view('CRUD/landingpage',$data);
    }
    public function membuatktp(){
        $model = new Data_Keluarga();
        $data['data_keluarga'] = $model->getdatakeluarga();
        
        return view('CRUD/landingpage',$data);
    }
    public function membuatkartu_keluarga(){
        $model = new Data_Keluarga();
        $data['data_keluarga'] = $model->getdatakeluarga();
        
        return view('CRUD/landingpage',$data);
    }
    public function membuatalamat(){
        $model = new Data_Keluarga();
        $data['data_keluarga'] = $model->getdatakeluarga();
        
        return view('CRUD/landingpage',$data);
    }

    // CREATE DATA
    public function tambah_datapenduduk()
    {
       //ambil data dari form post membuat
       $data = $this->request->getPost();
       //var_dump($data);
       //ambil data penduduk di database yang nik sama 
       $identitas_pribadi = $this->datapribadi->where('No_Urut', $data['No_Urut'])->first();
       if($identitas_pribadi){
           //jika nik sudah terdaftar
           session()->setFlashdata('info', '<div class="alert alert-danger text-center">NIK sudah terpakai!</div>');
           return redirect()->to('CRUD/landingpage');
       }else{
               //masukan data ke tabel penduduk
               $this->datapribadi->save([
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
               $this->datakeluarga->save([
                   'No_Urut' => $data['No_Urut'],
                   'KTP' => $data['KTP'],
                   'Kartu_Keluarga' => $data['Kartu_Keluarga'],
                   'Alamat' => $data['Alamat']
               ]);
               //masukan data ke kemampuan
               $this->kemampuan->save([
                   'No_Urut' => $data['No_Urut'],
                   'ID_Kemampuan' => $data['ID_Kemampuan'],
                   'Dapat_Baca_Huruf' => $data['Dapat_Baca_Huruf']
               ]);
               
        } 

       //arahkan ke halaman landingpage
       session()->setFlashdata('info', 'Anda Berhasil Memasukan Data, Silahkan Cek!');
       return redirect()->to('CRUD/landingpage');
    }
    public function merombak($no_urut)
	{
		var_dump($no_urut);
	}
    public function menghapus($no_urut)
	{
		
        $this->datapribadi = new Data_Pribadi();
        $this->datakeluarga = new Data_Keluarga();
        $this->kemampuan = new Kemampuan();
        // Memanggil function hapus
        $hapus = $this->datapribadi->deletedatapribadi($no_urut);
        $hapus = $this->datakeluarga->deletedatakeluarga($no_urut);
        $hapus = $this->kemampuan->deletekemampuan($no_urut);


        // Jika berhasil melakukan hapus data pribadi
        if ($hapus) {
            // Deklarasikan session flashdata dengan tipe warning
            session()->setFlashdata('info', '<div class="alert alert-success text-center">Berhasil Menghapus Penduduk</div>');
            // Redirect ke halaman landingpage
            return redirect()->to('CRUD/landingpage');
        }
            
	}
}
