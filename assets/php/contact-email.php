<?php

// if (isset($_POST['sentEmail'])) { SendEmail(); }


$nameInput = $_POST['name'];
$emailInput = $_POST['email'];
$messageInput = $_POST['message'];

$nameInput = urldecode($nameInput);
$emailInput = urldecode($emailInput);
$messageInput = urldecode($messageInput);


$name = $nameInput;
$email = $emailInput;
$message = $messageInput;
$to = "chris3037@gmail.com";
$subject = "Message from mybrokencode.com";
$body = '<html>
		<body>
			<h2>You have received an email</h2>
			<br>
			<p>Name: '.$name.'</p><p>Email: '.$email.'</p>
			<p>Message:</p>
			<p>'.$message.'</p>
		</body>
		</html>';
$headers = "From: ".$name." <".$email.">\r\n";
$headers .= "Reply-To: ".$email."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset-utf-8";
// Send
echo "string";
$send = mail($to, $subject, $body, $headers);
// if ($send) {
// 	echo '<br>';
// 	echo '<p>Thanks for contacting me</p>';
// } else {
// 	echo 'error';
// }

?>