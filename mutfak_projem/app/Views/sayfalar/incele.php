<div class="container" style="margin-top: 150px; margin-bottom: 300px;">

    <div class="row">

        <div class="col-lg-12">


            <!-- Title -->
            <h1 class="mt-4 text-primary"><i><?= esc($veri['baslik']) ?></i></h1>

            <p style="font-size:large;">
                <img src="<?= base_url('uploads/' . esc($veri['resim'])) ?>" style="height:300px; float: left; margin: 10px;">
                <?= esc($veri['icerik']) ?>
            </p>
            <hr>
        </div>
    </div>
    <!-- /.row -->

</div>