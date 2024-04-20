<?php
// mengaktifkan session pada php
session_start();
// menghubungkan php dengan koneksi database
include 'koneksi.php';
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = sha1($_POST['password']);
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"SELECT * FROM user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
// cek apakah username dan password di temukan pada database
if($cek > 0){
$data = mysqli_fetch_assoc($login);
// cek jika user login sebagai admin
if($data['level']=="admin"){
// buat session login dan username
$_SESSION['username'] = $username;
$_SESSION['level'] = "admin";
// alihkan ke halaman dashboard admin
header("location:hal_admin.php");
// cek jika user login sebagai operator
}else if($data['level']=="operator"){
// buat session login dan username
$_SESSION['username'] = $username;
$_SESSION['level'] = "operator";
// alihkan ke halaman dashboard operator
header("location:hal_operator.php");
// cek jika user login sebagai direktur
}else if($data['level']=="direktur"){
// buat session login dan username
$_SESSION['username'] = $username;
$_SESSION['level'] = "direktur";
// alihkan ke halaman dashboard direktur
header("location:hal_direktur.php");
}else{
// alihkan ke halaman login kembali
header("location:index.php?pesan=gagal");
}
}else{
header("location:index.php?pesan=gagal");
}
?>