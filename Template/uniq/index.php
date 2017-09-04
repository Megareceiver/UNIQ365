<html>
    <head>
        <title>Uniq Sinergy</title>
        <meta name="viewport" content="width=640">
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
                - Welcome To -<br>
                <strong>Uniq Synergy Pte Ltd</strong> 
            </div>
            <form action="dashboard.php">
                <strong>Login Form</strong>
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
                    <input type="submit" value="Login Now"/>
                </div>
                <br><br>
                Forgot Password | Help ?
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
        </script>
    </body>
</html>