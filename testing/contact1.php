<?php
error_reporting(0);
date_default_timezone_set('Asia/Kolkata');
include('/home/kasturic/public_html/Websites/worldempower.in/testing/phpmailer/class.phpmailer.php');

$name= $_POST['name'];
$email= $_POST['email'];
$mobno=  $_POST['mobileno'];
$message =  $_POST['message'];

saveClientContact($name,$email,$mobno,$message);

mailToClient($name,$email,"Thank You for Contacting Us !");

mailToWorldEmpower($name,$email,$mobno,$message);

function saveClientContact($name,$email,$mobno,$message){
    include('conn.php');
    $query="insert into tbl_enquiry(name,email,contact,message) values('$name','$email','$mobno','$message')";
    mysqli_query($con,$query) or die(mysqli_error());
}



function mailToClient($name,$emailid,$subject)
        {
        	$content="
        
            <table border='0' width='250' height='455'>
			<tr>
				<td height='68' width='250' ><img src=http://worldempower.in/testing/img/logo.png></td>
			</tr>
			<tr>
				<td height='52' width='250'><font color=red>Hi $name,</font></td>
			</tr>
			<tr>
				<td height='41' width='250'>
					This is to let you know that we have received your email and one of our representative will contact you soon.<br><br>
					Please do not reply to this email as it will not be received.<br><br>
					This is an auto generated response to your enquiry sent by us.
				</td>
			</tr>
			<tr>
				<td height='122' width='250'>
					<br>
                    	<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; World Empower</strong><br>
    					&nbsp;&nbsp;   Registered Office :- 1st Floor,<br>
    					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Chinchkar Complex,Sapnanagr<br>
    					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Behind T.C. College <br>
    					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Barmati,Pume-413102,<br>
    					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dist-Pune,MH<br><br>
    		            (+91) 8484 94 1004 / 8484 92 1004<br><br>
    					info@worldempower.in
				</td>
			</tr>
		</table>
        	";
	        $email = new PHPMailer();
	        $email->From      = 'info@worldempower.in';
	        $email->FromName  = 'World Empower';
	        $email->Subject   = $subject;
	        $email->Body      = $content;
	        $email->IsHTML(true); 
	        $email->AddAddress( $emailid );
	        $b=$email->Send();
	        
	        
       	}

function mailToWorldEmpower($name,$email,$mobno,$message)
        {
        	$content="
        
            <table border='0' width='250' height='455'>
			<tr>
				<td height='68' width='250' ><img src=http://worldempower.in/testing/img/logo.png></td>
			</tr>
			<tr>
				<td height='52' width='250'><font color=red>Hi Akshay,</font></td>
			</tr>
			<tr>
				<td height='41' width='250'>
				    You have received an enquiry from $name.<br>
				    Name : $name <br>
				    Email : $email <br>
				    Mobile No : $mobno <br>
				    Message: $message <br>
				</td>
			</tr>
		    <tr>
				<td height='52' width='250'>Regards<br> WorldEmpower Team</td>
			</tr>
    		</table>
        	";
        	$subject=  "New Enquiry : ".date('d-M-Y');
	        $email = new PHPMailer();
	        $email->From      = 'info@worldempower.in';
	        $email->FromName  = 'World Empower';
	        $email->Subject   = $subject;
	        $email->Body      = $content;
	        $email->IsHTML(true); 
	        $email->AddAddress( 'info@worldempower.in' );   
	        $b=$email->Send();
	        
	        
       	}
?>

<script> 
window.location.href = "contact2.php";
</script>