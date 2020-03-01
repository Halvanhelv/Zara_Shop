<?php if(!empty($_SESSION['cart'])): ?>



        <?php foreach($_SESSION['cart'] as $id => $item): ?>
        <li class="single-product-cart">
            <div class="cart-img">
                <a href="#"><img src="images/background/80on80/<?= $item['img'];?> "   alt=""></a>
            </div>
            <div class="cart-title">
                <h3><a href="#"><?=$item['title'];?></a></h3>
                <span class=" price_id_<?= $id ?>"><?=$item['qty'];?>  x   <?=number_format($item['price'] * $_SESSION['cart.currency']['value'], 0, ',', ' ');?>  <?=$_SESSION['cart.currency']['symbol_right'] ;?></span>
            </div>
            <div class="cart-delete">
                <a href="#" class="del-item" data-id="<?=$id;?>"><i class="ti-trash" ></i></a>
            </div>
        </li>

    <?php endforeach; ?>

    <div class="cart-checkout-btn" style="display: none">
        <a class="cr-btn btn-style cart-btn-style" href="#"><span>view cart</span></a>
        <a class="no-mrg cr-btn btn-style cart-btn-style" href="#"><span>checkout</span></a>
        <span class="count-style"><?= $_SESSION['cart.qty'] ?></span>
        <span class="total_qty"><?=$_SESSION['cart.qty'];?></span>
        <p class="le-button inverse total_sum"><?=$_SESSION['cart.currency']['symbol_left'];?><?=number_format($_SESSION['cart.sum'], 0, ',', ' ');?> <?= $_SESSION['cart.currency']['symbol_right'];?></p>
    </div>
    <div class="cart-total">
        <?php if (!empty($_SESSION['cart.sum'])): ?>
            <h4>Итого : <span><?= $_SESSION['cart.sum'] ?></span></h4>
        <?php endif; ?>

    </div>

<?php else: ?>
    <div class="container empty_cart" style="display: none"><img src="images/empty.svg" alt="" style="max-height: 500px;margin: 0 auto;display: block"></div>
    <p style="text-align: center">Корзина Пуста</p>
<?php endif; ?>

