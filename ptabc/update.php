<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
// update data ke database
mysqli_query($koneksi, "update Karyawan set nama='$nama', alamat='$alamat', pekerjaan='$pekerjaan' WHERE id='$id'");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>