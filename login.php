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
</head>

<body>

    <div class="d-flex align-items-center justify-content-center min-vh-100">
        <div class="card login-card shadow-sm border-0 p-4 w-100">

            <!-- Icon -->
            <div class="d-flex justify-content-center mb-3">
                <div class="icon-circle rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-building fs-3"></i>
                </div>
            </div>

            <!-- Title -->
            <h4 class="text-center fw-bold">Selamat Datang</h4>
            <p class="text-center text-muted mb-4">
                Pilih tipe akun untuk masuk ke sistem
            </p>

            <!-- Switch Role -->
            <div class="role-switch d-flex justify-content-between mb-4">
                <button class="btn role-btn active w-50 me-1">
                    <i class="bi bi-person me-1"></i> Siswa
                </button>
                <button class="btn role-btn w-50 ms-1">
                    <i class="bi bi-shield-lock me-1"></i> Admin
                </button>
            </div>

            <!-- Form -->
            <div class="mb-3">
                <label class="form-label fw-semibold">NIS (Nomor Induk Siswa)</label>
                <input type="text" class="form-control" placeholder="Masukkan NIS">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Nama Lengkap</label>
                <input type="text" class="form-control" placeholder="Masukkan nama lengkap">
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold">Kelas</label>
                <input type="text" class="form-control" placeholder="Contoh: XII IPA 1">
            </div>

            <!-- Button -->
            <button class="btn btn-dark-custom text-white w-100">
                <i class="bi bi-box-arrow-in-right me-2"></i>
                Masuk sebagai Siswa
            </button>

        </div>
    </div>

</body>

</html>