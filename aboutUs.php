<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="device-width, initial-scale=1">

    <!--
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Exo+2:100,400" rel="stylesheet">
    <link rel="stylesheet" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/staticPages.css">

    <title>Curave</title>
</head>

<body>
    <!--header-->
    <header class="site-header" role="banner">
        <div class="navbar-wrapper">
            <div class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php"><img src="assets/img/curave-logo-full-colour-rgb.png" alt="Curave"></a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right" id="">
                        <ul class="nav navbar-nav">
                            <li><a href="#about">ABOUT</a></li>
                            <li class="linkfix"><a href="index.php #howItWorks">HOW IT WORKS</a></li>
                            <li><a href="#competitions">VIEW COMPETITIONS</a></li>
                            <li><a href="login.php" class="btn button_login padding">LOGIN</a></li>
                            <li><a href="register.php" class="btn button_register">REGISTER</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--End header-->
    <!--hero-->
    <section id="hero">
        <div class="container">
            <div class="section-header">
                <h2>ABOUT US</h2>
            </div>
            <div class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-6 col-lg-offset-3 col-lg-6">
                <p>Curave connect gamers looking to participate in competitions hosted by local cyber-cafes. We provide access for all gamers to face off in competitions. </p>
                <p>Competitive gaming is no longer just for the professionals. Sign up on our platform and experience the NEW side of gaming. </p>
            </div>
        </div>
    </section>
    <!--End hero-->
    <!--footer-->
    <footer id="myFooter">
        <div class="container">
            <div class="row">

                <div class="col-sm-2 col-md-2">
                    <h5>ABOUT</h5>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 col-md-2">
                    <h5>HELP</h5>
                    <ul>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Rules &amp; Scoring</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 col-md-2">
                    <h5>MORE</h5>
                    <ul>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="footer-social">
                        <a href="#" class="social-icons"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="social-icons"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="social-icons"><i class="fa fa-twitch"></i></a>
                    </div>
                    <div class="hidden-sm hidden-xs">
                        <form action="#" method="post" class="form-inline">
                            <div class="input-group">
                                <p>Get the latest scoop! Sign up for our newsletter today!</p>
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" placeholder="Email Address" class="form-control res" id="email" required="required">
                                <span class="input-group">
                            <button><i class="fa fa-send"></i></button>
                            </span>
                            </div>
                        </form>
                    </div>
                    <center class="hidden-lg hidden-md">
                        <form action="#" method="post" class="form-inline">
                            <div class="input-group">
                                <p>Get the latest scoop! Sign up for our newsletter today!</p>
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" placeholder="Email Address" class="form-control" id="email" required="required">
                                <span class="input-group">
                            <button><i class="fa fa-send"></i></button>
                            </span>
                            </div>
                        </form>
                    </center>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>Copyright © 2017 Curave. All Rights Reserved.</p>
        </div>
    </footer>
    <!--End footer-->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script>
    $('.linkfix a').on('click', function() {
        window.location.href = "https://www.curave.com/#howItWorks";
    });

</script>

</html>
