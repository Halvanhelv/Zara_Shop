<?php $curr = \ishop\App::$app->getProperty('currency'); ?>
<div class="preloader" style="display: none;margin: 0 auto"><img src="images/ring.svg" alt="" ></div>
<div class="modal-body">
    <div class="qwick-view-left">
        <div class="quick-view-learg-img">
            <div class="quick-view-tab-content tab-content">
                <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                    <img src="images/background/320on380/<?=$alias->img?>" alt="" style="max-height: 380px">
                </div>
                <?php foreach ($gallery as $item): ?>
                <div class="tab-pane fade" id="modal<?=$item->id?>" role="tabpanel">
                    <img src="images/background/320on380/<?=$item->img?>"  alt="">
                </div>
<?php endforeach; ?>
            </div>
        </div>
        <div class="quick-view-list nav" role="tablist">
            <a class="active" href="#modal1" data-toggle="tab" role="tab" aria-selected="true" aria-controls="home1">
                <img src="images/background/100on112/<?=$alias->img?>" alt="">
            </a>
            <?php foreach ($gallery as $item): ?>
            <a href="#modal<?=$item->id?>" data-toggle="tab"  role="tab" aria-selected="false" aria-controls="home3">
                <img src="images/background/100on112/<?=$item->img?>" alt="" >
            </a>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="qwick-view-right">
        <div class="qwick-view-content">
            <h3><?=$alias->title?></h3>
            <div class="price">
                <span class="new" id="base-price" data-base-price="<?= $alias->price * $curr['value']?>"><?=$curr['symbol_left'];?><?=number_format($alias->price * $curr['value'], 0, ',', ' ');?><?=$curr['symbol_right'];?></span>
                <?php if ($alias->old_price!= 0):?>
                <span class="old" id="old-price" data-old-price=""><?=$curr['symbol_left'];?><?=number_format($alias->old_price * $curr['value'], 0, ',', ' ');?><?=$curr['symbol_right'];?></span>
                <?php endif; ?>
            </div>
            <div class="rating-number">
                <div class="quick-view-rating">
                    <i class="ion-ios-star red-star"></i>
                    <i class="ion-ios-star red-star"></i>
                    <i class="ion-ios-star red-star"></i>
                    <i class="ion-ios-star red-star"></i>
                    <i class="ion-ios-star red-star"></i>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
            <div class="quick-view-select">
<!--                <div class="select-option-part">-->
<!--                    <label>Size*</label>-->
<!--                    <select class="select">-->
<!--                        <option value="">- Please Select -</option>-->
<!--                        <option value="">900</option>-->
<!--                        <option value="">700</option>-->
<!--                    </select>-->
<!--                </div>-->
                <div class="select-option-part">
                    <?php if (isset($list)): ?>
                    <?php foreach ($list as $item): ?>
                    <label><?=$item['title'] ?></label>
                    <select class="select">
                        <option value="">Выбрать <?=$item['title'] ?></option>

                       <?php foreach ($mods as $mod):  ?>
                        <?php if ($item['id'] == $mod->order_mod_id): ?>
                           <option data-title="<?=$mod->title?>"  data-price="<?=$mod->price * $curr['value']?>" value="<?=$mod->id?>"><?=$mod->title?></option>
                           <?php endif; ?>
                        <?php endforeach; ?>

                    </select>
                    <?php endforeach; ?>
                </div>
                <?php else: ?>
                    <label><?=$alias->title ?></label>
                <select class="select">
                    <option value="">Выбрать <?=$item['title'] ?></option>

                </select>
                <?php endif; ?>
            </div>
            <div class="quickview-plus-minus">
                <div class="cart-plus-minus">
                    <input type="text" value="1" name="qtybutton" class="cart-plus-minus-box">
                </div>
                <div class="quickview-btn-cart">
                    <a class="btn-style cr-btn add-to-cart-link" data-id="<?=$alias->id;?>" href="#"><span>add to cart</span></a>
                </div>
                <div class="quickview-btn-wishlist">
                    <a class="btn-hover cr-btn" href="#"><span><i class="ion-ios-heart-outline"></i></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    /*----------------------------
    	Cart Plus Minus Button
    ------------------------------ */
    $(".cart-plus-minus").prepend('<div class="dec qtybutton">-</div>');
    $(".cart-plus-minus").append('<div class="inc qtybutton">+</div>');
    $(".qtybutton").on("click", function() {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() === "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
            }
        }
        $button.parent().find("input").val(newVal);
    });

</script>

<script>
    $('.select-option-part select').on('change', function () {
        var modId = $(this).val(),
            color = $(this).find('option').filter(':selected').data('title'),
            price = $(this).find('option').filter(':selected').data('price'),
            basePrice = $('#base-price').data('base-price'),
        oldPrice = $('#old-price').data('old-price');
        console.log(modId);
        if (price) {
            $('#base-price').text(symboleLeft + price + symboleRight);
        } else {
            $('#base-price').text(symboleLeft + basePrice + symboleRight);
        }
        
    });
</script>