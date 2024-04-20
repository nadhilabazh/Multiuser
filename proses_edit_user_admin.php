<?php
// koneksi database
require 'koneksi.php';
// menangkap data yang di kirim dari form
// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["simpan"])) {
// ambil data dari tiap elemen dalam form
$user_id=$_POST['user_id'];
$username=htmlspecialchars($_POST['username']);
$nama=htmlspecialchars($_POST['nama']);
$email=htmlspecialchars($_POST['email']);
$password=md5($_POST['password_baru']);
$level=htmlspecialchars($_POST['level']);
 
$query  = "UPDATE user
		SET username='$username',nama='$nama',email='$email',password='$password',level='$level'
		WHERE user_id='$user_id'";
      $result = mysqli_query($conn, $query);
// cek apakah data berhasil diedit atau tidak
if(mysqli_affected_rows($conn) > 0) {
echo "<script language='javascript'>
alert ('Data mahasiswa berhasil diedit');
document.location='user_admin.php';
</script>";
}
Else {
echo "<script language='javascript'>
alert ('Data mahasiswa gagal diedit');
</script>";
echo mysqli_error($conn);
} }
?>