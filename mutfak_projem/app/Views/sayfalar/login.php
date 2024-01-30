<section id="home" class="w3l-banner py-5"><div class="container" style="margin-top: 250px; margin-bottom: 150px; ">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="mt-4 text-primary"><i>Giriş</i></h1>
                <?= validation_list_errors() ?>
                <?php
                if (isset($uyari)) {
                    echo '<div class="alert alert-primary" role="alert">';
                    echo $uyari;
                    echo '</div>';
                }
                ?>
                <form action="<?= base_url('login') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label for="kulad">Kullanıcı Adı:</label>
                        <input type="text" class="form-control" id="kulad" name="kulad">
                    </div>
                    <div class="form-group">
                        <label for="sifre">Şifre:</label>
                        <input type="password" class="form-control" id="sifre" name="sifre">
                    </div>

                    <input type="submit" name="gonder" class="btn btn-primary mt-4" value="Giriş Yap">

                </form>
                <div class='pb-5'></div>
            </div>

            <div class="col-lg-3">
                <h1 class="mt-4 text-primary"><i>Üye Ol</i></h1>
                <?= validation_list_errors() ?>
                <form action="<?= base_url('kayit_ol') ?>" method="post">
                    <?= csrf_field() ?>
                <div class="form-group">
                    <label for="kuladuye">Kullanıcı Adı</label>
                    <input type="text" class="form-control" id="kuladuye" name="kulad">
                </div>
                <div class="form-group">
                    <label for="sifre">Şifre:</label>
                    <input type="password" class="form-control" id="sifre" name="sifre">
                </div>

                <input type="submit" name="gonder" class="btn btn-danger mt-4" value="Kayıt Ol">
                <div class='pb-5'></div>
            </div>
            <div class="col-lg-4 right-banner-2 text-end position-relative">
                <div class="sub-banner-image mx-auto">
                    <img src="<?= base_url() ?>assets/images/banner2.png" width="300px"  class="img-fluid position-relative" alt=" ">
                </div>
            </div>
        </div>
    </div>
</section>


