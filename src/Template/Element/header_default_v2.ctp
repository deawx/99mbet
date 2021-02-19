<header id="js-header" class="u-header u-header--static">
    <div class="container">
        <div class="row g-pt-10 g-pb-13">
            <div class="col-lg-2 col-6 offset-3 offset-lg-0 offset-sm-0" style="padding: 0;">
                <?=$this->Html->image('logo/logo.png',['class'=>'w-100'])?>
            </div>
        </div>
        
    </div>
    <nav class="js-mega-menu navbar navbar-expand-lg hs-menu-initialized hs-menu-horizontal" style="background-color: #2a8fbd;">
        <div class="container">
            
            <!-- Responsive Toggle Button -->
            <button type="button" class="navbar-toggler navbar-toggler-right btn ml-auto g-line-height-1 g-brd-none g-pa-0" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
                <span class="hamburger hamburger--slider">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </span>
            </button>
            <!-- End Responsive Toggle Button -->

                <?php $control = strtolower($this->request->params['controller']); ?>
            <!-- Navigation -->
            <div id="navBar" class="collapse navbar-collapse align-items-center flex-sm-row">
                <ul class="navbar-nav mx-auto f-promppt-400 nav-li-item">
                    <!-- Home - Submenu -->
                    <li class="nav-item <?= $control == 'home' ? 'active' : '' ?>">
                        <?= $this->Html->link('หน้าแรก', ['controller' => 'home'], ['class' => 'nav-link g-color-white g-color-primary--hover']) ?>

                    </li>
                    <li class="nav-item g-mx-12--lg <?= $control == 'promotion' ? 'active' : '' ?>">
                        <?= $this->Html->link('โปรโมชั่น', ['controller' => 'promotion'], ['class' => 'nav-link g-color-white g-color-primary--hover']) ?>

                    </li>
                    <li class="nav-item <?= $control == 'rules' ? 'active' : '' ?>">
                        <?= $this->Html->link('วิธีเล่น', ['controller' => 'how-to-play'], ['class' => 'nav-link g-color-white g-color-primary--hover']) ?>

                    </li>
                    <li class="nav-item <?= $control == 'trick' ? 'active' : '' ?>">
                        <?= $this->Html->link('เคล็ดลับ', ['controller' => 'trick'], ['class' => 'nav-link g-color-white g-color-primary--hover']) ?>
                    </li>
                    <li class="nav-item <?= $control == 'contact' ? 'active' : '' ?>">
                        <?= $this->Html->link('ติดต่อเรา', ['controller' => 'contact'], ['class' => 'nav-link g-color-white g-color-primary--hover']) ?>
                    </li>
                </ul>
            </div>
            <!-- End Navigation -->
        </div>
    </nav>
</header>