<?php 
    include('koneksi.php');
    if (isset($_POST['login'])) {
        $npm = $_POST["npm"];
        $pass = $_POST["password"];
        $cek_npm = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE `npm`='$npm'");
        if (mysqli_num_rows($cek_npm) < 1) {
            echo "<script>alert('NPM Tidak Ditemukan')</script>";
        }else{
            $cek_pass = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE `npm`='$npm' AND `password`='$pass'");
            if (mysqli_num_rows($cek_pass) < 1) {
                echo "<script>alert('Password Anda Salah')</script>";
            }else{
                header('location:mahasiswa/');
            }
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>

    <form method="POST">
        <table>
            <tr>
                <td>NPM</td>
                <td>:</td>
                <td><input type="text" name="npm"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td colspan="3"><button type="submit" name="login">LOGIN</button></td>
            </tr>
        </table>
    </form>
    
</body>
</html>