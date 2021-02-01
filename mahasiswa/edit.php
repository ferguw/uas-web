<?php
$idm = $_GET["idm"];
include('../koneksi.php');
$show = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM `mahasiswa` WHERE `idm`='$idm'"));

if (isset($_POST['edit'])) {
    $npm = $_POST["npm"];
    $nama = $_POST["nama"];
    $tpl = $_POST["tpl"];
    $tgl = $_POST["tgl"];
    $jk = $_POST["jk"];
    $alamat = $_POST["alamat"];
    $kp = $_POST["kp"];
    $pass = $_POST["pass"];

    mysqli_query($koneksi, "UPDATE `mahasiswa` SET `npm`=$npm, `nama`='$nama',`tempat_lahir`='$tpl',`tanggal_lahir`='$tgl',`jenis_kelamin`='$jk',`alamat`='$alamat',`kode_post`='$kp', `password`='$pass' WHERE `idm`='$idm'");

    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update | Edit</title>
</head>

<body>

    <form method="POST" autocomplete="off">
        <table align="center">
            <tr>
                <td>NPM</td>
                <td>:</td>
                <td><input type="text" name="npm" value="<?= $show['npm'] ?>" id=""></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?= $show['nama'] ?>" id=""></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tpl" value="<?= $show['tempat_lahir'] ?>" id=""></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tgl" value="<?= $show['tanggal_lahir'] ?>" id=""></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <select name="jk" id="">
                        <option value="<?= $show['jenis_kelamin'] ?>">
                            <?php
                            if ($show['jenis_kelamin'] == 'L') {
                                echo "Laki-laki";
                            } else {
                                echo "Perempuan";
                            }
                            ?>
                        </option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <textarea name="alamat" id="" cols="30" rows="5"><?= $show['alamat'] ?></textarea>
                </td>
            </tr>
            <tr>
                <td>Kode Post</td>
                <td>:</td>
                <td><input type="text" name="kp" value="<?= $show['kode_post'] ?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="text" name="pass" value="<?= $show['password'] ?>"></td>
            </tr>
            <tr>
                <td colspan="3"><button type="submit" name="edit">Edit</button></td>
            </tr>
        </table>
    </form>

</body>

</html>