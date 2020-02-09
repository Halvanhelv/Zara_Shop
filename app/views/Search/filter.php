<?php $curr = \ishop\App::$app->getProperty('currency'); ?>

<div class="row">
    <?php if(!empty($products)): ?>
        <?php foreach($products as $product): ?>
            <div class="product-width col-md-6 col-lg-4 col-xl-2">
                <div class="product-wrapper mb-35">
                    <div class="product-img">
                        <a href="product/<?=$product->alias;?>">
                            <img src="images/background/310on375/<?=$product->img;?>" alt="">
                        </a>
                        <div class="price-decrease">
                            <span>30% off</span>
                        </div>
                        <div class="product-action-3">
                            <a class="action-plus" title="Quick View" data-toggle="modal" data-src="<?=$product->alias;?>" data-target="#exampleModal" href="#">
                                <i class="ti-plus"></i> Посмотреть
                            </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="product-title-wishlist">
                            <div class="product-title-3">
                                <h4><a href="product/<?=$product->alias;?>"><?=$product->title;?></a></h4>
                            </div>
                            <div class="product-wishlist-3">
                                <a href="#"><i class="ti-heart"></i></a>
                            </div>
                        </div>

                        <div class="product-peice-addtocart">
                            <div class="product-peice-3">
                                <?php if($product->old_price): ?>
                                    <span class="old"><?=$curr['symbol_left'];?><?=number_format($product->old_price * $curr['value'], 0, ',', ' ');?><?=$curr['symbol_right'];?></span>
                                <?php endif; ?>
                                <span><?=$curr['symbol_left'];?><?=number_format($product->price * $curr['value'], 0, ',', ' ');?><?=$curr['symbol_right'];?></span>

                            </div>
                            <div class="product-addtocart">
                                <a href="cart/add?id=<?=$product->id;?>" class="add-to-cart-link" data-id="<?=$product->id;?>"> <i class="ti-shopping-cart"></i>В корзину</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-list-details">
                        <h2><a href="product/<?=$product->alias;?>"><?=$product->title;?></a></h2>
                        <div class="product-rating">
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                        </div>
                        <div class="product-price">
                            <?php if($product->old_price): ?>
                                <span class="old"><?=$curr['symbol_left'];?><?=number_format($product->old_price * $curr['value'], 0, ',', ' ');?><?=$curr['symbol_right'];?></span>
                            <?php endif; ?>
                            <span><?=$curr['symbol_left'];?><?=number_format($product->price * $curr['value'], 0, ',', ' ');?><?=$curr['symbol_right'];?></span>

                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat</p>
                        <div class="shop-list-cart">
                            <a href="cart.html"><i class="ti-shopping-cart"></i> В корзину</a>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
    <?php else: ?>
        <h3>В этой категории товаров пока нет...</h3>
    <?php endif; ?>
</div>
<div class="pagination-style text-center mt-30">
    <ul>

        <?php if($pagination->countPages > 1): ?>
            <?=$pagination;?>
        <?php endif; ?>
    </ul>
</div>
