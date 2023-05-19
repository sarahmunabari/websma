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
        <h3>Tambah Data Guru dan Staff</h3>
        <form method="post" action="tambah_aksi.php">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td><input type="text" name="pekerjaan"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
</table>
</form>
</body>
</html>