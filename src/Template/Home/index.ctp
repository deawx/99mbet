<section class="">
    <div class="row g-mb-10 d-none d-sm-block d-md-block d-lg-block d-xl-block"> 
        <div class="col-md-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <?php $count = 1; ?>
                    <?php foreach ($webImages as $img) : ?>
                        <div class="carousel-item <?= $count == 1 ? 'active' : '' ?>">
                            <image src="<?= $img['path'] . $img['filename'] ?>" class="d-block w-100"/>
                        </div>
                        <?php $count++; ?>
                    <?php endforeach; ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="row g-mb-10 d-block d-sm-none" style="margin-left: 0px;margin-right: 0px;"> 
        <div class="col-md-12" style="padding-left: 0px;padding-right: 0px;">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <?php $count = 1; ?>
                    <?php foreach ($mobileImages as $img) : ?>
                        <div class="carousel-item <?= $count == 1 ? 'active' : '' ?>">
                            <image src="<?= $img['path'] . $img['filename'] ?>" class="d-block w-100"/>
                        </div>
                        <?php $count++; ?>
                    <?php endforeach; ?>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="container">
    <div class="row">
        <div class="col-md-12 f-promppt-400 g-color-black">
            <marquee direction="lefe" scrollamount="5" style="font-size: 19px;" ONMOUSEOVER=stop(); ONMOUSEOUT=start();>ตัวแทนอย่างเป็นทางการ ที่ได้รับความไว้วางใจจากเว็บพนันออนไลน์ยอดนิยมของเอเชีย อาทิเช่น SBOBET 928BET</marquee>
        </div>
    </div>
</section>

<section class="container clearfix g-brd-top g-brd-bottom g-brd-primary">
    <!-- Icons Block -->
    <div class="row no-gutters">
        <div class="col-md-6 col-lg-4 g-brd-right--md g-brd-primary" data-animation="" data-animation-delay="300" data-animation-duration="700">
            <!-- Icon Blocks -->
            <div class="text-center g-py-10">
                <?=$this->Html->image('icon/line.png',['width'=>'80px'])?>
               
                <h4 class="h1 f-promppt-500 g-color-white g-mb-5"><a href="https://lin.ee/2lwRSZPo7" target="_blank">@99mbet</a></h4>
            </div>
            <!-- End Icon Blocks -->
        </div>
        <div class="col-md-6 col-lg-4 g-brd-right--md g-brd-primary" data-animation="" data-animation-delay="0" data-animation-duration="700">
            <!-- Icon Blocks -->
            <div class="text-center g-py-10">
                <?=$this->Html->image('icon/phone.png',['width'=>'80px'])?>
              
                <h4 class="h1 f-promppt-500 g-color-primary" style="margin-bottom: 0px;"><a href="tel:+66811028957" target="_blank">081-1028-957</a></h4>
                <h4 class="h1 f-promppt-500 g-color-primary"><a href="tel:+66811028958" target="_blank">081-1028-958</a></h4>
            </div>
            <!-- End Icon Blocks -->
        </div>

        

        <div class="col-md-6 col-lg-4" data-animation="" data-animation-delay="600" data-animation-duration="700">
            <!-- Icon Blocks -->
            <div class="text-center g-py-10">
                <?=$this->Html->image('icon/facebook.png',['width'=>'80px'])?>
              
                <h4 class="h1 f-promppt-500 g-color-primary g-mb-5"><a href="https://www.facebook.com/Sboclub99-2101824193435624/?ref=bookmarks" target="_blank">Sboclub99</a></h4>
            </div>
            <!-- End Icon Blocks -->
        </div>
    </div>
    <!-- End Icons Block -->
</section>

<section class="container">
    <div class="row  g-line-height-2 g-pa-20-10">
        <div class="col-md-6 col-lg-4 col-sm-6 col-6 g-pt-20" data-animation="pulse" data-animation-delay="0" data-animation-duration="1000">
            <!-- Article -->
            <article class="u-block-hover u-block-hover--uncroped text-center">
                <!-- Article Image -->
                <a class="d-block u-block-hover__additional--jump g-mb-10" href="<?=SITE_URL.'sports/sbobet-entry'?>">
                    <?= $this->Html->image('banner/sbobet.png', ['class' => 'w-100']) ?>
                </a>
                <!-- End Article Image -->

                <!-- Article Info -->
                <h3 class="h4">
                    <a class="g-color-primary g-text-underline--none--hover f-promppt-700" href="<?=SITE_URL.'sports/sbobet-entry'?>">SBOBET</a>
                </h3>
                <!-- End Article Info -->
            </article>
            <!-- End Article -->
        </div>

        <div class="col-md-6 col-lg-4 col-sm-6 col-6 g-pt-20"  data-animation="pulse" data-animation-delay="0" data-animation-duration="1000">
            <!-- Article -->
            <article class="u-block-hover u-block-hover--uncroped text-center">
                <!-- Article Image -->
                <a class="d-block u-block-hover__additional--jump g-mb-10" href="<?=SITE_URL.'sports/bet123-entry'?>" target="_blank">
                    <?= $this->Html->image('banner/123bet.png', ['class' => 'w-100']) ?>
                </a>
                <!-- End Article Image -->

                <!-- Article Info -->
                <h3 class="h4">
                    <a class="g-color-primary g-text-underline--none--hover f-promppt-700" href="<?=SITE_URL.'sports/bet123-entry'?>" target="_blank">123BET</a>
                </h3>
                <!-- End Article Info -->
            </article>
            <!-- End Article -->
        </div>

        <div class="col-md-6 col-lg-4 col-sm-6 col-6 g-pt-20"  data-animation="pulse" data-animation-delay="0" data-animation-duration="1000">
            <!-- Article -->
            <article class="u-block-hover u-block-hover--uncroped text-center">
                <!-- Article Image -->
                <a class="d-block u-block-hover__additional--jump g-mb-10" href="http://ltc164.com/" target="_blank">
                    <?= $this->Html->image('banner/ltc.png', ['class' => 'w-100']) ?>
                </a>
                <!-- End Article Image -->

                <!-- Article Info -->
                <h3 class="h4">
                    <a class="g-color-primary g-text-underline--none--hover f-promppt-700" href="http://ltc164.com/" target="_blank">LTC164</a>
                </h3>
                <!-- End Article Info -->
            </article>
            <!-- End Article -->
        </div>

    </div>
</section>

<section class="container g-line-height-2 g-mb-30">

    <h3 class="h1 f-promppt-500 g-mb-20 g-color-primary">เคล็ดลับ</h3> 
    <div class="row">
        <?php foreach ($tricks as $trick) : ?>
            <div class="col-lg-6" data-animation="pulse" data-animation-delay="0" data-animation-duration="1000">
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
