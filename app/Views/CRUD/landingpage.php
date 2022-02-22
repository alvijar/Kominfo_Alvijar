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
    <table class="table">
    <?php echo session()->getFlashdata('info'); ?>
      <thead>
        <tr>
            <th rowspan="2">No. Urut</th>
            <th rowspan="2">Nama Lengkap</th>
            <th rowspan="2">Status Kawin</th>
            <th rowspan="2">Agama</th>
            <th rowspan="2">Tempat</th>
            <th rowspan="2">Tanggal Lahir</th>
            <th rowspan="2">Jenis Kelamin</th>
            <th rowspan="2">Kewarganegaraan</th>
            <th rowspan="2">Pendidikan Terakhir</th>
            <th rowspan="2">KTP</th>
            <th rowspan="2">Kartu Keluarga</th>
            <th rowspan="2">Alamat</th>
            <th rowspan="2">ID Kemampuan</th>
            <th rowspan="2">Bisa Baca Huruf</th>
            <th rowspan="2">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $no = 1;
        foreach($identitas_pribadi as $d){
        ?>
        <tr id="<?php echo $d['No_Urut']?>">
          <td data-header="Nomor Urut"><?php echo $no++ ?></td>
          <td data-header="Nomor Urut"><?php echo $d['Nama_Lengkap'] ?></td>
          <td data-header="Nomor Urut"><?php echo $d['Status_Kawin'] ?></td>
          <td data-header="Nomor Urut"><?php echo $d['Agama'] ?></td>
          <td data-header="Nomor Urut"><?php echo $d['Tempat'] ?></td>
          <td data-header="Nomor Urut"><?php echo $d['Tgl_Lahir'] ?></td>
          <td data-header="Nomor Urut"><?php echo $d['J_Kelamin'] ?></td>
          <td data-header="Nomor Urut"><?php echo $d['Kewarganegaraan'] ?></td>
          <td data-header="Nomor Urut"><?php echo $d['Pendidikan_Terakhir'] ?></td>
          <td data-header="Nomor Urut"><?php echo $d['KTP'] ?></td>
          <td data-header="Nomor Urut"><?php echo $d['ID_Kemampuan'] ?></td>
          <td>
            <?php echo anchor('CRUD/landingpage/'.$d['No_Urut'],'Edit'); ?>
            <?php echo anchor('CRUD/landingpage/'.$d['No_Urut'],'Hapus'); ?>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>

    <h1>Daftar Untuk Mengisi Tabel Kependudukan.</h1>
    <div class="form">
      <input class="" name="No_Urut" type="text" placeholder="No. Urut" required>
      <input class="" name="Nama_Lengkap" type="text" placeholder="Nama Lengkap" required>
      <input class="" name="Status_Kawin" type="text" placeholder="Status Kawin" required>
      <select class="form-select" name="Agama" id="agama" required>
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
      <select class="form-select" name="J_Kelamin" id="j_kelamin" required>
        <option value="" disabled selected>--Pilih Jenis Kelamin-- </option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
      <input class="" name="Kewarganegaraan" type="text" placeholder="Kewarganegaraan" required>
      <input class="" name="Pendidikan_Terakhir" type="text" placeholder="Pendidikan Terakhir" required>
      <input class="" name="KTP" type="text" placeholder="No. KTP" required>
      <input class="" name="Kartu_Keluarga" type="text" placeholder="No. Kartu Keluarga" required>
      <input class="" name="Alamat" type="text" placeholder="Alamat" required>
      <select class="form-select" name="Dapat_Baca_Huruf" id="id_kemampuan" required>
        <option value="" disabled selected>Dapat Membaca Huruf ? </option>
        <option value="Dapat">Dapat</option>
        <option value="Tidak">Tidak</option>
      </select>
      <a href="<?php base_url(); ?>/landingpage">
        <input type="submit" value="Tambah Data">
      </a>
    </div>
    <!-- <?=print_r($identitas_pribadi)?> -->
  </body>
</html>