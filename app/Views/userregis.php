<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>LocalBarber Web</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700%7CCabin:400%7CDancing+Script" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Owl Carousel -->
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
    <link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <!-- Barber Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    <style>
        body {
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

        .login-container {
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

        .register-link {
            color: #dd1818;
            text-decoration: none;
        }

        .register-link:hover {
            text-decoration: underline;
        }

        .custom_back_icon {
            cursor: pointer;
        }

        .custom_back_icon:hover {
            transform: scale(1.1);
        }
    </style>

</head>

<body>

    <!-- Header -->
    <header id="header">

        <!-- Top nav -->
        <div id="top-nav">
            <div class="container">

                <!-- logo -->
                <div class="brand-logo" style="color: black;">
                    <i class="fas fa-scissors fa-2x"></i> LocalBarber
                </div>
                <!-- logo -->

                <!-- Mobile toggle -->
                <button class="navbar-toggle">
                    <span></span>
                </button>
                <!-- Mobile toggle -->

                <!-- social links -->
                <ul class="social-nav">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
                <!-- /social links -->

            </div>
        </div>
        <!-- /Top nav -->

        <!-- Bottom nav -->
        <div id="bottom-nav">
            <div class="container">
                <nav id="nav">

                    <!-- nav -->
                    <ul class="main-nav nav navbar-nav">
                        <li><a href="<?= base_url('test') ?>">Home</a></li>
                        <li><a href="<?= base_url('test#about') ?>">About</a></li>
                        <li><a href="<?= base_url('test#menu') ?>">Menu</a></li>
                        <li><a href="<?= base_url('test#reservation') ?>">Reservation</a></li>
                        <!-- <li><a href="<?= base_url('test#gallery') ?>">Gallery</a></li> -->
                        <li><a href="<?= base_url('test#events') ?>">Events</a></li>
                        <li><a href="<?= base_url('test#contact') ?>">Contact</a></li>
                    </ul>

                    <!-- /nav -->

                    <!-- button nav -->
                    <ul class="cta-nav">
                        <li><a href="<?= base_url('booking'); ?>" class="main-button">Login</a></li>
                    </ul>
                    <!-- button nav -->

                    <!-- contact nav -->
                    <ul class="contact-nav nav navbar-nav">
                        <li><a href="tel:0455481497"><i class="fa fa-phone"></i> 0812-2222-2222</a></li>
                        <li><a href="#"><i class="fa fa-map-marker"></i>Jalan Basuki Rahmat</a></li>
                    </ul>
                    <!-- contact nav -->

                </nav>
            </div>
        </div>
        <!-- /Bottom nav -->


    </header>
    <!-- /Header -->

    <!-- form login -->


    <div id="home" class="banner-area" style="height:auto; display: flex; flex-direction: column; width: 100%; padding: 10px;">
        <div class="d-flex" style="display: flex; flex-direction: column; 
        border: 5px; width: 100%; padding: 10px; flex-grow: 0; 
        justify-content: center; align-items: center; min-height: 100vh;">

            <div class="container d-flex justify-content-center align-items-center p-5" style="width: 100%; max-width: 500px;">
                <div class="register-container col-md-12" style="width: 100%; background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
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
                    <form method="post" action="/api/auth/register">
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

                        <div class="d-grid" style="margin-top:10px;">
                            <button type="submit" class="btn btn-primary" style="width: 100%;">Register</button>
                        </div>
                    </form>   

                    <div class="text-center mt-3">
                        <p>Sudah punya akun?
                            <a href="<?= base_url('booking'); ?>" class="login-link">Login</a>
                        </p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-backspace custom_back_icon" viewBox="0 0 16 16" id="backIcon">
                            <path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z" />
                            <path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z" />
                        </svg>
                    </div>
                </div>
            </div>

        </div>
    </div>





    <!-- Footer -->
    <footer id="footer">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- copyright -->
                <div class="col-md-6">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <span class="copyright">Copyright @2024 All rights reserved | LocalBarber Web <a href="#" target="_blank" style="color: blue;">Kelompok Barber 4</a></span>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
                <!-- /copyright -->

                <!-- footer nav -->
                <div class="col-md-6">
                    <nav class="footer-nav">
                        <a href="index.html">Home</a>
                        <a href="index.html#about">About</a>
                        <a href="index.html#menu">Menu</a>
                        <a href="index.html#reservation">Reservation</a>
                        <a href="index.html#events">Events</a>
                        <a href="index.html#contact">Contact</a>
                    </nav>
                </div>
                <!-- /footer nav -->

            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </footer>
    <!-- /Footer -->

    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- /Preloader -->

    <!-- jQuery Plugins -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>

    <script type="text/javascript" src="js/main.js"></script>

</body>
<script>
    document.querySelector('form').addEventListener('submit', async function (event) {
        event.preventDefault();

        // Ambil data dari form
        const formData = new FormData(event.target);
        const data = Object.fromEntries(formData.entries());

        try {
            const response = await fetch('/api/auth/register', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(data)
            });

            const result = await response.json();

            if (response.status === 201) {
                // Tampilkan pesan sukses
                alert(result.message);
                window.location.href = '/login'; // Redirect ke halaman login
            } else {
                // Tampilkan error
                console.log(result);
                alert('Error: ' + JSON.stringify(result.messages || result.message));
            }
        } catch (error) {
            console.error('Terjadi kesalahan:', error);
            alert('Terjadi kesalahan saat mengirim data.');
        }
    });
</script>




</html>