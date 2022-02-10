<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="/public/style.css">
    <title>Ini Landing Page</title>
</head>
<body>
<div class="table">
      <center>
      <div class="h6">
        <h6>Ini Tampilan Tabel Penduduk</h6>
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
            <th rowspan="2">Kartu Keluarga</th>
            <th rowspan="2">ID Kemampuan</th>
        </tr>
        <tr>
            
        </tr>
        <tr>
            
        </tr>
        <tr>
            
        </tr>
        <tr>
            
        </tr>
    </table>
    <div>
          <h6 class="">Daftar Untuk Mengisi Tabel Kependudukan.</h6>
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
                  <?php foreach ($agama as $p) {?>
                    <option id="<?php echo $p["nama_agama"]; ?>" value="<?php echo $p["nama_agama"]; ?>">
                    <?php echo $p["nama_agama"]; ?>
                    </option>
                  <?php } ?>
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