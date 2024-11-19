<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('css/dashboard_user.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="brand">Dashboard</div>
        <div class="profile">
            <img src="https://via.placeholder.com/40" alt="Profile Picture">
            <span><?= htmlspecialchars(session()->get('username')) ?></span>
            <a href="/logout">Logout</a>
        </div>
    </div>

    <!-- Content -->
    <div class="content">
        <div class="container my-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card Besar</h5>
                    <p class="card-text">
                        Ini adalah contoh card besar menggunakan Bootstrap. Anda dapat menambahkan konten apa saja di sini.
                    </p>
                </div>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 My Dashboard. All rights reserved.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>