<?php
// nama host, username, password, dan nama database
$koneksi = mysqli_connect("localhost","root","","ptabc");
// periksa koneksi
if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>