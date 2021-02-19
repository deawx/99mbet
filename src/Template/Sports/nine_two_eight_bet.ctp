
<section class="container">
    <div class="row">
        <div class="col-md-12 text-center g-pt-25">
            <h3 class="h1 f-promppt-500 g-mb-20 t-gold">928BET</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <?= $this->Html->image('sports/928bet_cover.jpg', ['class' => 'w-100']) ?>
        </div>
        
    </div>
   
    <?php $lickClass = 'btn btn-md u-btn-inset u-btn-outline-primary g-mr-10 g-mb-15'; ?>
    <div class="row g-pt-20">
        <div class="col-md-6 text-right g-brd-right--md g-brd-white">
            <h2 class="h2 g-color-white f-promppt-500 g-mb-35">
                <span class="g-bg-primary g-color-white">928BET LINK</span><br>สำหรับ คอมพิวเตอร์ และโน้ตบุค
            </h2>
        </div>
        <div class="col-md-6">
            <?php
            $links = [
                'http://www.928club.com',
                'http://www.927bet.com',
                'http://www.937bet.com',
                'http://www.892bet.com',
                'http://www.937bet.com',
                'http://www.469bet.com',
                'http://www.892bet.com'
            ];
            $count = 1;
            ?>
            <?php foreach ($links as $link): ?>
                <a href="<?= $link ?>" class="<?= $lickClass ?>" target="_blank">Link <?= $count ?></a>
                <?php $count++; ?>
            <?php endforeach; ?>
        </div>
    </div>
    <hr/>
   
</section>