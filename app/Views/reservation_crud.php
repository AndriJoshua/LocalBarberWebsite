<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LocalBarber Web</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700%7CCabin:400%7CDancing+Script" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    <!-- Owl Carousel -->
    <link type="text/css" rel="stylesheet" href="<?= base_url('css/owl.carousel.css') ?>" />
    <link type="text/css" rel="stylesheet" href="<?= base_url('css/owl.theme.default.css') ?>" />
    <!-- Custom stylesheet -->
    <link type="text/css" rel="stylesheet" href="<?= base_url('css/style.css') ?>" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="<?= base_url('css/font-awesome.min.css') ?>">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <script src="<?= base_url('js/jquery.min.js') ?>"></script>

    <style>
        /* Tata Letak */
        body {
            font-family: 'Poppins', sans-serif;
        }

        header {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: #fff;
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }

        .container {
            padding-top: 20px;
        }

        h2.text-center {
            margin-bottom: 20px;
            font-weight: 700;
        }

        .table {
            margin-top: 20px;
            border-collapse: collapse;
            
        }

        .table th,
        .table td {
            text-align: center;
            vertical-align: middle;
        }

        /* Tombol */
        .btn-sm {
            font-size: 14px;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header id="header" style="position: sticky; top: 0; z-index: 1000; background: #fff; padding: 10px 0; border-bottom: 1px solid #ddd;">
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
                        <li><a href="<?= base_url('dashboard_user#about') ?>">About</a></li>
                        <li><a href="<?= base_url('dashboard_user#menu') ?>">Menu</a></li>
                        <li><a href="<?= base_url('dashboard_user#reservation') ?>">Reservation</a></li>
                        <li><a href="<?= base_url('dashboard_user#events') ?>">Events</a></li>
                        <li><a href="<?= base_url('dashboard_user#contact') ?>">Contact</a></li>
                    </ul>

                    <!-- User Profile dan Logout -->
                    <ul class="cta-nav nav navbar-nav" style="margin-right:40px">
                        <?php if (session()->get('logged_in')) : ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="display: flex; align-items: center;">
                                    <img src="<?= base_url(session()->get('foto_user') ?: '') ?>" alt=""
                                        style="width: 50px; height: 50px; border-radius: 100%;border:2px solid black; margin-right: 10px;">
                                    <span style="margin-right: 10px;"><?= session()->get('username') ?></span> <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= base_url('profile'); ?>">Lihat Profil</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?= base_url('logout'); ?>">Logout</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?= base_url('reservations-crud'); ?>">List Reservasi</a></li>
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

    <!-- Kontainer Utama -->
    <div class="container mt-5">
        <h2 class="text-center">Reservasi Anda</h2>

        <!-- Tabel Reservasi -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nomor HP</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="reservationTable">
                <!-- Data akan diisi melalui AJAX -->
            </tbody>
        </table>
    </div>

    <!-- Script untuk CRUD -->
    <script>
        $(document).ready(function() {
            const baseUrl = "<?= base_url() ?>";

            function fetchReservations() {
                $.get(`${baseUrl}/reservations`, function(data) {
                    let rows = "";

                    data.forEach((reservation, index) => {
                        let statusText = "";
                        if(reservation.status == 0){
                            statusText = "Pending";
                        }
                        if(reservation.status == 1){
                            statusText = "Diterina";
                        }
                        if(reservation.status == 2){
                            statusText = "Done Yak!!";
                        }

                        rows += `
                            <tr>
                                <td>${index + 1}</td>
                                <td>${reservation.name}</td>
                                <td>${reservation.phone}</td>
                                <td>${reservation.date}</td>
                                <td>${reservation.time}</td>
                                <td>${statusText}</td>

                                <td>
                                    <button class="btn btn-warning btn-sm" onclick="editReservation(${reservation.id})">Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="deleteReservation(${reservation.id})">Hapus</button>
                                </td>
                            </tr>
                        `;
                    });
                    $("#reservationTable").html(rows);
                });
            }

            window.deleteReservation = function(id) {
                if (confirm("Yakin ingin menghapus reservasi ini?")) {
                    $.ajax({
                        url: `${baseUrl}/reservations/${id}`,
                        type: "DELETE",
                        success: function() {
                            alert("Reservasi berhasil dihapus");
                            fetchReservations();
                        }
                    });
                }
            };

            window.editReservation = function(id) {
                alert("Fitur edit belum diimplementasikan sepenuhnya.");
            };

            fetchReservations();
        });
    </script>

    <footer id="footer" style="margin-top: 400px;">

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

    <!-- /Preloader -->
    <script type="text/javascript" src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/bootstrap.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/owl.carousel.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/main.js') ?>"></script>
</body>

</html>