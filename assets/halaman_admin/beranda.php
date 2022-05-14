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
                <a class="list-group-item list-group-item-action list-group-item-light p-3 active" href="beranda.php"><i
                        class="bi bi-house-fill"></i> Dashboard</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="data_mahasiswa.php"><i
                        class="bi bi-person-workspace"></i>
                    Mahasiswa</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="data_dosen.php"><i
                        class="bi bi-person-square"></i> Dosen</a>
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
                    <h5 class="form-control btn btn-outline-primary mt-3"><i class="bi bi-house-fill"></i> Selamat
                        Datang Di
                        halaman
                        Admin
                        <i class="bi bi-emoji-smile"></i>
                    </h5>
                    <div class="mt-4">
                        <a class="btn btn-outline-primary mb-3 ms-5" href="">
                            <i class="bi bi-people" style="font-size:60px;"></i>
                            <h5>Mahasiswa</h5>
                        </a> <a class="btn btn-outline-primary mb-3 ms-5" href="">
                            <i class="bi bi-people" style="font-size:60px;"></i>
                            <h5>Dosen</h5>
                        </a>
                    </div>




                </div>
            </div>

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