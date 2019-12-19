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
                                <a href="product/<?=$product->alias;?>">  <img alt="" src="images/<?=$product->img;?>" style="max-width: 186px; max-height: 246px" data-echo="images/<?=$product->img;?>" /></a>
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
                                <?php else:?>
                                    <div class="price-prev"></div>
                                <?php endif; ?>

                                <div class="price-current pull-right"><?=$curr['symbol_left'];?><?=$product->price * $curr['value']?><?=$curr['symbol_right'];?></div>
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
    </div><!-- /.product-grid-holder -->

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
</div><!-- /.products-grid #grid-view -->
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