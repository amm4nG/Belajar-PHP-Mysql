<?php
include '../database/db_config.php';
$username = $_GET['username'];
$class = new Database;
$delete = $class->delete_data_dosen($username);
echo "<script>
alert('Data Berhasil Dihapus');
window.location='data_dosen.php';
</script>";