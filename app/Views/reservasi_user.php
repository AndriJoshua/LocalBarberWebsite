<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi Saya</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Reservasi Anda</h2>

        <!-- Notifikasi -->
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <!-- Tabel Reservasi -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nomor HP</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($reservations)): ?>
                    <?php foreach ($reservations as $index => $reservation): ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= esc($reservation['name']) ?></td>
                            <td><?= esc($reservation['phone']) ?></td>
                            <td><?= esc($reservation['date']) ?></td>
                            <td><?= esc($reservation['time']) ?></td>
                            <td><?= esc($reservation['email']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">Belum ada reservasi.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
