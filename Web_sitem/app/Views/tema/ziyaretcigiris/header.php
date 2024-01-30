<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notalardan Melodiye</title>
    <!-- Google fonts -->
    <link href=<?= base_url() ?>//fonts.googleapis.com/css2?family=Londrina+Outline&display=swap" rel="stylesheet">
    <!-- Template CSS Style link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style-starter.css">

</head>

<body>
    <!-- top header -->
    <section class="w3l-top-header">
        <div class="container">
            <div class="top-content-w3ls d-flex align-items-center justify-content-between">
                <div class="top-headers">
                    <ul>
                        <li>
                            <p class="d-md-block d-none">Ömer Balkaya</p>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i><a href="tel:+90(555) 087 36 16">+90 555 087 36 16</a>
                        </li>
                        <li class="me-0">
                            <i class="fa fa-envelope"></i><a href="mailto:mail@gmail.com">balkayaomer26@gmail.com</a>
                        </li>
                    </ul>
                </div>
                <div class="top-headers top-headers-2">
                    <ul>
                        <li>
                            <a href="#facebook"><span class="fab fa-facebook-f"></span></a>
                        </li>
                        <li>
                            <a href="#twitter"><span class="fab fa-twitter"></span></a>
                        </li>
                        <li>
                            <a href="#instagram"><span class="fab fa-instagram""></span></a>
                    </li>
                    <li class=" me-0">
                                    <a href="#linkedin"><span class="fab fa-linkedin-in"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- //top header -->
    <!-- header -->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="<?= base_url() ?>">
                    <h1>Notalarım</h1>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Ana Sayfa</a>
                        </li>
                        <li class="nav-item">
                            <?= anchor('#about', 'Hakkında', ['class' => 'nav-link']); ?>
                            <!-- <a class="nav-link" href="<?= base_url() ?>#about">Hakkında</a> -->
                        </li>
                        <li class="nav-item">
                            <?= anchor('#enstruman', 'Enstruman', ['class' => 'nav-link']); ?>
                            <!-- <a class="nav-link" href="<?= base_url() ?>#enstruman">Enstruman</a> -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('login') ?>">Panel</a>
                        </li>
                        <?php
                        if (isset($durum) && $durum) {
                        ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('logout') ?>">Çıkış</a>
                            </li>
                        <?php
                        } else {
                        ?>

                        <?php
                        }
                        ?>
                    </ul>
                    <form action="#error" method="GET" class="d-flex search-header ms-lg-2">
                        <input class="form-control" type="search" placeholder="Ara..." aria-label="Search" required>
                        <button class="btn btn-style" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <!-- toggle switch for light and dark theme -->

                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!-- //header -->