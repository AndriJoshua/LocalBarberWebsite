<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
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
    <!-- Custom stlylesheet -->

    <!-- Barber Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        /* Custom navbar styles */
        .navbar {
            background-color: #343a40;
            padding: 10px 20px;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #ffffff;
        }

        .navbar-nav .nav-link {
            color: #ffffff;
            font-size: 1rem;
            margin-right: 15px;
        }

        .navbar-nav .nav-link.active {
            font-weight: bold;
            border-bottom: 2px solid #ffc107;
        }

        .navbar-nav .btn {
            padding: 5px 15px;
            font-size: 1rem;
        }

        .table th,
        .table td {
            vertical-align: middle;
            text-align: center;
        }

        h2.text-center {
            margin-bottom: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <header id="header" style="position: sticky; top: 0; z-index: 1000; background: #fff; padding: 10px 0; border-bottom: 1px solid #ddd;">

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
                        <li><a href="<?= base_url('/admin/dashboard') ?>">Daftar_reservasi</a></li>
                    </ul>

                    <!-- /nav -->

                    <!-- button nav -->
                    <ul class="cta-nav">
                        <li><a href="<?= base_url('admin/logout'); ?>" class="main-button">Logout</a></li>
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
    <!-- Main Content -->
    <div class="container mt-5">
        <h2 class="text-center">Daftar Reservasi</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
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

            // Fetch all reservations
            function fetchReservations() {
                $.get(`${baseUrl}/admin/api/reservations`, function(data) {
                    let rows = "";
                    data.forEach((reservation, index) => {
                        let statusText = "";
                        if(reservation.status == 0){
                            statusText = "Pending";
                        }
                        if(reservation.status == 1){
                            statusText = "Disetujui";
                        }
                        if(reservation.status == 2){
                            statusText = "Done Yak!!"
                        }
                        rows += `
                            <tr>
                                <td>${index + 1}</td>
                                <td>${reservation.name}</td>
                                <td>${reservation.email}</td>
                                <td>${reservation.phone}</td>
                                <td>${reservation.date}</td>
                                <td>${reservation.time}</td>
                                <td>${statusText}</td>
                                <td>
                                    <button class="btn btn-danger btn-sm" onclick="deleteReservation(${reservation.id})">Hapus</button>
                                </td>
                            </tr>
                        `;
                    });
                    $("#reservationTable").html(rows);
                });
            }

            // Delete a reservation
            window.deleteReservation = function(id) {
                if (confirm("Yakin ingin menghapus reservasi ini?")) {
                    $.ajax({
                        url: `${baseUrl}/admin/api/reservations/${id}`,
                        type: "DELETE",
                        success: function() {
                            alert("Reservasi berhasil dihapus");
                            fetchReservations();
                        }
                    });
                }
            };

            // Fetch reservations on page load
            fetchReservations();
        });
    </script>
    
    <script type="text/javascript" src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/bootstrap.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/owl.carousel.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/main.js') ?>"></script>
</body>

</html>