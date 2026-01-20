<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Pengaduan Sarana Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- Bagian header -->
    <header>
        <nav class="navbar p-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZxVVBYcMFnxj3UH6s5BZAz0l5ooENrGneJA&s" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                    Pengaduan Sarpras SKARISA
                </a>
                <form class="d-flex" role="search">
                    <a href="login.php" class="btn" style="background-color: #213C51; color:white;">
                        Masuk
                    </a>
                </form>
            </div>
        </nav>

        <!-- Carousel -->
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="asset/gambar/DJI_0146_C.JPG" class="d-block w-100" style="height: 45vh;object-fit: cover;">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="asset/gambar/DJI_0146_C.JPG" class="d-block w-100" style="height: 45vh;object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="asset/gambar/DJI_0146_C.JPG" class="d-block w-100" style="height: 45vh;object-fit: cover;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </header>

    <!-- Bagian Main -->
    <main>
        <div class="container my-5">
            <div class="row">
                <div class="col text-center">
                    <h3 class="fw-bold">Selamat Datang di Aplikasi Pengaduan Sarana dan Prasarana SKARISA</h3>
                    <p class="text-muted">Platform pengaduan dan aspirasi untuk meningkatkan kualitas sarana dan prasarana sekolah. Suara Anda sangat berarti bagi kemajuan sekolah</p>
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="login.php"
                            class="btn px-4"
                            style="background-color:#213C51; color:white;">
                            Mulai Lapor
                        </a>

                        <a href="login.php"
                            class="btn btn-outline-secondary px-4">
                            Lihat Pengaduan
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mengapa -->
        <section class="py-5" style="background-color:#f8fbff;">
            <div class="container">
                <!-- Judul -->
                <div class="text-center mb-5">
                    <h2 class="fw-bold">Mengapa Menggunakan Sistem Ini?</h2>
                </div>

                <!-- Card -->
                <div class="row g-4 justify-content-center">

                    <!-- Card 1 -->
                    <div class="col-md-4">
                        <div class="card h-100 text-center border-0 shadow-sm rounded-4 p-4">
                            <div class="mx-auto mb-3 d-flex align-items-center justify-content-center rounded-circle"
                                style="width:60px; height:60px; background-color:#e7f0ff;">
                                <i class="bi bi-chat-dots fs-3 text-primary"></i>
                            </div>
                            <h5 class="fw-bold">Mudah Digunakan</h5>
                            <p class="text-muted">
                                Interface yang sederhana dan intuitif memudahkan siswa
                                untuk menyampaikan aspirasi
                            </p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-4">
                        <div class="card h-100 text-center border-0 shadow-sm rounded-4 p-4">
                            <div class="mx-auto mb-3 d-flex align-items-center justify-content-center rounded-circle"
                                style="width:60px; height:60px; background-color:#e8fbef;">
                                <i class="bi bi-check-circle fs-3 text-success"></i>
                            </div>
                            <h5 class="fw-bold">Transparan</h5>
                            <p class="text-muted">
                                Pantau status pengaduan Anda secara real-time
                                dengan sistem tracking yang jelas
                            </p>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-4">
                        <div class="card h-100 text-center border-0 shadow-sm rounded-4 p-4">
                            <div class="mx-auto mb-3 d-flex align-items-center justify-content-center rounded-circle"
                                style="width:60px; height:60px; background-color:#f2e9ff;">
                                <i class="bi bi-graph-up-arrow fs-3 text-purple"></i>
                            </div>
                            <h5 class="fw-bold">Responsif</h5>
                            <p class="text-muted">
                                Tim kami siap merespons setiap pengaduan
                                untuk menciptakan lingkungan belajar yang lebih baik
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <!-- Bagian Footer -->
    <footer>
        <footer class="text-white mt-5" style="background-color:#213C51;">
            <div class="container py-4">
                <div class="row">

                    <!-- Nama Sekolah -->
                    <div class="col-md-4 mb-3">
                        <h5 class="fw-bold">SKARISA</h5>
                        <p class="mb-1">Aplikasi Pengaduan Sarana dan Prasarana</p>
                        <small>Bersama membangun lingkungan sekolah yang nyaman dan berkualitas.</small>
                    </div>

                    <!-- Kontak -->
                    <div class="col-md-4 mb-3">
                        <h6 class="fw-bold">Kontak Sekolah</h6>
                        <p class="mb-1">📞 Telepon: (031) 8971207</p>
                        <p class="mb-1">✉️ Email: mail@smkkrian1.sch.id</p>
                        <p class="mb-0">🌐 Website: www.smkkrian1.sch.id</p>
                    </div>

                    <!-- Alamat -->
                    <div class="col-md-4 mb-3">
                        <h6 class="fw-bold">Alamat</h6>
                        <p class="mb-0">
                            Jl. Raya Sidoarjo No. 38<br>
                            Kecamatan Krian<br>
                            Kabupaten Sidoarjo, Jawa Timur
                        </p>
                    </div>
                </div>

                <hr class="border-light">

                <div class="text-center small">
                    © 2026 SMK Krian 1 Sidoarjo. All rights reserved.
                </div>
            </div>
        </footer>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>