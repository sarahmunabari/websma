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
        <a href="index.php">KEMBALI</a>
        <br/>
        <br/>
        <h3>Edit Data Guru dan Staff</h3>
        <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi,"select * from Karyawan WHERE id='$id'");
        while($d = mysqli_fetch_array($data)){
            ?>
        <form method="post" action="update.php">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id"
                        value="<?php echo $d['id']; ?>">
                        <input type="text" name="nama"
                        value="<?php echo $d['nama']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>
                        <input type="text" name="alamat"
                        value="<?php echo $d['alamat']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>
                        <input type="text" name="pekerjaan"
                        value="<?php echo $d['pekerjaan']; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
</table>
</form>
<?php
}
?>
</body>
</html>