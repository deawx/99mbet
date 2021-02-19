<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Title -->
        <title>สุดยอดเว็บ คาสิโน พนันบอลออนไลน์ แทงบอลสด</title>
        <meta name="description" content="เว็บอันดับ 1 คาสิโน พนันบอลออนไลน์ แทงบอลสด ราคาดี น่าเชื่อถือ">
        <!-- Required Meta Tags Always Come First -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <link rel="apple-touch-icon" sizes="57x57" href="<?= SITE_URL ?>img/fav/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?= SITE_URL ?>img/fav/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?= SITE_URL ?>img/fav/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?= SITE_URL ?>img/fav/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?= SITE_URL ?>img/fav/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?= SITE_URL ?>img/fav/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?= SITE_URL ?>img/fav/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?= SITE_URL ?>img/fav/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?= SITE_URL ?>img/fav/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?= SITE_URL ?>img/fav/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= SITE_URL ?>img/fav/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?= SITE_URL ?>img/fav/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= SITE_URL ?>img/fav/favicon-16x16.png">
        <link rel="manifest" href="<?= SITE_URL ?>img/fav/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?= SITE_URL ?>img/fav/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">


        <?= $this->Html->css('/assets/vendor/bootstrap/bootstrap.css') ?>
        <!-- CSS Global Icons -->
        <?= $this->Html->css('/assets/vendor/icon-awesome/css/font-awesome.min.css') ?>
        <?= $this->Html->css('/assets/vendor/icon-line/css/simple-line-icons.css') ?>
        <?= $this->Html->css('/assets/vendor/icon-etlinefont/style.css') ?>
        <?= $this->Html->css('/assets/vendor/icon-line-pro/style.css') ?>
        <?= $this->Html->css('/assets/vendor/icon-hs/style.css') ?>
        <?= $this->Html->css('/assets/vendor/icon-material/material-icons.css') ?>

        <?= $this->Html->css('/assets/vendor/animate.css') ?>
        <?= $this->Html->css('/assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css') ?>
        <?= $this->Html->css('/assets/vendor/hs-megamenu/src/hs.megamenu.css') ?>
        <?= $this->Html->css('/assets/vendor/hamburgers/hamburgers.min.css') ?>

        <?= $this->Html->css('/assets/css/styles.e-commerce.css') ?>

        <!-- CSS Unify -->
        <?= $this->Html->css('/assets/css/unify-core.css') ?>
        <?= $this->Html->css('/assets/css/unify-components.css') ?>
        <?= $this->Html->css('/assets/css/unify-globals.css') ?>

        <!-- CSS Customization -->
        <?= $this->Html->css('/assets/css/custom.css') ?>

        <!-- JS Global Compulsory -->
        <?= $this->Html->script('/assets/vendor/jquery/jquery.min.js') ?>
        <?= $this->Html->script('/assets/vendor/jquery-migrate/jquery-migrate.min.js') ?>
        <?= $this->Html->script('/assets/vendor/popper.min.js') ?>
        <?= $this->Html->script('/assets/vendor/bootstrap/bootstrap.min.js') ?>
        <?= $this->Html->script('jquery.validate.min.js') ?>

        <script>
            var site_url = '<?= SITE_URL ?>';
        </script>
    </head>
    <body>
        <div id="page-load" class="processing" style="display: none;">
            <?= $this->Html->image('loading.gif', []) ?>
            <h2 class="prompt-400" id="page-load-label"></h2>
        </div>
        <main>
            <!-- Header -->
            <?= $this->element('header_default_v3') ?>
            <section class="container">
            <div class="row">
                <div class="col-md-12 text-right g-pt-15" style="border-bottom:1px solid #BDBDBD;">
                    <?=$this->element('social_share_button')?>
                </div>
            </div>
            
            </section>

            <!-- End Header -->
            <?= $this->fetch('content'); ?>
            <?= $this->element('footer_default') ?>

            <div class="qrcode_sticky" id="qrcode_sticky">
                <div class="text-right"><span class="g-color-white g-bg-primary" style="padding: 3px;" onclick="closeQrSticky()"><i class="fa fa-times"></i> ปิด</span></div>
                <?= $this->Html->image('ronaldo2018.png', ['class' => '']) ?>
                <a href="javascript:void(0);" data-toggle="modal" data-target="#register_modal">
                    <?= $this->Html->image('register.gif', ['class' => 'g-mb-10']) ?>
                </a>

                <a href="http://line.me/ti/p/%40mld5011i" target="_blank">
                    <?= $this->Html->image('line_qrcode.png') ?>
                </a>
                <image src="https://cdn0.tnwcdn.com/wp-content/blogs.dir/1/files/2015/02/LineAt-730x280.jpg"/>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="register_modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true" style="z-index: 999;">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">สมัครสมาชิก</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="box_register_form">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- JS Implementing Plugins -->
        <?= $this->Html->script('/assets/vendor/appear.js') ?>

        <?= $this->Html->script('/assets/vendor/hs-megamenu/src/hs.megamenu.js') ?>
        <?= $this->Html->script('/assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js') ?>

        <!-- JS Unify -->
        <?= $this->Html->script('/assets/js/hs.core.js') ?>
        <?= $this->Html->script('/assets/js/components/hs.onscroll-animation.js') ?>
        <?= $this->Html->script('/assets/js/helpers/hs.hamburgers.js') ?>
        <?= $this->Html->script('/assets/js/components/hs.header.js') ?>
        <?= $this->Html->script('/assets/js/components/hs.tabs.js') ?>
        <?= $this->Html->script('/assets/js/components/hs.progress-bar.js') ?>
        <?= $this->Html->script('/assets/js/components/hs.scrollbar.js') ?>
        <?= $this->Html->script('/assets/js/components/hs.go-to.js') ?>

        <!-- JS Customization -->
        <?= $this->Html->script('/assets/js/custom.js') ?>
        <?= $this->Html->script('register.js') ?>

        <script>
            function closeQrSticky() {
                $('#qrcode_sticky').hide();
            }

            $(document).on('ready', function () {
                $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');
                // initialization of go to
                $.HSCore.components.HSGoTo.init('.js-go-to');

                $('#register_modal').modal({
                    backdrop: false,
                    keyboard: false,
                    show: false
                });

                $(document).Register();
            });

            $(window).on('load', function () {
                // initialization of header
                //$.HSCore.components.HSHeader.init($('#js-header'));
                //$.HSCore.helpers.HSHamburgers.init('.hamburger');

                // initialization of HSMegaMenu component
                $('.js-mega-menu').HSMegaMenu({
                    event: 'hover',
                    pageContainer: $('.container'),
                    breakpoint: 991
                });
            });
        </script>
        <!-- WhatsHelp.io widget -->
        <script type="text/javascript">
            (function () {
                var options = {
                    facebook: "Betclub99-VIP-2313306692284999", // Facebook page ID
                    line: "//line.me/ti/p/%40mld5011i", // Line QR code URL
                    call_to_action: "สอบถามทักได้เลย", // Call to action
                    button_color: "#129BF4", // Color of button
                    position: "right", // Position may be 'right' or 'left'
                    order: "facebook,line", // Order of buttons
                };
                var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = url + '/widget-send-button/js/init.js';
                s.onload = function () {
                    WhWidgetSendButton.init(host, proto, options);
                };
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            })();
        </script>
        <!-- /WhatsHelp.io widget -->
        <!-- Histats.com  START  (aync)-->
        <script type="text/javascript">var _Hasync = _Hasync || [];
            _Hasync.push(['Histats.start', '1,4164186,4,0,0,0,00010000']);
            _Hasync.push(['Histats.fasi', '1']);
            _Hasync.push(['Histats.track_hits', '']);
            (function () {
                var hs = document.createElement('script');
                hs.type = 'text/javascript';
                hs.async = true;
                hs.src = ('//s10.histats.com/js15_as.js');
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
            })();</script>
        <noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4164186%26101" alt="free website hit counter" border="0"/></a></noscript>
        <!-- Histats.com  END  -->
    </body>
</html>