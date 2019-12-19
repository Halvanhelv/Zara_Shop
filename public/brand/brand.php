<?php $brand_id = \ishop\App::$app->getProperty('brand_id'); ?>
<option value="<?=$id;?>"<?php if($id == $brand_id) echo ' selected'; ?>>
    <?=$brand;?>
</option>
