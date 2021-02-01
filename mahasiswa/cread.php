<?php
include('../koneksi.php');

if (isset($_POST['submit'])) {
    $npm = $_POST["npm"];
    $nama = $_POST["nama"];
    $tpl = $_POST["tpl"];
    $tgl = $_POST["tgl"];
    $jk = $_POST["jk"];
    $alamat = $_POST["alamat"];
    $kp = $_POST["kp"];
    $pass = $_POST["pass"];

    $query = "INSERT INTO mahasiswa (`idm`, `npm`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `kode_post`, `password`) VALUES (NULL,'$npm','$nama','$tpl','$tgl','$jk','$alamat','$kp','$pass')";

    $sql = mysqli_query($koneksi, $query);

    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cread | Insert</title>
</head>

<body>

    <form method="POST" autocomplete="off">
        <table align="center">
            <tr>
                <td>NPM</td>
                <td>:</td>
                <td><input type="text" name="npm" id=""></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tpl" id=""></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tgl" id=""></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <select name="jk" id="">
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <textarea name="alamat" id="" cols="30" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <td>Kode Post</td>
                <td>:</td>
                <td><input type="text" name="kp"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="text" name="pass"></td>
            </tr>
            <tr>
                <td colspan="3"><button type="submit" name="submit">Submit</button></td>
            </tr>
        </table>
    </form>

</body>

</html>