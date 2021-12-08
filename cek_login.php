<?php
//dashboard harus tidak bisa dibuka sebelum login
//cek sesi aktif user

if (!isset($_SESSION['email'])) {
    header("Location: ../belum_login.php"); //kemungkinan kesalahan ada di email
}
?>
<!DOCTYPE html>