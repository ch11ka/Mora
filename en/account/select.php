<?php 
ob_start();
ini_set('session.gc_maxlifetime', 3600);	//keep session active for 1 hour			
session_start();

if(!isset($_SESSION['logged_in'])){
	header('Location: ../account/index.php');
}

$user_id = $_SESSION['user_id'];
?>

<?php
$mysqli = new mysqli('localhost', 'dindinda_match', 'BoxopusAquafeed!1', 'dindinda_matchora');
	if ($mysqli->connect_error){
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
                                
                                
                                $query= $mysqli-> query("SELECT * FROM `users` WHERE user_id='$user_id'");
	$row = mysqli_fetch_assoc($query);
                                ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Account - Matchora</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    

    <!-- Google font-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700" rel="stylesheet">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/simple-line-icons/css/simple-line-icons.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/css/bootstrap.min.css">

    <!-- Chartlist chart css -->
    <link rel="stylesheet" href="../bower_components/chartist/css/chartist.css" type="text/css" media="all">

    <!-- Weather css -->
    <link href="assets/css/svg-weather.css" rel="stylesheet">

    <!-- Echart js -->
    <script src="assets/plugins/charts/echarts/js/echarts-all.js"></script>

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

    <!--color css-->
    <link rel="stylesheet" type="text/css" href="assets/css/color/color-4.min.css" id="color"/>

</head>
<style>

</style>
<body class="sidebar-mini fixed">
    <div class="loader-bg">
        <div class="loader-bar">
        </div>
    </div>
<div class="wrapper">
    <!--   <div class="loader-bg">
    <div class="loader-bar">
    </div>
  </div> -->
    <!-- Navbar-->
    <header class="main-header-top">
        <a href="https://matchora.com" class="logo"><img class="img-fluid able-logo" src="assets/images/logoweb.png" alt="Theme-logo"></a>
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button--><a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
            <!-- Navbar Right Menu-->
            <div class="navbar-custom-menu">
                <ul class="top-nav">
                    <!--Notification Menu-->

                   
                   
                   
                    <!-- window screen -->
                    <li class="pc-rheader-submenu">
                        <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                            <i class="icon-size-fullscreen"></i>
                        </a>

                    </li>
                    <!-- User Menu-->
                    <li class="dropdown">
                        <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                            <span><img class="rounded-circle" src="assets/images/avatar-1.png" style="width:40px;" alt="User Image"></span>
                            <span><?php echo $_SESSION['name']; ?></b> <i class=" icofont icofont-simple-down"></i></span>

                        </a>
                        <ul class="dropdown-menu settings-menu">
                            <li><a href="#!"><i class="icon-settings"></i> Settings</a></li>
                            <li><a href=""><i class="icon-user"></i> Profile</a></li>
                          
                            <li class="p-0">
                                <div class="dropdown-divider m-0"></div>
                            </li>
                           
                            <li><a href="logout"><i class="icon-logout"></i> Logout</a></li>

                        </ul>
                    </li>
                </ul>

                <!-- search -->
                
                <!-- search end -->
            </div>
        </nav>
    </header>
    <!-- Side-Nav-->
    <aside class="main-sidebar hidden-print " >
        <section class="sidebar" id="sidebar-scroll">
            <div class="user-panel">
                <div class="f-left image"><img src="assets/images/avatar-1.png" alt="User Image" class="rounded-circle"></div>
                <div class="f-left info">
                    <p><?php echo $_SESSION['name']; ?></p>
                    <p class="designation"><?php							
				
		if ($row['account'] =="1")
			echo "FREE USER";
		else if ($row['account'] =="2")
			echo "BASIC";
		else if ($row['account'] =="3")
			echo "ESSENTIAL";
		else if ($row['account'] =="4")
			echo "PRO";
		else if ($row['account'] =="5")
			echo "TENNIS GOLD";
		else if ($row['account'] =="6")
			echo "FOOTBALL BRONZE + TENNIS";
		else if ($row['account'] =="7")
			echo "FOOTBALL SILVER + TENNIS";
		else if ($row['account'] =="8")
			echo "FOOTBALL GOLD + TENNIS";
		else if ($row['account'] =="9")
			echo "CUSTOM";	
	
	
				?> </p>
                </div>
            </div>
            
            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
                <li class="nav-level">Navigation</li>
                <li><a href="dashboard"><i class="icon-speedometer"></i><span> Dashboard</span></a> </li>
               <li><a href=""><i class="icon-user-follow"></i><span> User Profile</span></a> </li>
			   <li  class="active"><a href=""><i class="icon-rocket"></i><span> Upgrade Account</span><span class="label label-warning menu-caption">PRO</span></a> </li>

               
                <!--<li class="nav-level">Components</li>
               <li><a href="dashboard.php"><i class="icon-speedometer"></i><span> Dashboard</span></a> </li>
               <li><a href=""><i class="icon-user-follow"></i><span> User Profile</span></a> </li>
			   <li><a href=""><i class="icon-rocket"></i><span> Upgrade Account</span><span class="label label-warning menu-caption">PRO</span></a> </li>-->            


                

                
                <li class="nav-level">More</li>

               <li><a href="https://matchora.com/contact"><i class="icon-speedometer"></i><span> Help & Support</span></a> </li>
               <li><a href="https://matchora.com/terms"><i class="icon-user-follow"></i><span> Terms & Conditions</span></a> </li>
			   <li><a href="https://matchora.com/#faq"><i class="icon-rocket"></i><span> F.A.Qs</span><!--<span class="label label-warning menu-caption">PRO</span>--></a> </li>   
                
            </ul>
        </section>
    </aside>
   
    <div class="content-wrapper">

        <!-- Container-fluid starts -->
        <!-- Main content starts -->
        <div class="container-fluid">
		  <div class="row">
                <div class="main-header">
                    <h4>Dashboard</h4>
                </div>
            </div>
            <div class="row">
			<div class="col-md-4">
			</div>
               <center>
			  
                           
                            <div class="content" align="center">
                               
                            <!--<h2>We really want to help you win</h2>--> <br> 
                            <!--<p class="category">Select your correct country to prevent errors in transactions as there would be no refunds for erring </p>--> <br>
                            
                             <!--<p class="category">We are launching this service soon!</p>-->
                                
                               <div style="padding-top:20px; max-width:300px">
							    <form action="upgradecountry.php" method="post">
                            <select name="country" id="email" class="form-control" data-max-options="1" data-live-search="true" onChange="window.document.location.href=this.options[this.selectedIndex].value;" value="GO"
>
    <option value="" disabled selected>Choose your country</option>
<option value="us">Afghanistan</option>
<option value="us">Albania</option>
<option value="us">Algeria</option>
<option value="us">American Samoa</option>
<option value="us">Andorra</option>
<option value="us">Angola</option>
<option value="us">Anguilla</option>
<option value="us">Antarctica</option>
<option value="us">Antigua and Barbuda</option>
<option value="us">Argentina</option>
<option value="us">Armenia</option>
<option value="us">Aruba</option>
<option value="us">Australia</option>
<option value="us">Austria</option>
<option value="us">Azerbaijan</option>
<option value="us">Bahrain</option>
<option value="us">Bangladesh</option>
<option value="us">Barbados</option>
<option value="us">Belarus</option>
<option value="us">Belgium</option>
<option value="us">Belize</option>
<option value="us">Benin</option>
<option value="us">Bermuda</option>
<option value="us">Bhutan</option>
<option value="us">Bolivia</option>
<option value="us">Bosnia and Herzegovina</option>
<option value="us">Botswana</option>
<option value="us">Bouvet Island</option>
<option value="us">Brazil</option>
<option value="us">British Indian Ocean Territory</option>
<option value="us">British Virgin Islands</option>
<option value="us">Brunei</option>
<option value="us">Bulgaria</option>
<option value="us">Burkina Faso</option>
<option value="kesh">Burundi</option>
<option value="us">Côte d'Ivoire</option>
<option value="us">Cambodia</option>
<option value="cameroon">Cameroon</option>
<option value="us">Canada</option>
<option value="us">Cape Verde</option>
<option value="us">Cayman Islands</option>
<option value="us">Central African Republic</option>
<option value="us">Chad</option>
<option value="us">Chile</option>
<option value="us">China</option>
<option value="us">Christmas Island</option>
<option value="us">Cocos (Keeling) Islands</option>
<option value="us">Colombia</option>
<option value="us">Comoros</option>
<option value="kesh">Congo</option>
<option value="us">Cook Islands</option>
<option value="us">Costa Rica</option>
<option value="us">Croatia</option>
<option value="us">Cuba</option>
<option value="us">Cyprus</option>
<option value="us">Czech Republic</option>
<option value="us">Democratic Republic of the Congo</option>
<option value="us">Denmark</option>
<option value="us">Djibouti</option>
<option value="us">Dominica</option>
<option value="us">Dominican Republic</option>
<option value="us">East Timor</option>
<option value="us">Ecuador</option>
<option value="us">Egypt</option>
<option value="us">El Salvador</option>
<option value="us">Equatorial Guinea</option>
<option value="us">Eritrea</option>
<option value="us">Estonia</option>
<option value="us">Ethiopia</option>
<option value="us">Faeroe Islands</option>
<option value="us">Falkland Islands</option>
<option value="us">Fiji</option>
<option value="us">Finland</option>
<option value="us">Former Yugoslav Republic of Macedonia</option>
<option value="us">France</option>
<option value="us">France, Metropolitan</option>
<option value="us">French Guiana</option>
<option value="us">French Polynesia</option>
<option value="us">French Southern Territories</option>
<option value="us">Gabon</option>
<option value="us">Georgia</option>
<option value="us">Germany</option>
<option value="ghana">Ghana</option>
<option value="us">Gibraltar</option>
<option value="us">Greece</option>
<option value="us">Greenland</option>
<option value="us">Grenada</option>
<option value="us">Guadeloupe</option>
<option value="us">Guam</option>
<option value="us">Guatemala</option>
<option value="us">Guinea</option>
<option value="us">Guinea-Bissau</option>
<option value="us">Guyana</option>
<option value="us">Haiti</option>
<option value="us">Heard and Mc Donald Islands</option>
<option value="us">Honduras</option>
<option value="us">Hong Kong</option>
<option value="us">Hungary</option>
<option value="us">Iceland</option>
<option value="kesh">India</option>
<option value="us">Indonesia</option>
<option value="us">Iran</option>
<option value="us">Iraq</option>
<option value="us">Ireland</option>
<option value="us">Israel</option>
<option value="us">Italy</option>
<option value="us">Jamaica</option>
<option value="us">Japan</option>
<option value="us">Jordan</option>
<option value="us">Kazakhstan</option>
<option value="kenya">Kenya</option>
<option value="us">Kiribati</option>
<option value="us">Kuwait</option>
<option value="us">Kyrgyzstan</option>
<option value="us">Laos</option>
<option value="us">Latvia</option>
<option value="us">Lebanon</option>
<option value="us">Lesotho</option>
<option value="us">Liberia</option>
<option value="us">Libya</option>
<option value="us">Liechtenstein</option>
<option value="us">Lithuania</option>
<option value="us">Luxembourg</option>
<option value="us">Macau</option>
<option value="us">Madagascar</option>
<option value="us">Malawi</option>
<option value="us">Malaysia</option>
<option value="us">Maldives</option>
<option value="us">Mali</option>
<option value="us">Malta</option>
<option value="us">Marshall Islands</option>
<option value="us">Martinique</option>
<option value="us">Mauritania</option>
<option value="us">Mauritius</option>
<option value="us">Mayotte</option>
<option value="us">Mexico</option>
<option value="us">Micronesia</option>
<option value="us">Moldova</option>
<option value="us">Monaco</option>
<option value="us">Mongolia</option>
<option value="us">Montenegro</option>
<option value="us">Montserrat</option>
<option value="us">Morocco</option>
<option value="kesh">Mozambique</option>
<option value="us">Myanmar</option>
<option value="us">Namibia</option>
<option value="us">Nauru</option>
<option value="us">Nepal</option>
<option value="us">Netherlands</option>
<option value="us">Netherlands Antilles</option>
<option value="us">New Caledonia</option>
<option value="us">New Zealand</option>
<option value="us">Nicaragua</option>
<option value="us">Niger</option>
<option value="nigeria">Nigeria</option>
<option value="us">Oman</option>
<option value="us">Pakistan</option>
<option value="us">Palau</option>
<option value="us">Palestine</option>
<option value="us">Panama</option>
<option value="us">Papua New Guinea</option>
<option value="us">Paraguay</option>
<option value="us">Peru</option>
<option value="us">Philippines</option>
<option value="us">Pitcairn Islands</option>
<option value="us">Poland</option>
<option value="us">Portugal</option>
<option value="us">Puerto Rico</option>
<option value="us">Qatar</option>
<option value="us">Reunion</option>
<option value="us">Romania</option>
<option value="us">Russia</option>
<option value="rwanda">Rwanda</option>
<option value="us">São Tomé and Príncipe</option>
<option value="us">Saint Helena</option>
<option value="us">St. Pierre and Miquelon</option>
<option value="us">Saint Kitts and Nevis</option>
<option value="us">Saint Lucia</option>
<option value="us">Saint Vincent and the Grenadines</option>
<option value="us">Samoa</option>
<option value="us">San Marino</option>
<option value="us">Saudi Arabia</option>
<option value="us">Senegal</option>
<option value="us">Serbia</option>
<option value="us">Seychelles</option>
<option value="us">Sierra Leone</option>roma
<option value="us">Singapore</option>
<option value="us">Slovakia</option>
<option value="us">Scotland</option>
<option value="us">Slovenia</option>
<option value="us">Solomon Islands</option>
<option value="us">Somalia</option>
<option value="us">South Africa</option>
<option value="us">South Georgia and the South Sandwich Islands</option>
<option value="us">South Korea</option>
<option value="us">Spain</option>
<option value="us">Sri Lanka</option>
<option value="kesh">Sudan</option>
<option value="us">Suriname</option>
<option value="us">Svalbard and Jan Mayen Islands</option>
<option value="us">Swaziland</option>
<option value="us">Sweden</option>
<option value="us">Switzerland</option>
<option value="us">Syria</option>
<option value="us">Taiwan</option>
<option value="us">Tajikistan</option>
<option value="tanzania">Tanzania</option>
<option value="us">Thailand</option>
<option value="us">The Bahamas</option>
<option value="us">The Gambia</option>
<option value="us">Togo</option>
<option value="us">Tokelau</option>
<option value="us">Tonga</option>
<option value="us">Trinidad and Tobago</option>
<option value="us">Tunisia</option>
<option value="us">Turkey</option>
<option value="us">Turkmenistan</option>
<option value="us">Turks and Caicos Islands</option>
<option value="us">Tuvalu</option>
<option value="us">US Virgin Islands</option>
<option value="uganda">Uganda</option>
<option value="us">Ukraine</option>
<option value="us">United Arab Emirates</option>
<option value="us">United Kingdom</option>
<option value="us">United States</option>
<option value="us">United States Minor Outlying Islands</option>
<option value="us">Uruguay</option>
<option value="us">Uzbekistan</option>
<option value="us">Vanuatu</option>
<option value="us">Vatican City</option>
<option value="us">Venezuela</option>
<option value="us">Vietnam</option>
<option value="us">Wallis and Futuna Islands</option>
<option value="us">Wales</option>
<option value="us">England</option>
<option value="us">Nothern ireland</option>
<option value="us">Western Sahara</option>
<option value="us">Yemen</option>
<option value="us">Zambia</option>
<option value="us">Zimbabwe</option>
</select><br>
<!-- <button type="submit" name="submit" class="btn btn-danger">Click to continue</button>-->
  </form><br><br>
                              <b style="color:red">Use International Format when paying with mobile money. E.g 2334545454545, 2343695218888, 25488878787787</b>
							</div>
                               <br><br>
                             <br><br>
                              
                            </div>
                      
                    </center>
 
                </div>  			   

        </div>
        <!-- Main content ends -->



        <!-- Container-fluid ends -->
    </div>
</div>


<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 9]>
      <div class="ie-warning">
          <h1>Warning!!</h1>
          <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
          <div class="iew-container">
              <ul class="iew-download">
                  <li>
                      <a href="https://www.google.com/chrome/">
                          <img src="assets/images/browser/chrome.png" alt="Chrome">
                          <div>Chrome</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.mozilla.org/en-US/firefox/new/">
                          <img src="assets/images/browser/firefox.png" alt="Firefox">
                          <div>Firefox</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.opera.com">
                          <img src="assets/images/browser/opera.png" alt="Opera">
                          <div>Opera</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.apple.com/safari/">
                          <img src="assets/images/browser/safari.png" alt="Safari">
                          <div>Safari</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://windows.microsoft.com/en-us/internet-explorer/download-ie">
                          <img src="assets/images/browser/ie.png" alt="">
                          <div>IE (9 & above)</div>
                      </a>
                  </li>
              </ul>
          </div>
          <p>Sorry for the inconvenience!</p>
      </div>
      <![endif]-->
<!-- Warning Section Ends -->

<!-- Required Jqurey -->
<script type="text/javascript" src="../bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="../bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../bower_components/popper.js/js/popper.min.js"></script>

<!-- Required Fremwork -->
<script type="text/javascript" src="../bower_components/bootstrap/js/bootstrap.min.js"></script>

<!-- waves effects.js -->
<script src="assets/plugins/waves/js/waves.min.js"></script>

<!-- Scrollbar JS-->
<script type="text/javascript" src="../bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.nicescroll/js/jquery.nicescroll.min.js"></script>


<!--classic JS-->
<script type="text/javascript" src="../bower_components/classie/js/classie.js"></script>

<!-- notification -->
<script src="assets/plugins/notification/js/bootstrap-growl.min.js"></script>

<!-- Sparkline charts -->
<script src="../bower_components/jquery-sparkline/js/jquery.sparkline.js"></script>

<!-- Counter js  -->
<script type="text/javascript" src="../bower_components/waypoints/js/jquery.waypoints.min.js"></script>
<script src="assets/plugins/countdown/js/jquery.counterup.js"></script>

<!-- custom js -->
<script type="text/javascript" src="assets/js/main.min.js"></script>
<script type="text/javascript" src="assets/pages/dashboard.js"></script>
<script type="text/javascript" src="assets/pages/elements.js"></script>
<script src="assets/js/menu.js"></script>


</body>

</html>
