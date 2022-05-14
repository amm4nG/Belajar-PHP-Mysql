<?php
include '../database/db_config.php';
$username = $_POST['username'];
$password = $_POST['password'];
if (isset($_POST['add'])) {
    $class = new Database;
    $select = $class->select_account_lecturer($username);
    $data = mysqli_fetch_array($select);
    if ($data['username'] == $username) {
        echo "<script>
        alert('Username Already Exist');
        window.location='form_add_dosen.php';
        </script>";
    }
    $class->add_dosen($username, $password);
    echo "<script>
    alert('Create Account Success');
    window.location='data_dosen.php';
    </script>";
}