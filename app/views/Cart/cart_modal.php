<?php if(!empty($_SESSION['cart'])): ?>



        <?php foreach($_SESSION['cart'] as $id => $item): ?>
        <li>
            <div class="basket-item">
                <div class="row">
                    <div class="col-xs-4 col-sm-4 no-margin text-center"><div class="thumb">
                            <img alt="" src="images/<?=$item['img'];?>"  style="max-height: 63px; max-width: 63px; "  />
                        </div>
                    </div>
                    <div class="col-xs-8 col-sm-8 no-margin">
                        <div class="title"><?=$item['title'];?></div>

                        <div class="price"><?=number_format($item['price'] * $_SESSION['cart.currency']['value'], 0, ',', ' ');?>  <?=$_SESSION['cart.currency']['symbol_right'] ;?> </div>

                    </div>
                </div>

                <span class="close-btn del-item " style="cursor:pointer;" data-id="<?=$id;?>"></span>
        </li>

    <?php endforeach; ?>

    <li class="checkout">
        <div class="basket-item">
            <div class="row">
                <div class="col-xs-12 col-sm-6">

                    <p class="le-button inverse ">1</p>

                </div>
                <div class="col-xs-12 col-sm-6">

                     <!--onclick="clearCart()"-->
                    <a class="le-button" href="cart/view">В корзину</a>
                </div>
            </div>
        </div>

    </li>
    <?php if(isset($_SESSION['cart'])): ?>
    <li class="checkout" style="display: none">
        <div class="basket-item">
            <div class="row">
                <div class="col-xs-12 col-sm-6">

                    <p class="le-button inverse total_sum"><?=$_SESSION['cart.currency']['symbol_left'];?><?=number_format($_SESSION['cart.sum'], 0, ',', ' ');?> <?= $_SESSION['cart.currency']['symbol_right'];?></p>

                </div>
                <div class="col-xs-12 col-sm-6">

                    <!--onclick="clearCart()"-->
                    <span class="total_qty"><?=$_SESSION['cart.qty'];?></span>
                </div>
            </div>
        </div>

    </li>

    <?php endif; ?>

<?php else: ?>
    <div class="container empty_cart" style="display: none"><img src="images/empty.svg" alt="" style="max-height: 500px;margin: 0 auto;display: block"></div>
    <p style="text-align: center">Корзина Пуста</p>
<?php endif; ?>

