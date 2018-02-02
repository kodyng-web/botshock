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
    <div class="main signup">
        <div class="container-fluid">
            <section class="hero">
                <div class="f-container">
                    <!-- container start -->
                    <div class="col-md-6">
                        <h1 class="head-super">
                             <div id="big-title" class="content__title__inner">BECOME NEW MEMBER</div> 
                        </h1>
                        <div class="text-lighter">
                            <p>
                                <div id="sub-title" class="content__title__inner">Fill in all the information & password for sign up.</div>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="alert text-lighter">
                            <h4>Please fill the missing field below.</h4>
                            <h4><span>First Name</span> cannot be blank.</h4>
                            <h4><span>Last Name</span> cannot be blank.</h4>
                            <h4><span>Address</span> cannot be blank.</h4>
                            <h4><span>Phone no.</span> cannot be blank.</h4>
                            <h4><span>Password</span> cannot be blank.</h4>
                            <h4><span>Password retype incorrectly.</span></h4>
                        </div>
                        <form>
                            <div class="form-group row">
                                <label for="example-signup-input" class="col-xs-5 col-form-label">First Name</label>
                                <div class="col-xs-7">
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-signup-input" class="col-xs-5 col-form-label">Last Name</label>
                                <div class="col-xs-7">
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-signup-input" class="col-xs-5 col-form-label">Email</label>
                                <div class="col-xs-7">
                                    <input class="form-control" type="email" value="name@yahoo.com.hk">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-signup-input" class="col-xs-5 col-form-label">Address</label>
                                <div class="col-xs-7">
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-signup-input" class="col-xs-5 col-form-label">Phone no.</label>
                                <div class="col-xs-7">
                                    <input class="form-control" type="tel">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-signup-input" class="col-xs-5 col-form-label">Password</label>
                                <div class="col-xs-7">
                                    <input class="form-control" type="password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-signup-input" class="col-xs-5 col-form-label">Retype password</label>
                                <div class="col-xs-7">
                                    <input class="form-control" type="password">
                                </div>
                            </div>
                            <div class="form-group row text-lighter">
                                <input id="signup-checkbox" type="checkbox">
                                <label for="signup-checkbox" class="checkbox-tnc">I have read and agree to the <a href="#" target="">Terms of Use</a> and <a href="#" target="">Privacy Policy</a>
                                </label>
                            </div>
                            <div class="form-group row recaptcha">
                                <div style="background-color: #000; height: 50px;">GOOGLE RECAPTCHA HOLDER</div>
                            </div>
                            <div class="form-group row">
                                <div class="recaptcha-hint text-lighter">
                                    <p>* Please enter the letters as they are shown in the image above.</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <!-- save button  -->
                            <div class="form-status">
                                <button type="button" class="btn btn-signup">SIGN UP</button>
                            </div>
                        </form>
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
        (function() {
            setTimeout(init, 100);

            function init() {
                //************************ reveal on load ********************************
                var bigTitle = new RevealFx(document.querySelector('#big-title'), {
                    revealSettings: {
                        bgcolor: '#7f40f1',
                        duration: 1000,
                        onStart: function(contentEl, revealerEl) {
                            contentEl.style.opacity = 0;
                        },
                        onCover: function(contentEl, revealerEl) {
                            contentEl.style.opacity = 1;
                        }
                    }
                });
                bigTitle.reveal();
                var subTitle = new RevealFx(document.querySelector('#sub-title'), {
                    revealSettings: {
                        bgcolor: '#fcf652',
                        delay: 850,
                        duration: 800,
                        onStart: function(contentEl, revealerEl) {
                            contentEl.style.opacity = 0;
                        },
                        onCover: function(contentEl, revealerEl) {
                            contentEl.style.opacity = 1;
                        }
                    }
                });
                subTitle.reveal();
            }
        })();
    </script>
</body>

</html>