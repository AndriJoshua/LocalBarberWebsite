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

    <link type="text/css" rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    <link type="text/css" rel="stylesheet" href="<?= base_url('css/owl.carousel.css') ?>" />
    <link type="text/css" rel="stylesheet" href="<?= base_url('css/font-awesome.min.css') ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?= base_url('css/style.css') ?>" />


    <style>
        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
        }

        .profile-container {
            margin-top: 50px;
            background: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .profile-info {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .profile-info img {
                margin-bottom: 20px;
            }

            .profile-container {
                padding: 20px;
            }
        }

        @media (max-width: 480px) {
            .profile-container {
                padding: 15px;
            }

            .profile-info img {
                width: 80px;
                height: 80px;
            }

            .profile-info {
                gap: 10px;
            }
        }
    </style>


</head>

<body>

    <!-- Header -->
    <header id="header">

        <!-- Top nav -->
        <div id="top-nav">
            <div class="container">
                <div class="brand-logo" style="color: black;">
                    <i class="fas fa-scissors fa-2x"></i> LocalBarber
                </div>
                <button class="navbar-toggle">
                    <span></span>
                </button>
                <ul class="social-nav">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
        </div>

        <!-- Bottom nav -->
        <div id="bottom-nav">
            <div class="container">
                <nav id="nav">
                    <ul class="main-nav nav navbar-nav">
                        <li><a href="<?= base_url('dashboard_user') ?>">Home</a></li>
                        <li><a href="<?= base_url('test#about') ?>">About</a></li>
                        <li><a href="<?= base_url('test#menu') ?>">Menu</a></li>
                        <li><a href="<?= base_url('test#reservation') ?>">Reservation</a></li>
                        <li><a href="<?= base_url('test#events') ?>">Events</a></li>
                        <li><a href="<?= base_url('test#contact') ?>">Contact</a></li>
                    </ul>

                    <!-- User Profile dan Logout -->
                    <ul class="cta-nav nav navbar-nav" style="margin-right:40px">
                        <?php if (session()->get('logged_in')) : ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="display: flex; align-items: center;">
                                    <img src="<?= base_url('img/profile-picture.jpg') ?>" alt=""
                                        style="width: 50px; height: 50px; border-radius: 100%;border:2px solid black; margin-right: 10px;">
                                    <span style="margin-right: 10px;"><?= session()->get('username') ?></span> <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= base_url('profile'); ?>">Lihat Profil</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?= base_url('logout'); ?>">Logout</a></li>
                                </ul>
                            </li>
                        <?php else : ?>
                            <li><a href="<?= base_url('login'); ?>" class="main-button">Login</a></li>
                        <?php endif; ?>
                    </ul>
                    <!-- /User Profile and Logout -->


                </nav>
            </div>
        </div>

    </header>
    <!-- /Header -->

    <!-- form login -->


    <div id="home" class="banner-area" style="height:auto;display: flex; flex-direction: column; width: 100%; padding: 10px;">
        <div class="d-flex" style="display:flex; flex-direction:column; 
        border:5px; width: 100%; padding: 10px; flex-grow: 0;">

            <div class="container d-flex justify-content-center p-5" style="width: 100%; max-width: 600px; padding: 30px; border:5px;">
                <div class="profile-container col-md-12" style="width: 100%; max-width: 600px; padding: 50px;">
                    <h2>Profil</h2>
                    <div class="profile-info" style="display: flex; align-items: center; gap: 20px;">
                        <!-- Foto Profil -->
                        <img src="<?= base_url(session()->get('foto_user') ?: '') ?>"
                            alt=""
                            style="width: 100px; height: 100px; border-radius: 50%; border: 2px solid black;">

                        <!-- Informasi User -->
                        <div>
                            <p><strong>Username:</strong> <?= session()->get('username') ?></p>
                            <p><strong>Email:</strong> <?= session()->get('user_email') ?></p>
                            

                        </div>
                    </div>

                    <!-- Form Ubah Username -->
                    <form action="<?= base_url('/UpdateUsername') ?>" method="POST" style="margin-top: 20px;">
                        <label for="username">Ubah Username:</label>
                        <input type="text" id="username" name="username" value="<?= session()->get('username') ?>" required>
                        <button type="submit">Simpan</button>
                    </form>

                    <!-- Form Ubah Foto Profil -->
                    <form action="<?= base_url('/updatePhoto') ?>" method="POST" enctype="multipart/form-data" style="margin-top: 20px;">
                        <label for="photo">Ubah Foto Profil:</label>
                        <input type="file" id="photo" name="photo" accept="image/*" required>
                        <button type="submit">Upload</button>
                    </form>
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




</html>