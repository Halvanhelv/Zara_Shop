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
                            <li class="breadcrumb-item"><a href="<?=PATH;?>">Главная</a></li>
                            <li class="breadcrumb-item current  "><a class="click_disabled" onclick="return false"  href="">Поиск по запросу "<?=h($query);?>"</a></li>
                        </ul>
                    </li><!-- /.breadcrumb-nav-holder -->

                </ul><!-- /.inline -->
            </nav>

        </div><!-- /.container -->
    </div><!-- /#top-mega-nav -->
    <!-- ========================================= BREADCRUMB : END ========================================= -->
</div>

<section id="category-grid">
    <div class="container">
        <!-- ========================================= SIDEBAR ========================================= -->
        <div class="col-xs-12 col-sm-3 no-margin sidebar narrow">
            <!-- ========================================= PRODUCT FILTER ========================================= -->
            <?php new \app\widgets\filter\Filter(); ?>
            <!-- ========================================= PRODUCT FILTER : END ========================================= -->

            <div class="widget">
                <h1 class="border">special offers</h1>
                <ul class="product-list">
                    <li>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 no-margin">
                                <a href="#" class="thumb-holder">
                                    <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-small-01.jpg" />
                                </a>
                            </div>
                            <div class="col-xs-8 col-sm-8 no-margin">
                                <a href="#">Netbook Acer </a>
                                <div class="price">
                                    <div class="price-prev">$2000</div>
                                    <div class="price-current">$1873</div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 no-margin">
                                <a href="#" class="thumb-holder">
                                    <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-small-02.jpg" />
                                </a>
                            </div>
                            <div class="col-xs-8 col-sm-8 no-margin">
                                <a href="#">PowerShot Elph 115 16MP Digital Camera</a>
                                <div class="price">
                                    <div class="price-prev">$2000</div>
                                    <div class="price-current">$1873</div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 no-margin">
                                <a href="#" class="thumb-holder">
                                    <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-small-03.jpg" />
                                </a>
                            </div>
                            <div class="col-xs-8 col-sm-8 no-margin">
                                <a href="#">PowerShot Elph 115 16MP Digital Camera</a>
                                <div class="price">
                                    <div class="price-prev">$2000</div>
                                    <div class="price-current">$1873</div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 no-margin">
                                <a href="#" class="thumb-holder">
                                    <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-small-01.jpg" />
                                </a>
                            </div>
                            <div class="col-xs-8 col-sm-8 no-margin">
                                <a href="#">Netbook Acer</a>
                                <div class="price">
                                    <div class="price-prev">$2000</div>
                                    <div class="price-current">$1873</div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 no-margin">
                                <a href="#" class="thumb-holder">
                                    <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-small-02.jpg" />
                                </a>
                            </div>
                            <div class="col-xs-8 col-sm-8 no-margin">
                                <a href="#">PowerShot Elph 115 16MP Digital Camera</a>
                                <div class="price">
                                    <div class="price-prev">$2000</div>
                                    <div class="price-current">$1873</div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div><!-- /.widget -->

            <div class="widget">
                <div class="simple-banner">
                    <a href="#"><img alt="" class="img-responsive" src="assets/images/blank.gif" data-echo="assets/images/banners/banner-simple.jpg" /></a>
                </div>
            </div>

            <!-- ========================================= FEATURED PRODUCTS ========================================= -->
            <div class="widget">
                <h1 class="border">Featured Products</h1>
                <ul class="product-list">

                    <li class="sidebar-product-list-item">
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 no-margin">
                                <a href="#" class="thumb-holder">
                                    <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-small-01.jpg" />
                                </a>
                            </div>
                            <div class="col-xs-8 col-sm-8 no-margin">
                                <a href="#">Netbook Acer </a>
                                <div class="price">
                                    <div class="price-prev">$2000</div>
                                    <div class="price-current">$1873</div>
                                </div>
                            </div>
                        </div>
                    </li><!-- /.sidebar-product-list-item -->

                    <li class="sidebar-product-list-item">
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 no-margin">
                                <a href="#" class="thumb-holder">
                                    <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-small-02.jpg" />
                                </a>
                            </div>
                            <div class="col-xs-8 col-sm-8 no-margin">
                                <a href="#">PowerShot Elph 115 16MP Digital Camera</a>
                                <div class="price">
                                    <div class="price-prev">$2000</div>
                                    <div class="price-current">$1873</div>
                                </div>
                            </div>
                        </div>
                    </li><!-- /.sidebar-product-list-item -->

                    <li class="sidebar-product-list-item">
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 no-margin">
                                <a href="#" class="thumb-holder">
                                    <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-small-03.jpg" />
                                </a>
                            </div>
                            <div class="col-xs-8 col-sm-8 no-margin">
                                <a href="#">PowerShot Elph 115 16MP Digital Camera</a>
                                <div class="price">
                                    <div class="price-prev">$2000</div>
                                    <div class="price-current">$1873</div>
                                </div>
                            </div>
                        </div>
                    </li><!-- /.sidebar-product-list-item -->

                    <li class="sidebar-product-list-item">
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 no-margin">
                                <a href="#" class="thumb-holder">
                                    <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-small-01.jpg" />
                                </a>
                            </div>
                            <div class="col-xs-8 col-sm-8 no-margin">
                                <a href="#">Netbook Acer </a>
                                <div class="price">
                                    <div class="price-prev">$2000</div>
                                    <div class="price-current">$1873</div>
                                </div>
                            </div>
                        </div>
                    </li><!-- /.sidebar-product-list-item -->

                    <li class="sidebar-product-list-item">
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 no-margin">
                                <a href="#" class="thumb-holder">
                                    <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-small-02.jpg" />
                                </a>
                            </div>
                            <div class="col-xs-8 col-sm-8 no-margin">
                                <a href="#">PowerShot Elph 115 16MP Digital Camera</a>
                                <div class="price">
                                    <div class="price-prev">$2000</div>
                                    <div class="price-current">$1873</div>
                                </div>
                            </div>
                        </div>
                    </li><!-- /.sidebar-product-list-item -->

                </ul><!-- /.product-list -->
            </div><!-- /.widget -->
            <!-- ========================================= FEATURED PRODUCTS : END ========================================= -->
        </div>
        <!-- ========================================= SIDEBAR : END ========================================= -->

        <!-- ========================================= CONTENT ========================================= -->
        <div class="col-xs-12 col-sm-9 no-margin wide sidebar">


            <section id="gaming">
                <div class="grid-list-products">
                    <h2 class="section-title">Все товары</h2>

                    <div class="control-bar">




                        <div class="grid-list-buttons">
                            <ul>
                                <li class="grid-list-button-item active"><a data-toggle="tab" href="#grid-view"><i class="fa fa-th-large"></i> Сетка</a></li>
                                <li class="grid-list-button-item "><a data-toggle="tab" href="#list-view"><i class="fa fa-th-list"></i> Список</a></li>
                            </ul>
                        </div>
                    </div><!-- /.control-bar -->

                    <div class="tab-content">
                        <div id="grid-view" class="products-grid fade tab-pane in active">

                            <div class="product-grid-holder">
                                <div class="row no-margin">
                                    <?php if(!empty($products)): ?>
                                        <?php $curr = \ishop\App::$app->getProperty('currency'); ?>
                                        <?php foreach($products as $product): ?>
                                            <div class="col-xs-12 col-sm-4 no-margin product-item-holder hover">
                                                <div class="product-item">
                                                    <div class="ribbon red"><span>Популярно</span></div>
                                                    <div class="image">
                                                        <a href="product/<?=$product->alias;?>">  <img alt="" src="images/<?=$product->img;?>" data-echo="images/<?=$product->img;?>" /></a>
                                                    </div>
                                                    <div class="body">
                                                        <div class="label-discount green">-50% sale</div>
                                                        <div class="title">
                                                            <a href="product/<?=$product->alias;?>"><?=$product->title;?></a>
                                                        </div>
                                                        <div class="brand">sony</div>
                                                    </div>
                                                    <div class="prices">

                                                        <?php if($product->old_price): ?>
                                                            <div class="price-prev"><?=$curr['symbol_left'];?><?=$product->old_price * $curr['value'];?><?=$curr['symbol_right'];?></div>
                                                        <?php endif; ?>
                                                        <div class="price-current pull-right"><?=$curr['symbol_left'];?><?=$product->price * $curr['value'];?><?=$curr['symbol_right'];?></div>
                                                    </div>
                                                    <div class="hover-area">
                                                        <div class="add-cart-button">
                                                            <a href="cart/add?id=<?=$product->id;?>"  data-id="<?=$product->id;?>" class="le-button add-to-cart-link">Купить</a>
                                                        </div>
                                                        <div class="wish-compare">
                                                            <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                            <a class="btn-add-to-compare" href="#">compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <h3>В этой категории товаров пока нет...</h3>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="pagination-holder">
                                <div class="row">

                                    <div class="col-xs-12 col-sm-6 text-left">

                                        <?php if($pagination->countPages > 1): ?>
                                            <?=$pagination;?>
                                        <?php endif; ?>

                                    </div>

                                    <div class="col-xs-12 col-sm-6">
                                        <div class="result-counter">
                                            Показано <span>(<?=count($products)?> товара(ов)</span> из  <span><?=$total;?>)</span>
                                        </div>
                                    </div>

                                </div><!-- /.row -->
                            </div>

                        </div>

                        <div id="list-view" class="products-grid fade tab-pane ">
                            <div class="products-list">
                                <?php if(!empty($products)): ?>
                                    <?php foreach($products as $product): ?>
                                        <div class="product-item product-item-holder">
                                            <div class="ribbon red"><span>sale</span></div>
                                            <div class="ribbon blue"><span>new!</span></div>
                                            <div class="row">
                                                <div class="no-margin col-xs-12 col-sm-4 image-holder">
                                                    <div class="image">
                                                        <a href="product/<?=$product->alias;?>">  <img alt="" src="images/<?=$product->img;?>" data-echo="images/<?=$product->img;?>" /></a>

                                                    </div>
                                                </div>
                                                <div class="no-margin col-xs-12 col-sm-5 body-holder">
                                                    <div class="body">
                                                        <div class="label-discount green">-50% sale</div>
                                                        <div class="title">
                                                            <a href="product/<?=$product->alias;?>"><?=$product->title;?>   </a>
                                                        </div>
                                                        <div class="brand">sony</div>
                                                        <div class="excerpt">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis euismod erat sit amet porta. Etiam venenatis ac diam ac tristique. Morbi accumsan consectetur odio ut tincidunt.</p>
                                                        </div>
                                                        <div class="addto-compare">
                                                            <a class="btn-add-to-compare" href="#">add to compare list</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="no-margin col-xs-12 col-sm-3 price-area">
                                                    <div class="right-clmn">
                                                        <div class="price-current"><?=$curr['symbol_left'];?><?=$product->price * $curr['value'];?><?=$curr['symbol_right'];?></div>
                                                        <?php if($product->old_price): ?>
                                                            <div class="price-prev"><?=$curr['symbol_left'];?><?=$product->old_price * $curr['value'];?><?=$curr['symbol_right'];?></div>
                                                        <?php endif; ?>
                                                        <div class="availability"><label>availability:</label><span class="available">  in stock</span></div>
                                                        <a class="le-button add-to-cart-link" data-id="<?=$product->id;?>" href="cart/add?id=<?=$product->id;?>">В корзину</a>
                                                        <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <h3>В этой категории товаров пока нет...</h3>
                                <?php endif; ?>



                            </div>

                            <div class="pagination-holder">
                                <div class="row">

                                    <div class="col-xs-12 col-sm-6 text-left">

                                        <?php if($pagination->countPages > 1): ?>
                                            <?=$pagination;?>
                                        <?php endif; ?>

                                    </div>

                                    <div class="col-xs-12 col-sm-6">
                                        <div class="result-counter">
                                            Показано <span>(<?=count($products)?> товара(ов)</span> из  <span><?=$total;?>)</span>
                                        </div>
                                    </div>

                                </div><!-- /.row -->
                            </div>

                        </div>

                    </div>
                </div>

            </section>
        </div>

    </div>
</section>
