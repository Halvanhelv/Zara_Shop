<div class="animate-dropdown">
    <!-- ========================================= BREADCRUMB ========================================= -->
    <div id="top-mega-nav">
        <div class="container">
            <nav>
                <ul class="inline">
                    <li class="dropdown le-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-list"></i> shop by department
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="#">Computer Cases & Accessories</a></li>
                            <li><a href="#">CPUs, Processors</a></li>
                            <li><a href="#">Fans, Heatsinks &amp; Cooling</a></li>
                            <li><a href="#">Graphics, Video Cards</a></li>
                            <li><a href="#">Interface, Add-On Cards</a></li>
                            <li><a href="#">Laptop Replacement Parts</a></li>
                            <li><a href="#">Memory (RAM)</a></li>
                            <li><a href="#">Motherboards</a></li>
                            <li><a href="#">Motherboard &amp; CPU Combos</a></li>
                            <li><a href="#">Motherboard Components</a></li>
                        </ul>
                    </li>

                    <li class="breadcrumb-nav-holder">
                        <ul>
                            <?=$breadcrumbs;?>
                        </ul>
                    </li><!-- /.breadcrumb-nav-holder -->

                </ul><!-- /.inline -->
            </nav>

        </div><!-- /.container -->
    </div><!-- /#top-mega-nav -->
    <!-- ========================================= BREADCRUMB : END ========================================= -->
</div>

<!-- ============================================================= TOP NAVIGATION ============================================================= -->

<!-- ============================================================= TOP NAVIGATION : END ============================================================= -->

<!-- ============================================================= HEADER ============================================================= -->

<!-- ============================================================= HEADER : END ============================================================= -->
<?php
$curr = \ishop\App::$app->getProperty('currency');
$cats = \ishop\App::$app->getProperty('cats');
?>

<div id="single-product">
    <div class="container">
        <?php if($gallery): ?>
            <div class="no-margin col-xs-12 col-sm-6 col-md-5 gallery-holder">
                <div class="product-item-holder size-big single-product-gallery small-gallery">

                    <div id="owl-single-product" class="owl-carousel">
                        <?php foreach($gallery as $item): ?>
                            <div class="single-product-gallery-item" id="slideimages/<?=$item->img;?>">
                                <a data-rel="prettyphoto" href="">
                                    <img class="img-responsive" alt="" style="max-height: 320px; margin: 0 auto"  src="assets/images/blank.gif" data-echo="images/<?=$item->img;?>" />
                                </a>
                            </div><!-- /.single-product-gallery-item -->
                        <?php endforeach; ?>
                        <!-- /.single-product-gallery-item -->

                        <!-- /.single-product-gallery-item -->
                    </div><!-- /.single-product-slider -->


                    <div class="single-product-gallery-thumbs gallery-thumbs">

                        <div id="owl-single-product-thumbnails" class="owl-carousel">
                            <?php $i = 0; ?>
                            <?php foreach($gallery as $item): ?>
                                <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="<?php echo $i; ?>" href="#slideimages/<?=$item->img;?>">
                                    <img  src="images/<?=$item->img;?>" style="max-height: 36px; width: auto; margin: 0 auto"   data-echo="images/<?=$item->img;?>" />
                                </a>
                            <?php $i++ ?>
                            <?php endforeach; ?>


                        </div><!-- /#owl-single-product-thumbnails -->

                        <div class="nav-holder left hidden-xs">
                            <a class="prev-btn slider-prev" data-target="#owl-single-product-thumbnails" href="#prev"></a>
                        </div><!-- /.nav-holder -->

                        <div class="nav-holder right hidden-xs">
                            <a class="next-btn slider-next" data-target="#owl-single-product-thumbnails" href="#next"></a>
                        </div><!-- /.nav-holder -->

                    </div><!-- /.gallery-thumbs -->

                </div><!-- /.single-product-gallery -->

            </div><!-- /.gallery-holder -->
        <?php else: ?>
            <div class="no-margin col-xs-12 col-sm-6 col-md-5 gallery-holder">
                <div class="product-item-holder size-big single-product-gallery small-gallery">

                    <div id="owl-single-product" class="owl-carousel">
                        <div class="single-product-gallery-item  "  id="slide1">
                            <a data-rel="prettyphoto" >
                                <img class="img-responsive"  style="max-width: 320px " alt=""src="assets/images/blank.gif" data-echo="images/<?=$product->img;?>" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->
                        <!-- /.single-product-gallery-item -->

                        <!-- /.single-product-gallery-item -->
                    </div><!-- /.single-product-slider -->




                </div><!-- /.single-product-gallery -->
            </div><!-- /.gallery-holder -->

        <?php  endif;?>
        <div class="no-margin col-xs-12 col-sm-7 body-holder">
            <div class="body">
                <div class="star-holder inline"><div class="star" data-score="4"></div></div>
                <div class="availability"><label>В наличии:</label><span class="available"> Да</span></div>

                <div class="title"><a href="#"><?=$product->title;?></a></div>
                <div class="brand">sony</div>

                <div class="social-row">
                    <span class="st_facebook_hcount"></span>
                    <span class="st_twitter_hcount"></span>
                    <span class="st_pinterest_hcount"></span>
                </div>

                <div class="buttons-holder">
                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                    <a class="btn-add-to-compare" href="#">add to compare list</a>
                </div>

                <div class="excerpt">
                    <p> <?=$product->content;?></p>
                </div>

                <div class="prices">
                    <div id="base-price" data-base="<?=$product->price * $curr['value'];?>" class="price-current"><?=$curr['symbol_left'];?><?=$product->price * $curr['value'];?><?=$curr['symbol_right'];?></div>
                    <?php if($product->old_price): ?>
                        <div class="price-prev"><?=$curr['symbol_left'];?><?=$product->old_price * $curr['value'];?><?=$curr['symbol_right'];?></div>
                    <?php endif; ?>

                </div>

                <div class="qnt-holder">
                    <div class="le-quantity">
                        <form class="quantity">
                            <a class="minus" href="#reduce"></a>
                            <input name="quantity"  type="number " size="4" value="1" min="1" />
                            <a class="plus" href="#add"></a>
                        </form>

                    </div>
                    <a id="addto-cart" href="cart/add?id=<?=$product->id;?>" data-id="<?=$product->id;?>" class="le-button huge add-to-cart-link">Купить</a>
                </div><!-- /.qnt-holder -->
            </div><!-- /.body -->

        </div><!-- /.body-holder -->
    </div><!-- /.container -->
</div><!-- /.single-product -->


<!-- ========================================= SINGLE PRODUCT TAB ========================================= -->
<section id="single-product-tab">
    <div class="container">
        <div class="tab-holder">

            <ul class="nav nav-tabs simple" >
                <li class="active"><a href="#description" data-toggle="tab">Description</a></li>
                <li><a href="#additional-info" data-toggle="tab">Additional Information</a></li>
                <li><a href="#reviews" data-toggle="tab">Reviews (3)</a></li>
            </ul><!-- /.nav-tabs -->

            <div class="tab-content">
                <div class="tab-pane active" id="description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet porttitor eros. Praesent quis diam placerat, accumsan velit interdum, accumsan orci. Nunc libero sem, elementum in semper in, sollicitudin vitae dolor. Etiam sed tempus nisl. Integer vel diam nulla. Suspendisse et aliquam est. Nulla molestie ante et tortor sollicitudin, at elementum odio lobortis. Pellentesque neque enim, feugiat in elit sed, pharetra tempus metus. Pellentesque non lorem nunc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

                    <p>Sed consequat orci vel rutrum blandit. Nam non leo vel risus cursus porta quis non nulla. Vestibulum vitae pellentesque nunc. In hac habitasse platea dictumst. Cras egestas, turpis a malesuada mollis, magna tortor scelerisque urna, in pellentesque diam tellus sit amet velit. Donec vel rhoncus nisi, eget placerat elit. Phasellus dignissim nisl vel lectus vehicula, eget vehicula nisl egestas. Duis pretium sed risus dapibus egestas. Nam lectus felis, sodales sit amet turpis se.</p>

                    <div class="meta-row">




                        <div class="inline">
                            <label>Категория:</label>
                            <span><a href="category/<?=$cats[$product->category_id]['alias'];?>"><?=$cats[$product->category_id]['title'];?></a></span>

                        </div><!-- /.inline -->




                    </div><!-- /.meta-row -->
                </div><!-- /.tab-pane #description -->
             <?php if ($detail): ?>
                <div class="tab-pane" id="additional-info">
                    <ul class="tabled-data">
                        <?php foreach($detail as $k): ?>
                        <li>
                            <label><?php echo $k['detail_name']?></label>
                            <div class="value"><?php echo $k['attr_value']?></div>
                        </li>
                      <?php endforeach; ?>
                    </ul><!-- /.tabled-data -->

                    <div class="meta-row">
                        <div class="inline">
                            <label>SKU:</label>
                            <span>54687621</span>
                        </div><!-- /.inline -->

                        <span class="seperator">/</span>

                        <div class="inline">
                            <label>categories:</label>
                            <span><a href="#">-50% sale</a>,</span>
                            <span><a href="#">gaming</a>,</span>
                            <span><a href="#">desktop PC</a></span>
                        </div><!-- /.inline -->

                        <span class="seperator">/</span>

                        <div class="inline">
                            <label>tag:</label>
                            <span><a href="#">fast</a>,</span>
                            <span><a href="#">gaming</a>,</span>
                            <span><a href="#">strong</a></span>
                        </div><!-- /.inline -->
                    </div><!-- /.meta-row -->
                </div><!-- /.tab-pane #additional-info -->

      <?php endif; ?>
                <div class="tab-pane" id="reviews">
                    <div class="comments">
                        <div class="comment-item">
                            <div class="row no-margin">
                                <div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
                                    <div class="avatar">
                                        <img alt="avatar" src="assets/images/default-avatar.jpg">
                                    </div><!-- /.avatar -->
                                </div><!-- /.col -->

                                <div class="col-xs-12 col-lg-11 col-sm-10 no-margin">
                                    <div class="comment-body">
                                        <div class="meta-info">
                                            <div class="author inline">
                                                <a href="#" class="bold">John Smith</a>
                                            </div>
                                            <div class="star-holder inline">
                                                <div class="star" data-score="4"></div>
                                            </div>
                                            <div class="date inline pull-right">
                                                12.07.2013
                                            </div>
                                        </div><!-- /.meta-info -->
                                        <p class="comment-text">
                                            Integer id purus ultricies nunc tincidunt congue vitae nec felis. Vivamus sit amet nisl convallis, faucibus risus in, suscipit sapien. Vestibulum egestas interdum tellus id venenatis.
                                        </p><!-- /.comment-text -->
                                    </div><!-- /.comment-body -->

                                </div><!-- /.col -->

                            </div><!-- /.row -->
                        </div><!-- /.comment-item -->

                        <div class="comment-item">
                            <div class="row no-margin">
                                <div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
                                    <div class="avatar">
                                        <img alt="avatar" src="assets/images/default-avatar.jpg">
                                    </div><!-- /.avatar -->
                                </div><!-- /.col -->

                                <div class="col-xs-12 col-lg-11 col-sm-10 no-margin">
                                    <div class="comment-body">
                                        <div class="meta-info">
                                            <div class="author inline">
                                                <a href="#" class="bold">Jane Smith</a>
                                            </div>
                                            <div class="star-holder inline">
                                                <div class="star" data-score="5"></div>
                                            </div>
                                            <div class="date inline pull-right">
                                                12.07.2013
                                            </div>
                                        </div><!-- /.meta-info -->
                                        <p class="comment-text">
                                            Integer id purus ultricies nunc tincidunt congue vitae nec felis. Vivamus sit amet nisl convallis, faucibus risus in, suscipit sapien. Vestibulum egestas interdum tellus id venenatis.
                                        </p><!-- /.comment-text -->
                                    </div><!-- /.comment-body -->

                                </div><!-- /.col -->

                            </div><!-- /.row -->
                        </div><!-- /.comment-item -->

                        <div class="comment-item">
                            <div class="row no-margin">
                                <div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
                                    <div class="avatar">
                                        <img alt="avatar" src="assets/images/default-avatar.jpg">
                                    </div><!-- /.avatar -->
                                </div><!-- /.col -->

                                <div class="col-xs-12 col-lg-11 col-sm-10 no-margin">
                                    <div class="comment-body">
                                        <div class="meta-info">
                                            <div class="author inline">
                                                <a href="#" class="bold">John Doe</a>
                                            </div>
                                            <div class="star-holder inline">
                                                <div class="star" data-score="3"></div>
                                            </div>
                                            <div class="date inline pull-right">
                                                12.07.2013
                                            </div>
                                        </div><!-- /.meta-info -->
                                        <p class="comment-text">
                                            Integer id purus ultricies nunc tincidunt congue vitae nec felis. Vivamus sit amet nisl convallis, faucibus risus in, suscipit sapien. Vestibulum egestas interdum tellus id venenatis.
                                        </p><!-- /.comment-text -->
                                    </div><!-- /.comment-body -->

                                </div><!-- /.col -->

                            </div><!-- /.row -->
                        </div><!-- /.comment-item -->
                    </div><!-- /.comments -->

                    <div class="add-review row">
                        <div class="col-sm-8 col-xs-12">
                            <div class="new-review-form">
                                <h2>Add review</h2>
                                <form id="contact-form" class="contact-form" method="post" >
                                    <div class="row field-row">
                                        <div class="col-xs-12 col-sm-6">
                                            <label>name*</label>
                                            <input class="le-input" >
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <label>email*</label>
                                            <input class="le-input" >
                                        </div>
                                    </div><!-- /.field-row -->

                                    <div class="field-row star-row">
                                        <label>your rating</label>
                                        <div class="star-holder">
                                            <div class="star big" data-score="0"></div>
                                        </div>
                                    </div><!-- /.field-row -->

                                    <div class="field-row">
                                        <label>your review</label>
                                        <textarea rows="8" class="le-input"></textarea>
                                    </div><!-- /.field-row -->

                                    <div class="buttons-holder">
                                        <button type="submit" class="le-button huge">submit</button>
                                    </div><!-- /.buttons-holder -->
                                </form><!-- /.contact-form -->
                            </div><!-- /.new-review-form -->
                        </div><!-- /.col -->
                    </div><!-- /.add-review -->

                </div><!-- /.tab-pane #reviews -->
            </div><!-- /.tab-content -->

        </div><!-- /.tab-holder -->
    </div><!-- /.container -->
</section><!-- /#single-product-tab -->
<!-- ========================================= SINGLE PRODUCT TAB : END ========================================= -->
<!-- ========================================= RECENTLY VIEWED ========================================= -->
<?php if($related): ?>
    <section id="recently-reviewd" class="wow fadeInUp">
        <div class="container">
            <div class="carousel-holder hover">

                <div class="title-nav">

                    <h2 class="h1">C этим покупают</h2>
                    <div class="nav-holder">
                        <a href="#prev" data-target="#owl-recently-viewed" class="slider-prev btn-prev fa fa-angle-left"></a>
                        <a href="#next" data-target="#owl-recently-viewed" class="slider-next btn-next fa fa-angle-right"></a>
                    </div>
                </div><!-- /.title-nav -->


                <div id="owl-recently-viewed" class="owl-carousel product-grid-holder">
                    <?php foreach($related as $item): ?>
                        <div class="no-margin carousel-item product-item-holder size-small hover">

                            <div class="product-item">
                                <div class="ribbon red"><span>sale</span></div>
                                <div class="image">
                                    <a href="product/<?=$item['alias'];?>">
                                        <img alt="" src="assets/images/blank.gif" style="max-height: 143px" data-echo="images/<?=$item['img'];?>" />
                                    </a>
                                </div>
                                <div class="body">
                                    <div class="title">
                                        <a href="product/<?=$item['alias'];?>"><?=$item['title'];?></a>
                                    </div>
                                    <div class="brand">Sharp</div>
                                </div>
                                <div class="prices">
                                    <div class="price-current text-right"><?=$curr['symbol_left'];?><?=$item['price'] * $curr['value'];?><?=$curr['symbol_right'];?></div>
                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="cart/add?id=<?=$item['id'];?>" class="le-button">В корзину</a>
                                    </div>

                                </div>
                            </div><!-- /.product-item -->
                        </div><!-- /.product-item-holder -->


                    <?php endforeach; ?>

                </div><!-- /#recently-carousel -->


            </div><!-- /.carousel-holder -->
        </div><!-- /.container -->
    </section><!-- /#recently-reviewd -->
<?php endif; ?>





<?php if($recentlyViewed): ?>
    <section id="recently-reviewd-2" class="wow fadeInUp">
        <div class="container">
            <div class="carousel-holder hover">

                <div class="title-nav">

                    <h2 class="h1">Ранее просмотренное</h2>
                    <div class="nav-holder">
                        <a href="#prev" data-target="#owl-recently-viewed-2" class="slider-prev btn-prev fa fa-angle-left"></a>
                        <a href="#next" data-target="#owl-recently-viewed-2" class="slider-next btn-next fa fa-angle-right"></a>
                    </div>
                </div><!-- /.title-nav -->


                <div id="owl-recently-viewed-2" class="owl-carousel product-grid-holder">
                    <?php foreach($recentlyViewed as $item): ?>
                        <div class="no-margin carousel-item product-item-holder size-small hover">

                            <div class="product-item">
                                <div class="ribbon red"><span>sale</span></div>
                                <div class="image">
                                    <a href="product/<?=$item['alias'];?>">
                                        <img alt="product/<?=$item['alias'];?>" src="assets/images/blank.gif" style="max-height: 143px;margin: 0 auto"  data-echo="images/<?=$item['img'];?>" />
                                    </a>
                                </div>
                                <div class="body">
                                    <div class="title">
                                        <a href="product/<?=$item['alias'];?>"><?=$item['title'];?></a>
                                    </div>
                                    <div class="brand">Sharp</div>
                                </div>
                                <div class="prices">
                                    <div class="price-current text-right"><?=$curr['symbol_left'];?><?=$item['price'] * $curr['value'];?><?=$curr['symbol_right'];?></div>
                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="cart/add?id=<?=$item['id'];?>" class="le-button">В корзину</a>
                                    </div>

                                </div>
                            </div><!-- /.product-item -->
                        </div><!-- /.product-item-holder -->


                    <?php endforeach; ?>

                </div><!-- /#recently-carousel -->


            </div><!-- /.carousel-holder -->
        </div><!-- /.container -->
    </section><!-- /#recently-reviewd -->
<?php endif; ?>