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
    <div class="main purchase">
        <div class="container-fluid">
            <section class="myorder hero">
                <div class="f-container">
                    <!-- container start -->
                    <h3 class="title">YOUR PURCHASE</h3>
                    <div class="order-tab ">
                        <div class="row flex-space md-block">
                            <!-- Description  -->
                            <div class="flex-2 bor md-block t-description">
                                <div class="tab-title">
                                    <h5>Description</h5>
                                </div>
                                <!--   -->
                                <div class="inner-wrap flex-space">
                                    <div class="round">
                                        <img src="">
                                    </div>
                                    <div class="flex-2">
                                        <h4 class="text-lighter">Lionello Marchesi, Brunello di Mortaicino</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- price & QY  -->
                            <div class="flex-2 flex-space">
                                <div class="flex-1">
                                    <div class="tab-title">
                                        <h5>Quantity</h5>
                                    </div>
                                    <div class="inner-wrap flex-space">
                                        <div class="flex-2">
                                            <input class="form-control" type="number" value="2">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <div class="tab-title">
                                        <h5>Price</h5>
                                    </div>
                                    <div class="inner-wrap flex-space">
                                        <div class="flex-2">
                                            <h3>$280</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <div class="tab-title">
                                        <h5>Total</h5>
                                    </div>
                                    <div class="inner-wrap flex-space">
                                        <div class="flex-2">
                                            <h3>$560</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h3 class="title">CHOOSE YOUR DELIVERY</h3>
                        <div class="form-group row">
                            <span class="radio">
                                  <input type="radio" name="a" checked id="p1">
                                  <span class="radio-icon"></span>
                            <label for="p1">
                                <span>Self pick up ($0)</span>
                                <span class="text-lighter">1803 Pickup centre, Wai Yip Street, Kwun Tong, HK   |   MON - SAT   |    09:00-18:00</span>
                            </label>
                            </span>
                        </div>
                        <div class="form-group row">
                            <span class="radio">
                                  <input type="radio" name="a" id="p2">
                                  <span class="radio-icon"></span>
                            <label for="p2">
                                <span>Delivery ($48)</span>
                                <span class="text-lighter">Kowloon & Hong Kong Island</span>
                            </label>
                            </span>
                        </div>
                        <div class="form-group row">
                            <span class="radio">
                                  <input type="radio" name="a" id="p3">
                                  <span class="radio-icon"></span>
                            <label for="p3">
                                <span>Delivery ($58)</span>
                                <span class="text-lighter">New Territories & Lantau Island</span>
                            </label>
                            </span>
                        </div>
                        <div class="line-break"></div>
                    </div>
                    <div class="row">
                        <h3 class="title">SHIPPING ADDRESS</h3>
                        <input type="text" class="form-control" value="Flat B, 7F, 34 Hui Chung Street, Kam Tin">
                        <div class="line-break"></div>
                    </div>
                    <div class="row flex-space md-block">
                        <div class="flex-2 est-time">
                            <p>Esitmate time of arrival: <span>29-Sep-2017</span>
                            </p>
                        </div>
                        <div class="flex-2 text-right total-price">
                            <div class="row flex-space">
                                <div class="text-right text-lighter">Shipping:
                                </div>
                                <div class="">$48
                                </div>
                            </div>
                            <div class="row flex-space">
                                <div class="text-right text-lighter">Total:
                                </div>
                                <div class="">$608
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row flex-space align-bottom md-block">
                        <div class="flex-2">
                            <h3 class="title">PAYMENT METHOD</h3>
                            <div class="col-xs-3">
                                <img src="images/paypal.png">
                            </div>
                        </div>
                        <div class="flex-2 text-right">
                            <div class="form-status">
                                <button type="button" class="btn btn-proceed">PROCEED</button>
                            </div>
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