<header id="js-header" class="u-header u-header--static u-shadow-v19">
    <div class="u-header__section g-brd-bottom g-brd-gray-light-v4 g-transition-0_3 g-bg-primary">
        <div class="container">
            <div class="row justify-content-between g-mx-0--lg g-py-10">
                <div class="col-md-4 col-10">
                    <a class="navbar-brand" href="home-page-1.html">
                        <?= $this->Html->image('logo/logo_99mbet.png', ['class' => 'w-100']) ?>
                    </a>
                    
                </div>
                <div class="col-2 d-block d-sm-none">
                    <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-20" type="button"
                            aria-label="Toggle navigation"
                            aria-expanded="false"
                            aria-controls="navBar"
                            data-toggle="collapse"
                            data-target="#navBar">
                        <span class="hamburger hamburger--slider g-pr-0">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </span>
                    </button>
                    <!-- End Responsive Toggle Button -->
                </div>
                <div class="col-md-8">
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#register_modal" class="">
                    <?= $this->Html->image('banner/sboclub_banner_top_2.gif', ['class' => 'w-100']) ?>
                    </a>
                </div>



            </div>
        </div>
    </div>
    <div class="u-header__section g-bg-gray-light-v2" style="border-bottom: #0a73b2 solid 4px;">
        <nav class="js-mega-menu navbar navbar-expand-lg" style="padding: 0rem 1rem;">
            <div class="container">
                <!-- Responsive Toggle Button -->


                <!-- Logo -->

                <!-- End Logo -->
                <?php $control = strtolower($this->request->params['controller']); ?>

                <!-- Navigation -->
                <div id="navBar" class="collapse navbar-collapse align-items-center flex-sm-row g-pt-15 g-pt-0--lg">

                    <ul class="navbar-nav ml-auto f-promppt-500">
                        <li class="nav-item g-ml-20 <?= $control == 'home' ? 'active' : '' ?>">
                            <?= $this->Html->link('หน้าแรก', ['controller' => 'home'], ['class' => 'nav-link g-color-primary g-color-black--hover']) ?>

                        </li>
                        <li class="nav-item g-ml-20 <?= $control == 'promotion' ? 'active' : '' ?>">
                            <?= $this->Html->link('โปรโมชั่น', ['controller' => 'promotion'], ['class' => 'nav-link g-color-primary g-color-black--hover']) ?>

                        </li>
                        <li class="nav-item g-ml-20 <?= $control == 'rules' ? 'active' : '' ?>">
                            <?= $this->Html->link('วิธีเล่น', ['controller' => 'how-to-play'], ['class' => 'nav-link g-color-primary g-color-black--hover']) ?>

                        </li>
                        <li class="nav-item g-ml-20 <?= $control == 'trick' ? 'active' : '' ?>">
                            <?= $this->Html->link('เคล็ดลับ', ['controller' => 'trick'], ['class' => 'nav-link g-color-primary g-color-black--hover']) ?>
                        </li>
                        <li class="nav-item g-ml-20 <?= $control == 'contact' ? 'active' : '' ?>">
                            <?= $this->Html->link('ติดต่อเรา', ['controller' => 'contact'], ['class' => 'nav-link g-color-primary g-color-black--hover']) ?>
                        </li>
                        <li class="nav-item g-ml-20">
                            <?= $this->Html->link('สมัครสมาชิก', 'javascript:void(0);', ['class' => 'nav-link g-color-primary g-color-black--hover','data-target'=>'#register_modal','data-toggle'=>'modal']) ?>
                        </li>
                    </ul>
                </div>
                <!-- End Navigation -->
            </div>

        </nav>
        
    </div>

</header>