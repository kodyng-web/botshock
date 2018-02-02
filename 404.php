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
    <div class="main error-404">
        <div class="container-fluid">
            <section class="hero">
                <div class="f-container">
                    <div class="col-md-7 col-sm-12 ani-text">
                        <h1>EMPTY BOTTLE</h1>
                        <br>
                        <br>
                        <p>When you met a 404 not found page, just like you want to keep drinking but no more wine. Let we find you some best wine.</p>
                        <br>
                        <br>
                        <br>
                        <a href="list.php" class="btn-outer">
                            <h6 class="inline-block">GET WINE</h6>
                            <i class="icon-arrow"></i>
                        </a>
                    </div>
                    <div class="col-md-5 col-sm-12 ">
                        <div class="drop-shadow">
                            <div class="media">
                                <div id="rev-404" class="media__inner"><img class="media__image" src="images/404-kv.jpg" alt="Image" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
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
    <script src="js/scrollMonitor.js"></script>
    <script src="js/main.js"></script>
    <script>
        (function() {
            var scrollElemToWatch = document.getElementById('rev-404'),
                watcher = scrollMonitor.create(scrollElemToWatch),
                textEl = document.querySelector('.ani-text'),
                rev2 = new RevealFx(scrollElemToWatch, {
                    revealSettings: {
                        direction: 'rl',
                        bgcolor: '#c32f47',
                        duration: 800,
                        easing: 'easeInOutCirc',
                        coverArea: 0,
                        onCover: function(contentEl, revealerEl) {
                            contentEl.style.opacity = 1;
                            textEl.classList.add('fade-in-left');
                        }
                    }
                });

            watcher.enterViewport(function() {
                rev2.reveal();
                watcher.destroy();
            });
        })();
    </script>
</body>

</html>