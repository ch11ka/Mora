<?php 
ob_start();
ini_set('session.gc_maxlifetime', 3600);	//keep session active for 1 hour			
session_start();

if(!isset($_SESSION['logged_in'])){
	header('Location: ../power/index.php');
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
    <title>Add Match - Matchora</title>
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
        <a href="dashboard.php" class="logo"><img class="img-fluid able-logo" src="assets/images/logoweb.png" alt="Theme-logo"></a>
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
                    <p class="designation">ADMIN </p>
                </div>
            </div>
            
            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
                <li class="nav-level">Navigation</li>
                <li><a href="dashboard"><i class="icon-speedometer"></i><span> Dashboard</span></a> </li>
               <li class="active"><a href=""><i class="icon-calendar"></i><span> Add Match</span></a> </li>
			   <li><a href="selectfootballleague"><i class="icon-calendar"></i><span> Edit Match</span></a> </li>
			    <li><a href="upgrade"><i class="icon-rocket"></i><span> Upgrade Account</span></a> </li>
               <li><a href="export"><i class="icon-user-follow"></i><span> Export User</span></a> </li>
			   <li><a href=""><i class="icon-doc"></i><span> Report</span></a> </li>

                
                <!--<li class="nav-level">Components</li>
               <li><a href="dashboard.php"><i class="icon-speedometer"></i><span> Dashboard</span></a> </li>
               <li><a href=""><i class="icon-user-follow"></i><span> User Profile</span></a> </li>
			   <li><a href=""><i class="icon-rocket"></i><span> Upgrade Account</span><span class="label label-warning menu-caption">PRO</span></a> </li>            


                

                
                <li class="nav-level">More</li>

               <li><a href="dashboard.php"><i class="icon-speedometer"></i><span> Help & Support</span></a> </li>
               <li><a href=""><i class="icon-user-follow"></i><span> Terms & Conditions</span></a> </li>
			   <li><a href=".html"><i class="icon-rocket"></i><span> F.A.Qs</span><span class="label label-warning menu-caption">PRO</span></a> </li> -->  
                
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
           
            <!-- 4-blocks row end -->

            <!-- 1-3-block row start -->
            <div class="row">
                <div class="col-lg-9  col-md-8">
                    <div class="col-sm-12 card">
                        <div class="card-block">
                            <h6 class="m-b-20"></h6>
                            
							<div class="col-md-12">
               
			   
			     <form action="addfootballdata.php" method="post" class="form-horizontal">
    <div class="form-group">
        <label class="control-label col-lg-3 col-xs-2">Match</label>
        <div class="col-xs-10">
            <input type="text" class="form-control input-sm" name="game" placeholder="Match">
        </div>
    </div>
                                 
                                 
    <div class="form-group">
   <label class="col-sm-2 col-lg-3 control-label"> Featured Match?</label>
   <div class="col-sm-6">
   <label class="radio-inline">
   	<input type="radio" name="featured" value="yes"> Yes</label>
    <label class="radio-inline">
   	<input type="radio" name="featured" value="no" checked="CHECKED"> No</label>
    </div>
    </div>
	
	 <div class="form-group">
   <label class="col-sm-2 col-lg-3 control-label"> Tip Cabal?</label>
   <div class="col-sm-6">
   <label class="radio-inline">
   	<input type="radio" name="tipcabal" value="yes"> Yes</label>
    <label class="radio-inline">
   	<input type="radio" name="tipcabal" value="no" checked="CHECKED"> No</label>
    </div>
    </div>
                                 
    
                        
                                 

    <div class="form-group">
      <label class="col-sm-2 control-label">Date</label>
      <div class="col-sm-6">
         <input type="date" class="form-control" name="date" 
            placeholder="" min="1994-03-19">
      </div>
   </div>
                                 
    
   
                                 
   
                                 
                                 
    <div class="form-group">
   <label for="formaway" class="col-sm-2 control-label">League:</label>
   <div class="col-sm-6">
   <input type="text" class="form-control input-sm" name="league">
           
    </div>     
   </div>                             
  
                                 
    <div class="form-group">
   <label for="formaway" class="col-sm-2 col-lg-3 control-label">Full Time Prediction:</label>
   <div class="col-sm-6">
   <input type="text" class="form-control input-sm" name="fulltimeprediction">
           
    </div>     
   </div>                            
                               
       

	
	
	 <div class="form-group">
   <label class="col-sm-2 col-lg-3 control-label">Over 1.5 Goals</label>
   <div class="col-sm-6">
   <label class="radio-inline">
   	<input type="radio" name="onepointfivegoals" value="yes"> Yes</label>
    <label class="radio-inline">
   	<input type="radio" name="onepointfivegoals" value="no" checked="CHECKED"> No</label>
    </div>
    </div>
	
	
	 <div class="form-group">
   <label class="col-sm-2 col-lg-3 control-label">4.5 Goals</label>
   <div class="col-sm-6">
   <label class="radio-inline">
   	<input type="radio" name="fourpointfivegoals" value="yes"> Yes</label>
    <label class="radio-inline">
   	<input type="radio" name="fourpointfivegoals" value="no" checked="CHECKED"> No</label>
    </div>
    </div>
	
	
	 <div class="form-group">
   <label class="col-sm-2 col-lg-3 control-label">FT Result</label>
   <div class="col-sm-6">
   <label class="radio-inline">
   	<input type="radio" name="doublechance" value="yes"> Yes</label>
    <label class="radio-inline">
   	<input type="radio" name="doublechance" value="no" checked="CHECKED"> No</label>
    </div>
    </div>

	<div class="form-group">
        <label class="control-label col-lg-3 col-xs-2">FT Prediction</label>
        <div class="col-xs-10">
            <input type="text" class="form-control input-sm" name="doublechanceprediction" placeholder="E.g 1X">
        </div>
    </div>
	
	
	<div class="form-group">
   <label class="col-sm-2 col-lg-3 control-label">Match of the Day</label>
   <div class="col-sm-6">
   <label class="radio-inline">
   	<input type="radio" name="tipoftheday" value="yes"> Yes</label>
    <label class="radio-inline">
   	<input type="radio" name="tipoftheday" value="no" checked="CHECKED"> No</label>
    </div>
    </div>

	<div class="form-group">
        <label class="control-label col-lg-3 col-xs-2">Match of Day Prediction</label>
        <div class="col-xs-10">
            <input type="text" class="form-control input-sm" name="tipofthedayprediction" placeholder="E.g 1X">
        </div>
    </div>
	
	
	<div class="form-group">
   <label class="col-sm-2 col-lg-3 control-label"> 1.5 Odds</label>
   <div class="col-sm-6">
   <label class="radio-inline">
   	<input type="radio" name="onepointfiveodds" value="yes"> Yes</label>
    <label class="radio-inline">
   	<input type="radio" name="onepointfiveodds" value="no" checked="CHECKED"> No</label>
    </div>
    </div>
                                 
     <div class="form-group">
        <label class="control-label col-xs-2">1.5 Odds Prediction</label>
        <div class="col-xs-10">
            <input type="text" class="form-control input-sm" name="onepointfiveoddsprediction" placeholder="E.g 1X">
        </div>
    </div>
                                 
   
	
	<div class="form-group">
   <label class="col-sm-2 control-label"> 2 Odds</label>
   <div class="col-sm-6">   
   <label class="radio-inline" >
   	<input type="radio" name="twoodds"  value="yes"> Yes</label>
    <label class="radio-inline" >
    <input type="radio" name="twoodds"  value="no" checked="CHECKED"> No</label>
    </div>
    </div>
	
	 <div class="form-group">
        <label class="control-label col-xs-2">2 Odds Prediction</label>
        <div class="col-xs-10">
            <input type="text" class="form-control input-sm" name="twooddsprediction" placeholder="E.g 1X">
        </div>
    </div>
	
	
    
    <div class="form-group">
   <label class="col-sm-2 col-lg-3 control-label" for="fs5"> First Set of 2 Odds</label>
   <div class="col-sm-10">
   <label class="radio-inline">
   	<input type="radio" name="FS2" value="yes"> Yes</label>
    <label class="radio-inline">
   	<input type="radio" name="FS2" value="no" checked="CHECKED"> No</label>
    </div>
    </div>  
   
    
    
    
    <div class="form-group">
      <label for="tfs5" class="col-sm-2 col-lg-3 control-label">Total Odds FS2</label>
      <div class="col-sm-10">
         <input type="text" class="form-control" 
            placeholder="First Set" name="FS2_result">
      </div>
   </div>
    
  
                                 
                                 
                                 
                        
<div class="form-group">
   <label class="col-sm-2 col-lg-3 control-label"> 3 Odds</label>
   <div class="col-sm-6">   
   <label class="radio-inline" >
   	<input type="radio" name="threeodds"  value="yes"> Yes</label>
    <label class="radio-inline" >
    <input type="radio" name="threeodds"  value="no" checked="CHECKED"> No</label>
    </div>
    </div>
	
	
	 <div class="form-group">
        <label class="control-label col-lg-3 col-xs-2">3 Odds Prediction</label>
        <div class="col-xs-10">
            <input type="text" class="form-control input-sm" name="threeoddsprediction" placeholder="E.g 1X">
        </div>
    </div>
	
	
    
    <div class="form-group">
   <label class="col-sm-2 col-lg-3 control-label" for="fs5"> First Set of 3 Odds</label>
   <div class="col-sm-10">
   <label class="radio-inline">
   	<input type="radio" name="FS3" value="yes"> Yes</label>
    <label class="radio-inline">
   	<input type="radio" name="FS3" value="no" checked="CHECKED"> No</label>
    </div>
    </div>
    
   
    
    
    
    <div class="form-group">
      <label for="tfs5" class="col-sm-2 control-label">Total Odds FS3</label>
      <div class="col-sm-10">
         <input type="text" class="form-control" 
            placeholder="First Set" name="FS3_result">
      </div>
   </div>
   
   
   
   <div class="form-group">
   <label class="col-sm-2 col-lg-3 control-label"> 5 Odds</label>
   <div class="col-sm-6">   
   <label class="radio-inline">
   	<input type="radio" name="fiveodds"  value="yes"> Yes</label>
    <label class="radio-inline" >
    <input type="radio" name="fiveodds"  value="no" checked="CHECKED"> No</label>
    </div>
    </div>
	
	
	 <div class="form-group">
        <label class="control-label col-xs-2">5 Odds Prediction</label>
        <div class="col-xs-10">
            <input type="text" class="form-control input-sm" name="fiveoddsprediction" placeholder="E.g 1X">
        </div>
    </div>
	
	
    
    <div class="form-group">
   <label class="col-sm-2 col-lg-3 control-label" for="fs5"> First Set of 5 Odds</label>
   <div class="col-sm-10">
   <label class="radio-inline">
   	<input type="radio" name="FS5" value="yes"> Yes</label>
    <label class="radio-inline">
   	<input type="radio" name="FS5" value="no" checked="CHECKED"> No</label>
    </div>
    </div> 
    
    <div class="form-group">
      <label for="tfs5" class="col-sm-2 control-label">Total Odds FS5</label>
      <div class="col-sm-10">
         <input type="text" class="form-control" 
            placeholder="First Set" name="FS5_result">
      </div>
   </div>
   
   
   
   
   
   <div class="form-group">
   <label class="col-sm-2 col-lg-3 control-label"> 10 Odds</label>
   <div class="col-sm-6">   
   <label class="radio-inline">
   	<input type="radio" name="tenodds"  value="yes"> Yes</label>
    <label class="radio-inline" >
    <input type="radio" name="tenodds"  value="no" checked="CHECKED"> No</label>
    </div>
    </div>
	
	
	 <div class="form-group">
        <label class="control-label col-xs-2">10 Odds Prediction</label>
        <div class="col-xs-10">
            <input type="text" class="form-control input-sm" name="tenoddsprediction" placeholder="E.g 1X">
        </div>
    </div>
	
	
    
    <div class="form-group">
   <label class="col-sm-2 col-lg-3 control-label" for="fs5"> First Set of 10 Odds</label>
   <div class="col-sm-10">
   <label class="radio-inline">
   	<input type="radio" name="FS10" value="yes"> Yes</label>
    <label class="radio-inline">
   	<input type="radio" name="FS10" value="no" checked="CHECKED"> No</label>
    </div>
    </div>
    
   
    
    
    
    <div class="form-group">
      <label for="tfs5" class="col-sm-2 control-label">Total Odds FS10</label>
      <div class="col-sm-10">
         <input type="text" class="form-control" 
            placeholder="First Set" name="FS10_result">
      </div>
   </div>
   
    
	<div class="form-group">
   <label class="col-sm-2 control-label"> Half Time Results</label>
   <div class="col-sm-10">
   <label class="radio-inline">
   	<input type="radio" name="firsthalfdraws" value="yes"> Yes</label>
    <label class="radio-inline">
   	<input type="radio" name="firsthalfdraws" value="no" checked="CHECKED"> No</label>
    </div>
    </div>                              
    
     <div class="form-group">
        <label class="control-label col-xs-2">half Time prediction</label>
        <div class="col-xs-10">
            <select class="form-control" name="firsthalfprediction">
   	<option value=""></option>
    <option value="HOME">HOME WIN</option>
    <option value="AWAY">AWAY WIN</option>    
    <option value="DRAW">DRAW</option>  
    </select>
        </div>
    </div>      
	
	
	<div class="form-group">
   <label class="col-sm-2 control-label">Over 0.5 FH</label>
   <div class="col-sm-6">
   <label class="radio-inline">
   	<input type="radio" name="over_0_5_firsthalf" value="yes"> Yes</label>
    <label class="radio-inline">
   	<input type="radio" name="over_0_5_firsthalf" value="no" checked="CHECKED"> No</label>
    </div>
    </div>
	
	
	<div class="form-group">
   <label class="col-sm-2 control-label">Under 1.5 FH</label>
   <div class="col-sm-6">
   <label class="radio-inline">
   	<input type="radio" name="under_1_5_firsthalf" value="yes"> Yes</label>
    <label class="radio-inline">
   	<input type="radio" name="under_1_5_firsthalf" value="no" checked="CHECKED"> No</label>
    </div>
    </div>
    
    

	<div class="form-group">
   <label class="col-sm-2 control-label">Btts</label>
   <div class="col-sm-6">
   <label class="radio-inline">
   	<input type="radio" name="btts" value="yes"> Yes</label>
    <label class="radio-inline">
   	<input type="radio" name="btts" value="no" checked="CHECKED"> No</label>
    </div>
    </div>

	<div class="form-group">
      <label for="formaway" class="col-sm-2 control-label">Btts Prediction</label>
      <div class="col-sm-10">
        <select class="form-control" name="bttsprediction">
   	<option value=""></option>
    <option value="YES">YES</option>
    <option value="NO">NO</option>    
    
    </select>
      </div>
   </div>
	
	
	   
   
   <div class="form-group">
   <label class="col-sm-2 control-label">Under 2.5 </label>
   <div class="col-sm-6">
   <label class="radio-inline">
   	<input type="radio" name="under2_5goals" value="yes"> Yes</label>
    <label class="radio-inline">
   	<input type="radio" name="under2_5goals" value="no" checked="CHECKED"> No</label>
    </div>
    </div>
	
	 <div class="form-group">
   <label class="col-sm-2 control-label">Over 2.5 </label>
   <div class="col-sm-6">
   <label class="radio-inline">
   	<input type="radio" name="over2_5goals" value="yes"> Yes</label>
    <label class="radio-inline">
   	<input type="radio" name="over2_5goals" value="no" checked="CHECKED"> No</label>
    </div>
    </div>
	
	 <div class="form-group">
   <label class="col-sm-2 control-label">Under 3.5 </label>
   <div class="col-sm-6">
   <label class="radio-inline">
   	<input type="radio" name="under3_5goals" value="yes"> Yes</label>
    <label class="radio-inline">
   	<input type="radio" name="under3_5goals" value="no" checked="CHECKED"> No</label>
    </div>
    </div>
	
	 <div class="form-group">
   <label class="col-sm-2 control-label">Over 3.5 </label>
   <div class="col-sm-6">
   <label class="radio-inline">
   	<input type="radio" name="over3_5goals" value="yes"> Yes</label>
    <label class="radio-inline">
   	<input type="radio" name="over3_5goals" value="no" checked="CHECKED"> No</label>
    </div>
    </div>
   
   
   
	<!-- <div class="form-group">
   <label class="col-sm-2 control-label">Draws </label>
   <div class="col-sm-6">
   <label class="radio-inline">
   	<input type="radio" name="draws" value="yes"> Yes</label>
    <label class="radio-inline">
   	<input type="radio" name="draws" value="no" checked="CHECKED"> No</label>
    </div>
    </div>-->
	 
		
	
	<div class="form-group">
   <label class="col-sm-2 col-lg-3 control-label"> Accumulator</label>
   <div class="col-sm-6">
   <label class="radio-inline">
   	<input type="radio" name="accumulator" value="yes"> Yes</label>
    <label class="radio-inline">
   	<input type="radio" name="weekend" value="no" checked="CHECKED"> No</label>
    </div>
    </div>

	<div class="form-group">
        <label class="control-label col-xs-2">Accumulator Prediction</label>
        <div class="col-xs-10">
            <input type="text" class="form-control input-sm" name="accumulatorprediction" placeholder="E.g OVER 9.5">
        </div>
    </div>
	
	<div class="form-group">
   <label class="col-sm-2 control-label">VIP</label>
   <div class="col-sm-6">
   <label class="radio-inline">
   	<input type="radio" name="vip" value="yes"> Yes</label>
    <label class="radio-inline">
   	<input type="radio" name="vip" value="no" checked="CHECKED"> No</label>
    </div>
    </div>

	<div class="form-group">
      <label for="formaway" class="col-sm-2 control-label"> Prediction</label>
      <div class="col-sm-10">
        <select class="form-control" name="vipprediction">
   	<option value=""></option>
    <option value="YES">YES</option>
    <option value="NO">NO</option>    
    
    </select>
      </div>
   </div>
   
   
   
   <div class="form-group">
   <label class="col-sm-2 control-label">20 Odds</label>
   <div class="col-sm-6">
   <label class="radio-inline">
   	<input type="radio" name="twentyodds" value="yes"> Yes</label>
    <label class="radio-inline">
   	<input type="radio" name="twentyodds" value="no" checked="CHECKED"> No</label>
    </div>
    </div>

	<div class="form-group">
      <label for="formaway" class="col-sm-2 control-label">20 Odds Prediction</label>
      <div class="col-sm-10">
        <select class="form-control" name="twentyoddsprediction">
   	<option value=""></option>
    <option value="YES">YES</option>
    <option value="NO">NO</option>    
    
    </select>
      </div>
   </div>
	
	 <div class="form-group">
   <label class="col-sm-2 col-lg-3 control-label">Draws</label>
   <div class="col-sm-6">
   <label class="radio-inline">
   	<input type="radio" name="draws" value="yes"> Yes</label>
    <label class="radio-inline">
   	<input type="radio" name="draws" value="no" checked="CHECKED"> No</label>
    </div>
    </div>
              



	
	<div class="form-group">
   <label class="col-sm-2 col-lg-3 control-label">Correct Score</label>
   <div class="col-sm-6">
   <label class="radio-inline">
   	<input type="radio" name="correctscore" value="yes"> Yes</label>
    <label class="radio-inline">
   	<input type="radio" name="correctscore" value="no" checked="CHECKED"> No</label>
    </div>
    </div>

	<div class="form-group">
        <label class="control-label col-xs-2">Correct Score Prediction</label>
        <div class="col-xs-10">
            <input type="text" class="form-control input-sm" name="correctscoreprediction" placeholder="E.g OVER 9.5">
        </div>
    </div>
	
	
	
	<div class="form-group">
   <label class="col-sm-2 col-lg-3 control-label"> HT/FT</label>
   <div class="col-sm-6">
   <label class="radio-inline">
   	<input type="radio" name="htft" value="yes"> Yes</label>
    <label class="radio-inline">
   	<input type="radio" name="htft" value="no" checked="CHECKED"> No</label>
    </div>
    </div>

	<div class="form-group">
        <label class="control-label col-xs-2">HTFT Prediction</label>
        <div class="col-xs-10">
            <input type="text" class="form-control input-sm" name="htftprediction" placeholder="E.g OVER 9.5">
        </div>
    </div>
	

    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            <button type="submit" name="submit" class="btn btn-primary">Add</button>
        </div>
    </div>
</form>
       
            </div>
                        </div>

                    </div>
					
					
					
					
					
                </div>
             
            </div>
            <!-- 1-3-block row end -->

           <!--<div class="markets">
		    <p><b>Free</b></p>
		   <div class="row">
		   
		   <div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                    <a href=""><img src="assets/images/1.5-goals.png" alt="Over 1.5 Goals" class="img-responsive"></a>
                    
                      
                    </div>
					
					
		   
									
			<div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                    <a href=""><img src="assets/images/4.5-goals.png" alt="Double Chance" class="img-responsive"></a>
                    
                        
                    </div>
					
					
					
			<div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                  <a href=""><img src="assets/images/full-time-result.png" alt="$10 - $10 Challenge" class="img-responsive"></a>
                    
                        
                    </div>
					
			<div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                    <a href=""><img src="assets/images/match-of-the-day.png" alt="Tip of the day" class="img-responsive"></a>
                    
                        
                    </div>
		   
			
			
					
			
					
			</div>
			
			
            <div class="container-fluid">
               <div class="row-fluid">
                <div class="clearfix visible-lg visible-sm visible-md"></div>
               </div>
               
               </div>
			   <br>
			   <p><b>BASIC<b></p> 
			<div class="row">
                <div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                    <a href=""><img src="assets/images/1.5-odds.png" alt="Over 1.5 Goals" class="img-responsive"></a>
                    
                      
                    </div>
					
					
		   
									
			<div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                    <a href=""><img src="assets/images/over-0.5-ht.png" alt="Double Chance" class="img-responsive"></a>
                    
                        
                    </div>
					
					
					
			<div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                  <a href=""><img src="assets/images/under-1.5-ht.png" alt="$10 - $10 Challenge" class="img-responsive"></a>
                    
                        
                    </div>
					
			<div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                    <a href=""><img src="assets/images/ht-results.png" alt="Tip of the day" class="img-responsive"></a>
                    
                        
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
			   <p><b>ESSENTIAL<b></p> 
			<div class="row">
                <div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                    <a href=""><img src="assets/images/2.00-odds.png" alt="Over 1.5 Goals" class="img-responsive"></a>
                    
                      
                    </div>
					
					
		   
									
			<div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                    <a href=""><img src="assets/images/3.00-odds.png" alt="Double Chance" class="img-responsive"></a>
                    
                        
                    </div>
					
					
					
			<div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                  <a href=""><img src="assets/images/2.5-goals.png" alt="$10 - $10 Challenge" class="img-responsive"></a>
                    
                        
                    </div>
					
			<div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                    <a href=""><img src="assets/images/3.5-goals.png" alt="Tip of the day" class="img-responsive"></a>
                    
                        
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
				<p></b>PRO</b></p> 
                <div class="row">
				
                <div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                    <a href=""><img src="assets/images/5.00-odds.png" alt="Over 1.5 Goals" class="img-responsive"></a>
                    
                      
                    </div>
					
					
		   
									
			<div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                    <a href=""><img src="assets/images/10.00-odds.png" alt="Double Chance" class="img-responsive"></a>
                    
                        
                    </div>
					
					
					
			<div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                  <a href=""><img src="assets/images/btts.png" alt="$10 - $10 Challenge" class="img-responsive"></a>
                    
                        
                    </div>
					
			<div class="col-lg-3 col-md-3  col-sm-3 col-xs-6" style="padding-top:15px;">
                    <a href=""><img src="assets/images/accumulators.png" alt="Tip of the day" class="img-responsive"></a>
                    
                        
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
           </div>-->
		   
		   

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
