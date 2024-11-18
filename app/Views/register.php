<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LocalBarber - Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- Font Awesome for Barber Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            background: linear-gradient(to right, #333333, #dd1818);
            font-family: 'Poppins', sans-serif;
        }

        .brand-logo {
            font-size: 3rem;
            color: #ffffff;
            text-align: center;
            margin-top: 30px;
        }

        .brand-logo .fa-scissors {
            margin-right: 10px;
        }

        .register-container {
            margin-top: 50px;
            background: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .form-control:focus {
            border-color: #dd1818;
            box-shadow: 0 0 8px rgba(221, 24, 24, 0.4);
        }

        .btn-primary {
            background: #333333;
            border-color: #333333;
        }

        .btn-primary:hover {
            background: #dd1818;
            border-color: #dd1818;
        }

        .login-link {
            color: #dd1818;
            text-decoration: none;
        }

        .login-link:hover {
            text-decoration: underline;
        }

        .custom_back_icon {
            cursor: pointer;
        }

        .custom_back_icon:hover {
            transform: scale(1.1);
        }

        footer {
            margin-top: 50px;
            padding: 20px;
            background: #333333;
            color: #ffffff;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="brand-logo">
        <i class="fas fa-scissors"></i> LocalBarber
    </div>

    <div class="container d-flex justify-content-center p-5" style="margin-top: -75px;">
        <div class="register-container col-md-6 col-lg-4">
            <h2 class="text-center mb-4">Register</h2>

            <!-- Alert Success and Error Section (posisi di atas form) -->
            <?php if (session('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle"></i> <?= session('success'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <?php if (session('error')): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= session('error'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <!-- Register Form -->
            <form method="post" action="/storeuser">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control <?= session('errors.username') ? 'is-invalid' : ''; ?>"
                        id="username" name="username" value="<?= old('username'); ?>" placeholder="Masukkan Username" required>
                    <?php if (session('errors.username')): ?>
                        <div class="invalid-feedback">
                            <?= session('errors.username'); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control <?= session('errors.email') ? 'is-invalid' : ''; ?>"
                        id="email" name="email" value="<?= old('email'); ?>" placeholder="Masukkan Alamat Email" required>
                    <?php if (session('errors.email')): ?>
                        <div class="invalid-feedback">
                            <?= session('errors.email'); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control <?= session('errors.password') ? 'is-invalid' : ''; ?>"
                        id="password" name="password" placeholder="Masukkan Password" required>
                    <?php if (session('errors.password')): ?>
                        <div class="invalid-feedback">
                            <?= session('errors.password'); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>

            <div class="text-center mt-3">
                <p>Sudah punya akun?
                    <a href="<?= base_url('login'); ?>" class="login-link">Login</a>
                </p>
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-backspace custom_back_icon" viewBox="0 0 16 16" id="backIcon">
                    <path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z" />
                    <path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z" />
                </svg>
            </div>
        </div>
    </div>

    <!-- Footer Section (posisi di bawah container utama) -->
    <footer>
        <p>&copy; 2024 LocalBarber. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
<script>
    document.getElementById('backIcon').addEventListener('click', function() {
        history.back();
    });
</script>

</html>
