<?php require_once 'config.php'; ?>
<?php 
	if(!empty($_POST)){
		try {
			$user_obj = new Cl_User();
			$data = $user_obj->forgetPassword( $_POST );
			if($data)$success = PASSWORD_RESET_SUCCESS;
		} catch (Exception $e) {
			$error = $e->getMessage();
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Reset Password</title>
	<!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="description" content="Phoenixcoded">
	<meta name="keywords"
		  content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
	<meta name="author" content="Phoenixcoded">

	<!-- Favicon icon -->
	<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
	

	<!-- Google font-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

	<!-- iconfont -->
	<link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

	<!-- Required Fremwork -->
	<link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/css/bootstrap.min.css">

	<!-- waves css -->
	<link rel="stylesheet" type="text/css" href="assets/plugins/waves/css/waves.min.css">

	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	  <link href="css/login.css" rel="stylesheet">
	<!-- Responsive.css-->
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
	<!--color css-->
	<link rel="stylesheet" type="text/css" href="assets/css/color/color-4.min.css" id="color"/>

</head>
<body>
 <?php
	if (isset($_POST["submit"])) {
	
		$result='<div class="alert alert-success">Your new password sent to your email. Check in 5 Minutes</div>';
	
	}

	
?>
	<section class="login p-fixed d-flex text-center bg-primary common-img-bg">
		<div class="container-fluid">
			<div class="row">
				   <div class="col-sm-12">
						<div class="login-card card-block">
							<form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="md-float-material" method="post" id="forgetpassword-form">
								<div class="text-center">
									<img src="assets/images/logowebreverse.png">
								</div>
								<h3 class="text-primary text-center m-b-25">Recover your password</h3>


							<?php echo $result; ?>
						<div class="md-group">
							<div class="md-input-wrapper">
								<input name="email" type="text" class="md-form-control" />
								<span class="help-block"></span>
								<label>Email</label>
							</div>
						</div>
						<div class="btn-forgot">
							<button type="submit" name="submit" class="btn btn-primary btn-md waves-effect waves-light text-center">RESET PASSWORD
							</button>
						</div>
							
									<div class=" text-center m-t-25">

										<a href="https://matchora.com/account/" class="f-w-600 p-l-5"> Sign In Here</a>

									</div>
							
						<!-- end of btn-forgot class-->
					</form>
					<!-- end of form -->
				</div>
				<!-- end of login-card -->
			</div>
			<!-- end of col-sm-12 -->
		</div>
		<!-- end of row -->
	</div>
	<!-- end of container-fluid -->
</section>
<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 9]>
<div class="ie-warning">
	<h1>Warning!!</h1>
	<p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
	<div class="iew-container">
		<ul class="iew-download">
			<li>
				<a href="http://www.google.com/chrome/">
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
				<a href="http://www.opera.com">
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
				<a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
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
<!-- tether.js -->
<script type="text/javascript" src="../bower_components/popper.js/js/popper.min.js"></script>
<!-- waves effects.js -->
<script src="assets/plugins/waves/js/waves.min.js"></script>
<!-- Required Framework -->
<script type="text/javascript" src="../bower_components/bootstrap/js/bootstrap.min.js"></script>

<!-- Custom js -->
<script type="text/javascript" src="assets/pages/elements.js"></script>
  <script src="js/jquery.validate.min.js"></script>
 <script src="js/forgetpassword.js"></script>
</body>
</html>
