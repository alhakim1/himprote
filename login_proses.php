<?php
session_start();
include_once('config/koneksi_db.php');

$email = $_POST['email'];
$password = md5($_POST['password']);

$query = "SELECT * FROM anggota_hima WHERE email_anggota='$email' AND password_anggota='$password' ";

$hasil = mysqli_query($koneksi, $query);

$data  = mysqli_fetch_assoc($hasil);
//$result= mysqli_num_rows($hasil);

if (mysqli_num_rows($hasil)>0) {
   
    $_SESSION['nama_anggota'] = $data['nama_anggota'];
    $_SESSION['nim_anggota'] = $data['nim_anggota'];
    $_SESSION['prodi_anggota'] = $data['prodi_anggota'];
    $_SESSION['angkatan_anggota'] = $data['angkatan_anggota'];
    $_SESSION['email_anggota'] = $data['email_anggota'];
    $_SESSION['password_anggota'] = $data['password_anggota'];
    $_SESSION['re_pass_anggota'] = $data['re_pass_anggota'];
    $_SESSION['divisi_anggota'] = $data['divisi_anggota'];

    if ($data['divisi_anggota']=="Divisi A") {
        //session_start();

        echo "<script>alert('SUKSES!!!! Berhasil Login')</script>";
        echo "<script>location='dbanggota/dbdiva/dashboard.php'</script>";
    } 
    elseif ($data['divisi_anggota']=="Divisi B") {
        //session_start();

        echo "<script>alert('SUKSES!!!! Berhasil Login')</script>";
        echo "<script>location='dbanggota/dbdivb/dashboard.php'</script>";
    } 
    elseif ($data['divisi_anggota']=="Divisi C") {
        //session_start();

        echo "<script>alert('SUKSES!!!! Berhasil Login')</script>";
        echo "<script>location='dbanggota/dbdivc/dashboard.php'</script>";
    } 
    elseif ($data['divisi_anggota']=="Divisi D") {
        //session_start();

        echo "<script>alert('SUKSES!!!! Berhasil Login')</script>";
        echo "<script>location='dbanggota/dbdivd/dashboard.php'</script>";
    } 
    elseif ($data['divisi_anggota']=="Divisi E") {
        //session_start();

        echo "<script>alert('SUKSES!!!! Berhasil Login')</script>";
        echo "<script>location='dbanggota/dbdive/dashboard.php'</script>";
    } 
    elseif ($data['divisi_anggota']=="Divisi F") {
        //session_start();

        echo "<script>alert('SUKSES!!!! Berhasil Login')</script>";
        echo "<script>location='dbanggota/dbdivf/dashboard.php'</script>";
    }
    elseif ($data['divisi_anggota']=="Sekretaris") {
        //session_start();

        echo "<script>alert('SUKSES!!!! Berhasil Login')</script>";
        echo "<script>location='dbanggota/dbph/dashboard.php'</script>";
    }
    elseif ($data['divisi_anggota']=="Bendahara") {
        //session_start();

        echo "<script>alert('SUKSES!!!! Berhasil Login')</script>";
        echo "<script>location='dbanggota/dbph/dashboard.php'</script>";
    }
    
} else {
    echo "<script>alert('GAGAL!!!! Periksa Kembali Username dan Password')</script>";
    echo "<script>location='login.php'</script>";
}
