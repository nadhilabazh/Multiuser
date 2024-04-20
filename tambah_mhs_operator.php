<?php
include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Tambah Data Mahasiswa</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">

</head>
<style>
     
body {
  background-image: url("images/bgg.jpg");
  background-size: cover;
}
</style>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #605ca8">
      <div class="container-fluid">
      <a class="navbar-brand" href="#">OPERATOR</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="hal_operator.php">Lihat Data Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="tambah_mhs_operator.php">Input Data Mahasiswa</a>
      </li>
        <li class="nav-item">
          <a class="nav-link active" style="margin-left:900px; " aria-current="page" href="keluar.php">Keluar</a>
        </li>
      </ul>
      </div>
    </nav>



        <div class="page-wrapper p-t-45 p-b-50">
        <section class="page-section portfolio" id="input-data">
          <div class="container"><br><br><br><br><br><br>

                    <div class="col-md-11 text-justify">
                      <table class="table table-borderless">
                        <form action="proses_tambah_mhs_operator.php" method="POST" enctype="multipart/form-data">
                            <tr>
                                <td>NIM</td>
                                <td><input type="text" name="nim" class="form-control" placeholder="Masukkan NIM Mahasiswa"></td>
                            </tr>
                            <tr>
                                <td>Nama</div></td>
                                <td><input type="text" name="nama_mhs" class="form-control" placeholder="Masukkan Nama Mahasiswa"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                    <input type="email" name="email" class="form-control" placeholder="ex : m.fajri458@gmail.com"></td>
                            </tr>
                            <tr>
                                <td>Jurusan</td>
                                <td><select name="jurusan" class="form-select" multiple aria-label="jurusan">
                                  <option selected>Pilih Jurusan</option>
                                    <option>Teknik Sipil</option>
                                    <option>Teknik Mesin</option>
                                    <option>Teknik Elektro</option>
                                    <option>Teknik Kimia</option>
									 <option>Teknik Komputer</option>
                                    <option>Akuntansi</option>
                                    <option>Administrasi Bisnis</option>
                                    <option>Manajemen Informatika</option>
                                    <option>Bahasa Inggris</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</div></td>
                                <td><input type="date" name="tgl_lahir" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Tempat Lahir</td>
                                <td><input type="text" name="tempat_lahir" class="form-control" placeholder=""></td>
                            </tr>
                            <tr>
                                <td>No. Handphone</td>
                                <td><input type="text" name="no_hp" class="form-control" placeholder="ex : 08XX-XXXX-XXXX"></td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td><select name="agama" class="form-select form-select-lg mb-3" aria-label="agama">
                                  <option selected>Pilih Agama</option>
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Katolik</option>
                                    <option>Hindu</option>
                                    <option>Buddha</option>
                                    <option>Konghucu</option>
                                    <option>Atheis</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</div></td>
                                <td><div class="form-check">
                                  <input class="form-check-input" type="radio" name="jenis_kelamin" id="lakilaki" checked>
                                  <label class="form-check-label" for="lakilaki">
                                    Laki-Laki
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan">
                                  <label class="form-check-label" for="perempuan">
                                    Perempuan
                                  </label>
                                </div></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea></td>
                            </tr>
                            <tr>
                                <td>Foto</div></td>
                                <td><input class="input-file" type="file" name="foto" required="required"></td>
                            </tr>             
                        <tr>
                        <td><center>
                            <button class="btn" type="submit" style="background-color: #605ca8" name="input">Input</button>
                            <button class="btn btn-danger" type="reset" name="Batal">Batal</button>
                        <br><br>
                        </center></td></tr></form>
  </table>
</div>
</div>
</div>
<br><br><br><br><br><br>
</div>
</section>
<footer class="text-center text-lg-start" style="background-color: #605ca8">
  <!-- Copyright -->
  <div class="text-center p-3" style="color:white;">
    © 2021 Copyright Nadhila Bazhlina
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>
