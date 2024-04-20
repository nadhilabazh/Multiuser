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
     <title>Edit Data Mahasiswa</title>

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
          <div class="container"><br><br><br>
                    <div class="col-md-10 text-justify">
                      <table class="table table-borderless">
                
                      <?php
                        $user_id=$_GET['user_id'];
                        $q_tampil_mhs=mysqli_query($conn,"SELECT * FROM user WHERE user_id='$user_id'");
                        $r_tampil_mhs=mysqli_fetch_assoc($q_tampil_mhs);
                      ?>

                      <div class="col-md-11 text-justify">
                        <form action="proses_edit_mhs_operator.php" method="post" enctype="multipart/form-data">
                          <tr>
                            <td class="hide"><input type="hidden" name="id_mhs" value="<?php echo $r_tampil_mhs['id_mhs']; ?>" readonly="readonly"></td>
                          </tr>

                           <tr>
                            <td><div class="name">Foto</div></td>
                            <td><input type="text" name="foto" class="form-control"  value="<?php echo $r_tampil_mhs['foto']; ?>"></td>
                          </tr>

                           <tr>
                                  <td><div class="name">NIM</div></td>
                                  <td><div class="input-group">
                                    <input type="text" name="nim" class="form-control"  value="<?php echo $r_tampil_mhs['nim']; ?>">
                                    </div></td>
                              </tr>
                              <tr>
                                  <td><div class="name">Nama</div></td>
                                  <td><div class="input-group">
                                    <input type="text" name="nama_mhs" class="form-control" value="<?php echo $r_tampil_mhs['nama_mhs']; ?>"></div></td>
                              </tr>
                              <tr>
                                  <td><div class="name">Email</div></td>
                                  <td><div class="input-group">
                                    <input type="text" name="email" class="form-control" value="<?php echo $r_tampil_mhs['email']; ?>"></div></td>
                              </tr>
                              <tr>
                                  <td><div class="name">Jurusan</div></td>
                                  <td><div class="input-group">
                                    <input type="text" name="jurusan" class="form-control" value="<?php echo $r_tampil_mhs['jurusan']; ?>"></div></td>
                              </tr>
                              <tr>
                                  <td><div class="name">Tanggal Lahir</div></td>
                                  <td><div class="input-group">
                                    <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $r_tampil_mhs['tgl_lahir']; ?>"></div></td>
                              </tr>
                              <tr>
                                  <td><div class="name">Tempat Lahir</div></td>
                                  <td><div class="input-group">
                                    <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $r_tampil_mhs['tempat_lahir']; ?>"></div></td>
                              </tr>
                              <tr>
                                  <td><div class="name">No. Handphone</div></td>
                                  <td><div class="input-group">
                                    <input type="text" name="no_hp" class="form-control" value="<?php echo $r_tampil_mhs['no_hp']; ?>"></div></td>
                              </tr>
                              <tr>
                                  <td><div class="name">Agama</div></td>
                                  <td><div class="input-group">
                                    <input type="text" name="agama" class="form-control" value="<?php echo $r_tampil_mhs['agama']; ?>"></div></td>
                              </tr>
                              <tr>
                                <td><div class="name">Jenis Kelamin</div></td>
                                  <td><div class="input-group">
                                    <input type="text" name="jenis_kelamin" class="form-control" value="<?php echo $r_tampil_mhs['jenis_kelamin']; ?>"></div>
                                  
                                </td>     
                              </tr>
                              <tr>
                                  <td><div class="name">Alamat</div></td>
                                  <td><div class="input-group">
                                    <input type="text" name="alamat" class="form-control" value="<?php echo $r_tampil_mhs['alamat']; ?>"></div></td>
                              </tr>
                            <td><button class="btn btn-info" type="submit" name="simpan">Edit Data</button>
                              <a href="hal_operator.php" class="btn btn-secondary" style="background-color:  #864879">Kembali</a></td>
                          </tr>
                        </table>
                        </form>
                      </div>
                  </div>
            </div>
        <br><br><br><br><br><br>
    </section>
<footer class="text-center text-lg-start" style="background-color:  #605ca8">
  <!-- Copyright -->
  <div class="text-center p-3" style="color:white;">
    © 2021 Copyright Nadhila Bazhlina
  <!-- Copyright -->
</footer>
</body>
</html>
