<?php
session_start();
if ($_SESSION['username'] == '') {
    echo "<script>
    alert('Anda Belum Login');
    window.location='../form_login/form_login_dosen.php';
    </script>";
}
echo "Selamat Datang";