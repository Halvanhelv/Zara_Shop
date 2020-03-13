
<div class="breadcrumb-area mt-37 hm-4-padding">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center border-top-2">
            <h2>Изменение личных данных</h2>
            <ul >
                <li><a href="<?= PATH ?>">Главная</a></li>
                <li><a href="<?= PATH ?>/user/cabinet">Личный кабинет</a></li>
                <li>Редактирование профиля</li>
            </ul>
        </div>
    </div>
</div>
<!--end-breadcrumbs-->
<!--prdt-starts-->

<!--product-end-->
<style>
    input.error {
        border: 1px solid #ff0000;
    }
    label.error {
        color: #ff0000;
        font-weight: normal;
    }

    input.error {
        border: 1px solid #ff0000;
    }
    label.error {
        color: #ff0000;
        font-weight: normal;
    }</style>

<div class="login-register-area ptb-130 hm-3-padding">
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-toggle="tab" href="#lg1">
                            <h4> Ваши данные </h4>
                        </a>

                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-form">

                                    <form class="form-horizontal" action="user/edit" method="post" data-toggle="validator" id="register">
                                        <div class="form-group">
                                            <label for="login" class=" control-label">Логин <span class="red">*</span></label>
                                            <div class="">
                                                <input type="text" class="form-control" name="login" id="login" value="<?= h($_SESSION['user']['login']) ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label  for="password" class=" control-label">Пароль<span class="red">*</span></label>
                                            <div class="">
                                                <input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль, если хотите его изменить">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class=" control-label">Имя <span class="red">*</span></label>
                                            <div class="">
                                                <input  class="form-control" name="name" id="name" value="<?= h($_SESSION['user']['name']) ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class=" control-label">Почта <span class="red">*</span></label>
                                            <div class="">
                                                <input type="email" name="email" id="email" value="<?= h($_SESSION['user']['email']) ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="address" class=" control-label">Адрес <span class="red">*</span></label>
                                            <div class="">
                                                <input type="address" name="address" id="address" value="<?= h($_SESSION['user']['address']) ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="button-box">
                                                <button type="submit" class="btn-style cr-btn"><span>Изменить</span></button>
                                            </div></div>
                                    </form>   </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>


