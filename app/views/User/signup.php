
<div class="animate-dropdown">
    <!-- ========================================= BREADCRUMB ========================================= -->
    <div id="top-mega-nav">
        <div class="container">
            <nav>
                <ul class="inline">
                    <li class="dropdown le-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-list"></i> shop by department
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Computer Cases & Accessories</a></li>
                            <li><a href="#">CPUs, Processors</a></li>
                            <li><a href="#">Fans, Heatsinks &amp; Cooling</a></li>
                            <li><a href="#">Graphics, Video Cards</a></li>
                            <li><a href="#">Interface, Add-On Cards</a></li>
                            <li><a href="#">Laptop Replacement Parts</a></li>
                            <li><a href="#">Memory (RAM)</a></li>
                            <li><a href="#">Motherboards</a></li>
                            <li><a href="#">Motherboard &amp; CPU Combos</a></li>
                            <li><a href="#">Motherboard Components</a></li>
                        </ul>
                    </li>

                    <li class="breadcrumb-nav-holder">
                        <ul>
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item current gray">
                                <a href="about.html">Authentication</a>
                            </li>
                        </ul>
                    </li><!-- /.breadcrumb-nav-holder -->
                </ul>
            </nav>
        </div><!-- /.container -->
    </div><!-- /#top-mega-nav -->
    <!-- ========================================= BREADCRUMB : END ========================================= -->
</div>


<main id="authentication" class="inner-bottom-md">
    <div class="container">
        <div class="row">



            <div class="col-md-6 col-md-offset-3">
                <section class="section register inner-left-xs">
                    <h2 class="bordered">Регистрация</h2>
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
                    <p>Create your own Media Center account</p>

                    <form role="form" class="register-form cf-style-1" method="post" action="user/signup" id="signup"  data-toggle="validator">
                        <div class="field-row has-feedback form-group ">
                            <label for="login">Login</label>
                            <input   type="text" name="login" class=" le-input" id ="login" placeholder="Login" value="<?=isset($_SESSION['form_data']['login']) ? h($_SESSION['form_data']['login']) : '';?>" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="field-row has-feedback form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="le-input form-control " id="password" placeholder="Password" data-error="Пароль должен включать не менее 6 символов" data-minlength="6" value="<?=isset($_SESSION['form_data']['password']) ? h($_SESSION['form_data']['password']) : '';?>" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="field-row has-feedback form-group">
                            <label for="name">Имя</label>
                            <input type="text" name="name" class="le-input" id="name" placeholder="Имя" value="<?=isset($_SESSION['form_data']['name']) ? h($_SESSION['form_data']['name']) : '';?>" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>

                        </div>
                        <div class="field-row has-feedback form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="le-input" id="email" placeholder="Email" value="<?=isset($_SESSION['form_data']['email']) ? h($_SESSION['form_data']['email']) : '';?>" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>

                        </div>
                        <div class="field-row has-feedback form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" class="le-input" id="address" placeholder="Address" value="<?=isset($_SESSION['form_data']['address']) ? h($_SESSION['form_data']['address']) : '';?>" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>

                        </div>

                        <div class="buttons-holder">
                            <button type="submit" class="le-button huge">Зарегистрировать</button>
                        </div><!-- /.buttons-holder -->
                    </form>

                    <?php if(isset($_SESSION['form_data'])) unset($_SESSION['form_data']); ?>
                    <h2 class="semi-bold">Sign up today and you'll be able to :</h2>

                    <ul class="list-unstyled list-benefits">
                        <li><i class="fa fa-check primary-color"></i> Speed your way through the checkout</li>
                        <li><i class="fa fa-check primary-color"></i> Track your orders easily</li>
                        <li><i class="fa fa-check primary-color"></i> Keep a record of all your purchases</li>
                    </ul>

                </section><!-- /.register -->

            </div><!-- /.col -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</main>
