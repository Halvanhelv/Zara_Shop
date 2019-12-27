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
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

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
                                <a href="login-register.html">
                                    <span class="ti-user"></span>
                                </a>
                            </div>
                            <div class="header-cart same-style">
                                <button class="sidebar-trigger">
                                    <i class="ti-shopping-cart"></i>
                                    <span class="count-style">03</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu-area col-12">
                        <div class="mobile-menu">
                            <nav id="mobile-menu-active">
                                <ul class="menu-overflow">
                                    <li><a href="/">HOME</a>
                                        <ul>
                                            <li><a href="index.html">home version 1</a></li>
                                            <li><a href="index-2.html">home version 2</a></li>
                                            <li><a href="index-3.html">home version 3</a></li>
                                            <li><a href="index-4.html">home version 4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">pages</a>
                                        <ul>
                                            <li><a href="about-us.html">about us</a></li>
                                            <li><a href="cart.html">cart page</a></li>
                                            <li><a href="checkout.html">checkout</a></li>
                                            <li><a href="wishlist.html">wishlist</a></li>
                                            <li><a href="login-register.html">login</a></li>
                                            <li><a href="contact.html">contact</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">shop</a>
                                        <ul>
                                            <li><a href="#">shop grid</a>
                                                <ul>
                                                    <li><a href="shop-grid-2-col.html"> grid 2 column</a></li>
                                                    <li><a href="shop-grid-3-col.html"> grid 3 column</a></li>
                                                    <li><a href="shop.html"> grid 4 column</a></li>
                                                    <li><a href="shop-grid-6-col.html"> grid 6 column</a></li>
                                                    <li><a href="shop-grid-box.html"> grid box style</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">shop list</a>
                                                <ul>
                                                    <li><a href="shop-list.html"> list 1 column</a></li>
                                                    <li><a href="shop-list-2-col.html"> list 2 column</a></li>
                                                    <li><a href="shop-list-3-col.html"> list 3 column</a></li>
                                                    <li><a href="shop-list-box.html"> list box style</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop-grid-view-5-col.html">product details</a>
                                                <ul>
                                                    <li><a href="product-details.html">tab style</a></li>
                                                    <li><a href="product-details-sticky.html">sticky style</a></li>
                                                    <li><a href="product-details-gallery.html">gallery style</a></li>
                                                    <li><a href="product-details-fixed-img.html">fixed image style</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">BLOG</a>
                                        <ul>
                                            <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                            <li><a href="#">Blog Standard</a>
                                                <ul>
                                                    <li><a href="blog-left-sidebar.html">left sidebar</a></li>
                                                    <li><a href="blog-right-sidebar.html">right sidebar</a></li>
                                                    <li><a href="blog-no-sidebar.html">no sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Post Types</a>
                                                <ul>
                                                    <li><a href="blog-details-standerd.html">Standard post</a></li>
                                                    <li><a href="blog-details-audio.html">audio post</a></li>
                                                    <li><a href="blog-details-video.html">video post</a></li>
                                                    <li><a href="blog-details-gallery.html">gallery post</a></li>
                                                    <li><a href="blog-details-link.html">link post</a></li>
                                                    <li><a href="blog-details-quote.html">quote post</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html"> Contact us</a></li>
                                </ul>
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
                    <h3>Shopping Cart</h3>
                    <ul>
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="assets/img/cart/1.jpg" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h3><a href="#"> Trucker Chair</a></h3>
                                <span>1 x $140.00</span>
                            </div>
                            <div class="cart-delete">
                                <a href="#"><i class="ti-trash"></i></a>
                            </div>
                        </li>
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="assets/img/cart/2.jpg" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h3><a href="#"> Reclining Sofa</a></h3>
                                <span>1 x $140.00</span>
                            </div>
                            <div class="cart-delete">
                                <a href="#"><i class="ti-trash"></i></a>
                            </div>
                        </li>
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="assets/img/cart/3.jpg" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h3><a href="#">Handmade Pot</a></h3>
                                <span>1 x $140.00</span>
                            </div>
                            <div class="cart-delete">
                                <a href="#"><i class="ti-trash"></i></a>
                            </div>
                        </li>
                        <li class="single-product-cart">
                            <div class="cart-total">
                                <h4>Total : <span>$ 120</span></h4>
                            </div>
                        </li>
                    </ul>
                    <div class="cart-checkout-btn">
                        <a class="cr-btn btn-style cart-btn-style" href="#"><span>view cart</span></a>
                        <a class="no-mrg cr-btn btn-style cart-btn-style" href="#"><span>checkout</span></a>
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
            <form>
                <div class="form-search">
                    <input id="search" class="input-text" value="" placeholder="Search Entire Store" type="search">
                    <button>
                        <i class="ti-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>





<?=$content?>


    <?php new \app\widgets\menu\Menu([

        'tpl' => APP . '/views/layouts/default.php',
        'tpl_num'=>'1',
        'container'=>'footer'
    ]); ?>
    <!-- modal -->

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


<!-- all js here -->
<script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
<script src="js/main.js"></script>
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

</body>
</html>
