<?php

if (isset($_POST['SentEmail'])) { SendEmail(); }

function SendEmail() {
	$name = $_POST['contact-name'];
	$email = $_POST['contact-email'];
	$message = $_POST['contact-message'];
	$phone = $_POST['contact-phone'];
	$org = $_POST['contact-organization'];

	$to = "chris3037@gmail.com";
	$subject = "Message from mybrokencode.com";


	$body = '<html>
	<body>
	<h2>You have received an email</h2>
	<br>
	<p>Name: '.$name.'</p><p>Email: '.$email.'</p>';
	// If phone # was included, display phone #
	if ($phone != "") {
		$body .= '<p>Phone: '.$phone.'</p>';
	}
	// If organization was included, display org
	if ($org != "") {
		$body .= '<p>Organization: '.$org.'</p>';
	}
	$body .= '<h3>Message:</h3><p>'.$message.'</p>
	</body>
	</html>';


	$headers = "From: ".$name." <".$email.">\r\n";
	$headers .= "Reply-To: ".$email."\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset-utf-8";
	// Send
	$send = mail($to, $subject, $body, $headers);

    session_start();
    $_SESSION['emailSent'] = 1;
	header("Location: /portfolio#contact");
	// header("Location: /portfolio");
}

?>