
<section class="container">
    <div class="row">
   
        <div class="col-md-12">
            <div class="text-center mx-auto g-max-width-600 g-mb-50 g-pt-15">
                <h2 class="g-color-primary f-promppt-500 mb-4"><?= h($promotion->title) ?></h2>
                <p class="lead"></p>
            </div>
        </div>
    </div>
</section>
<section class="container g-line-height-2 g-mb-30">

    <div class="row g-bg-white">
        <div class="col-md-6 g-pa-30-20 offset-md-3">
            <?php
            $image_url = SITE_URL . 'assets/img-temp/740x380/img1.jpg';
            if ($promotion->has('image')) {
                $image_url = SITE_URL . $promotion->image->path;
            }
            ?>
            <img class="img-fluid w-100 g-rounded-5 g-mb-25" src="<?= $image_url ?>" alt="<?= h($promotion->title) ?>">
        </div>
        <div class="col-md-12 g-pb-40" style="font-size: 1.2rem;">
            <?= $promotion->content ?>
        </div>
    </div>
</section>