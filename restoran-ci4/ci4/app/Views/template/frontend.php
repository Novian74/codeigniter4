<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoran Rahmandha | Aplikasi Restoran</title>
    <link rel="stylesheet" href="<?= base_url('/bootstrap/css/bootstrap.min.css') ?>">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2 class="mt-3"><a href="index.php" class="link-dark" style="text-decoration:none">Restoran Rahmandha</a></h2>
            </div>
            <?php if (!empty(session()->get('email'))) {
                echo '<div class="col-md-8 mt-2">
                <div class="float-end mt-3 ms-4"><a href='.base_url('/logout').'>Logout</a></div>
                <div class="float-end mt-3">Pelanggan : ';
                echo session()->get('email');
                
                echo '</div>';
                
                echo '</div>';
            } else {
                echo '<div class="col-md-8">
                <div class="float-end mt-3 ms-4"><a href='.base_url('/login').'>Login</a></div>
                <div class="float-end mt-3 ms-4"><a href='.base_url('/daftar').'>Daftar</a></div>
            </div>';
            } ?>

        </div>
        <div class="row mt-4">
            <div class="col-3">
                <h3>Kategori</h3>
                <hr class="w-75">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/buah') ?>">Buah</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/dessert') ?>">Dessert</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/jajan') ?>">Jajan</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/makanan') ?>">Makanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/minuman') ?>">Minuman</a></li>
                    </nav>
            </div>
            <div class="col-8">
                <?= $this->renderSection('depan') ?>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <p class="text-center"> 2022 - Copyright@Novian.com</p>
                </div>
            </div>
        </div>
</body>

</html>