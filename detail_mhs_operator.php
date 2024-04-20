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
   <title>Detail Data Mahasiswa</title>

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
        <section class="page-section portfolio" id="input-data" style="background-image:url(bg/bgg.jpg)">
          <div class="container"><br><br><br><br><br><br>
            <center><h3>Detail Data Mahasiswa </h3></center> <br><br><br>
                      <table class="table table-borderless">
                
        <?php
         $user_id=$_GET['user_id'];
         $q_tampil_mhs=mysqli_query($conn,"SELECT * FROM user WHERE user_id='$user_id'");
            while($r_tampil_mhs=mysqli_fetch_array($q_tampil_mhs)){
        ?>
                            <tr>
                                <td><?php echo 'Foto';?></td>
                                <td><?php echo ':';?></td>
                                <td><img src="images/<?php echo $r_tampil_mhs['foto'];?>" width="120px"></td>
                            </tr>
                            <tr>
                                <td><?php echo 'NIM';?></td>
                                <td><?php echo ':';?></td>
                                <td><?php echo $r_tampil_mhs['nim']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo 'Nama';?></td>
                                <td><?php echo ':';?></td>
                                <td><?php echo $r_tampil_mhs['nama_mhs']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo 'Email';?></td>
                                <td><?php echo ':';?></td>
                                <td><?php echo $r_tampil_mhs['email']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo 'Jurusan';?></td>
                                <td><?php echo ':';?></td>
                                <td><?php echo $r_tampil_mhs['jurusan']; ?></td>
                            </tr>                      
                            <tr>
                                <td><?php echo 'Tanggal Lahir';?></td>
                                <td><?php echo ':';?></td>
                                <td><?php echo $r_tampil_mhs['tgl_lahir']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo 'Tempat Lahir';?></td>
                                <td><?php echo ':';?></td>
                                <td><?php echo $r_tampil_mhs['tempat_lahir']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo 'No. Handphone';?></td>
                                <td><?php echo ':';?></td>
                                <td><?php echo $r_tampil_mhs['no_hp']; ?></td>
                            </tr>                      
                            <tr>
                                <td><?php echo 'Agama';?></td>
                                <td><?php echo ':';?></td>
                                <td><?php echo $r_tampil_mhs['agama']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo 'Jenis Kelamin';?></td>
                                <td><?php echo ':';?></td>
                                <td><?php echo $r_tampil_mhs['jenis_kelamin']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo 'Alamat';?></td>
                                <td><?php echo ':';?></td>
                                <td><?php echo $r_tampil_mhs['alamat']; ?></td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="hal_operator.php" class="btn btn-secondary" style="background-color: #486e86">Kembali</a>
                                </td>
                            </tr>
                         <?php } ?>
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
