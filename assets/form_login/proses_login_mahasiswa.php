<?php

use function PHPSTORM_META\elementType;

include '../database/db_config.php'; //panggil file db_config
//Ambil inputan dari form
$username = $_POST['username'];
$password = $_POST['password'];
$class = new Database; //panggil class Database
$select = $class->select_account_college_student($username); //baca data yang terpilih
$data = mysqli_fetch_array($select); //ambil data
//cek username dan password yang di inputkan apakah ada dalam database
if ($data['username'] == $username && $data['password'] == $password) {
    session_start();
    //kirim nilai session
    $_SESSION['username'] = $username;
    echo "<script>
    alert('Login Success');
    window.location='../halaman_mahasiswa/beranda.php';
    </script>";
} else { //jika username atau password salah
    echo "<script>
    alert('Username or password invalid');
    window.location='form_login_mahasiswa.php';
    </script>";
}