

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?php echo base_url("assets/images/icon/logo.png")?>" alt="Digital parking">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="<?php echo base_url('client/login'); ?>" method="POST">

                                <div class="login-logo">
                                    <h2 class="text-primary">CLIENT LOGIN</h2>
                                </div>
                                
                                <div class="form-group">
                                    <label>Username or Phone</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username">
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--blue2" type="submit" name="save">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

