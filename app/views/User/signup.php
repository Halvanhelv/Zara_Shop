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
                            <h4> login </h4>
                        </a>
                        <a data-toggle="tab" href="#lg2">
                            <h4> register </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-form">
                                    <form action="user/login" method="post" data-toggle="validator" id="signup" role="form">
                                        <input type="text" name="login"  placeholder="Username" required>
                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                        <input type="password" name="password" placeholder="Password" required>
                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input type="checkbox">
                                                <label>Remember me</label>
                                                <a href="#">Forgot Password?</a>
                                            </div>
                                            <button type="submit" class="btn-style cr-btn"><span>Login</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="lg2" class="tab-pane">
                            <div class="login-form-container">
                                <div class="login-form">
                                    <form class="form-horizontal" method="post" id="register">
                                        <div class="form-group">
                                            <label for="login" class=" control-label">Логин <span class="red">*</span></label>
                                            <div class="">
                                                <input type="text" class="form-control" id="login" name="login" placeholder="Логин" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label  for="password" class=" control-label">Пароль<span class="red">*</span></label>
                                            <div class="">
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Пароль" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class=" control-label">Имя <span class="red">*</span></label>
                                            <div class="">
                                                <input  class="form-control" id="name" name="name" placeholder="Имя" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class=" control-label">Почта <span class="red">*</span></label>
                                            <div class="">
                                                <input type="email" class="form-control" id="name" name="email" placeholder="Почта" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="address" class=" control-label">Адрес <span class="red">*</span></label>
                                            <div class="">
                                                <input type="address" class="form-control" id="address" name="address" placeholder="Адрес" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="button-box">
                                                <button type="submit" class="btn-style cr-btn"><span>Register</span></button>
                                            </div></div>
                                </div>
                            </div>
                            </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


