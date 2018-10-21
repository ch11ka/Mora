<?php

class Cl_User
{
	/**
	 * @var will going contain database connection
	 */
	protected $_con;
	
	/**
	 * it will initalize DBclass
	 */
	public function __construct()
	{
		$db = new Cl_DBclass();
		$this->_con = $db->con;
	}
	
	/**
	 * this will handles user registration process
	 * @param array $data
	 * @return boolean true or false based success 
	 */
	public function registration( array $data )
	{
		if( !empty( $data ) ){
			
			// Trim all the incoming data:
			$trimmed_data = array_map('trim', $data);
			
			
			
			// escape variables for security
			$name = mysqli_real_escape_string( $this->_con, $trimmed_data['name'] );
			$password = mysqli_real_escape_string( $this->_con, $trimmed_data['password'] );
			
            $number = mysqli_real_escape_string( $this->_con, $trimmed_data['number'] );
            $country = mysqli_real_escape_string( $this->_con, $trimmed_data['country'] );
			
			
			// Check for an email address:
			if (filter_var( $trimmed_data['email'], FILTER_VALIDATE_EMAIL)) {
				$email = mysqli_real_escape_string( $this->_con, $trimmed_data['email']);
			} else {
				throw new Exception( "Please enter a valid email address!" );
			}
			
			
			if((!$name) || (!$email) || (!$password)  ) {
				throw new Exception( FIELDS_MISSING );
			}
			
			$password = md5( $password );
            
			$hash = md5( rand(0,1000) );
			$query = "INSERT INTO users (user_id, name, email, password,hash,number,country) VALUES (NULL, '$name', '$email', '$password','$hash','$number', '$country')";   
            
            
            
            
            
            
            
			
			
			/* $to      = $email; // Send email to our user
						$subject = 'Thanks for Signing Up on to matchora!'; // Give the email a subject 
				$message = "<div style=\"background:#f2f2f2;margin:0 auto;max-width:640px;padding:0 20px\">
	<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
		<tbody>
		<tr>
			<td> </td>
		</tr>
		<tr>
			<td>
				<div style=\"width:96%;margin:auto;padding:5px 0 0px 0;text-align:center\">
					<img src=\"https://matchora.com/assets/images/logowebreverse.png\" width=\"100\" alt=\"Matchora\">
				</div>
				<div style=\"text-align: center;background-color: #9B33AF;color: #Fff;font-family:'Open Sans', sans-serif;font-size:13px; padding: 1px;margin-top: 10px;border-radius:10px 10px 0 0;\">
					<h2>Sign up</h2>
				</div>
				<div style=\"background:#fff;color:#5b5b5b;font-family:'Open Sans', sans-serif;font-size:13px;padding:10px 20px;margin:20px auto;line-height:17px;border:1px #ddd solid;border-top:0;clear:both;margin-top: 0;border-radius: 0 0 10px 10px;\">
					<p>Greetings from Matchora Team</p>
					
					<p>Thank you for registering.</p>
					<p>We hope to help you win more bets</p>

					<div style=\"text-align:center;margin:15px\"> <a href=\"https://matchora.com/account/\" style=\"display:inline-block; padding: 10px;background-color: #9B33AF;font-size: 15px;color: #fff;border-radius: 5px;text-decoration:none;\">Login Now</a> </div>

				</div>
				<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
					<tbody>
					<tr>
						
					</tr>
					<tr>
						<td align=\"center\">
							<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100\">
								<tbody>
								<tr>
									
								</tr>
								</tbody>
							</table>
						</td>
					</tr>
					<tr>
						<td height=\"35\"> </td>
					</tr>
					<tr>
						<td>
							<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
								<tbody>
								<tr>
									<td style=\"font-family:'Open Sans',Arial,sans-serif;font-size:12px;padding-bottom: 10px;text-align: center;\"> if you have any issue, feel free to contact us at <a href=\"mailto:suport@matchora.com\" style=\"color:#000;font-weight:bold;text-decoration:none\" target=\"_blank\"> support@matchora.com </a> .
									</td>
								</tr>
								</tbody>
							</table>
						</td>
					</tr>
					</tbody>
				</table></td>
		</tr>
		</tbody>
	</table>
</div>
"; // Our message above including the link    
$from = 'Matchora <noreply@matchora.com>';                 
$headers = "From: " .($from) . "\r\n"; // Set from headers
$headers .= "Reply-To: ".($from) . "\r\n";
$headers .= "Return-Path: ".($from) . "\r\n";;
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

mail($to, $subject, $message, $headers); // Send our email

 */










			
			if(mysqli_query($this->_con, $query)){
				
				require("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "smtp.mailgun.org";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "postmaster@mg.matchora.com";  // SMTP username
$mail->Password = "470896c1e1c79c44a35b58db69b45cab"; // SMTP password
$mail->SMTPSecure = 'tls'; 

$mail->From = "noreply@matchora.com";
$mail->FromName = "Matchora";
$mail->AddAddress($email);                  // name is optional
$mail->AddReplyTo("noreply@matchora.com");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Guaranteed Predictions From Matchora!";
$mail->Body    = "<div style=\"background:#f2f2f2;margin:0 auto;max-width:640px;padding:0 20px\">
	<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
		<tbody>
		<tr>
			<td> </td>
		</tr>
		<tr>
			<td>
				<div style=\"width:96%;margin:auto;padding:5px 0 0px 0;text-align:center\">
					<img src=\"https://matchora.com/assets/images/logowebreverse.png\" width=\"100\" alt=\"Matchora\">
				</div>
				<div style=\"text-align: center;background-color: #9B33AF;color: #Fff;font-family:'Open Sans', sans-serif;font-size:13px; padding: 1px;margin-top: 10px;border-radius:10px 10px 0 0;\">
					<h2>Sign up</h2>
				</div>
				<div style=\"background:#fff;color:#5b5b5b;font-family:'Open Sans', sans-serif;font-size:13px;padding:10px 20px;margin:20px auto;line-height:17px;border:1px #ddd solid;border-top:0;clear:both;margin-top: 0;border-radius: 0 0 10px 10px;\">
					<p>Greetings from Matchora Team</p>
					
					<p>Thank you for registering!</p><br>
					<p>For serious users who are interested in sure predictions, reach us on Whatsapp +2348105354705</p><br>
					
					<p>You can also play the free predictions on the site if you seek free ones.</p>

					<div style=\"text-align:center;margin:15px\"> <a href=\"https://matchora.com/account/\" style=\"display:inline-block; padding: 10px;background-color: #9B33AF;font-size: 15px;color: #fff;border-radius: 5px;text-decoration:none;\">Login Now</a> </div>

				</div>
				<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
					<tbody>
					<tr>
						
					</tr>
					<tr>
						<td align=\"center\">
							<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100\">
								<tbody>
								<tr>
									
								</tr>
								</tbody>
							</table>
						</td>
					</tr>
					<tr>
						<td height=\"35\"> </td>
					</tr>
					<tr>
						<td>
							<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
								<tbody>
								<tr>
									<td style=\"font-family:'Open Sans',Arial,sans-serif;font-size:12px;padding-bottom: 10px;text-align: center;\"> if you have any issue, feel free to contact us at <a href=\"mailto:suport@matchora.com\" style=\"color:#000;font-weight:bold;text-decoration:none\" target=\"_blank\"> support@matchora.com </a> .
									</td>
								</tr>
								</tbody>
							</table>
						</td>
					</tr>
					</tbody>
				</table></td>
		</tr>
		</tbody>
	</table>
</div>";
$mail->AltBody = "Thank you for signing up on Matchora";

if(!$mail->Send())
{
   return "Message could not be sent. <p>";
   return "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

return "Message has been sent";
            
				
				
				mysqli_close($this->_con);
				return true;
			};
		} else{
			throw new Exception( USER_REGISTRATION_FAIL );
		}
	}
	/**
	 * This method will handle user login process
	 * @param array $data
	 * @return boolean true or false based on success or failure
	 */
	public function login( array $data )
	{
		$_SESSION['logged_in'] = false;
		if( !empty( $data ) ){
			
			// Trim all the incoming data:
			$trimmed_data = array_map('trim', $data);
			
			// escape variables for security
			$email = trim (mysqli_real_escape_string( $this->_con,  $trimmed_data['email'] ));
			$password = trim(mysqli_real_escape_string( $this->_con,  $trimmed_data['password'] ));
				
			if((!$email) || (!$password) ) {
				throw new Exception( LOGIN_FIELDS_MISSING );
			}
			$password = md5( $password );
			$query = "SELECT user_id, name, email FROM users where email = '$email' and password = '$password' "; // and active='1'
			$result = mysqli_query($this->_con, $query);
			$data = mysqli_fetch_assoc($result);
			$count = mysqli_num_rows($result);
			mysqli_close($this->_con);
			if( $count == 1){
				$_SESSION = $data;
				$_SESSION['logged_in'] = true;
				return true;
			}else{
				throw new Exception( LOGIN_FAIL );
			}
		} else{
			throw new Exception( LOGIN_FIELDS_MISSING );
		}
	}
	
	/**
	 * This will shows account information and handles password change
	 * @param array $data
	 * @throws Exception
	 * @return boolean
	 */
	
	public function account( array $data )
	{
		if( !empty( $data ) ){
			// Trim all the incoming data:
			$trimmed_data = array_map('trim', $data);
			
			// escape variables for security
			$password = mysqli_real_escape_string( $this->_con, $trimmed_data['password'] );
			$cpassword = $trimmed_data['confirm_password'];
			$user_id = mysqli_real_escape_string( $this->_con, $trimmed_data['user_id'] );
			
			if((!$password) || (!$cpassword) ) {
				throw new Exception( FIELDS_MISSING );
			}
			if ($password !== $cpassword) {
				throw new Exception( PASSWORD_NOT_MATCH );
			}
			$password = md5( $password );
			$query = "UPDATE users SET password = '$password' WHERE user_id = $user_id";
			if(mysqli_query($this->_con, $query)){
				mysqli_close($this->_con);
				return true;
			}
		} else{
			throw new Exception( FIELDS_MISSING );
		}
	}
	
	/**
	 * This handle sign out process
	 */
	public function logout()
	{
		session_unset();
		session_destroy();
		header('Location: https://matchora.com/account/');
	}
	
	/**
	 * This reset the current password and send new password to mail
	 * @param array $data
	 * @throws Exception
	 * @return boolean
	 */
	public function forgetPassword( array $data )
	{
		if( !empty( $data ) ){
			
			// escape variables for security
			$email = mysqli_real_escape_string( $this->_con, trim( $data['email'] ) );
			
			if((!$email) ) {
				throw new Exception( FIELDS_MISSING );
			}
			$password = $this->randomPassword();
			$password1 = md5( $password );
			$query = "UPDATE users SET password = '$password1' WHERE email = '$email'";
			if(mysqli_query($this->_con, $query)){
				
				 require("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "smtp.mailgun.org";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "postmaster@mg.matchora.com";  // SMTP username
$mail->Password = "470896c1e1c79c44a35b58db69b45cab"; // SMTP password
$mail->SMTPSecure = 'tls'; 

$mail->From = "noreply@matchora.com";
$mail->FromName = "Matchora";
$mail->AddAddress($email);                  // name is optional
$mail->AddReplyTo("noreply@matchora.com");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Your New Password!";
$mail->Body    = "<div style=\"background:#f2f2f2;margin:0 auto;max-width:750px;padding:0 20px\">
	<table width=\"100%\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
		<tbody>
		<tr>
			<td> </td>
		</tr>
		<tr>
			<td>
				<div style=\"width:96%;margin:auto;padding:5px 0 0px 0;text-align:center\">
					<img src=\"https://matchora.com/assets/images/logowebreverse.png\" width=\"100\" alt=\"Matchora\">
				</div>
				<div style=\"text-align: center;background-color: #9B33AF;color: #Fff;font-family:'Open Sans', sans-serif;font-size:13px; padding: 1px;margin-top: 10px;border-radius:10px 10px 0 0;\">
					<h2>New Password</h2>
				</div>
				<div style=\"background:#fff;color:#5b5b5b;font-family:'Open Sans', sans-serif;font-size:13px;padding:10px 20px;margin:20px auto;line-height:17px;border:1px #ddd solid;border-top:0;clear:both;margin-top: 0;border-radius: 0 0 10px 10px;\">
					<p>Your new password:</p>
					
					<p></p>
					<p><b>$password<b></p>

					<div style=\"text-align:center;margin:15px\"> <a href=\"https://matchora.com/account/\" style=\"display:inline-block; padding: 10px;background-color: #9B33AF;font-size: 15px;color: #fff;border-radius: 5px;text-decoration:none;\">Login Now</a> </div>

				</div>
				<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
					<tbody>
					<tr>
						
					</tr>
					<tr>
						<td align=\"center\">
							<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100\">
								<tbody>
								<tr>
									
								</tr>
								</tbody>
							</table>
						</td>
					</tr>
					<tr>
						<td height=\"35\"> </td>
					</tr>
					<tr>
						<td>
							<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
								<tbody>
								<tr>
									<td style=\"font-family:'Open Sans',Arial,sans-serif;font-size:12px;padding-bottom: 10px;text-align: center;\"> if you have any issue, feel free to contact us at <a href=\"mailto:suport@matchora.com\" style=\"color:#000;font-weight:bold;text-decoration:none\" target=\"_blank\"> support@matchora.com </a> .
									</td>
								</tr>
								</tbody>
							</table>
						</td>
					</tr>
					</tbody>
				</table></td>
		</tr>
		</tbody>
	</table>
</div>";
$mail->AltBody = "Thank you for signing up on Matchora";

if(!$mail->Send())
{
   return "Message could not be sent. <p>";
   return "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

return "Message has been sent"; 
			}
		} else{
			throw new Exception( FIELDS_MISSING );
		}
	}
	
	/**
	 * This will generate random password
	 * @return string
	 */
	
	private function randomPassword() {
		$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
		$pass = array(); //remember to declare $pass as an array
		$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass); //turn the array into a string
	}
}

?>
