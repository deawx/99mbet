<section class="container">
    <div class="row">
      
        <div class="col-md-12">
            <div class="text-center mx-auto g-max-width-600 g-mb-50 g-pt-15">
                <h2 class="g-color-primary f-promppt-500 mb-4">โปรโมชั่น</h2>
                <p class="lead"></p>
            </div>
        </div>
    </div>
</section>
<section class="container">
    
    <div class="row g-pt-25">
       
        <?php foreach ($promotions as $promotion) :?>
        
        <div class="col-lg-6 g-mb-25" data-animation="zoomIn" data-animation-delay="0" data-animation-duration="800">
            <!-- Blog Minimal Blocks -->
            <article>
                <?php 
                $image_url = SITE_URL.'assets/img-temp/740x380/img1.jpg';
                if($promotion->has('image')){
                    $image_url = SITE_URL.$promotion->image->path;
                }
                ?>
                <img class="img-fluid w-100 g-rounded-5 g-mb-25" src="<?=$image_url?>" alt="<?=h($promotion->title)?>">

                <div class="px-4 g-bg-white">
                    <ul class="d-flex justify-content-start align-items-end list-inline g-color-gray-dark-v5 g-font-size-13 g-mt-minus-45 g-mb-25">
                        
                        
                    </ul>

                    <h2 class="h5 g-color-black g-font-weight-600">
                        <?=$this->Html->link($promotion->title,['controller'=>'promotion','action'=>'view','title'=>$promotion->title,'id'=>$promotion->id],['class'=>'u-link-v5 g-color-black g-color-primary--hover'])?>
                    </h2>
                    <p class="g-color-gray-dark-v4"><?=h($promotion->subtitle)?></p>
                    <?=$this->Html->link('>>อ่านต่อ<<',['controller'=>'promotion','action'=>'view','title'=>$promotion->title,'id'=>$promotion->id],['class'=>'g-font-weight-700 g-font-size-16'])?>
                </div>
            </article>
            <!-- End Blog Minimal Blocks -->
        </div>
       
        <?php endforeach;?>
    </div>
</section>