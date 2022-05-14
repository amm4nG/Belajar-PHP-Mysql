<?php
session_start();
include '../database/db_config.php';
$username = $_POST['username'];
$password = $_POST['password'];
$class = new Database;
$select = $class->select_account_lecturer($username); //select account dosen
$data_dosen = mysqli_fetch_array($select);
$admin = $class->select_admin($username); //select admin
$data_admin = mysqli_fetch_array($admin);
if ($data_dosen['username'] == $username && $data_dosen['password'] == $password) {
    $_SESSION['username'] = $username;
    echo "<script>
    alert('Login Success');
    window.location='../halaman_dosen/beranda.php';
    </script>";
} elseif ($data_admin['username'] == $username && $data_admin['password'] == $password) { //akun admin
    $_SESSION['username'] = $username;
    echo "<script>
    alert('Login Success');
    window.location='../halaman_admin/beranda.php';
    </script>";
} else {
    echo "<script>
    alert('Username or password invalid');
    window.location='form_login_dosen.php';
    </script>";
}