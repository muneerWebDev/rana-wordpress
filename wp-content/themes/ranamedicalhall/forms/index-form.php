<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'functions.php'; 
require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';

// if (isset($_POST['g-recaptcha-response'])) {
//     $captcha = $_POST['g-recaptcha-response'];
// } else {
//     $captcha = false;
// }

// if (!$captcha) {
//     //Do something with error
//     echo "<font color='red'>Captcha Error</font>";
// } else {
//     $secret   = '6Lfpx90ZAAAAAAotbDAdfajQEJ3ZISjWaeLti6NV';
//     $response = file_get_contents(
//         "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']
//     );
//     // use json_decode to extract json response
//     $response = json_decode($response);

//     if ($response->success === false) {
//         //Do something with error
//         echo "<font color='red'>Captcha Error</font>";
//     }
// }

$check = reCapChk('6Lfpx90ZAAAAAAotbDAdfajQEJ3ZISjWaeLti6NV',$_POST['g-recaptcha-response']); //reCAPTCHA checker

if($check->success=='true')
{
// print_r($response);

//... The Captcha is valid you can continue with the rest of your code
//... Add code to filter access using $response . score
// if ($response->success==true && $response->score >= 0.5) {
    
    $nameval       = $_POST['name'];
	$ageval        = $_POST['age'];
	$emailval      = $_POST['email'];
	$telval        = $_POST['tel'];
	$loc 		   = $_POST['location'];
	$disval        = $_POST['disorder'];
	$mesgval       = $_POST['mesg'];

	if(($nameval !='' ) && ($ageval !='' )&& ($emailval !='' )&& ($telval !='' )&& ($loc !='' )&& ($disval !='' )&& ($mesgval !='' )){
	$body="<table cellSpacing='0' cellPadding='0'  width='400' border='0' >".
	"<TR>
	  <TD align='Center' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 9pt; COLOR: #ffffff; FONT-FAMILY: Verdana; BACKGROUND-COLOR:rgb(250, 168, 26)'>Dr Rana Medical Hall :: Home Page Enquiry Form</TD>
	</TR>".
	"<TR><TD align='left'>".
	"<table width='400' border='0' cellPadding='1' cellSpacing='0'>".
	"
	<TR bgcolor='#dee6ea'><TD width='45%' height='25' align='left' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Name </TD><TD width='5%' height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD>
	<TD width='50%' height='25' align='left' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" .$nameval."</TD>
	</TR>". 					
	"<TR bgcolor='#e6f2f7'><TD align='left' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>E-mail ID </TD><TD  height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $emailval . "</TD></TR>".						
							
	"<TR bgcolor='#e6f2f7'><TD align='left' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>User Phone</TD><TD  height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $telval . "</TD></TR>".
										
	"<TR bgcolor='#dee6ea'><TD align='left' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Age </TD><TD  height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $ageval . "</TD></TR>".

	"<TR bgcolor='#dee6ea'><TD align='left' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Location </TD><TD  height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $loc . "</TD></TR>".

	"<TR bgcolor='#e6f2f7'><TD align='left' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Disorder </TD><TD  height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $disval . "</TD></TR>".
						  
	 "<TR bgcolor='#dee6ea'><TD align='left' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Message</TD><TD  align='left' height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $mesgval. "</TD></TR>". 
	"</table>". 
	"</TD></TR>".
	"</table>"; 

	// require 'PHPMailer-master/class.phpmailer.php';
	$mail = new PHPMailer();
	//Tell PHPMailer to use SMTP
	//Enable SMTP debugging
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages$file =$_FILES['attach']['name'];
	//Ask for HTML-friendly debug output
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true; // authentication enabled
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
	$mail->Host = "ranamedicalhall.com";
	$mail->Port = 465; // or 587
	$mail->IsHTML(true);
	$mail->Debugoutput = 'html';
	$mail->Username = 'admin@ranamedicalhall.com';
	$mail->Password = 'ranaMedical@mail';
	$mail->setFrom('admin@ranamedicalhall.com',''.' '.$nameval);
	$mail->addAddress('drranaroymedical@gmail.com');
	// $mail->AddCC('');
	$mail->addBCC('roymedicalhall121@gmail.com');
	$mail->AddReplyTo($emailval, $nameval);
	$mail->Subject = "Home Page Enquiry Form - Dr Rana's Medical Hall";
	$mail->Body = $body;
	$mail->Timeout = 3600; 
 	
	 	if($mail->Send()){
			//	echo "Your Enquiry has been sent Successfully";
	    	header("Location:http://www.ranamedicalhall.com/thankyou");	
	  	}
	  	else{
			echo 'Message was not sent.';
			echo 'Mailer error: ' . $mail->ErrorInfo;
	  	} 
  	}
}
else {
	echo "<font color='red'>Captcha Error</font>";
}

?>