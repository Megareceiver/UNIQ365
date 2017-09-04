<html>
    <head>
        <title>Uniq 365</title>
        <link rel="icon" type="/image/x-icon" href="assets/image/favicon.ico" /> 
        <link type="text/css" rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css"/>
        <link type="text/css" rel="stylesheet" href="assets/css/uniq-login.css"/>
        
        <script type="text/javascript" src="assets/js/jquery-1.11.1.min.js"></script>
    </head>
    <body class="body">
        <div class="uniq-login-bag"></div>
        <div class="uniq-login-place">
            <div class="uniq-logo">
                <img src="assets/image/uniq-logo-login.png"/>
                <br><br><br>
                <p lang="login-0">- Welcome To -</p>
                <strong>Uniq Synergy Pte Ltd</strong>
            </div>
            <form action=<?php echo site_url('Dashboard'); ?>>
                <strong lang="login-1">Login Form</strong>
                <br><br><br>
                <div class="uniq-field">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" placeholder="Username"/>
                </div>
                <div class="uniq-field">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" placeholder="Password"/>
                </div>
                <div class="uniq-field button">
                    <input type="submit" value="Login Now" lang="btnlog-1">
                </div>
                <br><br>
                <p lang="login-2">Forgot Password | Help ?</p>
            </form>
        </div>
        <script type="text/javascript">
            $(document).ready(function(e){
                $('.uniq-login-place form input').focus(function( ){
                    $(this).parent().addClass('focus');
                    $(this).closest('.body').find('.uniq-login-bag').addClass('grey');
                });
                $('.uniq-login-place form input').blur(function( ){
                    $(this).parent().removeClass('focus');
                    $(this).closest('.body').find('.uniq-login-bag').removeClass('grey');
                });
            });

            

           
            $('[lang="btnlog-1"]').val('Masuk');

            var lang = [{ 
                head : [
                "Selamat Datang Di",
                "Halaman Login",
                "Lupa Password | Bantuan?"
                ]}
            ];
            console.log(lang[0].head.length);
            for (var a = 0; a < lang[0].head.length; a++){
                $('[lang="login-'+a+'"]').html(lang[0].head[a]);
            }
        </script>
    </body>
</html>