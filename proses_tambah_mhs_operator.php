<?php
include ("koneksi.php");
if (isset($_POST['input']) && isset($_FILES['foto'])){
    $username = htmlspecialchars($_POST['username']);
    $nama = htmlspecialchars($_POST['nama']);
    $password = md5($_POST['password']);
    $email = htmlspecialchars($_POST['email']);
    $level = htmlspecialchars($_POST['level']);

   $query="INSERT INTO user VALUES
    ('', '$username', '$nama',  '$password','$email','$level')";
    
        mysqli_query($conn, $query);
        
        if(mysqli_affected_rows($conn) > 0) {
        echo "<script language='javascript'>
        alert ('Data mahasiswa berhasil ditambahkan');
        document.location='hal_operator.php';
        </script>";
        }
        else
        {
        echo "<script language='javascript'>
        alert ('Data mahasiswa gagal ditambahkan');
        </script>";
        echo mysqli_error($conn);
        }
    }

?>