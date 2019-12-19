<div class="animate-dropdown">
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
                                <a href="about.html">Recovery</a>
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
                <section class="section sign-in inner-right-xs ">
                    <h2 class="bordered">Войти</h2>
                    <?php if(isset($_SESSION['error'])): ?>
                        <div class="alert alert-danger">
                            <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
                        </div>
                    <?php else: ?>

                    <p>Hello, Welcome to your account</p>

                    <div class="social-auth-buttons">
                        <div class="row">
                            <div class="col-md-6">
                                <button class="btn-block btn-lg btn btn-facebook"><i class="fa fa-facebook"></i> Sign In with Facebook</button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn-block btn-lg btn btn-twitter"><i class="fa fa-twitter"></i> Sign In with Twitter</button>
                            </div>
                        </div>
                    </div>

                        <?php if(isset($_SESSION['success'])): ?>
                            <div class="alert alert-success">
                                <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
                            </div>
                        <?php endif; ?>



                    <form method="post" action="/user/forgot" id="recovery" role="form" data-toggle="validator" class="login-form cf-style-1">


                        <div class="field-row has-feedback">
                            <label for="new_password">Password</label>
                            <input type="password" name="new_password" class="le-input" id="new_password" placeholder="Password" required>
                            <input type="hidden" name="hash" value="<?=$_GET['forgot']?>" >
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div><!-- /.field-row -->


                        <div class="buttons-holder">
                            <button type="submit" class="le-button huge" value="Изменить пароль" name="change_pass">Вход</button>
                        </div><!-- /.buttons-holder -->
                    </form><!-- /.cf-style-1 -->
                    <?php endif; ?>
                </section><!-- /.sign-in -->
            </div><!-- /.col -->



        </div><!-- /.row -->
    </div><!-- /.container -->
</main>

