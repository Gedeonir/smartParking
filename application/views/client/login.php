
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
                                <?php echo form_open('client/login'); ?>

                                <div class="login-logo">
                                    <h2 class="text-primary">CLIENT LOGIN</h2>
                                </div>
                                
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="au-input au-input--full" type="phone_no" name="email" value="<?php echo set_value('email'); ?>" />
                                    <small class="help-block form-text text-danger"><?php echo form_error('email'); ?></small>
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password"/>
                                    <small class="help-block form-text text-danger"><?php echo form_error('password'); ?></small>

                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" />Remember Me
                                    </label>
                                    
                                </div>
                                <input type="submit" class="au-btn au-btn--block au-btn--blue2" value="Login" name="login"><hr>
                                <a href="<?php echo base_url('login'); ?>" class="btn btn-success text-center">Admin Login</a>
                                <p class="help-block text-md form-text text-danger"><?php echo $this->session->flashdata('login_error'); ?></p>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

