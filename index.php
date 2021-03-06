<?php
	if (isset($_POST["submit"])) {
		$email = $_POST['email'];
		$from = 'Site 1'; 
		$to = 'darenpuan@curave.com';
		$subject = 'New Sign Up on Curave.com';
		$body ="<html><body>From E-Mail: $email</body></html>";
		// Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <form@curave.com.sg>' . "\r\n";
        $headers .= 'Cc: gohjh@curave.com' . "\r\n";
		// Check if email has been entered and is valid
		/*if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}*/
// If there are no errors, send the email
if (!$errEmail) {
	if (mail ($to, $subject, $body, $headers)) {
		$result='<div class="alert alert-success">Thank You</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>

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
        <link rel="stylesheet" href="assets/css/index.css">
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
                            <a class="navbar-brand" href="#hero"><img src="assets/img/logo-min.png" alt="Curave"></a>
                        </div>
                        <div class="collapse navbar-collapse navbar-right" id="">
                            <ul class="nav navbar-nav">
                                <li><a href="#about">ABOUT</a></li>
                                <li><a href="#howItWorks">HOW IT WORKS</a></li>
                                <li><a href="#competitions">VIEW COMPETITIONS</a></li>
                                <li><a href="#login" class="btn button_login padding">LOGIN</a></li>
                                <li><a href="#register" class="btn button_register">REGISTER</a></li>
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
                    <h1>EARN MONEY</h1>
                    <h1><small>PLAYING YOUR FAVORITE GAMES</small></h1>
                    <h4>PLAY COMPETITIONS. WIN GAMES. EARN REAL CASH</h4>
                </div>
                <div class="row" style="text-align: center;">
                    <div class="col-sm-6 dotaLogo">
                        <img src="/assets/img/logo-dota2-min.png " alt=" ">
                    </div>
                    <div class="col-sm-6 overwatchLogo">
                        <img src="/assets/img/logo-overwatch-min.png " alt=" ">
                        <p>COMING SOON</p>
                    </div>
                </div>
            </div>
        </section>
        <!--End hero-->

        <!--howItWorks-->
        <section id="howItWorks">
            <div class="container">
                <div class="section-header">
                    <h2>HOW IT WORKS</h2>
                </div>
                <div class="row" style="text-align: center;">
                    <div class="col-sm-4">
                        <div class="img-circle">
                            <img src="/assets/img/icon-cup2x-min.png" alt="">
                        </div>
                        <h5>JOIN A COMPETITION</h5>
                        <p>There's competition for all skill levels, <br class="hidden-xs hidden-sm">don't worry we'hv got you covered.</p>
                    </div>
                    <div class="col-sm-4">
                        <div class="img-circle">
                            <img src="/assets/img/icon-podium2x-min.png" alt="">
                        </div>
                        <h5>START PLAYING</h5>
                        <p>We keep track of your match statistics <br class="hidden-xs hidden-sm">and with out unique scoring structure. We <br class="hidden-xs hidden-sm">will assign you a ranking based on your <br class="hidden-xs hidden-sm">performance and you will be able to earn <br class="hidden-xs hidden-sm">a portion of the prize pool!</p>
                    </div>
                    <div class="col-sm-4">
                        <div class="img-circle">
                            <img src="/assets/img/icon-coins2x-min.png" alt="">
                        </div>
                        <h5>WIN CASH</h5>
                        <p>Have fun and play! Win <img src="/assets/img/curavecoin-small.png" alt=""> Curave Coins <br class="hidden-xs hidden-sm"> to use in more competitions, or cash <br class="hidden-xs hidden-sm">them out as real money. GG EZ!</p>
                    </div>
                </div>
            </div>
        </section>
        <!--End howItWorks-->

        <!--whyCurave-->
        <section id="whyCurave">
            <div class="container">
                <div class="section-header">
                    <h2>WHY CURAVE</h2>
                </div>
                <div class="row" style="text-align: center;">
                    <div class="col-sm-4">
                        <div class="col-md-12">
                            <img src="/assets/img/icon-fists-min.png" alt="">
                            <h5>FOR FAME &amp; GLORY</h5>
                            <p>Create a name for yourselft on Curave playing the games you love. Make all your friends and followers jelly when they see you #1 on our leaderboards.</p><br class="hidden-xs hidden-lg">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="col-md-12">
                            <img src="/assets/img/icon-wallet-min.png" alt="">
                            <h5>FOR REAL MONEY</h5>
                            <p>
                                Because you don't have to be a professional to earn money from gaming, join us and you will believe it. Play games, earn Curave Coins and convert them to real money!
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="col-md-12">
                            <img src="/assets/img/icon-target-min.png" alt="">
                            <h5> SKILL-BASED MATCHMAKING</h5>
                            <p>
                                To ensure a fair and fun gaming environment for all, we utilize your MMR to group players with your similar skill level! <br> <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End whyCurave-->
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
                            <form action="index.php" method="post" class="form-inline">
                                <div class="input-group">
                                    <p>Get the latest scoop! Sign up for our newsletter today!</p>
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" placeholder="Email Address" class="form-control res" id="email" required="required" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                                    <?php echo "<p class='text-danger'>$errEmail</p>";?>
                                    <span class="input-group">
                            <button name="submit" type="submit" value="Submit"><i class="fa fa-send"></i></button>
                            </span>
                                </div>
                            </form>
                        </div>
                        <center class="hidden-lg hidden-md">
                            <form action="index.php" method="post" class="form-inline">
                                <div class="input-group">
                                    <p>Get the latest scoop! Sign up for our newsletter today!</p>
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" placeholder="Email Address" class="form-control" id="email" required="required" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                                    <?php echo "<p class='text-danger'>$errEmail</p>";?>
                                    <span class="input-group">
                            <button name="submit" type="submit" value="Submit"><i class="fa fa-send"></i></button>
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

    </html>
