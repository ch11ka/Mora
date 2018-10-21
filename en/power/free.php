<?php 
ob_start();
session_start();
require_once 'config.php'; 
if(!isset($_SESSION['logged_in'])){
	header('Location: index.php');
}
?>
<?php
   $dat = date_create ("now");
 date_add ($dat, date_interval_create_from_date_string("30 days"));
 $update = date_format($dat, "Y-m-d");
  ?>
<?php $date= date("Y-m-d");?>
<?php

			$mysqli = new mysqli('localhost', 'dindinda_match', 'BoxopusAquafeed!1', 'dindinda_matchora');
	if ($mysqli->connect_error){
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
			 
			 if(isset ($_GET['id'])){
				$id = mysqli_real_escape_string($mysqli,$_GET['id']);
				$result = $mysqli->query ("UPDATE users SET account ='1', expiry ='$update', LPaymentDate='$date' WHERE user_id ='$id'");
			
			
			}
			
			$mysqli->close();	
			?>		

<?php

			$mysqli = new mysqli('localhost', 'dindinda_match', 'BoxopusAquafeed!1', 'dindinda_matchora');
	if ($mysqli->connect_error){
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	
		
			 if(isset ($_GET['id'])){
				$id = mysqli_real_escape_string($mysqli,$_GET['id']);
			 }
				
				$jquery= $mysqli-> query("SELECT user_id,email FROM `users` WHERE user_id ='$id'");	
				while($row = mysqli_fetch_array($jquery))
				{
					$recipients[] = $row['email'];
					
					$to = implode(', ', $recipients);
					
					
				
				
				
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
$mail->AddAddress($to);                  // name is optional
$mail->AddReplyTo("noreply@matchora.com");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Free Plan Downgrade";
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
					<p>Your account has been Downgraded</p>
					
					<p></p>
					<p>You no longer have premium benefits</p>

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
$mail->AltBody = "Your account has been upgraded to the PRO plan";

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";

				
				
				
				
				
				
	


			/* $to= 'upgrades@matchora.com';
	
			//$to      = $email; // Send email to our user
						$subject = 'Basic Plan Upgrade'; // Give the email a subject 
				$message ="<div style=\"background:#f2f2f2;margin:0 auto;max-width:640px;padding:0 20px\">
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
					<p>Your account has been upgraded</p>
					
					<p>Thank you for upgrading your account</p>
					<p>You now have access to the basic categories and will receive 4 games daily</p>

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


             
$headers = 'From: Matchora <support@matchora.com>' . "\r\n"; // Set from headers
$headers .= 'Reply-To: noreply@matchora.com' . "\r\n";
$headers .= 'BCC: ' . implode(', ', $recipients) . "\r\n";
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
mail($to, $subject, $message, $headers); // Send our email */
}		
			
			
		
		
			
			?>			
			
<?php
header("location: https://matchora.com/power/search.php");
?>