<?php 
ob_start();
ini_set('session.gc_maxlifetime', 2592000);	//keep session active for 30 days			
session_start();
require_once 'config.php'; 
?>



<?php 
	if( !empty( $_POST )){
		try {
			$user_obj = new Cl_User();
			$data = $user_obj->login( $_POST );
			if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
				header('Location: ../account/index.php');
			}
		} catch (Exception $e) {
			$error = $e->getMessage();
		}
	}
	//print_r($_SESSION);
	if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
		header('Location: ../account/index.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tipena -Login</title>
	<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-96211864-1', 'auto');
  ga('send', 'pageview');

</script>
  </head>
  <body style="background-color:#E6E6FA">
 
  
      
      
      
	<div class="container">
		<?php require_once 'templates/ads.php';?>
		<div class="login-form">
			<?php require_once 'templates/message.php';?>
			<h1 class="text-center">Sign in to Tipena </h1><br>
			<div class="form-header">
					<!--<center><a href="https://betloy.com"><img src="../images/.png" alt="betloy logo" class="img-responsive"></a></center>--> 
			</div>
			<form id="login-form" method="post" class="form-signin" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <label>Email Address</label>
				<input name="email" id="email" type="email" class="form-control cleanup"  autofocus> 
                <label>Password</label>
				<input name="password" id="password" type="password" class="form-control cleanup" > 
				<a href="forget_password.php"> Forgot password? </a><br><br>
				<button class="btn btn-block bt-login" type="submit">Sign in</button>
			</form>
			<div class="form-footer">
				<div class="row">
					
					
					<div class="col-xs-12 col-sm-12 col-md-12">
						
						<a href="register.php"> Create an account</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /container -->
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/login.js"></script>
	
	<script>
	(function($) {
    $(document).ready(function() {
        $('input.cleanup').blur(function() {
            var value = $.trim( $(this).val() );
            $(this).val( value );
        });
    });
})(jQuery);
	
	</script>
  </body>
</html>
<?php ob_end_flush(); ?>
