<?php
include '../database/db_config.php';
$username = $_GET['username'];
$password = $_POST['password'];
if (isset($_POST['update'])) {
    $class = new Database;
    $update = $class->update_data_dosen($username, $password);
    echo "<script>
    alert('Update Success');
    window.location='data_dosen.php';
    </script>";
}