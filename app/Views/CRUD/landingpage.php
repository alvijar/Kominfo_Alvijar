<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Data Kependudukan</title>
      <!-- CSS -->
      <link rel="stylesheet" href="<?php base_url(); ?>/assets/style.css">
  </head>
  <body>
    <center>
      <h1>Tabel Penduduk</h1>
    </center>
    <?php echo session()->getFlashdata('info'); ?>
    <table class="table">
      <thead>
        <tr>
            <th>No. Urut</th>
            <th>Nama Lengkap</th>
            <th>Status Kawin</th>
            <th>Agama</th>
            <th>Tempat</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Kewarganegaraan</th>
            <th>Pendidikan Terakhir</th>
            <th>KTP</th>
            <th>Kartu Keluarga</th>
            <th>Alamat</th>
            <th>ID Kemampuan</th>
            <th>Bisa Baca Huruf</th>
            <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $no = 1;
        foreach($identitas_pribadi as $d){
        ?>
        <tr id="<?php echo $d['No_Urut']?>">
          <td data-header="Nomor Urut"><?php echo $no++ ?></td>
          <td data-header="Nama Lengkap"><?php echo $d['Nama_Lengkap'] ?></td>
          <td data-header="Status Kawin"><?php echo $d['Status_Kawin'] ?></td>
          <td data-header="Agama"><?php echo $d['Agama'] ?></td>
          <td data-header="Tempat Lahir"><?php echo $d['Tempat'] ?></td>
          <td data-header="Tanggal Lahir"><?php echo $d['Tgl_Lahir'] ?></td>
          <td data-header="Jenis Kelamin"><?php echo $d['J_Kelamin'] ?></td>
          <td data-header="Kewarganegaraan"><?php echo $d['Kewarganegaraan'] ?></td>
          <td data-header="Pendidikan Terakhir"><?php echo $d['Pendidikan_Terakhir'] ?></td>
          <td data-header="No. KTP"><?php echo $d['KTP'] ?></td>
          <td data-header="No. Kartu Keluarga"><?php echo $d['Kartu_Keluarga'] ?></td>
          <td data-header="Alamat"><?php echo $d['Alamat'] ?></td>
          <td data-header="No. ID Kemampuan"><?php echo $d['ID_Kemampuan'] ?></td>
          <td data-header="Dapat Membaca Huruf"><?php echo $d['Dapat_Baca_Huruf'] ?></td>
          <td>
            <?php echo anchor('CRUD/landingpage/'.$d['No_Urut'],'Edit'); ?>
            <?php echo anchor('CRUD/landingpage/'.$d['No_Urut'],'Hapus'); ?>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>

    <h1>Daftar Untuk Mengisi Tabel Kependudukan.</h1>
    <?php echo session()->getFlashdata('info'); ?>
    <form role="form" method="POST" action="<?php base_url();?>/LandingPage/tambah_datapenduduk">
      <div class="form">
        <!-- <input class="" name="No_Urut" type="text" placeholder="No. Urut" required> -->
        <input class="" name="Nama_Lengkap" type="text" placeholder="Nama Lengkap" required>
        <input class="" name="Status_Kawin" type="text" placeholder="Status Kawin" required>
        <select class="form-select" name="Agama" required>
          <option value="" disabled selected>--Pilih Agama-- </option>
          <option value="Islam">Islam</option>
          <option value="Kristen">Kristen</option>
          <option value="Khatolik">Khatolik</option>
          <option value="Budha">Budha</option>
          <option value="Hindu">Hindu</option>
          <option value="Kong Hu Cu">Kong Hu Cu</option>
        </select>
        <input class="" name="Tempat" type="text" placeholder="Tempat Lahir" required>
        <input class="form-select" name="Tgl_Lahir" type="date" placeholder="Tanggal Lahir" required>
        <select class="form-select" name="J_Kelamin" required>
          <option value="" disabled selected>--Pilih Jenis Kelamin-- </option>
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
        <input class="" name="Kewarganegaraan" type="text" placeholder="Kewarganegaraan" required>
        <input class="" name="Pendidikan_Terakhir" type="text" placeholder="Pendidikan Terakhir" required>
        <input class="" name="KTP" type="text" placeholder="No. KTP" required>
        <input class="" name="Kartu_Keluarga" type="text" placeholder="No. Kartu Keluarga" required>
        <input class="" name="Alamat" type="text" placeholder="Alamat" required>
        <input class="" name="ID_Kemampuan" type="text" placeholder="ID. Kemampuan"required>
        <select class="form-select" name="Dapat_Baca_Huruf" required>
          <option value="" disabled selected>Dapat Membaca Huruf ? </option>
          <option value="Dapat">Dapat</option>
          <option value="Tidak">Tidak</option>
        </select>
        <input type="submit" value="Tambah Data">
      </div>
    </form>
    
    <!-- <?=print_r($identitas_pribadi)?> -->
  </body>
</html>