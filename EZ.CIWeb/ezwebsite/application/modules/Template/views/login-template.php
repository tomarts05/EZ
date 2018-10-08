<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> EZ </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/vendor.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/app.css">
    </head>
    <body>
        <div class="auth">
            <div class="auth-container">
                <div class="card">
                    <header class="auth-header">
                        <h1 class="auth-title">
                            <div class="logo">
                                <span class="l l1"></span>
                                <span class="l l2"></span>
                                <span class="l l3"></span>
                                <span class="l l4"></span>
                                <span class="l l5"></span>
                            </div> Employee Zone </h1>
                    </header>
                    <div class="auth-content">
                        <p class="text-center">LOGIN TO CONTINUE</p>
                        <form id="login-form" action="<?php echo base_url()?>Template/login" method="post" novalidate="">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="email" class="form-control underlined" name="username" id="username" placeholder="Your email address" required> </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control underlined" name="password" id="password" placeholder="Your password" required> </div>
                            <div class="form-group">
                                <label for="remember">
                                    <input class="checkbox" id="remember" type="checkbox">
                                    <span>Remember me</span>
                                </label>
                                <a href="reset.html" class="forgot-btn pull-right">Forgot password?</a>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        <script type="text/javascript" src="<?php echo base_url()?>assets/dist/js/vendor.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/dist/js/app.js"></script>
    </body>
</html>