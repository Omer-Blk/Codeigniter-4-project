
<section id="home" class="w3l-banner py-5">
    <div class="banner-content">
        <div class="container py-4">
            <div class="row align-items-center pt-sm-5 pt-4">
                <div class="col-md-6">
                    <h3 class="mb-lg-4 mb-3 pb-lg-2"><?php
                        helper('inflector');
                        echo pascalize('final_projem'); // Prints 'MyDogSpot'?>
                        <span class="d-block">iNTERNET PROGRAMCILIĞI</span>
                    </h3>
                    <p class="banner-sub">Web sitemin konusu dünya mutfağını ve
                    ülkelerin en harika yemeklerini tanıtmak .</p>
                    <div class="d-flex align-items-center buttons-banner">
                        <a href="#mutfak" class="btn btn-style mt-lg-5 mt-4">Mutfaklar</a>
                    </div>
                </div>
                <div class="col-md-6 right-banner-2 text-end position-relative">
                    <div class="sub-banner-image mx-auto">
                        <img src="<?= base_url() ?>assets/images/banner1.png" class="img-fluid position-relative" alt=" ">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //inner banner -->

<!-- about section -->
<section class="w3l-aboutblock py-5" id="hakkında">
    <div class="container py-md-5 py-4">
        <div class="row">
            <div class="col-lg-6 about-right-faq align-self pe-lg-5 mb-xl-4">
                <h3 class="title-style">Dünya Mutfağından <span>10+</span> Yemek</h3>
                <p class="mt-4">Dünya mutfağı yemekleri ile yakından ilgiliyseniz veya yeni yeni merak etmeye başladıysanız,
                    bu listemiz tam size göre! 10 farklı ülke mutfağından derlediğim tarifler,
                    bu merakınızı mutfağınıza taşımanıza yardımcı olabilir. Her ne kadar Türk mutfağının yeri bizde bir başka olsa da,
                    “yemek” uçsuz bucaksız, sınırları olamayan evrensel bir konu!</p>
            </div>
            <div class="col-lg-6 left-wthree-img position-relative mt-lg-0 mt-5 pt-lg-0 pt-5">
                <img src="<?= base_url() ?>assets/images/ab3.jpg" alt="" class="img-fluid radius-image">
                <img src="<?= base_url() ?>assets/images/ab4.jpg" alt=""
                     class="img-fluid img-border position-absolute img-position radius-image me-xl-5">
            </div>
        </div>
    </div>
</section>
<!-- //about section -->

<!-- menu section -->
<section class="w3l-menu-2 py-5" id="mutfak">
    <div class="container py-md-5 py-4">
        <h3 class="title-style text-center mb-sm-5 mb-4">Dünya Mutfağı</h3>
        <div class="pricing-style-w3ls">
            <div class="pricing-chart">
                <?php
                if (isset($kayitlar) && count($kayitlar) > -1) {
                    foreach ($kayitlar as $item) {

                        echo '<div class="price-box btn-layout bt6" style="width:1200px">';
                        echo '<div class="grid grid-column-2">';
                        echo '<img class="img-responsive" style="width:250px" src="' . base_url(" uploads/") . $item['resim'] . '" alt="">';
                        echo '<h3 class="pricehead">' . $item['baslik'] . '<p class="mt-1">' . word_limiter($item['icerik'], 10) . '</p></h3>';
                        echo '<a href="' . base_url('incele/' . $item['url']) . '" class="btn btn-style btn-style-primary mt-lg-0 mt-4">İncele</a>';
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
<!-- //menu section -->


