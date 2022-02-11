<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Ini Landing Page</title>
      <!-- CSS -->
      <link rel="stylesheet" href="<?php base_url(); ?>/assets/style.css">
  </head>
  <body>
    <center>
    <div>
      <h1>Ini Tampilan Tabel Penduduk</h1>
    </div>
    </center>
    <table class="table">
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
            <th rowspan="2">Alamat</th>
            <th rowspan="2">Bisa Baca Huruf</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($identitas_p as $data): ?>
        <tr>
          <td><?= $data['No_Urut'] ?></td>
          <td><?= $data['Nama_Lengkap'] ?></td>
          <td><?= $data['Status_Kawin'] ?></td>
          <td><?= $data['Agama'] ?></td>
          <td><?= $data['Tempat'] ?></td>
          <td><?= $data['Tgl_Lahir'] ?></td>
          <td><?= $data['J_Kelamin'] ?></td>
          <td><?= $data['Kewarganegaraan'] ?></td>
          <td><?= $data['Pendidikan_Terakhir'] ?></td>
          <td><?= $data['KTP'] ?></td>
          <td><?= $data['ID_Kemampuan'] ?></td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
    <div class="form-style-10">
        <h2>Daftar Untuk Mengisi Tabel Kependudukan.</h2>
        <form a method="post" action="">
          <div class="">
            <input class="" name="Nama_Lengkap" type="text" placeholder="Nama Lengkap" required>
          </div>
          <div class="">
            <input class="" name="Status_Kawin" type="text" placeholder="Status Kawin" required>
          </div>
          <div class="">
            <select class="form-select" name="Agama" id="agama" required>
              <option value="" disabled selected>Pilih Agama Anda</option>
            </select>
          </div>
          <div class="">
              <label class="" for="inputDate">Tempat & Tanggal Lahir</label>
            <input class="" name="Tempat" type="text" placeholder="Tempat" required>
            <input class="" name="Tgl_Lahir" type="date" required>
          </div>
          <div class="">
            <select class="form-select" name="J_Kelamin" id="j_kelamin" required>
              <option value="" disabled selected>Pilih Jenis Kelamin</option>
            </select>
          </div>
          <div class="">
            <input class="" name="Kewarganegaraan" type="text" placeholder="Kewarganegaraan" required>
          </div>
          <div class="">
            <input class="" name="Pendidikan_Terakhir" type="text" placeholder="Pendidikan Terakhir" required>
          </div>
          <div class="">
            <input class="" name="KTP" type="text" placeholder="No. KTP" required>
          </div>
          <div class="">
            <select class="form-select" name="ID_Kemampuan" id="id_kemampuan" required>
              <option value="" disabled selected>Pilih </option>
            </select>
          </div>
          <button class="" type="submit">Daftar</button>
        </form>
      </div>
  </body>
</html>