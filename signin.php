<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-hk" xmlns:fb="http://ogp.me/ns/fb#">

<head>
    <!--meta-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="user-scalable=no, initial-scale = 1, minimum-scale = 1, maximum-scale = 1, width=device-width">
    <!-- css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <?php include( "include/header.php") ?>
    <div class="main signin">
        <div class="container-fluid">
            <section class="hero">
                <div class="f-container">
                    <!-- container start -->
                    <div class="flex-space">
                        <!-- Left -->
                        <div class="col-md-6 signin-form">
                            <h2>SIGN IN</h2>
                            <form>
                                <div class="form-group row">
                                    <label for="example-signup-input" class="col-xs-4 col-sm-3 col-form-label">Email</label>
                                    <div class="col-xs-8 col-sm-9">
                                        <input class="form-control" type="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-signup-input" class="col-xs-4 col-sm-3 col-form-label">Password</label>
                                    <div class="col-xs-8 col-sm-9">
                                        <input class="form-control" type="password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-signup-input" class="col-xs-3 col-form-label"></label>
                                    <div class="col-xs-12 col-md-9">
                                        <div class="col-xs-7">
                                            <input type="checkbox" id="rmb-me">
                                            <label for="rmb-me">Remember me</label>
                                        </div>
                                        <div class="col-xs-5 text-lighter">
                                            <a href="forget.php" target="_self">Forgot password?</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Signin button  -->
                                <div class="form-status">
                                    <button type="button" class="btn btn-login">LOGIN</button>
                                </div>
                            </form>
                            <div class="line-break">
                                <div class="line-break-inner">
                                    <span>OR</span>
                                </div>
                            </div>
                            <!-- FB Signin button  -->
                            <div class="form-status">
                                <button type="button" class="btn btn-fb">FACEBOOK LOGIN</button>
                            </div>
                        </div>
                        <!-- Right -->
                        <div class="col-md-6 signup-form">
                            <h1 class="head-super">BECOME NEW MEMBER</h1>
                            <div class="text-lighter">
                                <p>Sign up with your email address</p>
                            </div>
                            <form>
                                <div class="form-group row">
                                    <label for="example-signup-input" class="col-xs-3 col-form-label">Email</label>
                                    <div class="col-xs-9">
                                        <input class="form-control" type="email" value="name@yahoo.com.hk">
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <!-- Signup button  -->
                                <div class="form-status">
                                    <button type="button" class="btn btn-signup">SIGN UP</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- container end -->
                </div>
            </section>
        </div>
    </div>
    <?php include( "include/modal-member.php")?>
    <?php include( "include/footer.php") ?>


    <!-- js -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <!-- lib -->

    <!-- cutstoms js -->
    <script type="text/javascript" src="js/function.js"></script>
    <script src="js/anime.min.js"></script>
    <script src="js/main.js"></script>
    <script>
    </script>
</body>

</html>