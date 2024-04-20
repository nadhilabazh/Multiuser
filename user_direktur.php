<?php
include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!---------------------------------------------------------------BOOTSTRAP----------------------------------------------------------->
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
     <title>Tabel Admin User</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
<!---------------------------------------------------------------BOOTSTRAP----------------------------------------------------------->

</head>
<style>
	 * {
     font-family: sans-serif;
   }
body {
  background-image: url("images/bgg.jpg");
  background-size: cover;
}
</style>
<body>
     <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #605ca8">
      <div class="container-fluid">
      <a class="navbar-brand" href="#">DIREKTUR</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="hal_direktur.php">Lihat Data Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="user_direktur.php">Lihat Data User</a>
      </li>
        <li class="nav-item">
          <a class="nav-link active" style="margin-left:900px; " aria-current="page" href="keluar.php">Keluar</a>
        </li>
      </ul>
      </div>
    </nav>



        <div class="page-wrapper p-t-45 p-b-50">
        <section class="page-section portfolio" id="input-data">
          <div class="container"><br><br><br>
            <h2 class="page-section-heading text-center text-uppercase mt-4 mb-4">Data USER</h2><br>
           <center> <form class="d-flex col-md-4 mt-4 mb-3" action="user_direktur.php" method="get">
                <input class="form-control me-2" type="text" autofocus placeholder="Cari Data User" autocomplete="off" name="cari">
                <input class="btn btn-secondary" style="background-color: #486e86" type="submit" value="Search"></button>
              </form></center>
              <br>
			<div class="mt-4 mb-2">
             
    <?php 
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
      } ?>
            </div>

                <div class="table-responsive">
                  <table class="table table-striped table-hover table-sm table-light">
                    <thead class="thead table-dark" style="background-color: #486e86;">
                      <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col">Pilihan Aksi</th>
                        <th scope="col">Username</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Level</th>
                      </tr>
                    </thead>

                    <?php
                    if(isset($_GET['cari'])){
                      $cari = $_GET['cari'];
                      $q_tampil_mhs = mysqli_query($conn, "SELECT * FROM user WHERE 
                      	username LIKE '%$cari%' OR
                      	nama LIKE '%$cari%' OR
                        email LIKE '%$cari%' OR
                        level LIKE '%$cari%' ");
                    }
                    else{
                      $q_tampil_mhs = mysqli_query($conn, "SELECT * FROM user ORDER BY user_id ASC");
                    }
                      
                      $nomor=1;
                      while($r_tampil_mhs=mysqli_fetch_array($q_tampil_mhs)){
                      ?>

                      <tr>
                        <td><?php echo $nomor++; ?></td>
                         <td class="text-center">
                          <div class="tombol-opsi-container"><a href="detail_user_direktur.php?user_id=<?php echo $r_tampil_mhs['user_id'];?>" class="btn btn-info" >Detail</a>
                            </div>
                        </td>
                        <td><?php echo $r_tampil_mhs['username']; ?></td>
                        <td><?php echo $r_tampil_mhs['nama']; ?></td>
                        <td><?php echo $r_tampil_mhs['level']; ?></td>
                      </tr>
                      <?php } ?>
  </table>
  <br><br><br>

</div>
</div>
</section>
<br>
<br>
<footer class="text-center text-lg-start" style="background-color: #605ca8">
  <!-- Copyright -->
  <div class="text-center p-3" style="color:white;">
    © 2021 Copyright Nadhila Bazhlina
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>