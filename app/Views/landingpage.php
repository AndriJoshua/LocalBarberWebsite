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
                    <a href="index.html#menu"><button class="main-button">Discover Menu</button></a>
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
                    <h4 class="lead">Welcome to Risotto Restaurant. Since 1988, Offering Traditional Dishes of the highest quality.</h4>
                </div>
                <!-- /about content -->

                <!-- about content -->
                <div class="col-md-7">
                    <p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu. Iusto mediocrem iudicabit ea eos, nemore offendit detraxit ei cum. Oblique conclusionemque qui cu, eum no sonet putant. Eos cu nulla vidisse. Mazim oporteat eam ex, his ei audiam audire, affert corrumpit pri cu.</p>
                </div>
                <!-- /about content -->

                <!-- Gallery Slider -->
                <div class="col-md-12">
                    <div id="Gallery" class="owl-carousel owl-theme">

                        <!-- single column -->
                        <div class="Gallery-item">

                            <!-- single image -->
                            <div class="Gallery-img" style="background-image:url(./img/image01.jpg)"></div>
                            <!-- /single image -->

                        </div>
                        <!-- single column -->

                        <!-- single column -->
                        <div class="Gallery-item">

                            <!-- single image -->
                            <div class="Gallery-img" style="background-image:url(./img/image02.jpg)"></div>
                            <!-- /single image -->

                            <!-- single image -->
                            <div class="Gallery-img" style="background-image:url(./img/image03.jpg)"></div>
                            <!-- /single image -->

                        </div>
                        <!-- single column -->

                        <!-- single column -->
                        <div class="Gallery-item">

                            <div class="item-column">
                                <!-- single image -->
                                <div class="Gallery-img" style="background-image:url(./img/image04.jpg)"></div>
                                <!-- /single image -->

                                <!-- single image -->
                                <div class="Gallery-img" style="background-image:url(./img/image05.jpg)"></div>
                                <!-- /single image -->
                            </div>

                            <div class="item-column">
                                <!-- single image -->
                                <div class="Gallery-img" style="background-image:url(./img/image06.jpg)"></div>
                                <!-- /single image -->

                                <!-- single image -->
                                <div class="Gallery-img" style="background-image:url(./img/image07.jpg)"></div>
                                <!-- /single image -->
                            </div>

                        </div>
                        <!-- /single column -->

                    </div>
                </div>
                <!-- /Gallery Slider -->


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
                    <h2 class="title white-text">Our Menu</h2>
                </div>

                <!-- menu nav -->
                <ul class="menu-nav">
                    <li class="active"><a data-toggle="tab" href="#menu1">Dinner</a></li>
                    <li><a data-toggle="tab" href="#menu1">Drinks</a></li>
                    <li><a data-toggle="tab" href="#menu1">Launch</a></li>
                    <li><a data-toggle="tab" href="#menu1">Dessert</a></li>
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
                                    <h4 class="name">Basted Rhubarb Mussels</h4>
                                    <h4 class="price">57£</h4>
                                </div>
                                <p>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</p>
                            </div>
                            <!-- /single dish -->

                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Steamed Chili Moussaka</h4>
                                    <h4 class="price">145£</h4>
                                </div>
                                <p>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</p>
                            </div>
                            <!-- /single dish -->

                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Blanched Fennel & Orange Lasagna</h4>
                                    <h4 class="price">79£</h4>
                                </div>
                                <p>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</p>
                            </div>
                            <!-- /single dish -->

                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Slow-Cooked Basil & Lime Ostrich</h4>
                                    <h4 class="price">57£</h4>
                                </div>
                                <p>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</p>
                            </div>
                            <!-- /single dish -->

                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Stuffed Oregano Chicken</h4>
                                    <h4 class="price">145£</h4>
                                </div>
                                <p>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</p>
                            </div>
                            <!-- /single dish -->

                        </div>

                        <div class="col-md-6">

                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Pressure-Fried Asparagus Chicken</h4>
                                    <h4 class="price">57£</h4>
                                </div>
                                <p>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</p>
                            </div>
                            <!-- /single dish -->

                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Tenderized Egg & Coconut Duck</h4>
                                    <h4 class="price">87£</h4>
                                </div>
                                <p>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</p>
                            </div>
                            <!-- /single dish -->

                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Milk Chocolate Gingerbread</h4>
                                    <h4 class="price">155£</h4>
                                </div>
                                <p>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</p>
                            </div>
                            <!-- /single dish -->

                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Simmered Mango & Pine Rabbit</h4>
                                    <h4 class="price">57£</h4>
                                </div>
                                <p>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</p>
                            </div>
                            <!-- /single dish -->

                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Red Wine Surprise</h4>
                                    <h4 class="price">87£</h4>
                                </div>
                                <p>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</p>
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
                    <form class="reserve-form row">
                        <div class="section-header text-center">
                            <h4 class="sub-title">Reservation</h4>
                            <h2 class="title white-text">Book Your Table</h2>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input class="input" type="text" placeholder="Name" id="name">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone:</label>
                                <input class="input" type="tel" placeholder="Phone" id="phone">
                            </div>
                            <div class="form-group">
                                <label for="date">Date:</label>
                                <input class="input" type="text" placeholder="MM/DD/YYYY" id="date">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input class="input" type="email" placeholder="Email" id="email">
                            </div>
                            <div class="form-group">
                                <label for="number">Number of Guests:</label>
                                <select class="input" id="number">
                                    <option>1 Person</option>
                                    <option>2 People</option>
                                    <option>3 People</option>
                                    <option>4 People</option>
                                    <option>5 People</option>
                                    <option>6 People</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="time">Time:</label>
                                <input class="input" type="text" placeholder="HH:MM" id="time">
                            </div>
                        </div>

                        <<div class="col-md-12 text-center">
                            <a href="<?= base_url('booking'); ?>" class="main-button">Book Now</a>
                </div>



                </form>
            </div>
            <!-- /reservation form -->

            <!-- opening time -->
            <div class="col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1">
                <div class="opening-time row">
                    <div class="section-header text-center">
                        <h2 class="title white-text">Opening Time</h2>
                    </div>
                    <ul>
                        <li>
                            <h4 class="day">Sunday</h4>
                            <h4 class="hours">8:00 am – 11:00 pm</h4>
                        </li>
                        <li>
                            <h4 class="day">Monday</h4>
                            <h4 class="hours">8:00 am – 11:00 pm</h4>
                        </li>
                        <li>
                            <h4 class="day">Tuesday</h4>
                            <h4 class="hours">8:00 am – 11:00 pm</h4>
                        </li>
                        <li>
                            <h4 class="day">Wednesday</h4>
                            <h4 class="hours">8:00 am – 11:00 pm</h4>
                        </li>
                        <li>
                            <h4 class="day">Thursday</h4>
                            <h4 class="hours">8:00 am – 11:00 pm</h4>
                        </li>
                        <li>
                            <h4 class="day">Friday</h4>
                            <h4 class="hours">Closed</h4>
                        </li>
                        <li>
                            <h4 class="day">Saturday</h4>
                            <h4 class="hours">Closed</h4>
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
                        <h4 class="sub-title">Contact Us</h4>
                        <h2 class="title">Get In Touch</h2>
                    </div>
                    <div class="contact-content">
                        <p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu. Iusto mediocrem iudicabit ea eos, nemore offendit detraxit ei cum.</p>
                        <h3>Tel: <a href="#">045-548-14-97</a></h3>
                        <p>Address: 3685 Granville Lane</p>
                        <p>Email: <a href="#">Risotto@email.com</a></p>
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