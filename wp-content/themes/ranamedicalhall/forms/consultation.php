<?php
//$connection = mysqli_connect('localhost', 'root', '');
//mysqli_select_db($connection,'vps_db');
////////////////////////
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'functions.php'; 
require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';

$check=reCapChk('6Lfpx90ZAAAAAAotbDAdfajQEJ3ZISjWaeLti6NV',$_POST['g-recaptcha-response']); //reCAPTCHA checker

if($check->success=='true')
{
$nameval       = $_POST['consulyour-name'];
$subval        = $_POST['consultyour-subject'];
$ageval        = $_POST['consulyour-age'];
$gendrval      = $_POST['consulgender-888'];
$stusval       = $_POST['consulyour-status'];
$havechildren  = $_POST['consulhave-children'];
$occupation    = $_POST['consulyour-occupation'];
$bodytype      = $_POST['consulyour-bodytype'];
$diet     = $_POST['consulyour-diet'];
$sleep    = $_POST['consulyour-sleep'];
$bowl     = $_POST['consulyour-bowel'];
$smoke    = $_POST['consulyour-smoke'];
$drink    = $_POST['consulyour-drink'];
$email    = $_POST['consulyour-email'];
$add      = $_POST['consulyour-addr'];
$city     = $_POST['consulyour-city'];
$country  = $_POST['consulyour-country'];
$phone    = $_POST['consulyour-phone'];
$howknow  = $_POST['consulhow-know'];
$yourcompliants       = $_POST['consulyour-compliants'];
$othercomplaints     = $_POST['consulother-complaints'];
$historycomplaints    = $_POST['consulhistory-complaints'];
$otherdisease         = $_POST['consulother-disease'];
$pasttreatment        = $_POST['consulpast-treatment'];
$yourreports          = $_POST['consulyour-reports'];
$yourinfo             = $_POST['consulyour-info'];


//if(($nameval !='' ) && ($emailval !='' )&& ($telval !='' ) && ($mesgval !='' )){
////////////////////////
 //$zapurl = "https://hooks.zapier.com/hooks/catch/4066328/cvzpkj/";
 //$curl = curl_init();
// $data=array('Name'=>$nameval ,'Subject'=>$subval,'Age'=>$ageval,'Gender'=>$gendrval,'Status'=>$stusval,'havechild'=>$havechildren,'Occupation'=>$occupation,'Bodytype'=>$bodytype,'Diet'=>$diet,'Sleep'=>$sleep,'Bowl'=>$bowl,'Smoke'=>$smoke,'Drink'=>$drink,'Email'=>$email,'Address'=>$add,'City'=>$city,'Country'=>$country,'Phone'=>$phone,'HowDidCametoKNow'=>$howknow,'Complaints'=>$yourcompliants,'OtherComplaints'=>$othercomplaints,'OtherComplaints'=>$historycomplaints,'Otherdisease'=>$otherdisease,'Pasttreatment'=>$pasttreatment,'Extrareport'=>$yourreports,'Information'=>$yourinfo,);  
// $jsonEncodedData = json_encode($data);
// $opts = array(
			//CURLOPT_URL => '' . $zapurl . '',
			//CURLOPT_RETURNTRANSFER => true,
			//CURLOPT_CUSTOMREQUEST => 'POST',
			//CURLOPT_POST => 1,
			//CURLOPT_POSTFIELDS => $jsonEncodedData,
			//CURLOPT_HTTPHEADER => array('Content-Type: application/json', 'Content-Length: ' . strlen($jsonEncodedData))
		//);
		// Set curl options
  //curl_setopt_array($curl, $opts);
		// Get the results
 // $result = curl_exec($curl);
		// Close resource
 // curl_close($curl); 
////////////////////////
$body="<table cellSpacing='0' cellPadding='0'  width='400' border='0' >".
"<TR>
  <TD align='Center' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 9pt; COLOR: #ffffff; FONT-FAMILY: Verdana; BACKGROUND-COLOR:rgb(250, 168, 26)'>Free Online Consultation Form</TD>
</TR>".
"<TR><TD align='left'>".
"<table width='400' border='0' cellPadding='1' cellSpacing='0'>".
"
<TR bgcolor='#dee6ea'><TD width='45%' height='25' align='left' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Name </TD><TD width='5%' height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD>
<TD width='50%' height='25' align='left' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" .$nameval."</TD>
</TR>". 

"<TR bgcolor='#dee6ea'><TD align='left' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Last Name</TD><TD  align='left' height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $subval. "</TD></TR>". 

"<TR bgcolor='#e6f2f7'><TD align='left' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>E-mail ID </TD><TD  height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $email . "</TD></TR>".						
						
"<TR bgcolor='#e6f2f7'><TD align='left' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>User Phone</TD><TD  height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $phone . "</TD></TR>".									

 
 "<TR bgcolor='#e6f2f7'><TD align='left' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Age</TD><TD  height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $ageval . "</TD></TR>".	
 
  "<TR bgcolor='#e6f2f7'><TD align='left' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Gender</TD><TD  height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $gendrval . "</TD></TR>".
 
 "<TR bgcolor='#e6f2f7'><TD align='left' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Marital Status</TD><TD  height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $stusval . "</TD></TR>".
 
  "<TR bgcolor='#e6f2f7'><TD align='left' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Child Status</TD><TD  height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $havechildren . "</TD></TR>".
 
 "<TR bgcolor='#e6f2f7'><TD align='left' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Occupation</TD><TD  height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $occupation . "</TD></TR>".
 
  "<TR bgcolor='#e6f2f7'><TD align='left' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Body Type</TD><TD  height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $bodytype . "</TD></TR>".

 "<TR bgcolor='#e6f2f7'><TD align='left' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Diet</TD><TD  height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $diet . "</TD></TR>".
 
  "<TR bgcolor='#e6f2f7'><TD align='left' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Sleep</TD><TD  height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $sleep . "</TD></TR>".
  
  "<TR bgcolor='#e6f2f7'><TD align='left' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Bowl</TD><TD  height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $bowl . "</TD></TR>".
  
  "<TR bgcolor='#e6f2f7'><TD align='left' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Smoke</TD><TD  height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $smoke . "</TD></TR>".
  
  "<TR bgcolor='#e6f2f7'><TD align='left' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Drink</TD><TD  height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $drink . "</TD></TR>".
  
   "<TR bgcolor='#e6f2f7'><TD align='left' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Address</TD><TD  height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $add . "</TD></TR>".
  
  "<TR bgcolor='#e6f2f7'><TD align='left' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>City</TD><TD  height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $city . "</TD></TR>".
  
   
  "<TR bgcolor='#e6f2f7'><TD align='left' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Country</TD><TD  height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $country . "</TD></TR>".
  
  "<TR bgcolor='#e6f2f7'><TD align='left' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>How did you to come to know</TD><TD  height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $howknow . "</TD></TR>".
  
  "<TR bgcolor='#e6f2f7'><TD align='left' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Present Complaints</TD><TD  height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $yourcompliants . "</TD></TR>".
  
   "<TR bgcolor='#e6f2f7'><TD align='left' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Other Complaints</TD><TD  height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $othercomplaints . "</TD></TR>".
   
   "<TR bgcolor='#e6f2f7'><TD align='left' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>History of Present Complaint</TD><TD  height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $historycomplaints . "</TD></TR>".
   
    "<TR bgcolor='#e6f2f7'><TD align='left' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Other Disease</TD><TD  height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $otherdisease . "</TD></TR>".
   
    "<TR bgcolor='#e6f2f7'><TD align='left' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Any Past Treatment Done</TD><TD  height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $pasttreatment . "</TD></TR>".
	
	"<TR bgcolor='#e6f2f7'><TD align='left' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Lab Reports</TD><TD  height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $yourreports . "</TD></TR>".
	
	"<TR bgcolor='#e6f2f7'><TD align='left' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Other Info which might be useful</TD><TD  height='25' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $yourinfo . "</TD></TR>".
  
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
$mail->Subject = "Online Consultation Form";
$mail->Body = $body;
$mail->Timeout = 3600; 
 if($mail->Send()){
//	echo "Your Consultation form, sent Successfully";
    header("Location:http://www.ranamedicalhall.com/thankyou");	
  }else{
	echo 'Message was not sent.';
	echo 'Mailer error: ' . $mail->ErrorInfo;
  }


}
else {
    echo "<font color='red'>Captcha Error</font>";
}
?>
?>