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
      <a class="navbar-brand" href="frontend/index.php">Dispedukcapil Lampung</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="buat_laporan.php">Buat laporan</a></li>
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
        <article>
          <!-- Post header-->
          <header class="mb-4">
            <!-- Post title-->
            <h1 class="fw-bolder mb-1">
              Selamat Datang Dispedukcapil Lampung
            </h1>
            <!-- Post meta content-->
            <div class="text-muted fst-italic mb-2">
              Website Pengaduan Masyarakat Dispedukcapil Lampung
            </div>
            <!-- Post categories-->
          </header>
          <!-- Preview image figure-->
          <div id="carouselExampleIndicators" class="carousel slide mb-4" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://pantaulampung.com/wp-content/uploads/2023/06/no_foto.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://pantaulampung.com/wp-content/uploads/2023/06/no_foto.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://pantaulampung.com/wp-content/uploads/2023/06/no_foto.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <!-- Post content-->

          <section class="mb-5">
            <div class="card mb-4">
              <div class="card-header">Pengaduan Terbaru</div>
              <div class="card-body">

                <?php
                include('config.php');
                $query = "SELECT * FROM users";
                $result = mysqli_query($db, $query);
                while ($user = mysqli_fetch_assoc($result)) { ?>

                  <div class="d-flex mb-4">
                    <!-- Parent comment-->
                    <div class="flex-shrink-0">
                      <img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." />
                    </div>

                    <div class="ms-3">

                      <!-- <div class="fw-bold"></div> -->
                      <div style="display: flex; flex-direction: row;">
                        <div class="fw-bold" style="padding-right: 15px;"><?= $user['name'] ?></div>
                        <?= date('d-m-Y H:i:s', strtotime($user['updated_at'])) ?>
                      </div>

                      <?= $user['isiLaporan'] ?>
                      <!-- Child comment 1-->
                      <div class="d-flex mt-4">
                        <div class="flex-shrink-0">
                          <img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." />
                        </div>
                        <div class="ms-3">
                          <div class="fw-bold">Admin</div>
                          <?php if (empty($user['balasan'])) { ?>
                            belum ada respon
                          <?php } else { ?>
                            <?= $user['balasan'] ?>
                          <?php } ?>
                        </div>
                      </div>
                      <!-- Child comment 2-->
                    </div>
                  </div>
                <?php } ?>




                <!-- sini -->
              </div>
            </div>
          </section>
        </article>
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