
<section class="container">
    <div class="row">
        <div class="col-md-12 text-center g-pt-25">
            <h3 class="h1 f-promppt-500 g-mb-20 t-gold">123BET(123เบท)</h3>
        </div>
    </div>
<!--
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <?= $this->Html->image('sports/sbobet_cover_1.png', ['class' => 'w-100']) ?>
        </div>

    </div>
-->
    <?php $lickClass = 'btn btn-md u-btn-inset u-btn-outline-primary g-mr-10 g-mb-15'; ?>
    <div class="row">
        <div class="col-md-6 text-right g-brd-right--md g-brd-white">
            <h2 class="h2 g-color-white f-promppt-500 g-mb-35">
                <span class="g-bg-primary g-color-white">123BET LINK<br>สำหรับ คอมพิวเตอร์ และโน้ตบุค</span>
            </h2>
        </div>
        <div class="col-md-6">
            <?php
            $links = [
                'https://123bet.link/#!/'
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
    <div class="row">
        <div class="col-md-6 text-right g-brd-right--md g-brd-white">
            <h2 class="h2 g-color-white f-promppt-500">
                <span class="g-bg-primary g-color-white">123BET LINK<br>ผ่านมือถือ (123BET Mobile) </span>
            </h2>
            <p class="g-mb-35 g-color-white">แทงบอล บน ไอแพต ไอโฟน (SBOBET iPad,SBOBET iphone) และแทงบอลออนไลน์ด้วยมือถือแอนดรอย (SBOBET Android,SBOBET Wap)</p>
        </div>
        <div class="col-md-6">
            <?php
            $links = [
                'https://m.123bet.link/#!/'
            ];
            $count = 1;
            ?>
            <?php foreach ($links as $link): ?>
                <a href="<?= $link ?>" class="<?= $lickClass ?>" target="_blank">Link <?= $count ?></a>
                <?php $count++; ?>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2 class="f-promppt-500 text-center">วิธีการเล่น</h2>
        </div>
        <div class="row g-mt-21 g-pb-40">
        <div class="col-md-12">
            <h2 class="f-promppt-500 text-center">วิธีการแทงกีฬา</h2>
        </div>
        <div class="col-md-10 offset-md-1 g-pb-40 g-brd-bottom g-brd-white">
            <?=$this->Html->media('123bet/Sport_1.mp4',['class'=>'w-100', 'controls' ,'type' => 'video/mp4'])?>
        </div>

        <div class="col-md-12">
            <h2 class="f-promppt-500 text-center">วิธีการเข้าเล่นคาสิโนสด</h2>
        </div>
        <div class="col-md-10 offset-md-1 g-pb-40 g-brd-bottom g-brd-white">
            <?=$this->Html->media('123bet/Live Casino_2.mp4',['class'=>'w-100', 'controls' ,'type' => 'video/mp4'])?>
        </div>

        <div class="col-md-12">
            <h2 class="f-promppt-500 text-center">วิธีการเล่นเกมสล๊อต</h2>
        </div>
        <div class="col-md-10 offset-md-1 g-pb-40 g-brd-bottom g-brd-white">
            <?=$this->Html->media('123bet/Slot_3.mp4',['class'=>'w-100', 'controls' ,'type' => 'video/mp4'])?>
        </div>

        <div class="col-md-12">
            <h2 class="f-promppt-500 text-center">วิธีการเข้าเล่นหวยไทย</h2>
        </div>
        <div class="col-md-10 offset-md-1 g-pb-40 g-brd-bottom g-brd-white">
            <?=$this->Html->media('123bet/Thai Lotto_4.mp4',['class'=>'w-100', 'controls' ,'type' => 'video/mp4'])?>
        </div>
    </div>


</section>