<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$to = "fn6267@gmai.com";
	$subject = 'From Submission';
	$msg = "Name: ".$name."\n"."Wrote the following"."\n\n".$msg;
	$headers = $email;

	if (mail($to, $subject, $message, $headers)) {
		echo "<h1>Sent Successfully! "." ".$name." We contact you soon!</h1>";
	}else{
		"<h1>Something wrong!</h1>"
	}
}


?>