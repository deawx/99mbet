<section class="container g-mt-22 g-pb-40 g-bg-white border-top-gold">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="text-uppercase font-mitr400">เคล็ดลับ</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 g-mb-30 g-mb-0--lg">
            <article class="u-shadow-v11 rounded g-pa-30 g-mt-22">
                <div class="row">
                    <?php foreach ($articles as $a): ?>

                        <div class="col-md-6">
                            <?= $this->Html->link('<h2 class="h5 g-color-gray-dark-v1 g-mb-10 font-mitr400 text-color-blue">' . $a->title . '</h2>', ['action' => 'view', 'title' => $a->title], ['escape' => false]) ?>

                            <p>
                                <?= ($a->subtitle) ?>
                            </p>
                            <?= $this->Html->link('อ่านต่อ..', ['action' => 'view', 'title' => $a->title]) ?>
                            <hr class="g-brd-gray-light-v4">
                        </div>


                    <?php endforeach; ?>
                </div>

            </article>
        </div>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('หน้า {{page}} จาก {{pages}}, แสดง {{current}} บทความ  {{count}} total')]) ?></p>
    </div>
    
    <div class="row">
        <div class="col-lg-12 g-mt-22">
            <?= $this->Html->image('banner_2.gif', ['alt' => DEFAULT_IMG_TITLE, 'title' => DEFAULT_IMG_TITLE, 'class' => '', 'style' => 'width:100%;']) ?>
        </div>
    </div>
</section>

