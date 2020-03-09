<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Редактирование товара <?=$product->title;?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN;?>/product">Список товаров</a></li>
        <li class="active">Редактирование</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form action="<?=ADMIN;?>/product/edit" method="post" data-toggle="validator">
                    <div class="box-body">
                        <div class="form-group has-feedback">
                            <label for="title">Наименование товара</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Наименование товара" value="<?=h($product->title);?>" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>

                        <div class="form-group">
                            <label for="category_id">Родительская категория</label>
                            <?php new \app\widgets\menu\Menu([
                                'tpl' => WWW . '/menu/select.php',
                                'tpl_num'   => '1',
                                'container' => 'select',
                                'cache' => 0,
                                'cacheKey' => 'admin_select',

                                'attrs' => [
                                    'name' => 'category_id',
                                    'id' => 'category_id',
                                    'class' => 'form-control category_id',
                                ],
                            ]) ?>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Бренд</label>
                            <?php new \app\widgets\brand\Brand([
                                'tpl' => WWW . '/brand/brand.php',
                                'container' => 'select',
                                'cache' => 0,
                                'cacheKey' => 'brand_select',
                                'class' => 'form-control',
                                'attrs' => [
                                    'name' => 'brand_id',
                                    'id' => 'brand_id',
                                    'class' => 'form-control category_id',
                                ],
                                'prepend' => '<option>Выберите бренд</option>',
                            ]) ?>
                        </div>


                        <div class="form-group">
                            <label for="keywords">Ключевые слова</label>
                            <input type="text" name="keywords" class="form-control" id="keywords" placeholder="Ключевые слова" value="<?=h($product->keywords);?>">
                        </div>

                        <div class="form-group">
                            <label for="description">Описание</label>
                            <input type="text" name="description" class="form-control" id="description" placeholder="Описание" value="<?=h($product->description);?>">
                        </div>

                        <div class="form-group has-feedback">
                            <label for="price">Цена</label>
                            <input type="text" name="price" class="form-control" id="description" placeholder="Цена" pattern="^[0-9.]{1,}$" value="<?=$product->price;?>" required data-error="Допускаются цифры и десятичная точка">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="old_price">Старая цена</label>
                            <input type="text" name="old_price" class="form-control" id="description" placeholder="Старая цена" pattern="^[0-9.]{1,}$" value="<?=$product->old_price;?>" data-error="Допускаются цифры и десятичная точка">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="content">Контент</label>
                            <textarea name="content" id="editor1" cols="80" rows="10"><?=$product->content;?></textarea>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="content">Описание для слайдера <span title="Как наберете текст так он и отобразиться(много текста не следует набирать, ограниченно место на каруселе товаров)">(?)</span></label>
                            <textarea name="slider_text" id="editor2" cols="80" rows="10"><?=$product->slider_text;?></textarea>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="status"<?=$product->status == "on" ? ' checked' : null;?>> Есть в наличии
                            </label>
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="hit"<?=$product->hit == "on" ? ' checked' : null;?>> Популярно
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="best_seller" <?=$product->best_seller == "on" ? ' checked' : null;?>> Лучшие продажи
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="slider" <?=$product->slider == "on" ? ' checked' : null;?>> На слайдер
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="related">Связанные товары</label>
                            <select name="related[]" class="form-control select2" id="related" multiple>
                                <?php if(!empty($related_product)): ?>
                                    <?php foreach($related_product as $item): ?>
                                        <option value="<?=$item['related_id'];?>" selected><?=$item['title'];?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>

                        <?php new \app\widgets\filter\Filter($filter, WWW . '/filter/admin_filter_tpl.php'); ?>

                            <div class="container-fluid" style="padding-bottom: 20px">
                                <div class="col-md-2  "><button type="button" class=" add_attr btn btn-block btn-success">Добавить характеристику</button></div>

                            </div>

                        <div class="container-fluid attr_block " >
                            <?php if (!empty($detail)): ?>

                            <?php foreach ($detail as $item): ?>
                                    <div class="row">
                            <div class="form-group col-md-6  ">
                                <label for="detail">Атрибут</label>
                                <select name="detail[]"   class="form-control select3">
                                    <option value="<?php echo $item['attribute_id'] ?>" selected="selected"><?php echo $item['detail_name'] ?></option>
                                </select>
                            </div>
                            <div class="form-group col-md-5">
                                <label>Значение</label>
                                <input type="text" name="detail_attrs[]" value="<?php echo $item['attr_value']?>" class="form-control" placeholder="Введите значение ..." autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">

                            </div>
                                    <div class="form-group col-md-1  ">
                                        <label for="detail"></label>
                                        <button type="button" class="btn btn-block btn-danger delete-attr delete">удалить</button>
                                    </div>
                                    </div>
                            <?php endforeach; ?>

                            <?php endif;?>
                            </div>

                        <div class="container-fluid " style="padding-bottom: 20px">
                            <div class="col-md-2  "><button type="button" class=" add_mod btn btn-block btn-success">Добавить модификацию</button></div>

                        </div>
                        <div class="container-fluid mod_block " >

                        </div>


                        <div class="form-group">
                            <div class="col-md-4">
                                <div class="box box-danger box-solid file-upload">
                                    <div class="box-header">
                                        <h3 class="box-title">Базовое изображение</h3>
                                    </div>
                                    <div class="box-body">
                                        <div id="single" class="btn btn-success" data-url="product/add-image" data-name="single">Выбрать файл</div>
                                        <p><small>Рекомендуемые размеры: 125х200</small></p>
                                        <div class="single">
                                            <img src="/images/background/270on236/<?=$product->img;?>" alt="" style="max-height: 150px;">
                                        </div>
                                    </div>
                                    <div class="overlay">
                                        <i class="fa fa-refresh fa-spin"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box box-primary box-solid file-upload">
                                    <div class="box-header">
                                        <h3 class="box-title">Картинки галереи</h3>
                                    </div>
                                    <div class="box-body">
                <?php debug($_SESSION); ?>
                                        <div id="multi" class="btn btn-success" data-url="product/add-image" data-name="multi">Выбрать файл</div>
                                        <p><small>Рекомендуемые размеры: 700х1000</small></p>
                                        <div class="multi">

                                            <?php if(!empty($gallery)): ?>
                                                <?php foreach($gallery as $item): ?>
                                                    <img src="/images/background/270on236/<?=$item;?>" alt="" style="max-height: 150px; cursor: pointer;" data-id="<?=$product->id;?>" data-src="<?=$item;?>" class="del-item">
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="overlay">
                                        <i class="fa fa-refresh fa-spin"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box box-primary box-solid file-upload">
                                    <div class="box-header">
                                        <h3 class="box-title">Картинка Слайдера</h3>
                                    </div>
                                    <div class="box-body">
                                        <div id="slider" class="btn btn-success" data-url="product/add-image" data-name="slider">Выбрать файл</div>
                                        <p><small>Рекомендуемые размеры: 1920х1080</small></p>
                                        <div class="slider">
                                            <img src="/images/background/508on544/<?=$product->slider_img;?>" alt="">
                                        </div>
                                    </div>
                                    <div class="overlay">
                                        <i class="fa fa-refresh fa-spin"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="box-footer">
                        <input type="hidden" name="id" value="<?=$product->id;?>">
                        <button type="submit" class="btn btn-success">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->
