<?php
session_start();
if ($_SESSION['username'] == '') {
    echo "<script>
    alert('Anda Belum Login');
    window.location='../../index.html';
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Belajar PHP Mysql</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../../css/styles.css" rel="stylesheet" />
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom text-center"><i class="bi bi-mortarboard-fill"></i> SIAKAD</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="beranda.php"><i
                        class="bi bi-house-fill"></i> Dashboard</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="data_mahasiswa.php"><i
                        class="bi bi-person-workspace"></i>
                    Mahasiswa</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3  active"
                    href="data_dosen.php"><i class="bi bi-person-square"></i> Dosen</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="settings.php"><i
                        class="bi bi-gear-fill"></i>
                    Setting</a>
                <div class="text-center">
                    <a class=list-group-item list-group-item-action list-group-item-light p-3" href="logout.php"
                        onclick="return confirm('Yakin Ingin Keluar?')">
                        Logout <i class="bi bi-box-arrow-right"></i></a>
                </div>

            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <button class="btn btn-dark" id="sidebarToggle"><i class="bi bi-list"></i></button>

                </div>
            </nav>
            <div class="container-fluid">
                <div class="container">
                    <h5 class="alert alert-info mt-3"><i class="bi bi-people-fill"></i> Data Dosen</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered text-center mt-1">
                            <tr>
                                <th scope="col">Username</th>
                                <th scope="col">Password</th>
                                <th scope="col">Action</th>
                            </tr>
                            <?php
                            include '../database/db_config.php';
                            $class = new Database;
                            $select_all = $class->select_all_data_dosen();
                            while ($data = mysqli_fetch_array($select_all)) {
                            ?>
                            <tr class="mt-3">
                                <td scope="col"><?php echo $data['username'] ?></td>
                                <td scope="col"><?php echo $data['password'] ?></td>
                                <td scope="col"><a class="btn btn-warning text-white btn-sm"
                                        href="form_update_dosen.php?username=<?php echo $data['username'] ?>"><i
                                            class="bi bi-pen"></i></a>
                                    <a class="btn btn-danger btn-sm"
                                        href="proses_delete_dosen.php?username=<?php echo $data['username'] ?>"
                                        onclick="return confirm('Yakin Akan menghapusnya?')"><i
                                            class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                    <a class="btn btn-primary btn-sm mt-4" href="form_add_dosen.php">Add <i
                            class="bi bi-person-plus"></i></a>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../../js/scripts.js"></script>
</body>

</html>