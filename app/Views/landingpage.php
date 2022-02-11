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
    <table>
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
      <tbody>
          <td>1</td>
          <td>Alvijar</td>
          <td>Segera</td>
          <td>Islam</td>
          <td>Bandar Lampung</td>
          <td>11-03-1998</td>
          <td>Laki-laki</td>
          <td>Indonesia</td>
          <td>S1-Teknik Informatika</td>
          <td>Prasanti 2, B9 No.6 Sukarame Baru, Sukarame, Bandar Lampung, Lampung</td>
          <td>Bisa lah!</td>
      </tbody>
      
    </table>
    <div class="form-style-10">
        <h2>Daftar Untuk Mengisi Tabel Kependudukan.</h2>
        <form a method="post" action="">
          <div class="">
            <input class="" name="nama" type="text" placeholder="Nama Lengkap" required>
          </div>
          <div class="">
            <input class="" name="status_kawin" type="text" placeholder="Status Kawin" required>
          </div>
          <div class="">
            <select class="form-select" name="agama" id="agama" required>
              <option value="" disabled selected>Pilih Agama Anda</option>
                
            </select>
          </div>
          <div class="">
              <label class="" for="inputDate">Tempat & Tanggal Lahir</label>
            <input class="" name="tmp_lahir" type="text" placeholder="Tempat" required>
            <input class="" name="tgl_lahir" type="date" required>
          </div>
          <button class="" type="submit">Daftar</button>
        </form>
      </div>
  </body>
</html>