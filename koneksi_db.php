<?php

$host="localhost";
$username_db="root";
$password_db="";
$database="himprote";

$koneksi=mysqli_connect($host, $username_db, $password_db, $database);

if($koneksi){
    echo"";
}else{
    echo"Koneksi Gagal";
}

?>