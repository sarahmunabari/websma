<!DOCTYPE html>
<html>
    <head>
        <title>CRUD PHP dan MySQLi</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <center>
            <h2>Data Guru dan Staff SMA Negeri 85 Jakarta</h2>
        </center>
        <br/>
        <a href="tambah.php">+ TAMBAH DATA </a>
        <br/>
        <br/>
        <table border="1">
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Pekerjaan</th>
                <th>OPSI</th>
            </tr>
<?php
include 'koneksi.php';
$no = 1;
$data = mysqli_query($koneksi,"select * from karyawan");
while($d = mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['alamat']; ?></td>
        <td><?php echo $d['pekerjaan']; ?></td>
        <td>
            <a href="edit.php?id=<?php echo $d['id'];
            ?>">EDIT</a>
            <a href="hapus.php?id=<?php echo $d['id'];
            ?>">HAPUS</a>
        </td>
    </tr>
<?php
}
?>
</table>
</body>
</html>