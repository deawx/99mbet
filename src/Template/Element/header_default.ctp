
<header id="js-header" class="u-header u-header--static">
    
    <div class="u-header__section u-header__section--light g-bg-main g-transition-0_3">
        <nav class="js-mega-menu navbar navbar-expand-lg hs-menu-initialized hs-menu-horizontal" style="padding: 0px 0px;">
            <div class="container">
                <!-- Responsive Toggle Button -->
                <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
                    <span class="hamburger hamburger--slider">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </span>
                </button>
                <!-- End Responsive Toggle Button -->
                <!-- Logo -->

                <?= $this->Html->link($this->Html->image('logo/logo_new.png'), [], ['class' => 'navbar-brand', 'escape' => false]) ?>
                <!-- End Logo -->
                <?php $control = strtolower($this->request->params['controller']); ?>
                <!-- Navigation -->
                <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg" id="navBar">
                    <ul class="navbar-nav ml-auto text-uppercase u-main-nav-v8 u-sub-menu-v1 f-promppt-700">
                        <li class="nav-item g-mx-2--md g-mx-5--xl g-mb-5 g-mb-0--lg <?= $control == 'home' ? 'active' : '' ?>">
                            <?= $this->Html->link('หน้าแรก', ['controller' => 'home'], ['class' => 'nav-link']) ?>

                        </li>
                        <li class="nav-item g-mx-2--md g-mx-5--xl g-mb-5 g-mb-0--lg <?= $control == 'promotion' ? 'active' : '' ?>">
                            <?= $this->Html->link('โปรโมชั่น', ['controller' => 'promotion'], ['class' => 'nav-link']) ?>

                        </li>
                        <li class="nav-item g-mx-2--md g-mx-5--xl g-mb-5 g-mb-0--lg <?= $control == 'rules' ? 'active' : '' ?>">
                            <?= $this->Html->link('กติกา', ['controller' => 'rules'], ['class' => 'nav-link']) ?>

                        </li>
                        <li class="nav-item g-mx-2--md g-mx-5--xl g-mb-5 g-mb-0--lg <?= $control == 'trick' ? 'active' : '' ?>">
                            <?= $this->Html->link('เคร็ดลับ', ['controller' => 'trick'], ['class' => 'nav-link']) ?>
                        </li>
                        <li class="nav-item g-mx-2--md g-mx-5--xl g-mb-5 g-mb-0--lg <?= $control == 'contact' ? 'active' : '' ?>">
                            <?= $this->Html->link('ติดต่อเรา', ['controller' => 'contact'], ['class' => 'nav-link']) ?>
                        </li>
                    </ul>
                </div>
                <!-- End Navigation -->
            </div>
        </nav>
    </div>
    <div style="width: 100%;height: 3px;background-color: #feb127;" class="">

    </div>
</header>