<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Редактирование бренда <?=$brand->title;?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN;?>/brand">Список брендов</a></li>
        <li class="active">Редактирование</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form action="<?=ADMIN;?>/brand/edit" method="post" data-toggle="validator">
                    <div class="box-body">
                        <div class="form-group has-feedback">
                            <label for="title">Наименование товара</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Наименование товара" value="<?=h($brand->title);?>" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="box-footer">
                            <input type="hidden" name="id" value="<?=$brand->id;?>">
                            <button type="submit" class="btn btn-success">Сохранить</button>
                        </div>
                </form>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->