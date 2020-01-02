<?php if(isset($category['childs'])): ?>
    <?php $child = 'cr-sub-dropdown sub-style' ?>
    <?php $arrow = "<i class=\"ion-ios-arrow-down\"></i>" ?>
<li class="<?=$child?>"><a href="category/<?=$category['alias'];?>"><?=$category['title'];?> <?=$arrow?></a>
    <ul>

                <?= $this->getMenuHtml($category['childs'],$tab='',$tpl='3');?>



    </ul>
</li>
<?php else: $child = '';$arrow = "";   ?>
    <li class="<?=$child?>"><a href="category/<?=$category['alias'];?>"><?=$category['title'];?> <?=$arrow?></a> </li>
<?php endif; ?>

