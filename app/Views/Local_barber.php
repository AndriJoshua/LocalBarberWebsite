<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Barbershop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url('<?= base_url('images/background.jpg') ?>'); 
            background-size: cover;
            background-position: center;
            color: white;
            position: relative;
            font-family: 'Poppins', sans-serif; 
        }
        .vignette {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle, transparent 30%, rgba(0, 0, 0, 0.8) 100%);
            pointer-events: none; 
        }
        .navbar {
            background-color: rgba(0, 0, 0, 0.8);
        }
        .container {
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
        }
        .centered-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .navbar-nav {
            flex-direction: row;
            justify-content: center;
            width: 100%;
        }
        .nav-item + .nav-item {
            margin-left: 20px;
        }
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
                <button class="btn btn-primary me-md-2" type="button" onclick="location.href='#booking';">Booking</button>
                <button class="btn btn-secondary" type="button" onclick="location.href='#model';">Lihat Model</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
