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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115818226-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-115818226-1');
</script>
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
                <li class="active"><a href="dashboard"><i class="icon-speedometer"></i><span> Dashboard</span></a> </li>
               <li><a href=""><i class="icon-user-follow"></i><span> User Profile</span></a> </li>
			   <li><a href="select"><i class="icon-rocket"></i><span> Upgrade Account</span><span class="label label-warning menu-caption">PRO</span></a> </li>

               
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
            <!-- 4-blocks row start -->
            <div class="row m-b-30 dashboard-header">
                <div class="col-lg-3 col-sm-6">
                    <div class="dashboard-primary bg-primary">
                        <div class="sales-primary">
                            <i class="icon-bubbles"></i>
                            <div class="f-right">
                                <h2 class="counter"> <?php  echo $row ['user_id'];?></h2>
                                <span>USER ID</span>
                            </div>
                        </div>
                        <div class="bg-dark-primary">
                            <p class="week-sales">USER ID</p>
                            <p class="total-sales"></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="bg-success dashboard-success">
                        <div class="sales-success">
                            <i class="icon-speedometer"></i>
                            <div class="f-right">
                                <h2 class=""><?php							
				
		if ($row['account'] =="1")
			echo "FREE";
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
	
	
				?></h2>
                                <span>ACCOUNT STATUS</span>
                            </div>
                        </div>
                        <div class="bg-dark-success">
                            <p class="week-sales">ACCOUNT STATUS</p>
                            <p class="total-sales "></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="bg-warning dasboard-warning">
                        <div class="sales-warning">
                            <i class="icon-basket-loaded"></i>
                            <div class="f-right">
                                <h2 class=""><?php echo  $row ['expiry'];?></h2>
                                <span>Expiry Date</span>
                            </div>
                        </div>
                        <div class="bg-dark-warning">
                            <p class="week-sales">LAST PAYMENT</p>
                            <p class="total-sales"><?php echo $row ['LPaymentDate'];
				?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="bg-facebook dashboard-facebook">
                        <div class="sales-facebook">
                            <i class="icon-clock"></i>
                            <div class="f-right">
                                <h2 id="system-clock"></h2>

                            </div>
                        </div>
                        <div class="bg-dark-facebook">
                            <p class="week-sales">LOCAL TIME</p>
                            <p class="total-sales"></p>
                        </div>
                    </div>
                </div>

            </div>
            <!-- 4-blocks row end -->
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
background-color: #8B4DA5;
color: white;

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
            <!-- 1-3-block row start -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-sm-12 card">
                        <div class="card-block">
                            <center><h6 class="m-b-20">Free Predictions</h6></center>
                            <div id="website-stats" style="height: 0px; width: 0px"></div>
							<div class="col-md-12" style="text-align:center;">
							<div class="tableholder">
                <?php $date= date("Y-m-d");?>  
      <?php
	$mysqli = new mysqli('localhost', 'dindinda_match', 'BoxopusAquafeed!1', 'dindinda_matchora');
	if ($mysqli->connect_error){
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	
	
	$result = $mysqli->query ("SELECT match_id,score,league, game,time, betcode, odds_home, odds_draw, odds_away, featured, fulltimeprediction FROM `match` WHERE featured = 'yes' AND date ='$date'");
	
	
	$row= mysqli_num_rows($result);
	if ($row<1){
		
		
			echo "<center>". "<span class=\"blink_me\">We are still cooking this....</span>". "</center>";
	}	
	else {
	
	echo "<table>
	<tr>
	
	<th>League</th>
	<th>Match</th>
	<th>Prediction</th>
	<th>Scores</th>
    
	</tr>";
	//if ($result =mysqli_query ($con,$sql)){
		
	while ($pow = $result->fetch_assoc()){
		echo "<tr>";
		
		echo "<td>" .$pow ['league'] ."</td>";
		echo "<td>" . $pow['game']. "</td>";
		echo "<td>" . $pow ['fulltimeprediction'] . "</td>";
		echo "<td>".  $pow['score']."</td>";
       
		echo "</tr>";
        
       
	}
	
	}
	echo "</table>";
	echo "<table>";
	echo "<tr>";
		echo "<br>";
		
		
		echo "</tr>";
	echo "</table>";
	
	//$result->free();
	$mysqli->close();
	//mysqli_close($con);
	 ?>
       </div>
            </div>
                        </div>

                    </div>
					
					
					
					
					
                </div>
               
            </div>
            <!-- 1-3-block row end -->

			<br>
			<center><a href="select" class="btn btn-lg btn-success">UPGRADE ACCOUNT</a></center>
			<br>
           <div class="markets">
		    <p><b>Free</b></p>
		   <div class="row">
		   
		   <div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                    <a href="https://matchora.com/markets/1.5-goals/"><img src="assets/images/1.5-goals.png" alt="Over 1.5 Goals" class="img-responsive"></a>
                    
                      
                    </div>
					
					
		   
									
			<div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                    <a href="https://matchora.com/markets/4.5-goals/"><img src="assets/images/4.5-goals.png" alt="Double Chance" class="img-responsive"></a>
                    
                        
                    </div>
					
					
					
			<div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                  <a href="https://matchora.com/markets/full-time/"><img src="assets/images/full-time-result.png" alt="$10 - $10 Challenge" class="img-responsive"></a>
                    
                        
                    </div>
					
			<div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                    <a href="https://matchora.com/markets/match-of-the-day/"><img src="assets/images/match-of-the-day.png" alt="Tip of the day" class="img-responsive"></a>
                    
                        
                    </div>
		   
			
			
					
			
					
			</div>
			
			
            <div class="container-fluid">
               <div class="row-fluid">
                <div class="clearfix visible-lg visible-sm visible-md"></div>
               </div>
               
               </div>
			   <br>
			   <p><b>BASIC</b></p> 
			<div class="row">
                <div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                    <a href="https://matchora.com/markets/1.5-odds/"><img src="assets/images/1.5-odds.png" alt="Over 1.5 Goals" class="img-responsive"></a>
                    
                      
                    </div>
					
					
		   
									
			<div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                    <a href="https://matchora.com/markets/over-0.5-first-half/"><img src="assets/images/over-0.5-ht.png" alt="Double Chance" class="img-responsive"></a>
                    
                        
                    </div>
					
					
					
			<div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                  <a href="https://matchora.com/markets/under-1.5-first-half/"><img src="assets/images/under-1.5-ht.png" alt="$10 - $10 Challenge" class="img-responsive"></a>
                    
                        
                    </div>
					
			<div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                    <a href="https://matchora.com/markets/half-time/"><img src="assets/images/ht-results.png" alt="Tip of the day" class="img-responsive"></a>
                    
                        
                    </div>
				
				</div>
				<div class="container-fluid">
               <div class="row-fluid">
                <div class="clearfix visible-lg visible-sm visible-md"></div>
               </div>
               
               </div>
				<br>
				
               
			   <div class="container-fluid">
               <div class="row-fluid">
                <div class="clearfix visible-lg visible-sm visible-md"></div>
               </div>
               
               </div>
			   <br>
			   <p><b>ESSENTIAL</b></p> 
			<div class="row">
                <div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                    <a href="https://matchora.com/markets/2.00-odds/"><img src="assets/images/2.00-odds.png" alt="Over 1.5 Goals" class="img-responsive"></a>
                    
                      
                    </div>
					
					
		   
									
			<div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                    <a href="https://matchora.com/markets/3.00-odds/"><img src="assets/images/3.00-odds.png" alt="Double Chance" class="img-responsive"></a>
                    
                        
                    </div>
					
					
					
			<div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                  <a href="https://matchora.com/markets/2.5-goals/"><img src="assets/images/2.5-goals.png" alt="$10 - $10 Challenge" class="img-responsive"></a>
                    
                        
                    </div>
					
			<div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                    <a href="https://matchora.com/markets/3.5-goals/"><img src="assets/images/3.5-goals.png" alt="Tip of the day" class="img-responsive"></a>
                    
                        
                    </div>
				
				</div>
				<div class="container-fluid">
               <div class="row-fluid">
                <div class="clearfix visible-lg visible-sm visible-md"></div>
               </div>
               
               </div>
				<br>
			   
			   
				
				<div class="container-fluid">
               <div class="row-fluid">
                <div class="clearfix visible-lg visible-sm visible-md"></div>
               </div>
               
               </div>
				<br>
				<p><b>PRO</b></p> 
                <div class="row">
				
                <div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                    <a href="https://matchora.com/markets/5.00-odds/"><img src="assets/images/5.00-odds.png" alt="Over 1.5 Goals" class="img-responsive"></a>
                    
                      
                    </div>
					
					
		   
									
			<div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                    <a href="https://matchora.com/markets/10.00-odds/"><img src="assets/images/10.00-odds.png" alt="Double Chance" class="img-responsive"></a>
                    
                        
                    </div>
					
					
					
			<div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                  <a href="https://matchora.com/markets/btts/"><img src="assets/images/btts.png" alt="$10 - $10 Challenge" class="img-responsive"></a>
                    
                        
                    </div>
					
			<div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                    <a href="https://matchora.com/markets/accumulators/"><img src="assets/images/accumulators.png" alt="Tip of the day" class="img-responsive"></a>
                    
                        
                    </div>
                
			<div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                    <a href="https://matchora.com/markets/draws/"><img  src="assets/images/draws.png" alt="draws" class="img-responsive"></a>
                    
                        
                    </div>
                
				
			<div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                    <a href="https://matchora.com/markets/correct-score/"><img src="assets/images/correct-score.png" alt="correct score" class="img-responsive"></a>
                    
                        
                    </div>
					
					
			<div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                    <a href="https://matchora.com/markets/halftime-fulltime/"><img  src="assets/images/ht-ft.png" alt="Halftime-fulltime" class="img-responsive"></a>
                    
                        
                    </div>	
                
				

                
                </div>
				<br><br>
				
                	<div class="container-fluid">
               <div class="row-fluid">
                <div class="clearfix visible-lg visible-sm visible-md"></div>
               </div>
               
               </div>
				<br>
				<p><b>LEGENDARY PLANS</b></p> 
                <div class="row">
				
                <div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                    <a href="https://matchora.com/markets/vip-predictions/"><img src="assets/images/vip.png" alt="vip predictions" class="img-responsive"></a>
                    
                      
                    </div>
					
					
		   
									
			<div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                    <a href="https://matchora.com/markets/20-odds/"><img src="assets/images/20-odds.png" alt="Double Chance" class="img-responsive"></a>
                    
                        
                    </div>		
					
					
			
                
			
		
                
				

                
                </div>
				<br><br>          

						  
               <div class="container-fluid">
               <div class="row-fluid">
                <div class="clearfix visible-lg visible-sm visible-md"></div>
               </div>
               
               </div>  <br> <br><br>   
              
			
		  
               <div align="center" class="butthold" style="padding-top:20px;">
	               <br>
                   
                   
	            </div>
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
