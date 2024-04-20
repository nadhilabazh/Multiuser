<?php
	// koneksi database
	include 'koneksi.php';
	// menangkap data id yang di kirim dari url
	$user_id = $_GET['user_id'];
	// menghapus data dari database
	mysqli_query($conn,"DELETE FROM user WHERE user_id='$user_id'");
	// cek apakah data berhasil dihapus atau tidak
	if(mysqli_affected_rows($conn) > 0) {
	echo "<script language='javascript'>
	alert ('Data mahasiswa berhasil dihapus');
	document.location='user_admin.php';
	</script>";
	}
	else
	{
	echo "<script language='javascript'>
	alert ('Data mahasiswa gagal dihapus');
	</script>";
	echo mysqli_error($conn);
	}
?>