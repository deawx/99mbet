
<section class="container g-mt-22 g-pb-40 g-bg-white border-top-gold g-pt-25">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="text-uppercase font-mitr400"><?=$article->title?></h2>
        </div>
    </div>
  
    <div class="row">
        <div class="col-lg-12 g-mb-30 g-mb-0--lg">
            <article class="u-shadow-v11 rounded g-pa-30 g-mt-22">
                <div class="row">
                    <div class="col-md-12">
                        
                        <h4 class="h5 g-color-gray-dark-v1 g-mb-10 font-mitr200">
                            <?=$article->subtitle?>
                        </h4>
                        <p><?=$article->content?></p>
                    </div>
                </div>
                <hr class="g-brd-gray-light-v4">
               <div class="row">
            <div class="col-md-12 btn-group" >
                <?=$this->Html->link(BT_BACK,['action'=>'show'],['escape'=>false])?>
            </div>
        </div>
            </article>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 g-mt-22">
            <?= $this->Html->image('banner_1.gif', ['alt'=>DEFAULT_IMG_TITLE,'title'=>DEFAULT_IMG_TITLE
,'class' => '', 'style' => 'width:100%;']) ?>
        </div>
    </div>
</section>
