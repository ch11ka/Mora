
function send_Mail()
{
require '../../mailer/class.phpmailer.php';
$from       = "noreply@betensured.com";
$mail       = new PHPMailer();
$mail->IsSMTP(true);            // use SMTP
$mail->IsHTML(true);
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = "smtp.mandrillapp.com"; // SMTP host
$mail->Port       =  587;                    // set the SMTP port
$mail->Username   = "iweanyaov@gmail.com";  // SMTP  username
$mail->Password   = "yCrm1Dl_pHvpJKBIS78_Vw";  // SMTP password
$mail->SetFrom($from, 'From Name');
$mail->AddReplyTo($from,'From Name');
$mail->Subject    = $subject;
$mail->MsgHTML($body);
$address = $to;
$mail->AddAddress($address, $to);
$mail->Send();
}
