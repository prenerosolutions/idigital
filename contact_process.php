<?php

    $fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$to = "intrasoftdigitaltechnologies@gmail.com, idigital@idigital-tech.com";
		$subject = "Leave a Reply";
		$body = '<html>
		<body> 
				<h2> New Message '.$fname.' '. $lname.' </h2>
			     <table width="628" height="162" border="0" style="text-align:left; color:#A2A2A2;">
				  <tbody>
					<tr>
					  <td width="203" height="44"><strong>Name:</strong></td>
					  <td width="274">'.$fname.' '. $lname.'</td>
					  <td width="174"><strong>Email:</strong></td>
					  <td width="341">'.$email.'</td>
					</tr>
					<tr>
					  <td height="112"><strong>Message :</strong></td>
					  <td colspan="3" rowspan="2">'.$message.'</td>
				    </tr>
					
				  </tbody>
				</table> 
		</body>
	</html>';
//headers
$headers = "From: ".$fname.' '. $lname."<".$email.">\r\n";
$headers = "Reply-to: ".$email."\r\n";
$headers = "Mime-version: 1.0\r\n";
$headers = "Content-type: text/html; charset-utf-8";

//send
$send = mail($to, $subject, $body, $headers);
//print $send;
	//die;
if($send){
	echo'<br>';
	echo ' ';
	header('location: success_contact.php');
} else {
	echo'error';
}

?>

