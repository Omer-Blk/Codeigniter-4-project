<section class="w3l-contact py-5" id="contact">
    <div class="container py-md-5 py-4">
        <div class="row contact-block">
            <div class="col-md-5 contact-right">

                <h3 class="title-style text-center mb-5">GİRİŞ <span>YAP</span></h3>
                <?= validation_list_errors() ?>
                <?php
                if (isset($uyarı))
                {
                    echo '<div class="alert alert-success" role="alert">';
                    echo $uyarı;
                    echo '</div>';
                }
                ?>
                <form action="<?=base_url('login')?>" method="post" class="signin-form">
                    <?=csrf_field()?>
                    <div class="input-grids">
                        <label for="kulad">Kullanıcı Adı</label>
                        <input type="text" name="kulad" id="kulad" placeholder=""
                               class="contact-input" required="" />
                        <label for="sifre">Şifre</label>
                        <input type="password" name="sifre" id="sifre" placeholder="******"
                               class="contact-input" required="" />
                    </div>
                    <div class="text-start">
                        <input type="submit" name="gonder" value="Giriş" class="btn btn-style btn-style-3">
                    </div>
                </form>
            </div>
            <div class="col-md-7 contact-right">
                <h3 class="title-style text-center mb-5">KAYIT <span>OL</span></h3>
                <form action="<?=base_url('kayit_ol')?>" method="post" class="signin-form">
                    <?=csrf_field()?>
                    <div class="input-grids">
                        <label for="kuladuye">Eposta Veya Kullanıcı Adı</label>
                        <input type="text" class="form-control" name="kulad" id="kuladuye" placeholder=""
                               class="contact-input" required="" />
                        <label for="sifre">Şifreniz</label>
                        <input type="password" name="sifre" id="sifre" placeholder="Şifre Belirleyin"
                               class="contact-input" required="" />
                    </div>
                    <div class="text-start">
                        <input type="submit" name="gonder" value="Kayıt Ol" class="btn btn-style btn-style-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>