<?php
require_once('config/koneksi_db.php');
error_reporting(0);

$name = $_POST['karam'];
$nim = $_POST['nim'];
$prodi = $_POST['prodi'];
$angkatan = $_POST['angkatan'];
$email = $_POST['email'];
$pass = md5($_POST['pass']);
$re_pass = md5($_POST['re_pass']);
$divisi = $_POST['divisi'];


$query = "INSERT INTO anggota_hima (nama_anggota, nim_anggota, prodi_anggota, angkatan_anggota, email_anggota, password_anggota, re_pass_anggota, divisi_anggota) 
VALUES ('$name', '$nim', '$prodi', '$angkatan', '$email', '$pass', '$re_pass', '$divisi')";

$hasil = mysqli_query($koneksi, $query);

if ($hasil) {
    echo "berhasil";
} else {
    echo "";
}

?>