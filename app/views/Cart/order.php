<section id="checkout-page" xmlns="http://www.w3.org/1999/html">
    <div class="container">
        <?php if(isset($_SESSION['error'])): ?>
            <div class="alert alert-danger">
                <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>
        <?php if(isset($_SESSION['success'])): ?>
            <div class="alert alert-success">
                <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
            </div>
        <?php endif; ?>
        <div class="col-xs-12 no-margin">
<?php if (!isset($_SESSION['user'])): ?>
            <div class="billing-address">
                <h2 class="border h1">billing address</h2>
                <form action="cart/checkout" method="post" name="checkout">

                    <div class="row field-row">
                        <div class="col-xs-12 col-sm-4">
                            <label>Имя*</label>
                            <input name="name" id="name" placeholder="Имя" class="le-input"  >
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <label>Адрес эл.почты*</label>
                            <input class="le-input" name="email" id="email" placeholder="Email" value="<?=isset($_SESSION['form_data']['email']) ? h($_SESSION['form_data']['email']) : '';?>" required >
                        </div>

                        <div class="col-xs-12 col-sm-4">
                            <label>Номер телефона*</label>
                            <input class="le-input" name="address" id="address" placeholder="Номер телефона" value="<?=isset($_SESSION['form_data']['address']) ? h($_SESSION['form_data']['address']) : '';?>" required >
                        </div>
                    </div><!-- /.field-row -->

                    <div class="row field-row">
                        <div id="create-account" class="col-xs-12">

                            <a class="simple-link bold" href="user/login">Есть Аккаунт?</a> - Ввойдите что бы не заполнять контактные данные.
                        </div>
                    </div><!-- /.field-row -->


            </div><!-- /.billing-address -->
            <?php endif; ?>







            <div id="total-area" class="row no-margin">
                <div class="col-xs-12 col-lg-4 col-lg-offset-8 no-margin-right">
                    <div id="subtotal-holder">
                        <ul class="tabled-data inverse-bold no-border">
                            <li>
                                <label>Оплата</label>
                                <div class="value">
                                    <div class="radio-group">
                                        <input class="le-radio" type="checkbox" name="pay" value="free"> <div class="radio-label bold">Купить онлайн</div><br>

                                    </div>
                                </div>
                            </li>
                        </ul><!-- /.tabled-data -->

                        <ul id="total-field" class="tabled-data inverse-bold ">
                            <li>
                                <label>Итого к оплате:</label>
                                <div class="value total_ajax_price"><?= $_SESSION['cart.currency']['symbol_left']?><?=number_format($_SESSION['cart.sum'] * $_SESSION['cart.currency']['value'], 0, ',', ' ');?> <?=$_SESSION['cart.currency']['symbol_right'] ?></div>
                            </li>
                        </ul><!-- /.tabled-data -->

                    </div><!-- /#subtotal-holder -->
                </div><!-- /.col -->
            </div><!-- /#total-area -->



            <div class="place-order-button">
                <button class="le-button big">Купить</button>
            </div><!-- /.place-order-button -->
        </form>
        </div><!-- /.col -->
    </div><!-- /.container -->
</section>

