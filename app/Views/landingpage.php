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

    <!-- Home -->
    <div id="home" class="banner-area">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url(./img/background02.jpg)"></div>
        <!-- /Backgound Image -->

        <div class="home-wrapper">

            <div class="col-md-10 col-md-offset-1 text-center">
                <div class="home-content">
                    <h1 class="white-text">Selamat Datang Di LocalBarber</h1>
                    <h4 class="white-text lead" style="font-family:'Poppins',sans-serif;">Tempat terbaik untuk gaya rambut modern,
                        perawatan premium, dan pengalaman santai yang membuat Anda tampil percaya diri setiap hari!</h4>
                    <a href="test#menu"><button class="main-button">Discover Model</button></a>
                </div>
            </div>

        </div>

    </div>
    <!-- /Home -->

    <!-- About -->
    <div id="about" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- section header -->
                <div class="section-header text-center">
                    <h4 class="sub-title">About Us</h4>
                    <h2 class="title">LocalBarber</h2>
                </div>
                <!-- /section header -->

                <!-- about content -->
                <div class="col-md-5">
                    <h4 class="lead">Selamat Datang di lokalbarber.Berdiri sejak 2010 Tempat terbaik untuk gaya rambut modern, perawatan premium, dan pengalaman santai yang membuat Anda tampil percaya diri setiap hari!.</h4>
                </div>
                <!-- /about content -->

                <!-- about content -->
                <div class="col-md-7">
                    <p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu. Iusto mediocrem iudicabit ea eos, nemore offendit detraxit ei cum. Oblique conclusionemque qui cu, eum no sonet putant. Eos cu nulla vidisse. Mazim oporteat eam ex, his ei audiam audire, affert corrumpit pri cu.</p>
                </div>
                <!-- /about content -->
            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /About -->


    <!-- Menu -->
    <div id="menu" class="section">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url(./img/background01.jpg)"></div>
        <!-- /Backgound Image -->

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <div class="section-header text-center">
                    <h4 class="sub-title">Discover</h4>
                    <h2 class="title white-text">Potongan Rambut</h2>
                </div>

                <!-- menu nav -->
                <ul class="menu-nav">
                    <li class="active"><a data-toggle="tab" href="#menu1">Model</a></li>
                </ul>
                <!-- /menu nav -->

                <!-- menu content -->
                <div id="menu-content" class="tab-content">

                    <!-- menu1 -->
                    <div id="menu1" class="tab-pane fade in active">
                        <div class="col-md-6">

                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Undercut</h4>
                                    <h4 class="price">Rp30.000</h4>
                                </div>
                                <p>Rambut bagian atas dibiarkan lebih panjang, sementara bagian samping dan belakang dicukur pendek.
                                    Cocok untuk tampilan modern dan edgy..</p>
                            </div>
                            <!-- /single dish -->

                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Pompadour</h4>
                                    <h4 class="price">Rp30.000</h4>
                                </div>
                                <p>Rambut bagian atas ditata tinggi ke belakang menggunakan pomade, sementara sisi rambut dipotong lebih pendek.
                                    Tampilan klasik dan elegan..</p>
                            </div>
                            <!-- /single dish -->

                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Crew Cut</h4>
                                    <h4 class="price">Rp30.000</h4>
                                </div>
                                <p>Rambut bagian atas dipotong pendek tetapi sedikit lebih panjang dari buzz cut, dengan sisi lebih pendek.
                                    Memberikan tampilan rapi dan profesional.</p>
                            </div>
                            <!-- /single dish -->

                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Fade</h4>
                                    <h4 class="price">Rp30.000</h4>
                                </div>
                                <p>Rambut memudar secara bertahap dari atas ke bawah, mulai dari tebal hingga hampir habis di bagian bawah.
                                    Variasi: Low Fade, Mid Fade, High Fade, Skin Fade.</p>
                            </div>
                            <!-- /single dish -->

                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Buzz Cut</h4>
                                    <h4 class="price">Rp30.000</h4>
                                </div>
                                <p>Potongan rambut sangat pendek, biasanya menggunakan clipper dengan panjang yang sama.
                                    Mudah dirawat dan cocok untuk tampilan minimalis.</p>
                            </div>
                            <!-- /single dish -->

                        </div>

                        <div class="col-md-6">

                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">French Crop</h4>
                                    <h4 class="price">Rp30.000</h4>
                                </div>
                                <p>Bagian atas rambut dipotong pendek dengan poni depan pendek, sementara sisi rambut dipotong rapi.
                                    Tampilan modern yang mudah dirawat.</p>
                            </div>
                            <!-- /single dish -->

                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Quiff</h4>
                                    <h4 class="price">Rp30.000</h4>
                                </div>
                                <p>Mirip pompadour, tetapi dengan gaya lebih kasual. Rambut ditata tinggi di bagian depan dan lebih santai di bagian belakang.</p>
                            </div>
                            <!-- /single dish -->

                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Man Bun</h4>
                                    <h4 class="price">Rp30.000</h4>
                                </div>
                                <p>Rambut panjang yang dikuncir menjadi bun di bagian belakang kepala.
                                    Cocok untuk pria dengan rambut panjang.</p>
                            </div>
                            <!-- /single dish -->

                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Mullet</h4>
                                    <h4 class="price">Rp30.000</h4>
                                </div>
                                <p>Rambut bagian depan dan samping pendek, sementara bagian belakang dibiarkan panjang.
                                    Kesan retro yang kembali populer.</p>
                            </div>
                            <!-- /single dish -->

                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Taper Cut</h4>
                                    <h4 class="price">Rp30.000</h4>
                                </div>
                                <p>Rambut bagian atas panjang, secara bertahap menjadi lebih pendek ke bawah..</p>
                            </div>
                            <!-- /single dish -->

                        </div>

                    </div>
                    <!-- /menu1 -->

                </div>
                <!-- /menu content -->

            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /Menu -->

    <!-- Reservation -->
    <div id="reservation" class="section">

        <!-- Backgound Image -->
        <div class="bg-image" style="background-image:url(./img/background03.jpg)"></div>
        <!-- /Backgound Image -->

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- reservation form -->
                <div class="col-md-6 col-md-offset-1 col-sm-10 col-sm-offset-1">
                    <form class="reserve-form row" method="POST" action="<?= base_url('/reservations/store') ?>">
                        <div class="section-header text-center">
                            <h4 class="sub-title">Reservation</h4>
                            <h2 class="title white-text">Buat Reservasi</h2>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Nama:</label>
                                <input class="input" type="text" placeholder="Name" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Nomor Hp:</label>
                                <input class="input" type="tel" placeholder="Phone" id="phone" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="date">Tanggal:</label>
                                <input class="input" type="date" id="date" name="date" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="time">Waktu:</label>
                                <input class="input" type="time" id="time" name="time" required>
                            </div>
                        </div>

                        <div class="col-md-12 text-center">
                            <a href="<?= base_url('booking'); ?>" class="main-button">Pesan Sekarang</a>
                        </div>



                    </form>
                </div>
                <!-- /reservation form -->

                <!-- opening time -->
                <!-- Jam Operasional -->
                <div class="col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1">
                    <div class="opening-time row">
                        <div class="section-header text-center">
                            <h2 class="title white-text">Jam Operasional</h2>
                        </div>
                        <ul>
                            <li>
                                <h4 class="day">Minggu</h4>
                                <h4 class="hours">8:00 am – 11:00 pm</h4>
                            </li>
                            <li>
                                <h4 class="day">Senin</h4>
                                <h4 class="hours">8:00 am – 11:00 pm</h4>
                            </li>
                            <li>
                                <h4 class="day">Selasa</h4>
                                <h4 class="hours">8:00 am – 11:00 pm</h4>
                            </li>
                            <li>
                                <h4 class="day">Rabu</h4>
                                <h4 class="hours">8:00 am – 11:00 pm</h4>
                            </li>
                            <li>
                                <h4 class="day">Kamis</h4>
                                <h4 class="hours">8:00 am – 11:00 pm</h4>
                            </li>
                            <li>
                                <h4 class="day">Jumat</h4>
                                <h4 class="hours">8:00 am – 11:00 pm</h4>
                            </li>
                            <li>
                                <h4 class="day">Sabtu</h4>
                                <h4 class="hours">8:00 am – 9:00 pm</h4>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /opening time -->

            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /Reservation -->

    <!-- Events -->

    <!-- /Events -->

    <!-- Contact -->
    <div id="contact" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <div class="col-md-5 col-md-offset-7">
                    <div class="section-header">
                        <h4 class="sub-title">Hubungi Kami</h4>
                        <h2 class="title">!!!</h2>
                    </div>
                    <div class="contact-content">
                        <p>Untuk informasi lebih lanjut silahkan hubugi kami</p>
                        <h3>Tel: <a href="#">045-548-14-97</a></h3>
                        <p>Alamat : Jalan Basuki Rahmat</p>
                        <p>Email: <a href="#">Localbarber@email.com</a></p>
                        <ul class="list-inline">
                            <li>
                                <p>Follow Us:</p>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

        <!-- map -->
        <div id="map">

        </div>
        <!-- /map -->

    </div>
    <!-- Contact -->

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

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script>
    // Langkah 2: Buat peta dan atur tampilan awal
    var map = L.map('map').setView([0.9070766970559209, 104.45961141947853], 13); // Koordinat dan zoom level

    // Langkah 3: Tambahkan layer peta dari OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    //0.9070572534777642, 104.45961276058307
    // Langkah 4: Tambahkan marker
    L.marker([0.9070572534777642, 104.45961276058307]).addTo(map)
        .bindPopup("<b>Ayo Kesini!!</b><br>Disini Lokasinya.")
        .openPopup();
</script>


</html>