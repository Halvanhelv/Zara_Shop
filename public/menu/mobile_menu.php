<li>
    <a href="category/<?=$category['alias'];?>"  ><?=$category['title'];?></a>
    <?php if(isset($category['childs'])): ?>
    <ul>

            <?= $this->getMenuHtml($category['childs'],$tab='',$tpl='1');?>

    </ul>
    <?php endif; ?>
</li>