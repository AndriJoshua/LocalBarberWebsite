<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

    <!-- HTML5 shim and Respond.js for IE8 support -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                        <li><a href="<?= base_url('test') ?>">Home</a></li>
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

    <!-- Home -->
    <div id="home" class="banner-area">
        <div class="bg-image bg-parallax overlay" style="background-image:url(./img/background02.jpg)"></div>
        <div class="home-wrapper">
            <div class="col-md-10 col-md-offset-1 text-center">
                <div class="home-content">
                    <h1 class="white-text">Selamat Datang Di LocalBarber</h1>
                    <h4 class="white-text lead" style="font-family:'Poppins',sans-serif;">Tempat terbaik untuk gaya rambut modern,
                        perawatan premium, dan pengalaman santai yang membuat Anda tampil percaya diri setiap hari!</h4>
                    <a href="index.html#menu"><butt on class="main-button">Discover Menu</button></a>
                </div>
            </div>
        </div>
    </div>
                          
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>
