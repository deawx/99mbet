<section>
    <div class="container">
        
        <div class="row g-pb-40">
            

            <div class="col-md-3 col-6">
                <?= $this->Html->image('banks/kbank.png', ['class' => 'w-100']) ?>
            </div>
            <div class="col-md-3 col-6">
                <?= $this->Html->image('banks/bkk.png', ['class' => 'w-100']) ?>
            </div>
            <div class="col-md-3 col-6">
                <?= $this->Html->image('banks/scb.png', ['class' => 'w-100']) ?>
            </div>
            <div class="col-md-3 col-6">
                <?= $this->Html->image('banks/nbank.png', ['class' => 'w-100']) ?>
            </div>
        </div>
    </div>
</section>

<!-- Copyright Footer -->
<footer class="g-color-black g-py-20 g-bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center text-md-left g-mb-10 g-mb-0--md">
                <div class="d-lg-flex">
                    <small class="d-block g-font-size-default g-mr-10 g-mb-10 g-mb-0--md">2018 &copy; All Rights Reserved.</small>
                    <ul class="u-list-inline">
                        <li class="list-inline-item">
                            <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item"> 
                            <span>|</span>
                        </li>
                        <li class="list-inline-item">
                            <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Terms of Use</a>
                        </li>
                        <li class="list-inline-item">
                            <span>|</span>
                        </li>
                        <li class="list-inline-item">
                            <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">License</a>
                        </li>
                        <li class="list-inline-item">
                            <span>|</span>
                        </li>
                        <li class="list-inline-item">
                            <?= $this->Html->link('เข้าสู่ระบบ', ['controller' => 'login'], ['class' => 'g-color-white-opacity-0_8 g-color-white--hover']) ?>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 align-self-center">

            </div>
        </div>
    </div>
</footer>
<!-- End Copyright Footer -->
<a class="js-go-to u-go-to-v1" href="#!" data-type="fixed" data-position='{
   "bottom": 15,
   "right": 15
   }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
    <i class="hs-icon hs-icon-arrow-top"></i>
</a>
