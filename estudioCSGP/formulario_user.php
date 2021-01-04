<?php
if(!isset($_POST['submit']))
{
	echo "error, you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

if(empty($name) || empty($visitor_email))
{
	echo "name and email are mandatory!";
	exit;
}

$email_from = 'vcorrea@fi.uba.ar';
$email_subject = "new form";
$email_body = "you have a new form from user $name.\n".
		"email adress: $visitor_email\n."
		"here is the message:\n $message".

$to = "vcorrea@fi.uba.ar";
$headers = "from: $email_from \r\n";

mail($to,$email_subject,$email_body,$headers);

?>

