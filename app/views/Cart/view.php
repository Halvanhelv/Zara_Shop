<?php $curr = \ishop\App::$app->getProperty('currency'); ?>
<div class="product-cart-area hm-3-padding pt-120 pb-130">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="table-content table-responsive">
                    <table>
                        <thead>
                        <tr>
                            <th class="product-name">Товар</th>
                            <th class="product-price">Название</th>
                            <th class="product-name">Цена</th>
                            <th class="product-price">Количество</th>
                            <th class="product-quantity">Итого</th>
                            <th class="product-subtotal">Удалить</th>
                        </tr>
                        </thead>
                        <tbody>
<?php debug($_SESSION); ?>
                        <?php foreach ($_SESSION['cart'] as $id => $item): ?>
                        <tr class="del-items cart_reload">
                            <td class="product-thumbnail">
                                <a href="#"><img src="images/background/141on135/<?= $item['img'] ?>" alt=""></a>
                            </td>
                            <td class="product-name">
                                <a href="#"><?= $item['title'] ?></a>
                            </td>
                            <td class="product-price"><span class="amount"><?=$curr['symbol_left'];?><?=number_format($item['price'] * $curr['value'], 0, ',', ' ');?><?=$curr['symbol_right'];?></span></td>
                            <td class="product-quantity qty-reload">
                                <div class="quantity-range">
                                    <input class="input-text qty text" type="number" id="<?=$id?>" step="1" min="0" value="<?= $item['qty'] ?>" title="Qty" size="4">
                                </div>
                            </td>
                            <td class="product-subtotal"><?=$curr['symbol_left'];?><?=number_format($item['price'] * $curr['value'] * $item['qty'], 0, ',', ' ');?><?=$curr['symbol_right'];?></td>
                            <td class="product-cart-icon product-subtotal"><a href="#" class="del-item1" data-id="<?=$id;?>"><i class="ion-ios-trash-outline" aria-hidden="true"></i></a></td>
                        </tr>
<?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="cart-shiping-update">
                    <div class="cart-shipping">
                        <a class="btn-style cr-btn" href="#">
                            <span>continue shopping</span>
                        </a>
                    </div>
                    <div class="update-checkout-cart">
                        <div class="update-cart">
                            <button class="btn-style cr-btn"><span>update</span></button>
                        </div>
                        <div class="update-cart">
                            <a class="btn-style cr-btn" href="#">
                                <span>checkout</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 col-sm-6">
                <div class="discount-code">
                    <h4>enter your discount code</h4>
                    <div class="coupon">
                        <input type="text">
                        <input class="cart-submit" type="submit" value="enter">
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-6">
                <div class="shop-total">
                    <h3>cart total</h3>
                    <ul>
                        <li>
                            sub total
                            <span>$909.00</span>
                        </li>
                        <li>
                            tax
                            <span>$9.00</span>
                        </li>
                        <li class="order-total">
                            shipping
                            <span>0</span>
                        </li>
                        <li>
                            order total
                            <span>$918.00</span>
                        </li>
                    </ul>
                </div>
                <div class="cart-btn text-center mb-15">
                    <a href="#">payment</a>
                </div>
                <div class="continue-shopping-btn text-center">
                    <a href="#">continue shopping</a>
                </div>
            </div>
        </div>
    </div>
</div>