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
        $model = new Data_Pribadi();
        $data['identitas_pribadi'] = $model->getdatapribadi();
        return view('CRUD/landingpage', $data);
    }
    
    // CREATE DATA
    public function tambah_datapenduduk()
    {
        //ambil data dari form input
        $data = $this->request->getPost();
        //var_dump($data);
        //ambil data penduduk di database yang no ktp sama 
        $identitas_pribadi = $this->datapribadi->where('KTP', $data['KTP'])->first();
        $kemampuan_ = $this->kemampuan->where('ID_Kemampuan', $data['ID_Kemampuan'])->first();
        if($identitas_pribadi){
            //jika no ktp sudah terdaftar
            session()->setFlashdata('info', '<div type="text">No. KTP sudah terpakai!</div>');
            return redirect()->to('CRUD/landingpage');
        }
        else if($kemampuan_){
            //jika id kemampuan sudah terdaftar
            session()->setFlashdata('infoIdKemampuan', '<div type="text">Id Kemampuan sudah terpakai!</div>');
            return redirect()->to('CRUD/landingpage');
        }
        else{
            //masukan data ke tabel identitas_pribadi
            $this->datapribadi->save([
                // 'No_Urut' => $data['No_Urut'],
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
                'KTP' => $data['KTP'],
                'Kartu_Keluarga' => $data['Kartu_Keluarga'],
                'Alamat' => $data['Alamat'],
                'ID_Kemampuan' => $data['ID_Kemampuan']
            ]);
            //masukan data ke kemampuan
            $this->kemampuan->save([
                'ID_Kemampuan' => $data['ID_Kemampuan'],
                'Dapat_Baca_Huruf' => $data['Dapat_Baca_Huruf'],
                'KTP' => $data['KTP']
            ]);
               
        } 

        //arahkan ke halaman landingpage
        session()->setFlashdata('infoBerhasil', 'Anda Berhasil Memasukan Data, Silahkan Cek!');
        return redirect()->to('CRUD/landingpage');
    }
    public function merombak($No_Urut)
	{
		var_dump($No_Urut);
	}
    public function menghapus($No_Urut)
	{
		
        $this->datapribadi = new Data_Pribadi();
        $this->datakeluarga = new Data_Keluarga();
        $this->kemampuan = new Kemampuan();
        // Memanggil function hapus
        $hapus = $this->datapribadi->deletedatapribadi($No_Urut);
        // $hapus = $this->datakeluarga->deletedatakeluarga($No_Urut);
        // $hapus = $this->kemampuan->deletekemampuan($No_Urut);


        // Jika berhasil melakukan hapus data pribadi
        if ($hapus) {
            // Deklarasikan session flashdata dengan tipe warning
            session()->setFlashdata('info', '<div class="alert alert-success text-center">Berhasil Menghapus Penduduk</div>');
            // Redirect ke halaman landingpage
            return redirect()->to('CRUD/landingpage');
        }
            
	}
}
