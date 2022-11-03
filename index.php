<?php require __DIR__ . '/load.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok</title>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="src/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/css/style.css">
</head>

<body class="bg-white">
<header>

    <nav class="navbar navbar-nav bg-nav">
        <div class="container-fluid justify-content-start">
            <span class="circleBase circle-1 me-2 nav-item"></span>
            <span class="circleBase circle-2 me-2"></span>
            <span class="circleBase circle-3"></span>
            <a href="#" class="title-kelompok-0">KELOMPOK SUMARLI</a>
            <a href="#" class="title-kelompok">KELOMPOK SUMARLI</a>
        </div>
    </nav>
</header>
<main>
    <div class="container-fluid">
        <div class="container">
            <div class="card-text bg-light text-center rounded-5 ">
                <span class="banner-anggota">Anggota <i>Kelompok</i></span>
            </div>

            <div class="row g-5 p-3">

                <?php  foreach ($model as $key => $item) : ?>
                <div class="col-lg-4">
                    <a href="portofolio.php?id=<?= $key ?>" class="cn-hover btn-link card">
                        <div class="p-2 bg-light">
                            <div class="row row-cols-auto">
                                <div class="col text-center m-auto">
                                    <img src="<?= $item['photo'] ?>" alt="" srcset="">
                                </div>
                                <div class="col m-auto">
                                    <span class="i-header">NAMA</span><span class="t2-nama">:</span>&nbsp;&nbsp;<span
                                            class="info"><?= $item['nama'] ?></span>
                                    <br>
                                    <span class="i-header">NIM</span><span class="t2-nim">:</span>&nbsp;&nbsp;<span
                                            class="info"><i><?= $item['nim'] ?></i></span>
                                    <br>
                                    <span class="i-header">KELAS</span><span class="t2-kls">:</span>&nbsp;&nbsp;<span
                                            class="info"><?= $item['kelas'] ?></span>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>


            </div>
        </div>
    </div>
</main>

<script src="src/js/bootstrap.bundle.min.js"></script>
</body>

</html>