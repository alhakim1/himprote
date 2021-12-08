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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mendaftar</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/style_colorlib.css">
</head>

<body>

    <div class="main">

        <!-- Sign up form -->
        <form action="" method="post">
            <section class="signup">
                <div class="container">
                    <div class="signup-content">
                        <div class="signup-form">
                            <h2 class="form-title">Daftar Menjadi Anggota</h2>
                            <form method="POST" class="register-form" id="register-form">
                                <div class="form-group">
                                    <label for="karam"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="text" name="karam" id="karam" placeholder="Nama" />
                                </div>
                                <div class="form-group">
                                    <label for="nim"><i class="zmdi zmdi-caret-down-circle"></i></label>
                                    <input type="text" name="nim" id="nim" placeholder="NIM" />
                                </div>
                                <div class="form-group">
                                    <label for="prodi"><i class="zmdi zmdi-leak-remove"></i></label>
                                    <input type="text" name="prodi" id="prodi" placeholder="Program Studi" />
                                </div>
                                <div class="form-group">
                                    <label for="angkatan"><i class="zmdi zmdi-storage"></i></label>
                                    <input type="text" name="angkatan" id="angkatan" placeholder="Angkatan" />
                                </div>
                                <div class="form-group">
                                    <label for="email"><i class="zmdi zmdi-email"></i></label>
                                    <input type="email" name="email" id="email" placeholder="Email (students.unnes)" />
                                </div>
                                <div class="form-group">
                                    <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" name="pass" id="pass" placeholder="Password" />
                                </div>
                                <div class="form-group">
                                    <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                    <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" />
                                </div>
                                <div class="form-group">
                                    <label for="Divisi"></label>
                                    <select id="divisi" name="divisi">
                                        <option value="">Pilih Divisi</option>
                                        <option value="Sekretaris">Sekretaris</option>
                                        <option value="Bendahara">Bendahara</option>
                                        <option value="Divisi A">Divisi A</option>
                                        <option value="Divisi B">Divisi B</option>
                                        <option value="Divisi C">Divisi C</option>
                                        <option value="Divisi D">Divisi D</option>
                                        <option value="Divisi E">Divisi E</option>
                                        <option value="Divisi F">Divisi F</option>
                                    </select>
                                </div>
                                <!--</div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                                    statements in <a href="#" class="term-service">Terms of service</a></label>
                            </div>-->
                                <div class="form-group form-button">
                                    <input type="submit" name="signup" id="signup" class="form-submit" value="Daftar" />
                                </div>
                                <div class="text-center">
                                    <p>sudah punya akun?<a class="small" href="pilihanlogin.php" style=" text-decoration:none"">masuk</a></p>
                                </div>
                            </form>
                        </div>
                        <div class=" signup-image">
                                            <figure><img src="assets/img/logo.png" alt="sing up image"></figure>
                                            <a href="#" class="signup-image-link"></a>
                                </div>
                        </div>
                    </div>
            </section>
        </form>

        <!-- JS -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>