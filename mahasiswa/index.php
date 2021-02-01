<?php
include('../koneksi.php');

if (isset($_POST["btn_cari"])) {
    $cari = $_POST["cari"];
    if (!$cari) {
        $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
    } else {
        $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE `npm`='$cari'");
    }
} else {
    $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Read | Show</title>
</head>

<body>
    <div class="body">
        <form method="POST">
            <table class="table_index" align="center" cellpadding="10px" cellspacing="0">
                <tr>
                    <td><button><a href="cread.php">Tambah</a></button></td>
                    <td><input type="text" name="cari" placeholder="Cari Data"></td>
                    <td><button type="submit" name="btn_cari">Cari</button></td>
                    <td><button onclick="clear()">Reset</button></td>
                </tr>
                <tr id="thead">
                    <td>NO</td>
                    <td>NPM</td>
                    <td>Nama</td>
                    <td>Tempat Lahir</td>
                    <td>Tanggal Lahir</td>
                    <td>Jenis Kelamin</td>
                    <td>Alamat</td>
                    <td>Kode Post</td>
                    <td>Action</td>
                </tr>
                <?php
                $no = 1;

                while ($data = mysqli_fetch_assoc($query)) {
                ?>
                    <tr id="tbody">
                        <td><?= $no++ ?></td>
                        <td><?= $data['npm'] ?></td>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['tempat_lahir'] ?></td>
                        <td><?= $data['tanggal_lahir'] ?></td>
                        <td><?= $data['jenis_kelamin'] ?></td>
                        <td><?= $data['alamat'] ?></td>
                        <td><?= $data['kode_post'] ?></td>
                        <td>
                            <button><a href="edit.php?idm=<?= $data['idm'] ?>">EDIT</a></button> &nbsp;
                            <button><a href="delete.php?idm=<?= $data['idm'] ?>">DELETE</a></button>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </form>
    </div>

</body>
<script>
    function tambah() {
        window.location.href = 'cread.php';
    }

    function clear() {
        window.location.href = 'index.php';
    }
</script>


</html>