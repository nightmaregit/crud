<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Dispedukcapil Lampung</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="../index.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>

                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Dispedukcapil Lampung
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body"><?php
                                                        include('../config.php');
                                                        $query = "SELECT COUNT(*) AS jumlah_data FROM users";
                                                        $result = mysqli_query($db, $query);
                                                        while ($user = mysqli_fetch_assoc($result)) { ?>
                                        <?= $user['jumlah_data'] ?>
                                        <?php } ?>Laporan masuk</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    Total laporan masuk
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body"><?php
                                                        include('../config.php');
                                                        $query = "SELECT COUNT(*) AS jumlah_data FROM users WHERE balasan IS NOT NULL AND TRIM(balasan) <> ''";
                                                        $result = mysqli_query($db, $query);
                                                        while ($user = mysqli_fetch_assoc($result)) { ?>
                                        <?= $user['jumlah_data'] ?>
                                    <?php } ?> Sudah ditanggapi</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    Sudah ditanggapi
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body"><?php
                                                        include('../config.php');
                                                        $query = "SELECT COUNT(*) AS jumlah_data FROM users WHERE balasan IS NULL OR balasan = ''";
                                                        $result = mysqli_query($db, $query);
                                                        while ($user = mysqli_fetch_assoc($result)) { ?>
                                        <?= $user['jumlah_data'] ?>
                                        <?php } ?>Belum ditanggapi</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    Belum ditanggapi
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            DataTable Example
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Isi Laporan</th>
                                        <th>Balasan</th>
                                        <th>Di ubah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Isi Laporan</th>
                                        <th>Balasan</th>
                                        <th>Di ubah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>

                                <tbody>
                                    <?php
                                    include('../config.php');
                                    $query = "SELECT * FROM users";
                                    $result = mysqli_query($db, $query);
                                    while ($user = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                            <td><?= $user['id'] ?></td>
                                            <td><?= $user['name'] ?></td>
                                            <td><?= $user['email'] ?></td>
                                            <td><?= $user['isiLaporan'] ?></td>
                                            <td><?php if (empty($user['balasan'])) { ?>
                                                    belum ada respon
                                                <?php } else { ?>
                                                    <?= $user['balasan'] ?>
                                                <?php } ?></td>
                                            <td><?= date('d-m-Y H:i:s', strtotime($user['updated_at'])) ?></td>

                                            <td>
                                                <a style="width: 100px;" href="layout-static.php?id=<?= $user['id'] ?>" class="p-2 m-2 btn btn-sm btn-primary">balas</a>
                                                <a style="width: 100px;" href="../delete_admin.php?id=<?= $user['id'] ?>" class="p-2 m-2 btn btn-sm btn-danger">Delete</a>
                                            </td>


                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>