<?php 
ob_start();
session_start();
require_once '../config.php';
//if(!isset($_SESSION['logged_in'])){
	//header('Location: /login/index.php');
//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115818226-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-115818226-1');
</script>
    <title>1.5 Odds Predictions - Matchora</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <link rel="shortcut icon" href="../assets/images/favicon.png">

    <!--Bootstrap css here-->
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <!--Font-Awsome css here-->
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">

    <!--Owl-carousel css here-->
    <link rel="stylesheet" href="../assets/plugins/owl/owl.carousel.css">
    <link rel="stylesheet" href="../assets/plugins/owl/owl.theme.default.css">
	 <link rel="stylesheet" href="../assets/css/color3.css">   
    <link rel="stylesheet" href="../assets/plugins/owl/owl.transitions.css">

    <!--common css here-->
    <link rel="stylesheet" href="../assets/css/gradient.css">    
    <link rel="stylesheet" href="../assets/css/responsive.css">   
    <link rel="stylesheet" href="../assets/plugins/paraxify/paraxify.css"/>

</head>
<body>


<!---loader-->

<!--<div class="pageLoader">
    <div class="loaderArea">
        <div class="Myloader1">
            <div class="gradient_circle"></div>
        </div>
    </div>
</div>-->

<!---loader-->


<!-- header -->

    <!--top bar-->
    
        <!--top bar-->
        <!--navigation-->
		<style>
		 .navbar {
            background-color: #D93058;
            border-radius:0px;
	margin-bottom:0px;
            
        }
		</style>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header logoo">
                    <button id="tog-btn" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="https://matchora.com">
                        <img class="img-responsive headerLogo" src="https://matchora.com/assets/images/logoweb.png" alt="Matchora Logo"/>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav GradinetNav navbar-nav navbar-right hidden-xs hidden-sm">
                        <li>
                            <a href="https://matchora.com/account/" class="btn borderBTn" style="margin-bottom: 0px;" data-toggle="modal">My Account</a>
                        </li>
                    </ul>
                    <ul id="navigation" class="nav navbar-nav navbar-right">
                        <!--<li class="active dropdown">
                            <a class="dropdown-toggle"  data-val="#banner-section" data-toggle="dropdown" href="#">Home <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="color1.html">Gradient 1</a></li>
                                <li><a href="color2.html">Gradient 2</a></li>
                                <li><a href="color3.html">Gradient 3</a></li>
                            </ul>
                        </li>-->
                        <li><a href="https://matchora.com/#how-it-works" data-val="#how-it-works">Today's Tips</a></li>
                        <li><a href="#popular" data-val="#popular">Pricing Plan</a></li>
                        <li class="active dropdown">
                            <a class="dropdown-toggle"  data-val="#banner-section" data-toggle="dropdown" href="#">Markets <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="https://matchora.com/markets/1.5-goals/">1.5 Goals</a></li>
                                <li><a href="https://matchora.com/markets/4.5-goals/">4.5 Goals</a></li>
                                <li><a href="https://matchora.com/markets/full-time/">FT Result</a></li>
								<li><a href="https://matchora.com/markets/match-of-the-day/">Match Of The Day</a></li>
								<li><a href="https://matchora.com/markets/1.5-odds/">1.5 Odds</a></li>
								<li><a href="https://matchora.com/markets/over-0.5-first-half/">Over 0.5 HT</a></li>
								<li><a href="https://matchora.com/markets/under-1.5-first-half/">Under 1.5 HT</a></li>
								<li><a href="https://matchora.com/markets/ht-results/">HT Result</a></li>
								<li><a href="https://matchora.com/markets/2.00-odds/">2 Odds</a></li>
								<li><a href="https://matchora.com/markets/3.00-odds/">3 Odds</a></li>
								<li><a href="https://matchora.com/markets/2.5-goals/">2.5 Goals</a></li>
								<li><a href="https://matchora.com/markets/3.5-goals/">3.5 Goals</a></li>
								<li><a href="https://matchora.com/markets/5.00-odds/">5 Odds</a></li>
								<li><a href="https://matchora.com/markets/10.00-goals/">10 Odds</a></li>
								<li><a href="https://matchora.com/markets/btts/">BTTS</a></li>
								<li><a href="https://matchora.com/markets/accumulators/">Accumulators</a></li>
                            </ul>
                        </li>
                        <li><a href="https://matchora.com/#faq" data-val="#faq">F.A.Q</a></li>
                        <li><a href="#blog" data-val="#blog">Blog</a></li>
                        <li><a href="#contactUs" data-val="#contactUs">Contact us</a></li>
                        <li class="visible-xs"><a href="https://matchora.com/account/">Login</a></li>
                    </ul>
                </div>

            </div>
        </nav>
        <!-- NAVIGATION -->


<style>
 table {
border-collapse: collapse;
width: 100%;
border-radius: 10px;


}
th, td {
text-align: left;
padding: 8px;
}
tr:nth-child(even) {background-color: white; }
th {
background-color: #C83171;
color: white;

}

th:first-child {
    border-radius: 10px 0 0 0;
}

th:last-child {
    border-radius: 0 10px 0 0;
}

.tableholder{
            max-width: 700px;
			align: center !important;
        } 
 @media screen and (max-width: 800px) {
    table{
        font-size: 12px;
    }
        }
        
</style>













<!--POPULAR COURSES SECTION START HERE-->

<section id="populara" class="BorderedSection">
    <div class="container sectionPadding">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-12 sectionHeader" data-aos="fade-right" data-aos-duration="1000">
                        <h2 class="SectionTitle RobotoMedium">1.50 Odds</h2>
                        <div class="underTitleLine gradientbg"></div>
                        <p class="sectionDescription LightColor RobotoLight">
                            Here are matches with 1.50 Odds,<br>
                            select from a list of availaible matches
                        </p>
                    </div>
                    <div class="col-md-12 col-xs-12 col-sm-12" data-aos="fade-up" data-aos-duration="1000">
                       <?php 
					   date_default_timezone_set("Africa/Lagos");
					   $date= date("Y-m-d");?>   
						

<?

$email =$_SESSION ['email'];
$account = $_SESSION ['account'];
$mysqli = new mysqli('localhost', 'dindinda_match', 'BoxopusAquafeed!1', 'dindinda_matchora');
	if ($mysqli->connect_error){
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	$result = $mysqli->query ("SELECT name,account,email,user_id,expiry FROM `users` WHERE email = '$email' AND (account = '2' OR account ='3' OR account ='4') AND expiry >='$date'");
	
	$row= mysqli_num_rows($result);
	if ($row<1){
		
		
			include '../premiumbasic.php';
	}	
	else {
	
include 'home.php';
	
	
}

?>
        
						   
						   
						   
						   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--POPULAR COURSES SECTION END HERE-->










<!--CONTACT US SECTION START HERE -->

<!--<section id="contactUs">
    <div class="container sectionPadding">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-offset-2 col-xs-12 col-sm-8" data-aos="fade-up" data-aos-duration="1000">
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-12 sectionHeader text-center">
                        <h1 class="SectionTitle RobotoMedium">Get In Touch</h1>
                        <div class="underTitleLine gradientbg"></div>
                        <p class="sectionDescription LightColor RobotoLight">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="#" id="contact-form">
                            <div class="col-md-6 inputContainer col-xs-12 col-sm-6">
                                <label for="name">Enter Name*</label>
                                <input type="text" class="form-control themeInputs" placeholder="Your Name" id="name"/>
                                <p class="error">&nbsp;</p>
                            </div>
                            <div class="col-md-6 inputContainer col-xs-12 col-sm-6">
                                <label for="email">Enter Email*</label>
                                <input type="email" class="form-control themeInputs" placeholder="Your Email" id="email"/>
                                <p class="error">&nbsp;</p>
                            </div>
                            <div class="col-md-6 inputContainer col-xs-12 col-sm-6">
                                <label for="mobile">Enter Mobile*</label>
                                <input type="text" class="form-control themeInputs" placeholder="Your Mobile No." id="mobile"/>
                                <p class="error">&nbsp;</p>
                            </div>
                            <div class="col-md-6 inputContainer col-xs-12 col-sm-6">
                                <label for="subject">Enter Subject*</label>
                                <input type="text" class="form-control themeInputs" placeholder="Your Subject" id="subject"/>
                                <p class="error">&nbsp;</p>
                            </div>
                            <div class="col-md-12 inputContainer">
                                <label for="message">What you want to known*</label>
                                <textarea class="form-control themeInputs" placeholder="Your Message Here" id="message"></textarea>
                                <p class="error">&nbsp;</p>
                            </div>
                            <div class="col-md-12 inputContainer" style="padding: 20px 0px">
                                <button type="submit" class="btn gradientBtn" style="margin: 0 auto; display: block; " data-toggle="modal" data-target="#pop-register">
                                    <span>Submit</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->

<!--CONTACT US SECTION END HERE -->


<!--PARTNERS SECTION START HERE-->


<!--<div id="partners" class="BorderedSection">
    <div class="container sectionPadding">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-12" data-aos="fade-right" data-aos-duration="1000">
                        <div class="owl-carousel PartnersCarousel">
                            <div class="item">
                                <img class="img-responsive" src="https://placehold.it/600x176" alt="Partner 1"/>
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="https://placehold.it/600x176" alt="Partner 2"/>
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="https://placehold.it/600x176" alt="Partner 3"/>
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="https://placehold.it/600x176" alt="Partner 4"/>
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="https://placehold.it/600x176" alt="Partner 5"/>
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="https://placehold.it/600x176" alt="Partner 6"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->


<!--PARTNERS SECTION END HERE-->



<!--FOOTER SECTION START HERE-->

<footer class="ParalaxImage paraxify">
    <div class="footerContainer">
        <div class="container footerPadding">
            <div class="row">

                <!--footer menu-->
                <div class="col-md-12 col-xs-12 col-sm-12 footerMb">
                    <div class="row white">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <h3 class="white RobotoBold footerLogo">
                                <img class="img-responsive" src="assets/images/logoweb.png" alt="Logo"/>
                            </h3>
                            <p>
                               Get the latest football prediction and tips on matchora
                            </p>
                            <ul>
                                <li>Mobile no: 131-165-6515</li>
                                <li>Email:- support@matchora.com</li>
                            </ul>
                        </div>
                        <div class="col-md-7 col-md-offset-1 col-sm-8">
                            <div class="col-md-4 col-xs-4  col-sm-4">
                                <h3 class="white RobotoBold footerTitle footerSmall">Conditions</h3>
                                <ul>
                                    <li><a href="javascript:;">Terms and Conditions</a></li>
                                    <li><a href="javascript:;">Privacy Policy</a></li>
                                    
                                </ul>
                            </div>
                            <div class="col-md-4 col-xs-4 col-sm-4">
                                <h3 class="white RobotoBold footerTitle footerSmall">Navigation</h3>
                                <ul>
                                    <li><a href="javascript:;">About Us</a></li>
                                    <li><a href="javascript:;">How it works</a></li>
                                    <li><a href="javascript:;">Why choose us</a></li>
                                   <li><a href="#popular" data-val="#popular">Plans</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-xs-4  col-sm-4">
                                <h3 class="white RobotoBold footerTitle footerSmall">Locations</h3>
                                <ul>
                                    <li><a href="javascript:;">Nigeria</a></li>
                                    <li><a href="javascript:;">Kenya</a></li>
                                    <li><a href="javascript:;">Uganda</a></li>
                                    <li><a href="javascript:;">Brazil</a></li>
									<li><a href="javascript:;">United Kingdom</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--rights reserved line-->
                <div class="col-md-12 col-xs-12 col-sm-12 rightsReserved">
                    <div class="row white">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p>
                                &copy; Copyright 2017, all rights reserved by <a href="https://matchora.com" target="_blank" class="gradientColor">matchora.com</a>.
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 text-right">
                            <ul class="list-inline SocialIcons">
                                <li>
                                    <a href="javascript:;">
                                        <img src="https://placehold.it/50x50" alt="Facebook Logo" class="img-responsive footerImages"/>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <img src="https://placehold.it/50x50" alt="LinkedIn Logo" class="img-responsive footerImages"/>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <img src="https://placehold.it/50x50" alt="Gmail Logo" class="img-responsive footerImages"/>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <img src="https://placehold.it/50x50" alt="Pinterest Logo" class="img-responsive footerImages"/>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<!--FOOTER SECTION END HERE-->

<!-- GO TO TOP FUNCYION START HERE-->

<button onclick="goTopFunction()" id="TopBtn" class="gradientbgTransparent btn btn-gradient"><i class="visible-xs fa fa-arrow-up"></i><span class="hidden-xs">Back To Top</span></button>

<!-- GO TO TOP FUNCYION END HERE-->


<!-- All Javascripts -->

<!-- Jquery -->
<script type="text/javascript" src="../assets/js/jquery-3.2.1.js"></script>

<!-- Bootstrap -->
<script type="text/javascript" src="../assets/js/bootstrap.js"></script>

<!-- Nice Scroll -->
<script type="text/javascript" src="../assets/plugins/niceScroll/niceScroll.min.js"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="../assets/plugins/owl/owl.carousel.js"></script>

<!--Paraxify js here-->
<script type="text/javascript" src="../assets/plugins/paraxify/paraxify.js"></script>


<!-- Number Counter -->
<script type="text/javascript" src="../assets/plugins/numScroll/numscroller-1.0.js"></script>


<!-- common js file -->
<script type="text/javascript" src="../assets/js/main.js"></script>

<!-- gradient variation home js file -->
<script type="text/javascript" src="../assets/js/gradient.js"></script>


</body>
</html>