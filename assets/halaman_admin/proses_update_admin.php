<?php
include '../database/db_config.php';
$username = $_POST['username'];
$password = $_POST['password'];
if (isset($_POST['update'])) {
    $class = new Database;
    $update = $class->update_data_admin($username, $password);
    echo "<script>
    alert('Update Success');
    window.location='settings.php';
    </script>";
}