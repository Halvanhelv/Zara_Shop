<?php $curr = \ishop\App::$app->getProperty('currency'); ?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <base href="/">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nokshi - Minimalist eCommerce HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- all css here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/chosen.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/bundle.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/easyzoom.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/jquery-ui.structure.min.css">
    <link rel="stylesheet" href="css/jquery-ui.theme.min.css">
   >

</head>
<body>

<div class="wrapper">
    <header class="">
        <div class="header-area transparent-bar header-2 hm-4-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-3 d-none d-sm-block d-md-block">
                        <div class="language-currency">
                            <div class="menu-icon">
                                <button><i class="ion-android-menu"></i></button>
                            </div>
                            <div class="language">
                                <select class="select-header orderby">
                                    <option value="">ENGLISH</option>
                                    <option value="">BANGLA </option>
                                    <option value="">HINDI</option>
                                </select>
                            </div>
                            <div class="currency">
                                <select class="select-header orderby">
                                    <option value="">USD</option>
                                    <option value="">US </option>
                                    <option value="">EURO</option>
                                </select>
                            </div>
                        </div>
                        <div class="menu-icon menu-icon-none">
                            <button><i class="ion-android-menu"></i></button>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-5">
                        <div class="logo-menu-wrapper text-center">
                            <div class="logo pr-155">
                                <a href="/"><img src="assets/img/logo/logo.png" alt="" /></a>
                            </div>
                            <div class="sticky-logo pr-155">
                                <a href="/"><img src="assets/img/logo/2.png" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-7">
                        <div class="header-site-icon">
                            <div class="header-search same-style">
                                <button class="sidebar-trigger-search">
                                    <span class="ti-search"></span>
                                </button>
                            </div>
                            <div class="header-login same-style">
                                <?php if(!empty($_SESSION['user'])): ?>
                                <a href="user/cabinet">
                                    <?php else: ?>
                                    <a href="user/signup">
                                    <?php endif; ?>
                                    <span class="ti-user"></span>
                                </a>
                            </div>
                            <div class="header-cart same-style">
                                <button class="sidebar-trigger">
                                    <i class="ti-shopping-cart"></i>
                                    <?php if (!empty($_SESSION['cart.qty'])): ?>
                                    <span class="count-style"><?= $_SESSION['cart.qty'] ?></span>
                                    <?php else: ?>
                                        <span class="count-style">0</span>
                                    <?php endif; ?>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu-area col-12">
                        <div class="mobile-menu">
                            <nav id="mobile-menu-active">

                                <?php new \app\widgets\menu\Menu([

                                    'tpl' => WWW . '/menu/mobile_menu.php',

                                    'tpl_num'=>'1',
                                    'container'=>'ul',
                                    'attrs' => ['class'=>'menu-overflow'],

                                ]); ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="header-height"></div>
    <!-- menu-style start -->
    <div class="sidebarmenu-wrapper">
        <div class="menu-close">
            <button><i class="ion-android-close"></i></button>
        </div>
        <div class="sidebarmenu-style">

                <?php new \app\widgets\menu\Menu([

                    'tpl' => WWW . '/menu/category.php',
                    'tpl2' => WWW . '/menu/menu2.php',
                    'tpl3' => WWW . '/menu/menu2.php',
                    'tpl_num'=>'1',
                    'container'=>'nav',
                    'attrs' => ['class'=>'menu'],

                ]); ?>

        </div>
        <div class="newsletter-area">
            <h4 class="newsletter-title">Newsletter</h4>
            <p>Send us your mail or next updates.</p>
            <div id="mc_embed_signup" class="subscribe-form">
                <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll" class="mc-form">
                        <input type="email" value="" name="EMAIL" class="email" placeholder="Your Mail :" required>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                    </div>
                </form>
            </div>
        </div>
        <div class="follow-area mt-60">
            <h4 class="newsletter-title">Follow Us</h4>
            <div class="follow-icon">
                <ul>
                    <li class="facebook"><a href="#"><i class="ion-social-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="ion-social-twitter"></i></a></li>
                    <li class="instagram"><a href="#"><i class="ion-social-instagram"></i></a></li>
                    <li class="tumblr"><a href="#"><i class="ion-social-tumblr"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- sidebar-cart start -->
    <div class="sidebar-cart onepage-sidebar-area hm-4-padding">
        <div class="wrap-sidebar">
            <div class="sidebar-cart-all">
                <div class="sidebar-cart-icon">
                    <button class="op-sidebar-close"><span class="ti-close"></span></button>
                </div>
                <div class="cart-content">
                    <h3>Корзина покупок</h3>
                    <ul>
                        <?php if(!empty($_SESSION['cart'])): ?>
                            <?php foreach($_SESSION['cart'] as $id => $item): ?>
                                <li class="single-product-cart">
                                    <div class="cart-img">
                                        <a href="#"><img src="images/background/80on80/<?= $item['img'];?> "  style="max-height: 80px" alt=""></a>
                                    </div>
                                    <div class="cart-title">
                                        <h3><a href="#"><?=$item['title'];?></a></h3>
                                        <span> <?=$item['qty'];?>  x <?=number_format($item['price'] * $_SESSION['cart.currency']['value'], 0, ',', ' ');?>  <?=$_SESSION['cart.currency']['symbol_right'] ;?></span>
                                    </div>
                                    <div class="cart-delete">
                                        <a href="#" class="del-item" data-id="<?=$id;?>"><i class="ti-trash" ></i></a>
                                    </div>
                                </li>

                            <?php endforeach; ?>
                        <?php else: ?>
                        <h1>Корзина Пуста</h1>
                        <?php endif; ?>
                        <div class="cart-total">
                            <?php if (!empty($_SESSION['cart.sum'])): ?>
                            <h4>Итого : <span><?= $_SESSION['cart.sum'] ?></span></h4>
                            <?php endif; ?>
                        </div>
                    </ul>

                    <div class="cart-checkout-btn">
                        <a class="cr-btn btn-style cart-btn-style" href="cart/view"><span>В корзину</span></a>
                        <a class="no-mrg cr-btn btn-style cart-btn-style" href="#"><span>Купить</span></a>
                    </div>
                 
                </div>
            </div>
        </div>
    </div>
    <!-- main-search start -->
    <div class="main-search-active">
        <div class="sidebar-search-icon">
            <button class="search-close"><span class="ti-close"></span></button>
        </div>
        <div class="sidebar-search-input">
            <form name="search" action="search" method="get" autocomplete="off" class="ui-widget">
                <div class="form-search">
                    <input id="search" class="input-text" value="" name="s" placeholder="Поиск" type="search">
                    <button>
                        <i class="ti-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>





<?=$content?>


    <?php new \ishop\libs\Layouts([

        'tpl' => APP . '/views/layouts/footer.php',
    ]); ?>
    <!-- modal -->
    <script>
        var path = '<?=PATH;?>',
            course = <?=$curr['value'];?>,
            symboleLeft = '<?=$curr['symbol_left'];?>',
            symboleRight = '<?=$curr['symbol_right'];?>',
            cart_sum = <?= $_SESSION['cart.sum'] ?>;

    </script>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="ion-android-close" aria-hidden="true"></span>
        </button>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="preloader" style="display: none;margin: 0 auto"><img src="images/ring.svg" alt="" ></div>
                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>

</div>

<div class="preloader1" style="display: none;margin: 0 auto"><img src="images/ring.svg" alt="" ></div>

<!-- all js here -->
<script src="assets/js/vendor/jquery-1.12.0.min.js"></script>


<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/ajax-mail.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/va/dist/jquery.validate.js"></script>
<script src="js/main.js"></script>

<script>
    $( function() {

        $( "#search" ).autocomplete({


            source: "search/typeahead",
            minLength: 3,
            select: function( event, ui ) {
                console.log(ui.id);
                window.location =  'product/' + encodeURIComponent(ui.item.id);
            }

        });
    } );
</script>
<script>
    var min = <?=$min ?>,
        max = <?=$max ?>,
        min_step = <?=$min_step ?>,
        max_step = <?=$max_step ?>;
</script>
<script>

    $('#price-range').slider({
        range: true,
        min: min,
        max: max,
        values: [min_step,max_step],
        slide: function(event, ui) {
            $('.price-amount').val('$' + ui.values[0] + ' - $' + ui.values[1]);
        },
        stop: function( event, ui ) {
let price = ui.values[0] + ',' +ui.values[1];

            $.ajax({

                url: location.href,
                 data: {
                    price: price
                },
                type: 'GET',
                beforeSend: function() {

                    $('.preloader1').fadeIn();

                },
                success: function(price) {

                    show(price,ui.values[0],ui.values[1]);


                },
                error: function() {
                    alert('Ошибка!');
                }
            })
        }

    });
    $('.price-amount').val('$' + $('#price-range').slider('values', 0) +
        ' - $' + $('#price-range').slider('values', 1));
    $('.product-filter-toggle').on('click', function() {
        $('.product-filter-wrapper').slideToggle();
    })
</script>
<script>
    $(function(){
        $('#register').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                login: {
                    required: true,
                    minlength: 6
                }
            },
            messages: {
                name: {
                    required: "Поле 'Имя' обязательно к заполнению",
                    minlength: "Введите не менее 2-х символов в поле 'Имя'"
                },
                login: {
                    required: "Поле 'Логин' обязательно к заполнению",
                    minlength: "Введите не менее 6-х символов в поле 'Логин'"
                },
                address: {
                    required: "Поле 'Адрес' обязательно к заполнению",
                    minlength: "Введите не менее 6-х символов в поле 'Адрес'"
                },
                email: {
                    required: "Поле 'Email' обязательно к заполнению",
                    email: "Необходим формат адреса email"
                },
                url: "Поле 'Сайт' обязательно к заполнению"
            }
        })
    });
</script>
<script>
    $(function(){
        $('#sign').validate({
            rules: {

                sign_login: {
                    required: true,
                    minlength: 6
                },
                sign_password: {
                    required: true,
                    minlength: 6

                }

            },
            messages: {

                sign_login: {
                    required: "Поле 'Логин' обязательно к заполнению",
                    minlength: "Введите не менее 6-х символов в поле 'Логин'"
                },
                sign_password: {
                    required: "Поле 'Логин' обязательно к заполнению",
                    minlength: "Введите не менее 6-х символов в поле 'Пароль'"
                },



            }
        })
    });
</script>
</body>
<?php
$logs = \R::getDatabaseAdapter()
    ->getDatabase()
    ->getLogger();

debug( $logs->grep( 'SELECT' ) );
?>
</html>
