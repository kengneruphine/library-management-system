<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		//assign form value to variables
		$from=test_input($_POST["email"]);
		$to = "ruphinekengne@gmail.com";
		$subject=test_input($_POST["subject"]);
		$message=test_input($_POST["message"]);
		if (isset($_POST["name"])){
			test_input($_POST["name"]);
			$name = $_POST["name"];
		}else{
			$name = 'client';
		}
		if (isset($_POST["phoneNo"])){
			test_input($_POST["phoneNo"]);
			$phone = $_POST["phoneNo"];
		}else
			$phone = ' ';

		//include phpmailer script use to send the mail using a remote server
		require_once "js/PHPMailer/PHPMailerAutoload.php";
		$mail = new PHPMailer;

		// Set PHPMailer to use the sendmail transport
		//$mail->isSendmail();
		//Enable SMTP debugging.
		$mail->SMTPDebug = 3;

		//Set PHPMailer to use SMTP.
		$mail->isSMTP();

		//Ask for HTML-friendly debug output
		$mail->Debugoutput = 'html';

		//Set SMTP host name
		$mail->Host = "smtp.gmail.com";

		//Set this to true if SMTP host requires authentication to send email
		$mail->SMTPAuth = true;

		    echo "<script type='text/javascript'>alert('hey')</script>";
		//Set TCP port to connect to 
		$mail->Port = 587;
		//Provide username and password     
		$mail->Username = "ruphinekengne.com";

		$mail->Password = "scintiche1"; 

		//If SMTP requires TLS encryption then set it
		$mail->SMTPSecure = "tls"; 
		$mail->setFrom ($from,$name);
		$mail->addAddress($to, "ruphine");
		$mail->addReplyTo($from, "Reply");	
		$mail->isHTML(true);
		$mail->Subject = $subject;
		$mail->Body = "Name".$name."<br ><i>".$message."</i><br>Phone:".$phone;
		$mail->AltBody = $message;
		if(!$mail->send())
		    echo "//Mailer Error: " . $mail->ErrorInfo;
		else 
		    echo "<script type='text/javascript'>alert('Thanks for contacting us, we will get back to you shortly')</script>";
	}

	//function to strip clean the client's input
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
?>