<?php $curr = \ishop\App::$app->getProperty('currency'); ?>
<?php if($brands): ?>
<div class="slider-area">

    <div class="slider-active owl-carousel">
  <?php foreach($brands as $brand): ?>
        <div class="single-slider slider-1 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="slider-content slider-animated-1">
                            <?=$brand->slider_text;?>

                            <a class="slider-btn animated" href="shop.html">Посмотреть</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="slider-single-img slider-animated-1">
                            <img class="animated" style="min-height: 544px;" src="images/<?=$brand->slider_img;?>" alt="slider images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
  <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>
<div class="banner-area hm1-banner pt-130 pb-107">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4">
                <div class="banner-wrapper banner-border ml-10 mb-30">
                    <div class="banner-img">
                        <a href="#"><img src="assets/img/banner/1.jpg" alt="image"></a>
                    </div>
                    <div class="banner-content-style1 banner-position-center-right">
                        <h2>30% <span><img src="assets/img/icon-img/discount.png" alt="image"></span> <br>Products</h2>
                    </div>
                </div>
                <div class="banner-wrapper banner-border ml-10 mb-30">
                    <div class="banner-img">
                        <a href="#"><img src="assets/img/banner/2.jpg" alt="image"></a>
                    </div>
                    <div class="banner-content-style2 banner-position-center-left">
                        <h3>Don’t Miss</h3>
                        <h2>Rattan <span>Bag.</span></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="banner-wrapper mrg-mb-md">
                    <div class="banner-img">
                        <a href="#"><img src="assets/img/banner/3.jpg" alt="image"></a>
                    </div>
                    <div class="banner-content-style3 banner-position-top">
                        <h3>Black Friday Offer</h3>
                    </div>
                    <div class="banner-content-style4 banner-position-bottom">
                        <h3>20% Off</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="banner-wrapper banner-border-2 mr-10 mb-30">
                    <div class="banner-img">
                        <a href="#"><img src="assets/img/banner/4.jpg" alt="image"></a>
                    </div>
                    <div class="banner-content-style2 banner-position-center-left">
                        <h3>Don’t Miss</h3>
                        <h2>Rattan <span>Lamp.</span></h2>
                    </div>
                </div>
                <div class="banner-wrapper banner-border-2 mr-10 mb-30">
                    <div class="banner-img">
                        <a href="#"><img src="assets/img/banner/5.jpg" alt="image"></a>
                    </div>
                    <div class="banner-content-style1 banner-position-center-right">
                        <h2>30% <span> <img src="assets/img/icon-img/discount.png" alt="image"></span> <br>Products</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-area pb-80">
    <div class="container">
        <div class="section-title text-center mb-20">
            <h2>Our Collection</h2>
        </div>
        <div class="product-tab-list text-center mb-60 nav product-menu-mrg" role="tablist">
            <a class="active" href="#home1" data-toggle="tab" role="tab" aria-selected="true" aria-controls="home1">
                <h4>Featured </h4>
            </a>
            <a href="#home2" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home2">
                <h4> Latest </h4>
            </a>
            <a href="#home3" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home3">
                <h4>Best Seller</h4>
            </a>
        </div>
        <div class="tab-content">
            <?php if (isset($hits)): ?>
            <div class="tab-pane active" id="home1" role="tabpanel">
                <div class="row">
                    <?php foreach ($hits as $hit): ?>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="product-wrapper mb-45">
                            <div class="product-img">
                                <a href="#">
                                    <img src="images/<?=$hit->img;?>" alt="" >
                                </a>
                                <span>30% off</span>
                                <div class="product-action">
                                    <div class="product-action-style">
                                        <a class="action-plus" title="Quick View" data-toggle="modal" data-src="<?=$hit->alias;?>" data-target="#exampleModal" href="#">
                                            <i class="ti-plus"></i>
                                        </a>
                                        <a class="action-heart" title="Wishlist" href="#">
                                            <i class="ti-heart"></i>
                                        </a>
                                        <a class="action-cart" title="Add To Cart" href="#">
                                            <i class="ti-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h4><a href="product-details.html">Rattan Tissue Holder</a></h4>
                                <div class="product-rating">
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star-outline"></i>
                                    <i class="ion-ios-star-outline"></i>
                                    <i class="ion-ios-star-outline"></i>
                                </div>
                                <div class="product-price">
                                    <span class="old"></span>
                                    <span><?=$curr['symbol_left'];?><?=number_format($hit->price * $curr['value'], 0, ',', ' ');?><?=$curr['symbol_right'];?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                   <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
            <?php if (isset($hits)): ?>
            <div class="tab-pane" id="home2" role="tabpanel">
                <div class="row">
                    <?php foreach ($hits as $hit): ?>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="product-wrapper mb-45">
                            <div class="product-img">
                                <a href="#">
                                    <img src="images/<?=$hit->img;?>" alt="" >
                                </a>
                                <span>30% off</span>
                                <div class="product-action">
                                    <div class="product-action-style">
                                        <a class="action-plus" title="Quick View" data-src="<?=$hit->alias;?>" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class="ti-plus"></i>
                                        </a>
                                        <a class="action-heart" title="Wishlist" href="#">
                                            <i class="ti-heart"></i>
                                        </a>
                                        <a class="action-cart" title="Add To Cart" href="#">
                                            <i class="ti-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h4><a href="product-details.html">Rattan Tissue Holder</a></h4>
                                <div class="product-rating">
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star-outline"></i>
                                    <i class="ion-ios-star-outline"></i>
                                    <i class="ion-ios-star-outline"></i>
                                </div>
                                <div class="product-price">
                                    <span class="old">$22.00 </span>
                                    <span><?=$curr['symbol_left'];?><?=number_format($hit->price * $curr['value'], 0, ',', ' ');?><?=$curr['symbol_right'];?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
            <?php if (isset($hits)): ?>
            <div class="tab-pane" id="home3" role="tabpanel">
                <div class="row">
                    <?php foreach ($hits as $hit): ?>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="product-wrapper mb-45">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="images/<?=$hit->img;?>" alt="" >
                                    </a>
                                    <span>30% off</span>
                                    <div class="product-action">
                                        <div class="product-action-style">
                                            <a class="action-plus" title="Quick View" data-src="<?=$hit->alias;?>" data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class="ti-plus"></i>
                                            </a>
                                            <a class="action-heart" title="Wishlist" href="#">
                                                <i class="ti-heart"></i>
                                            </a>
                                            <a class="action-cart" title="Add To Cart" href="#">
                                                <i class="ti-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <h4><a href="product-details.html">Rattan Tissue Holder</a></h4>
                                    <div class="product-rating">
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star-outline"></i>
                                        <i class="ion-ios-star-outline"></i>
                                        <i class="ion-ios-star-outline"></i>
                                    </div>
                                    <div class="product-price">
                                        <span class="old">$22.00 </span>
                                        <span><?=$curr['symbol_left'];?><?=number_format($hit->price * $curr['value'], 0, ',', ' ');?><?=$curr['symbol_right'];?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="banner-area pb-95">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="banner-wrapper overflow mb-30">
                    <div class="banner-img">
                        <a href="#">
                            <img alt="image" src="assets/img/banner/6.jpg">
                        </a>
                    </div>
                    <div class="banner-content-5">
                        <h4>New Arrivals</h4>
                        <h2>Rattan Sofa</h2>
                        <h3>Sale up to 30% off all</h3>
                        <a href="#" class="banner-btn">View Collection</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner-wrapper overflow mb-30">
                    <div class="banner-img">
                        <a href="#">
                            <img alt="image" src="assets/img/banner/7.jpg">
                        </a>
                    </div>
                    <div class="banner-content-5">
                        <h4>Best Products</h4>
                        <h2>Rattan Accessories</h2>
                        <h3>Sale up to 40% off all</h3>
                        <a href="#" class="banner-btn">View Collection</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="new-collection-area pb-90">
    <div class="container">
        <div class="section-title text-center mb-55">
            <h2>New Collection</h2>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="new-collection-slider owl-carousel mb-30">
                    <div class="single-new-collection">
                        <a href="shop.html"><img alt="image" src="assets/img/product/9.jpg"></a>
                        <div class="new-collection-content slider-animated-3">
                            <h2 class="animated">Black Friday Offer</h2>
                            <a href="#" class="btn-style cr-btn animated"><span>shop now</span></a>
                        </div>
                    </div>
                    <div class="single-new-collection">
                        <a href="shop.html"><img alt="image" src="assets/img/product/10.jpg"></a>
                        <div class="new-collection-content slider-animated-4">
                            <h2 class="animated">Black Friday Offer</h2>
                            <a href="#" class="btn-style cr-btn animated"><span>shop now</span></a>
                        </div>
                    </div>
                    <div class="single-new-collection">
                        <a href="shop.html"><img alt="image" src="assets/img/product/11.jpg"></a>
                        <div class="new-collection-content slider-animated-3">
                            <h2 class="animated">Black Friday Offer</h2>
                            <a href="#" class="btn-style cr-btn animated"><span>shop now</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="product-wrapper mb-45">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/3.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <div class="product-action-style">
                                        <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class="ti-plus"></i>
                                        </a>
                                        <a class="action-heart" title="Wishlist" href="#">
                                            <i class="ti-heart"></i>
                                        </a>
                                        <a class="action-cart" title="Add To Cart" href="#">
                                            <i class="ti-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h4><a href="product-details.html">Rattan Tissue Holder</a></h4>
                                <div class="product-rating">
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                </div>
                                <div class="product-price">
                                    <span>$20.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="product-wrapper mb-45">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/4.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <div class="product-action-style">
                                        <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class="ti-plus"></i>
                                        </a>
                                        <a class="action-heart" title="Wishlist" href="#">
                                            <i class="ti-heart"></i>
                                        </a>
                                        <a class="action-cart" title="Add To Cart" href="#">
                                            <i class="ti-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h4><a href="product-details.html">Rattan Cat Chair</a></h4>
                                <div class="product-rating">
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star-outline"></i>
                                </div>
                                <div class="product-price">
                                    <span>$25.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="dealy-of-product-area gray-bg dealy-mrg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="dealy-product-img wow fadeInLeft">
                    <img src="assets/img/banner/1.png" alt="image">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 dealy-product-content-center">
                <div class="dealy-product-content">
                    <h3><a href="#">Rattan Rocking Cradle</a></h3>
                    <div class="dealy-rating">
                        <i class="ion-ios-star"></i>
                        <i class="ion-ios-star"></i>
                        <i class="ion-ios-star"></i>
                        <i class="ion-ios-star"></i>
                        <i class="ion-ios-star"></i>
                    </div>
                    <div class="dealy-price">
                        <span class="old">$20.00</span>
                        <span>$15.00</span>
                    </div>
                    <div class="timer">
                        <div data-countdown="2018/06/01"></div>
                    </div>
                    <a href="#" class="btn-style cr-btn"><span>shop now</span></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="dealy-product-img wow fadeInRight f-right">
                    <img src="assets/img/banner/2.png" alt="image">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog-area pt-125 pb-85 blog-padding hm-blog">
    <div class="container-fluid">
        <div class="section-title text-center mb-60">
            <h2>Latest Blog</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="blog-hm-wrapper mb-40">
                    <div class="blog-img">
                        <a href="blog-details-standerd.html"><img src="assets/img/blog/1.jpg" alt="image"></a>
                    </div>
                    <div class="blog-hm-content">
                        <h3><a href="blog-details-standerd.html">Lorem ipsum dolor sit amet consectetu to adipisicing elit sed do eius</a></h3>
                        <div class="blog-meta">
                            <ul>
                                <li><span>by:</span><a href="#">Admin</a></li>
                                <li><span>On</span> 14 Oct, 2018</li>
                            </ul>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetl adipisicing elit, sed do eiusmod tempor incididul ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-hm-wrapper mb-40">
                    <div class="blog-img">
                        <a href="blog-details-standerd.html"><img src="assets/img/blog/2.jpg" alt="image"></a>
                    </div>
                    <div class="blog-hm-content">
                        <h3><a href="blog-details-standerd.html">Lorem ipsum dolor sit amet consectetu to adipisicing elit sed do eius</a></h3>
                        <div class="blog-meta">
                            <ul>
                                <li><span>by:</span><a href="#">Admin</a></li>
                                <li><span>On</span> 14 Oct, 2018</li>
                            </ul>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetl adipisicing elit, sed do eiusmod tempor incididul ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-hm-wrapper mb-40">
                    <div class="blog-img">
                        <a href="blog-details-standerd.html"><img src="assets/img/blog/3.jpg" alt="image"></a>
                    </div>
                    <div class="blog-hm-content">
                        <h3><a href="blog-details-standerd.html">Lorem ipsum dolor sit amet consectetu to adipisicing elit sed do eius</a></h3>
                        <div class="blog-meta">
                            <ul>
                                <li><span>by:</span><a href="#">Admin</a></li>
                                <li><span>On</span> 14 Oct, 2018</li>
                            </ul>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetl adipisicing elit, sed do eiusmod tempor incididul ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
