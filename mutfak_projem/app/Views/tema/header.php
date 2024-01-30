<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dünya Mutfağı Projem</title>
    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style-starter.css">
</head>

<body>
<!-- header -->
<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">

            <a class="navbar-brand" href="<?= base_url() ?>">Dünya Mu<i class="fas fa-utensil-spoon"></i>fağı
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= base_url() ?>">Ana Sayfa</a>
                    </li>
                    <li class="nav-item">
                        <?= anchor('#hakkında', 'Daha Fazla', ['class' => 'nav-link']); ?>
                        <!-- <a class="nav-link" href="<?= base_url() ?>#hakkında"></a> -->
                    </li>
                    <li class="nav-item">
                        <?= anchor('#mutfak', 'Mutfaklar', ['class' => 'nav-link']); ?>
                        <!-- <a class="nav-link" href="<?= base_url() ?>#mutfak"></a> -->
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
                <!-- search-right -->
                <div class="header-search position-relative">
                    <div class="search-right mx-lg-2">
                        <a href="#search" class="btn search-btn p-0" title="search">
                            <i class="fas fa-search"></i></a>
                        <!-- search popup -->
                        <div id="search" class="pop-overlay">
                            <div class="popup">
                                <form action="#search" method="GET" class="search-box">
                                    <input type="search" placeholder="Enter Keyword..." name="search"
                                           required="required" autofocus="">
                                    <button type="submit" class="btn"><span class="fas fa-search"
                                                                            aria-hidden="true"></span></button>
                                </form>
                            </div>
                            <a class="close" href="#close">×</a>
                        </div>
                        <!-- //search popup -->
                    </div>
                </div>
                <!--//search-right-->
            </div>
            <!-- toggle switch for light and dark theme -->
            <div class="cont-ser-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </nav>
    </div>
</header>
<!-- //header -->

<!-- inner banner -->