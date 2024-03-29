<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> -->

    <link rel="stylesheet" href="Login Form/images/icons/favicon.ico">
    <!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"> -->

    <link rel="stylesheet" href="Login Form/vendor/bootstrap/css/bootstrap.min.css">

    <!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css"> -->

    <link rel="stylesheet" href="Login Form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css"> -->

    <link rel="stylesheet" href="Login Form/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css"> -->

    <link rel="stylesheet" href="Login Form/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css"> -->

    <link rel="stylesheet" href="Login Form/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css"> -->

    <link rel="stylesheet" href="Login Form/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css"> -->

    <link rel="stylesheet" href="Login Form/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css"> -->

    <link rel="stylesheet" href="Login Form/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="css/util.css"> -->

    <link rel="stylesheet" href="Login Form/css/util.css">

    <!-- <link rel="stylesheet" type="text/css" href="css/main.css"> -->

    <link rel="stylesheet" href="Login Form/css/main.css">
    <link rel="stylesheet" href="Login Form/css/alert.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100">
                <form method="POST" action="newlogin.php" class="login100-form validate-form login">
                    <?php include('errors.php')  ?>
                    <span class="login100-form-logo">
                        <!-- <i class="zmdi zmdi-landscape"></i> -->
                        <img src="css/imgs/burger.png" alt="">
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        Log in
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input class="input100 user" type="text" name="username" placeholder="Username">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100 pass" type="password" name="password" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>

                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn" name="login_user">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-90">
                        <div id="sign-up-div">
                            <span class="sign-up-black">Not yet a member?</span> <a href="newsignup.php"> <span class="sign-up">Sign up</span> </a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <!-- <script src="vendor/jquery/jquery-3.2.1.min.js"></script> -->
    <script src="Login Form/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <!-- <script src="vendor/animsition/js/animsition.min.js"></script> -->
    <script src="Login Form/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <!-- <script src="vendor/bootstrap/js/popper.js"></script> -->
    <script src="Login Form/vendor/bootstrap/js/popper.js"></script>

    <!-- <script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->
    <script src="Login Form/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <!-- <script src="vendor/select2/select2.min.js"></script> -->

    <script src="Login Form/vendor/select2/select2.min.js"></script>

    <!--===============================================================================================-->
    <!-- <script src="vendor/daterangepicker/moment.min.js"></script> -->
    <script src="Login Form/vendor/daterangepicker/moment.min.js"></script>
    <!-- <script src="vendor/daterangepicker/daterangepicker.js"></script> -->

    <script src="Login Form/vendor/daterangepicker/daterangepicker.js"></script>

    <!--===============================================================================================-->
    <!-- <script src="vendor/countdowntime/countdowntime.js"></script> -->
    <script src="Login Form/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <!-- <script src="Login Form/js/main.js"></script> -->
    <!-- <script src="Login Form/js/app.js"></script> -->
</body>

</html>