<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Login Pengaduan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/styles.css">
</head>

<body>

    <div class="d-flex align-items-center justify-content-center min-vh-100">
        <div class="card login-card shadow-sm border-0 p-4 w-100">

            <!-- Icon -->
            <div class="d-flex justify-content-center mb-3">
                <div class="icon-circle rounded-circle d-flex align-items-center justify-content-center">
                    <a href="index.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZxVVBYcMFnxj3UH6s5BZAz0l5ooENrGneJA&s" alt="Logo" width="30" height="30" class="d-inline-block align-text-top"></a>
                </div>
            </div>

            <!-- Title -->
            <h4 class="text-center fw-bold">Selamat Datang</h4>
            <p class="text-center text-muted mb-4">
                Pilih tipe akun untuk masuk ke sistem
            </p>

            <!-- Switch Role -->
            <div class="role-switch d-flex justify-content-between mb-4">
                <button id="btnSiswa" class="btn role-btn active w-50 me-1">
                    <i class="bi bi-people-fill"></i> Siswa
                </button>
                <button id="btnAdmin" class="btn role-btn w-50 ms-1">
                    <i class="bi bi-person-fill-gear"></i> Admin
                </button>
            </div>

            <!-- FORM SISWA -->
            <form id="formSiswa" action="proses/login_proses.php" method="POST">
                <div class="mb-3">
                    <label class="form-label fw-semibold">NIS</label>
                    <input type="number" class="form-control" name="username" placeholder="Masukkan NIS">
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukkan password">
                </div>

                <button class="btn btn-dark-custom text-white w-100" type="submit">
                    Masuk sebagai Siswa
                </button>
            </form>

            <!-- FORM ADMIN -->
            <form id="formAdmin" class="d-none" action="proses/login_proses.php" method="POST">
                <div class="mb-3">
                    <label class="form-label fw-semibold">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Masukkan username">
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukkan password">
                </div>

                <button class="btn btn-dark-custom text-white w-100" type="submit">
                    Masuk sebagai Admin
                </button>
            </form>
        </div>

        <script src="asset/js/toogle.js"></script>
</body>

</html>