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
    <link href="css/styles.css" rel="stylesheet" />
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom text-center"><i class="bi bi-mortarboard-fill"></i> SIAKAD</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="../../index.html"><i
                        class="bi bi-house-fill"></i> Beranda</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3"
                    href="form_login_mahasiswa.php"><i class="bi bi-person-workspace"></i> Mahasiswa</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3 active"
                    href="form_login_dosen.php"><i class="bi bi-person-square"></i> Dosen</a>
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
            <!-- Page content-->
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <form action="proses_login_dosen.php" method="post"
                            class="form-control border border-primary mt-3 p-4">
                            <h5 class="text-center mb-4">L O G I N <i class="bi bi-box-arrow-in-right"></i></h5>
                            <p class="text-center mt-1 mb-4">Jangan memberikan akun anda pada siapapun</p>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Username <i
                                        class="bi bi-person-circle"></i></label>
                                <input name="username" type="text" class="form-control border border-primary" required>
                            </div>
                            <div class="mb-3 mt-4">
                                <label for="exampleInputPassword1" class="form-label">Password <i
                                        class="bi bi-lock"></i></label>
                                <input name="password" type="password" class="form-control border border-primary"
                                    id="exampleInputPassword1" required>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary mt-4 mb-3 center">L O G I N <i
                                        class="bi bi-box-arrow-in-right"></i></button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>