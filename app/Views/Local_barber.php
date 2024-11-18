<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Barbershop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/landingpage.css'); ?>">
    <style>

    </style>
</head>

<body>
    <div class="vignette"></div>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LocalBarber</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#model">Model</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#booking">Pesan</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#login">Masuk Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="centered-content">
        <div class="container text-center">
            <h1>Selamat Datang di LocalBarber Web</h1>
            <p>Kelola Booking, model, dan informasi pelanggan Anda semuanya di satu tempat.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <button class="btn btn-primary btn-animated" type="button" onclick="location.href='<?= url_to('user.login'); ?>';">Login</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>