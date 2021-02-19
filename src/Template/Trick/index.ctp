<section class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center mx-auto g-max-width-600 g-mb-50 g-pt-15">
                <h2 class="g-color-primary f-promppt-500 mb-4">เคล็ดลับ</h2>
                <p class="lead"></p>
            </div>
        </div>
    </div>
</section>
<section class="container g-line-height-2 g-mb-30">
    <div class="row">
        <?php foreach ($tricks as $trick) : ?>
            <div class="col-lg-6">
                <!-- Article -->
                <div class="row g-mx-5--sm g-mb-30">
                    <!-- Article Image -->
                    <?php
                    $image_url = 'banner/art_1.png';
                    if ($trick->has('image')) {
                        $image_url = SITE_URL . $trick->image->path;
                    }
                    ?>
                    <div class="col-sm-5 g-px-0--sm">
                        <?= $this->Html->image($image_url, ['class' => 'w-100 g-bg-size-cover']) ?>
                    </div>
                    <!-- End Article Image -->

                    <!-- Article Content -->
                    <div class="col-sm-7 g-px-0--sm">
                        <div class="u-info-v1-1 g-height-200 g-bg-gray-light-v5 g-bg-gray-light-gradient-v1--after g-pa-20-30-0">
                            <h3 class="h4 f-promppt-500 text-uppercase">
                                <?= $this->Html->link(h($trick->title), ['controller' => 'trick', 'action' => 'view', 'title' => h($trick->title), 'id' => $trick->id], ['class' => 'u-link-v5 g-color-black g-color-primary--hover']) ?>
                            </h3>
                            <?=$this->Html->link('>>อ่านต่อ<<',['controller'=>'promotion','action'=>'view','title'=>$trick->title,'id'=>$trick->id],['class'=>'g-font-weight-700 g-font-size-16'])?>
                            <p><?= h($trick->subtitle) ?></p>
                        </div>
                    </div>
                    <!-- End Article Content -->
                </div>
                <!-- End Article -->
            </div>
        <?php endforeach; ?>

    </div>

</section>