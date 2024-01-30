<!-- banner section -->
<div class="slider">
    <div class="slide current">
        <div class="bg-layer">
            <div class="content">
                <h6>Müzik Keyfi</h6>
                <h3>Müzik Her Yerde</h3>
                <a><?= anchor('#enstruman', 'Enstrumanlar', ['class' => 'btn btn-style mt-4']); ?>
                    <!-- <a class="btn btn-style mt-4" href="<?= base_url() ?>#enstruman">Enstruman</a> --></a>
            </div>
        </div>
    </div>
    <div class="slide">
        <div class="bg-layer">
            <div class="content">
                <h6>Keyif Al</h6>
                <h3>Notalarda Kaybol</h3>
                <a><?= anchor('#enstruman', 'Enstrumanlar', ['class' => 'btn btn-style mt-4']); ?>
                    <!-- <a class="btn btn-style mt-4" href="<?= base_url() ?>#enstruman">Enstruman</a> --></a>
            </div>
        </div>
    </div>
    <div class="slide">
        <div class="bg-layer">
            <div class="content">
                <h6>Müziği Hisset</h6>
                <h3>Tutkuya Kapıl</h3>
                <a><?= anchor('#enstruman', 'Enstrumanlar', ['class' => 'btn btn-style mt-4']); ?>
                    <!-- <a class="btn btn-style mt-4" href="<?= base_url() ?>#enstruman">Enstruman</a> --></a>
            </div>
        </div>
    </div>
    <div class="slide">
        <div class="bg-layer">
            <div class="content">
                <h6>Aradığın Notalar</h6>
                <h3>Favori Enstrunmanını Seç</h3>
                <a><?= anchor('#enstruman', 'Enstrumanlar', ['class' => 'btn btn-style mt-4']); ?>
                    <!-- <a class="btn btn-style mt-4" href="<?= base_url() ?>#enstruman">Enstruman</a> --></a>
            </div>
        </div>
    </div>
</div>
<div class="buttons">
    <button id="prev"><i class="fas fa-arrow-left"></i></button>
    <button id="next"><i class="fas fa-arrow-right"></i></button>
</div>
<!-- //banner section -->

<!-- about section -->
<section class="w3l-about py-5" id="about">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="row align-items-center">
            <div class="col-lg-6 section-width pe-xl-5 pt-lg-4">
                <h3 class="title-style">Notalarıma <span>Hoşgeldiniz</span></h3>
                <p class="mt-4">At corrupti odit At iure facere,
                    porro repellat officia quas, dolores magnam assumenda soluta odit
                    harum maiores fugiat accusamus eos nulla. Iure voluptatibus explicabo
                    officia.</p>
                <p class="mt-4 pb-dm-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. At, corrupti
                    odit? At iure facere,
                    porro repellat officia quas, dolores magnam assumenda soluta odit
                    harum.</p>
                <a><?= anchor('#enstruman', 'Enstruman', ['class' => 'btn btn-style mt-5']); ?>
                    <!-- <a class="btn btn-style mt-5" href="<?= base_url() ?>#enstruman">Enstruman</a> --></a>
            </div>
            <div class="col-lg-6 history-info mt-lg-0 mt-5 pt-md-4 pt-2">
                <div class="position-relative img-border">
                    <img src="<?= base_url() ?>assets/images/about.jpg" class="img-fluid radius-image" alt="video-popup">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //about section -->

<!-- homeblock1 section -->
<section class="py-5" id="enstruman">
    <h3 class="title-style text-center">Çalgı <span>Aletleri</span></h3>

    <div class="py-lg-5 py-md-4 py-2">

        <div class="mt-lg-0 mt-5 ps-lg-5">

            <div class="row">
                <?php
                if (isset($kayitlar) && count($kayitlar) > -1) {
                    foreach ($kayitlar as $item) {

                        echo '<div class="card" style="width:400px">';
                        echo '<img class="card-img-top" src="' . base_url(" uploads/") . $item['resim'] . '" alt="Card image">';
                        echo '<div class="card-body">';
                        echo '<h4 class="card-title">' . $item['baslik'] . '</h4>';
                        echo '<p class="card-text">' . word_limiter($item['icerik'], 10) . '</p>';
                        echo '<a href="' . base_url('incele/' . $item['url']) . '" class="btn btn-danger">İncele</a>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                    <?php
                } else {
                    ?>

                    <?php
                }
                ?>

            </div>
        </div>

    </div>
</section>
<!-- //homeblock1 section -->


<!-- classes section -->
<section class="w3l-classes py-5" id="classes">
    <div class="container py-lg-5 py-md-4 py-2">
        <h3 class="title-style text-center">En İyi Müzik <span>Dersleri</span></h3>
        <div class="row text-center justify-content-center">
            <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                <div class="grids-1 box-wrap p-lg-3">
                    <div class="icon">
                        <i class="fas fa-music"></i>
                    </div>
                    <h4><a href="#enstruman" class="title-head mt-4 mb-2">Piano</a></h4>
                    <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam fugiat accusamus
                        eos. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                <div class="grids-1 box-wrap p-lg-3">
                    <div class="icon active">
                        <i class="fas fa-guitar"></i>
                    </div>
                    <h4><a href="#enstruman" class="title-head mt-4 mb-2">Gitar</a></h4>
                    <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam fugiat accusamus
                        eos. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                <div class="grids-1 box-wrap p-lg-3">
                    <div class="icon">
                        <i class="fas fa-drum"></i>
                    </div>
                    <h4><a href="#enstruman" class="title-head mt-4 mb-2">Trampet</a></h4>
                    <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam fugiat accusamus
                        eos. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4">
                <div class="grids-1 box-wrap p-lg-3">
                    <div class="icon">
                        <i class="fas fa-compact-disc"></i>
                    </div>
                    <h4><a href="#enstruman" class="title-head mt-4 mb-2">DJ</a></h4>
                    <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam fugiat accusamus
                        eos. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4">
                <div class="grids-1 box-wrap p-lg-3">
                    <div class="icon">
                        <i class="fas fa-play"></i>
                    </div>
                    <h4><a href="#enstruman" class="title-head mt-4 mb-2">Müzik</a></h4>
                    <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam fugiat accusamus
                        eos. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4">
                <div class="grids-1 box-wrap p-lg-3">
                    <div class="icon">
                        <i class="fas fa-headphones-alt"></i>
                    </div>
                    <h4><a href="#service" class="title-head mt-4 mb-2">Dinleme</a></h4>
                    <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam fugiat accusamus
                        eos. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //classes section -->

<!-- join section -->
<section class="w3l-whyblock py-5">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="<?= base_url() ?>assets/images/about4.jpg" alt="" class="img-fluid radius-image">
            </div>
            <div class="col-lg-6 ps-xl-5 ps-lg-4 mt-lg-0 mt-5">
                <h3 class="title-style mb-4">Müziğe <span>Katılın</span></h3>
                <p>Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                    ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
                    elit.</p>
                <div class="two-grids mt-5">
                    <div class="grids_info">
                        <i class="fas fa-volume-up"></i>
                        <div class="detail">
                            <h4>Exclusive Releases</h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit.</p>
                        </div>
                    </div>
                    <div class="grids_info mt-xl-5 mt-4">
                        <i class="fas fa-icons"></i>
                        <div class="detail">
                            <h4>Full DJ Sets & Podcasts</h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //join section -->

<!-- subscribe form section -->
<section class="w3l-forms-9 pt-5 pb-lg-4" id="newsletter">
    <div class="container">
        <div class="main-midd text-center mx-auto" style="max-width:700px;">
            <h3 class="title-style mb-2">Subscribe to our daily <span>updates!</span></h3>
            <p class="">Enter your email address to register to our newsletter</p>

            <div class="main-midd-2 mt-md-5 mt-4 mx-auto" style="max-width:600px;">
                <form action="#url" method="GET" class="d-sm-flex rightside-form">
                    <input type="email" class="form-control" name="email" placeholder="Enter your email">
                    <button class="btn btn-style" type="submit">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- //subscribe form section -->

<!-- button with content section -->
<section class="w3l-button-sec py-5">
    <div class="container py-5">
        <div class="w3-midhny-sec p-5">
            <div class="row align-items-center p-md-4">
                <div class="col-xl-8 col-lg-9">
                    <div class="title-content-two pe-lg-5">
                        <h3 class="title-w3l mb-md-1 mb-4 d-md-flex align-items-center">Bana ulaşabilirsiniz
                            <a class="mt-md-0 mt-2" href="tel:+90 555 087 36 16">+90 555 087 36 16</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-3 mt-lg-0 mt-sm-5 mt-4 text-lg-end">
                    <a href="<?= base_url() ?>" class="btn btn-style ">Ana Sayfaya Git</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //button with content section -->

<!-- footer -->