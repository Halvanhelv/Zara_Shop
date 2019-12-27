<?php if(isset($category['childs'])): ?>
    <?php $child = 'cr-dropdown' ?>
   <?php $arrow = "<i class=\"ion-ios-arrow-down\"></i>" ?>
<?php else: $child = ''   ?>
<?php $arrow = '' ?>
<?php endif; ?>
<ul>
<li class="<?=$child?>">
    <a href="#"><?=$category['title'];?><?=$arrow?></a>
    <?php if(isset($category['childs'])): ?>
<ul>
        <?= $this->getMenuHtml($category['childs'],$tab='',$tpl='2');?>
</ul>
    <?php endif; ?>
    </li>
</ul>