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
        
        <?php foreach($penduduk as $data) :?>
        <tr id="<?php echo $data['No_Urut']?>">
          <td><?php echo $data['No_Urut'] ?></td>
          <td><?php echo $data['Nama_Lengkap'] ?></td>
          <td><?php echo $data['Status_Kawin'] ?></td>
          <td><?php echo $data['Agama'] ?></td>
          <td><?php echo $data['Tempat'] ?></td>
          <td><?php echo $data['Tgl_Lahir'] ?></td>
          <td><?php echo $data['J_Kelamin'] ?></td>
          <td><?php echo $data['Kewarganegaraan'] ?></td>
          <td><?php echo $data['Pendidikan_Terakhir'] ?></td>
          <td><?php echo $data['KTP'] ?></td>
          <td><?php echo $data['Kartu_Keluarga'] ?></td>
          <td><?php echo $data['Alamat'] ?></td>
          <td><?php echo $data['ID_Kemampuan'] ?></td>
          <td><?php echo $data['Dapat_Baca_Huruf'] ?></td>
          <td>
            <?php echo anchor($data['No_Urut'],'Edit'); ?>
            <?php echo anchor($data['No_Urut'],'Hapus'); ?></td>
        </tr>
        <?php endforeach ?>
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
      <input class="" name="Alamat" type="text" placeholder="Alamat" required>
      <select class="form-select" name="ID_Kemampuan" id="id_kemampuan" required>
        <option value="" disabled selected>--Dapat Membaca Huruf ?-- </option>
        <option value="Dapat">Dapat</option>
        <option value="Tidak">Tidak</option>
      </select>
      <a href="<?php base_url(); ?>/landingpage">
        <input type="submit" value="Tambah Data">
      </a>
    </div>
  </body>
</html>