<div class="row">
    <div class="col-md-12">
        <div class="shop-topbar-wrapper">
            <div class="grid-list-options">
                <ul class="view-mode">
                    <li class="<?php if (!isset($_GET['mode']) || ($_GET['mode'] != 'product-list')): ?><?= 'active' ?> <?php endif ?>"><a href="#product-grid"   data-view="product-grid"><i class="ion-grid"></i></a></li>
                    <li <?php if (isset($_GET['mode']) && ($_GET['mode'] == 'product-list')): ?><?= 'class= "active"' ?> <?php endif ?>><a href="#product-list"   data-view="product-list"><i class="ion-navicon"></i></a></li>
                </ul>
            </div>
            <div class="shop-filter">
                <button class="product-filter-toggle">filter</button>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="product-filter-wrapper">
            <div class="row">
                <div class="product-filter col-md-3 col-sm-6 col-xs-12 mb-30">
                    <h5>Sort by</h5>
                    <ul class="sort-by">
                        <li><a href="#" id="default">По умолчанию</a></li>
                        <li><a href="#" id="popular">Популярность</a></li>
<!--                        <li><a href="#">Average rating</a></li>-->
                        <li><a href="#" id="new">Новинки</a></li>
                        <li><a href="#" id="lowto">Цена: от - к +</a></li>
                        <li><a href="#" id="hightto">Цена: от + к - </a></li>
                    </ul>
                </div>
                <div class="product-filter col-md-3 col-sm-6 col-xs-12 mb-30">
                    <h5>color filters</h5>
                    <ul class="color-filter">
                        <li><a href="#"><i style="background-color: #000000;"></i>Black</a></li>
                        <li><a href="#"><i style="background-color: #663300;"></i>Brown</a></li>
                        <li><a href="#"><i style="background-color: #FF6801;"></i>Orange</a></li>
                        <li><a href="#"><i style="background-color: #ff0000;"></i>red</a></li>
                        <li><a href="#"><i style="background-color: #FFEE00;"></i>Yellow</a></li>
                    </ul>
                </div>
                <div class="product-filter col-md-3 col-sm-6 col-xs-12 mb-30">
                    <h5>product tags</h5>
                    <div class="product-tags">
                        <a href="#">New ,</a>
                        <a href="#">brand ,</a>
                        <a href="#">black ,</a>
                        <a href="#">white ,</a>
                        <a href="#">chire ,</a>
                        <a href="#">table ,</a>
                        <a href="#">Lorem ,</a>
                        <a href="#">ipsum ,</a>
                        <a href="#">dolor ,</a>
                        <a href="#">sit ,</a>
                        <a href="#">amet ,</a>
                    </div>
                </div>
                <div class="product-filter col-md-3 col-sm-6 col-xs-12 mb-30">
                    <h5>Filter by price</h5>
                    <div id="price-range"></div>
                    <div class="price-values">
                        <span></span>
                        <input type="text" class="price-amount"  style="font-size: 12px">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>