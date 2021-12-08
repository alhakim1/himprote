<?php
session_start();
include_once('config/koneksi_db.php');

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM adminweb WHERE email='$email' AND password='$password' ";

$hasil = mysqli_query($koneksi, $query);


if (mysqli_num_rows($hasil)>0) {
    //session_start();
    
    echo "<script>alert('SUKSES!!!! Berhasil Login')</script>";
    echo "<script>location='dbadmin/dashboard.php'</script>";
} else {
    echo "<script>alert('GAGAL!!!! Periksa Kembali Username dan Password')</script>";
    echo "<script>location='loginadmin.php'</script>";
}
