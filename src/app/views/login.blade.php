
<!DOCTYPE html>
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9 gt-ie8"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="gt-ie8 gt-ie9 not-ie"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Sign In - PixelAdmin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <!-- Open Sans font from Google CDN -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin" rel="stylesheet" type="text/css">

    <!-- Pixel Admin's stylesheets -->
    <link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/stylesheets/pixel-admin.min.css" rel="stylesheet" type="text/css">
    <link href="assets/stylesheets/pages.min.css" rel="stylesheet" type="text/css">
    <link href="assets/stylesheets/rtl.min.css" rel="stylesheet" type="text/css">
    <link href="assets/stylesheets/themes.min.css" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
        <script src="assets/javascripts/ie.min.js"></script>
    <![endif]-->


<!-- $DEMO =========================================================================================

    Remove this section on production
-->
    <style>
        #signin-demo {
            position: fixed;
            right: 0;
            bottom: 0;
            z-index: 10000;
            background: rgba(0,0,0,.6);
            padding: 6px;
            border-radius: 3px;
        }
        #signin-demo img { cursor: pointer; height: 40px; }
        #signin-demo img:hover { opacity: .5; }
        #signin-demo div {
            color: #fff;
            font-size: 10px;
            font-weight: 600;
            padding-bottom: 6px;
        }
    </style>
<!-- / $DEMO -->

</head>


<!-- 1. $BODY ======================================================================================
    
    Body

    Classes:
    * 'theme-{THEME NAME}'
    * 'right-to-left'     - Sets text direction to right-to-left
-->
<body class="theme-default page-signin">

    <!-- Page background -->
    <div id="page-signin-bg">
        <!-- Background overlay -->
        <div class="overlay"></div>
        <!-- Replace this with your bg image -->
        <img src="assets/img/banner-background.png" alt="banner" style="height:100%">
    </div>
    <!-- / Page background -->

    <!-- Container -->
    <div class="signin-container">

        <!-- Left side -->
        <div class="signin-info">
            <a href="index.html" class="logo">
                <img src="assets/img/logo.png" alt="logo"  style="margin-top: -5px;">&nbsp;
                EvekAdmin
            </a> <!-- / .logo -->
            <div class="slogan">
                Simple. Flexible. Powerful.
            </div> <!-- / .slogan -->
            <ul>
                <li><i class="fa fa-sitemap signin-icon"></i> Inventario</li>
                <li><i class="fa fa-file-text-o signin-icon"></i> Clientes</li>
                <li><i class="fa fa-outdent signin-icon"></i> Empleados</li>
                <li><i class="fa fa-heart signin-icon"></i> Perfiles</li>
            </ul> <!-- / Info list -->
        </div>
        <!-- / Left side -->

        <!-- Right side -->
        <div class="signin-form">

            <!-- Form -->
            <form action="login" id="signin-form_id" method="POST">
                <div class="signin-text">
                    <span>Sign In to your account</span>
                </div> <!-- / .signin-text -->

                <div class="form-group w-icon">
                    <input type="text" name="username" id="username_id" class="form-control input-lg" placeholder="Username or Email (test)">
                    <span class="fa fa-user signin-form-icon"></span>
                </div> <!-- / Username -->

                <div class="form-group w-icon">
                    <input type="password" name="password" id="password_id" class="form-control input-lg" placeholder="Password (test)">
                    <span class="fa fa-lock signin-form-icon"></span>
                </div> <!-- / Password -->

                <div class="form-actions">
                    <input type="submit" value="SIGN IN" class="signin-btn bg-primary">
                    <a href="#" class="forgot-password" id="forgot-password-link">Forgot your password?</a>
                </div> <!-- / .form-actions -->
            </form>
            <!-- / Form -->

            <!-- "Sign In with" block 
            <div class="signin-with">
                <a href="index.html" class="signin-with-btn" style="background:#4f6faa;background:rgba(79, 111, 170, .8);">Sign In with <span>Facebook</span></a>
            </div>
             / "Sign In with" block -->

            <!-- Password reset form -->
            <div class="password-reset-form" id="password-reset-form">
                <div class="header">
                    <div class="signin-text">
                        <span>Password reset</span>
                        <div class="close">&times;</div>
                    </div> <!-- / .signin-text -->
                </div> <!-- / .header -->
                
                <!-- Form -->
                <form action="index.html" id="password-reset-form_id">
                    <div class="form-group w-icon">
                        <input type="text" name="password_reset_email" id="p_email_id" class="form-control input-lg" placeholder="Enter your email">
                        <span class="fa fa-envelope signin-form-icon"></span>
                    </div> <!-- / Email -->

                    <div class="form-actions">
                        <input type="submit" value="SEND PASSWORD RESET LINK" class="signin-btn bg-primary">
                    </div> <!-- / .form-actions -->
                </form>
                <!-- / Form -->
            </div>
            <!-- / Password reset form -->
        </div>
        <!-- Right side -->
    </div>
    <!-- / Container -->

    <div class="not-a-member">
        Not a member? <a href="pages-signup.html">Sign up now</a>
        <br>
        @if(Session::has('mensaje_error'))
            {{ Session::get('mensaje_error') }}
        @endif
    </div>

<!-- Get jQuery from Google CDN -->
<!--[if !IE]> -->
    <script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js">'+"<"+"/script>"); </script>
<!-- <![endif]-->
<!--[if lte IE 9]>
    <script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">'+"<"+"/script>"); </script>
<![endif]-->


<!-- Pixel Admin's javascripts -->
<script src="assets/javascripts/bootstrap.min.js"></script>
<script src="assets/javascripts/pixel-admin.min.js"></script>

</body>
</html>
