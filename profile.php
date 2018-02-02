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
    <div class="main profile">
        <div class="container-fluid">
            <section class="my-profile hero">
                <div class="f-container">
                    <h1 class="super hidden-md">YOUR PROFILE</h1>
                    <div class="none md-block flex-space head">
                        <h1 class="col-xs-6">YOUR PROFILE</h1>
                        <a href="#" class="sign-out col-xs-6">
                            <p class="text-lighter">SIGN OUT
                                <i class="icon-arrow-l"></i>
                            </p>
                        </a>
                    </div>
                    <div class="tab-section nav">
                        <div class="flex-space">
                            <div class="col-md-8 col-lg-6 flex-space">
                                <!-- Account  -->
                                <div class="active">
                                    <a href="#">
                                        <h4>ACCOUNT</h4>
                                    </a>
                                </div>
                                <!-- MY ORDER  -->
                                <div>
                                    <a href="myorder.php">
                                        <h4>MY ORDER</h4>
                                    </a>
                                </div>
                                <!-- HISTORY  -->
                                <div>
                                    <a href="history.php">
                                        <h4>HISTORY</h4>
                                    </a>
                                </div>
                            </div>
                            <!-- pos- right // Sign out  -->
                            <div>
                                <a href="#" class="sign-out hidden-md">
                                    <p class="text-lighter">SIGN OUT
                                        <i class="icon-arrow-l"></i>
                                    </p>
                                </a>
                            </div>
                        </div>

                        <!-- edit -->
                        <form>
                            <!-- personal  -->
                            <div class="personal">
                                <div class="form-group">
                                    <label class="form-control-label">First Name</label>
                                    <input type="text" class="form-control" placeholder="John">
                                    <div class="form-control-feedback">Error</div>
                                </div>
                                <div class="form-group has-danger">
                                    <label class="form-control-label">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Doe">
                                    <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="">Address</label>
                                    <input type="text" class="form-control form-control-success" placeholder="Flat B, 7F, 34 Hui Chung Street, Kam Tin">
                                    <div class="form-control-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="inputWarning1">Phone no.</label>
                                    <input type="tel" class="form-control form-control-warning" placeholder="99887766">
                                    <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="">Email</label>
                                    <input type="email" class="form-control form-control-success" placeholder="name@yahoo.com.hk">
                                    <div class="form-control-feedback">Error</div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- password -->
                            <div class="password">
                                <h3>CHANGE PASSWORD</h3>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="example-password-input" class="col-md-5 col-form-label">Current Password</label>
                                        <div class="col-md-7">
                                            <input class="form-control" type="password" value="hunter2">
                                            <div class="form-control-feedback">Error</div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-password-input" class="col-md-5 col-form-label">New Password</label>
                                        <div class="col-md-7">
                                            <input class="form-control" type="password" value="hunter2">
                                            <div class="form-control-feedback">Error</div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-password-input" class="col-md-5 col-form-label">Retype New Password </label>
                                        <div class="col-md-7">
                                            <input class="form-control" type="password" value="hunter2">
                                            <div class="form-control-feedback">Error</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- save button  -->
                            <div class="form-status flex-space md-block">
                                <div class="md-block hidden visible-md profile-alert">
                                    <p><i class="icon-checkmark"></i>Account info updated!</p>
                                    <p><i class="icon-checkmark"></i>Password changed! Please verifly your new password in Email.</p>
                                </div>
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-save">SAVE CHANGES</button>
                                </div>
                            </div>
                        </form>
                    </div>
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