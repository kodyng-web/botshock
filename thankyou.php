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
    <div class="main thankyou">
        <div class="container-fluid">
            <section class="myorder hero">
                <div class="f-container">
                    <!-- container start -->
                    <h1>THANK YOU FOR YOUR ORDER!</h1>
                    <p>Your order has been received. We'll email you an order confirmation with details and tracking info.
                        <br>
                        <br>Once your order has been arrived and shipped we will notify you via the e-mail address that is listed in your account information. You can review the status of your order at any time by clicking the <a href="myorder.php">My Order</a> after signed in.</p>
                    <div class="order-tab">
                        <div class="row flex-space md-block">
                            <!-- Description  -->
                            <div class="flex-2 bor md-block">
                                <div class="tab-title">
                                    <h5>Description</h5>
                                </div>
                                <!--   -->
                                <div class="inner-wrap flex-space">
                                    <div class="round">
                                        <img src="">
                                    </div>
                                    <div class="flex-2">
                                        <h4 class="text-lighter"><span>Lionello Marchesi, Brunello di Mortaicino</span><br>Ref no. : <span>WZH0098734</span></h4>
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
                                            <h3><span>2</span></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <div class="tab-title">
                                        <h5>Price</h5>
                                    </div>
                                    <div class="inner-wrap flex-space">
                                        <div class="flex-2">
                                            <h3>$<span>280</span></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1 last">
                                    <div class="tab-title">
                                        <h5>Total</h5>
                                    </div>
                                    <div class="inner-wrap flex-space">
                                        <div class="flex-2">
                                            <h3>$<span>560</span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h4><span>SELF PICK UP ($0)</span></h4>
                            <p><span>1803 Pickup centre, Wai Yip Street, Kwun Tong, HK   |   MON - SAT   |    09:00-18:00</span>
                            </p>
                            <div class="line-break"></div>
                        </div>
                    </div>
                    <div class="row flex-space md-block">
                        <div class="flex-2 est-time">
                            <p>Esitmate time of arrival: <span class="text-bold">29-Sep-2017</span>
                            </p>
                        </div>
                        <div class="flex-2 text-right total-price">
                            <div class="row flex-space">
                                <div class="text-right text-lighter">Shipping:
                                </div>
                                <div class="">$<span>48</span>
                                </div>
                            </div>
                            <div class="row flex-space">
                                <div class="text-right text-lighter">Total:
                                </div>
                                <div class="">$<span>608</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- container end -->
                </div>
            </section>
            <section class="latest" id="index2">
                <div class="block-purple">
                    <div class="f-container">
                        <div class="text-center title">
                            <h3>MORE BOTS?</h3>
                            <a href="list.php" class="btn-more">
                                <h5>VIEW ALL BOTS<i class="icon-arrow"></i></h5>
                            </a>
                        </div>
                        <!-- slider -->
                        <?php include( "include/slider.php")?>
                        <!-- slider -->
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