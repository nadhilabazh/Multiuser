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
    <title>Tugas Data User</title>

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
     <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color:#605ca8">
      <div class="container-fluid">
      <a class="navbar-brand" href="#">ADMIN</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="hal_admin.php">Lihat Data Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="user_admin.php">Lihat Data User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="tambah_mhs_admin.php">Input Data Mahasiswa</a>
      </li>
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="tambah_user_admin.php">Input Data User</a>
      </li>
        <li class="nav-item">
          <a class="nav-link active" style="margin-left:710px; " aria-current="page" href="keluar.php">Keluar</a>
        </li>
      </ul>
      </div>
    </nav>




        <div class="page-wrapper p-t-45 p-b-50">
        <section class="page-section portfolio" id="input-data">
          <div class="container"><br><br><br><br><br><br>

                    <div class="col-md-11 text-justify">
                      <table class="table table-borderless">
                        <form action="proses_tambah_user_admin.php" method="POST" enctype="multipart/form-data">
                            <tr>
                                <td>Username</td>
                                <td><input type="text" name="username" class="form-control" placeholder="Masukkan Username "></td>
                            </tr>
                            <tr>
                                <td>Nama</div></td>
                                <td><input type="text" name="nama" class="form-control" placeholder="Masukkan Nama "></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                    <input type="text" name="email" class="form-control" placeholder="ex : m.fajri458@gmail.com"></td>
                            </tr>
                            
                            <tr>
                                <td>Password</div></td>
                                <td><input type="password" name="password" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Level</td>
                                <td><select name="level" class="form-select" multiple aria-label="level">
                                    <option>Admin</option>
                                    <option>Operator</option>
                                    <option>Direktur</option>
                                </select></td>
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
