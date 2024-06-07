<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dispedukcapil Lampung</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#!">Dispedukcapil Lampung</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="buat_laporan.php">Buat Laporan</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- Page content-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <!-- Post content-->
                <?php
                include('./create_user_logic.php');
                ?>

                <div class="container pb-5">
                    <h2>Buat Laporan</h2>
                    <form class="mt-4" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input name="name" type="text" class="form-control" id="name" />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" id="email" />
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">alamat</label>
                            <input name="alamat" type="text" class="form-control" id="alamat" />
                        </div>
                        <div class="mb-3">
                            <label for="noTelepon" class="form-label">No Telepon</label>
                            <input name="noTelepon" type="text" class="form-control" id="noTelepon" />
                        </div>
                        <div class="mb-3">
                            <label for="isiLaporan" class="form-label">Isi Laporan</label>
                            <input name="isiLaporan" type="text" class="form-control" id="isiLaporan" />
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
                <!-- Comments section-->
            </div>
            <!-- Side widgets-->

        </div>
    </div>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">
                Copyright &copy; Dispedukcapil Lampung
            </p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>