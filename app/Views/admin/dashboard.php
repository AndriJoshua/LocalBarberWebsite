<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
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
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url('admin/reservations') ?>">Daftar Reservasi</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="btn btn-danger" href="<?= base_url('admin/logout') ?>">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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
        $(document).ready(function () {
            const baseUrl = "<?= base_url() ?>";

            // Fetch all reservations
            function fetchReservations() {
                $.get(`${baseUrl}/admin/api/reservations`, function (data) {
                    let rows = "";
                    data.forEach((reservation, index) => {
                        rows += `
                            <tr>
                                <td>${index + 1}</td>
                                <td>${reservation.name}</td>
                                <td>${reservation.email}</td>
                                <td>${reservation.phone}</td>
                                <td>${reservation.date}</td>
                                <td>${reservation.time}</td>
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
            window.deleteReservation = function (id) {
                if (confirm("Yakin ingin menghapus reservasi ini?")) {
                    $.ajax({
                        url: `${baseUrl}/admin/api/reservations/${id}`,
                        type: "DELETE",
                        success: function () {
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
</body>

</html>
