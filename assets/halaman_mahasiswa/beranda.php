<?php
//mulai session
session_start();
//cek apakah ada session yang dikirim
if ($_SESSION['username'] == '') { //jika tidak ada
    echo "<script>
    alert('Anda Belum Login');
    window.location='../form_login/form_login_mahasiswa.php';
    </script>";
}
echo "Selamat Datang";