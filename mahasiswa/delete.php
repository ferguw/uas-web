<?php
    $idm = $_GET["idm"];
    include('../koneksi.php');
    mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE `idm`='$idm'");
    header('location:index.php');
?>