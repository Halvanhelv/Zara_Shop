
<div class="col-md-4">
    <ul class="list-unstyled">
        <li style="font-weight: bold">
            <a href="category/<?=$category['alias'];?>"><?=$category['title'];?></a>
        </li>
        <?php if(isset($category['childs'])): ?>
            <?= $this->getMenuHtml($category['childs'],$tab='',$tpl='3');?>
        <?php endif; ?>
</div>
