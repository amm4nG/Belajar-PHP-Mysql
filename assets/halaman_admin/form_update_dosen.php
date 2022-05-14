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
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <?php
                        include '../database/db_config.php';
                        $username = $_GET['username'];
                        $class = new Database;
                        $select = $class->select_account_lecturer($username);
                        $data = mysqli_fetch_array($select);
                        ?>
                        <form action="proses_update_dosen.php?username=<?php echo $data['username'] ?>" method="post"
                            class="form-control border border-primary mt-4 p-4">
                            <h5 class="text-center mb-4">Update Data <i class="bi bi-box-arrow-in-right"></i></h5>
                            <div class="mb-4 mt-4">
                                <label for="exampleInputPassword1" class="form-label">Password <i
                                        class="bi bi-lock"></i></label>
                                <input value="<?php echo $data['password'] ?>" name="password" type="password"
                                    class="form-control border border-primary" id="exampleInputPassword1" required>
                            </div>
                            <div class="d-grid gap-2">
                                <button name="update" type="submit" class="btn btn-success btn-sm mt-4 mb-1 center"><i
                                        class="bi bi-check-circle"></i></i></button>
                                <a class="btn btn-primary btn-sm mb-3" href="data_dosen.php"><i
                                        class="bi bi-x-circle"></i></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../../js/scripts.js"></script>
</body>

</html>