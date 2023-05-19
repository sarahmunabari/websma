<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
// menginput data ke database
mysqli_query($koneksi, "insert into Karyawan values('','$nama','$alamat','$pekerjaan')");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>