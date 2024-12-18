<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Buat Reservasi</h2>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('errors')): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach (session()->getFlashdata('errors') as $error): ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('/reservations/store') ?>" method="post" class="row g-3">
            <div class="col-md-6">
                <label for="name" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nama">
            </div>
            <div class="col-md-6">
                <label for="phone" class="form-label">Nomor HP:</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Nomor HP">
            </div>
            <div class="col-md-6">
                <label for="date" class="form-label">Tanggal:</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="col-md-6">
                <label for="time" class="form-label">Waktu:</label>
                <input type="time" class="form-control" id="time" name="time">
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
            </div>
        </form>
    </div>
</body>

</html>
