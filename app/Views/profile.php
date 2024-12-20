<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LocalBarber Web</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700%7CCabin:400%7CDancing+Script" rel="stylesheet">

    <!-- CSS Files -->
    <link type="text/css" rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    <link type="text/css" rel="stylesheet" href="<?= base_url('css/style.css') ?>" />

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9f9f9;
        }

        .profile-container {
            margin: 50px auto;
            background: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            max-width: 600px;
        }

        .profile-info {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .profile-info img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 2px solid black;
        }

        .profile-info div {
            flex: 1;
        }

        .form-control {
            margin-bottom: 15px;
        }

        .btn-primary {
            background-color: #333;
            border: none;
        }

        .btn-primary:hover {
            background-color: #dd1818;
        }

        .form-group label {
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .profile-info {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .profile-info img {
                margin-bottom: 15px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="profile-container">
            <h2 class="text-center">Profil Pengguna</h2>
            <div class="profile-info">
                <!-- Foto Profil -->
                <img src="<?= base_url(session()->get('foto_user') ?: 'default.png') ?>" alt="Foto Profil">

                <!-- Informasi User -->
                <div>
                    <p><strong>Username:</strong> <?= session()->get('username') ?></p>
                    <p><strong>Email:</strong> <?= session()->get('user_email') ?></p>
                </div>
            </div>

            <!-- Form Ubah Username -->
            <form action="<?= base_url('/UpdateUsername') ?>" method="POST">
                <div class="form-group">
                    <label for="username">Ubah Username:</label>
                    <input type="text" id="username" name="username" class="form-control" value="<?= session()->get('username') ?>" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            </form>

            <!-- Form Ubah Foto Profil -->
            <form action="<?= base_url('/updatePhoto') ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="photo">Ubah Foto Profil:</label>
                    <input type="file" id="photo" name="photo" class="form-control" accept="image/*" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Upload Foto</button>
            </form>

            <!-- Logout -->
            <form action="<?= base_url('/logout') ?>" method="GET">
                <button type="submit" class="btn btn-danger btn-block">Logout</button>
            </form>
        </div>
    </div>

    <!-- JS Files -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>

</html>
