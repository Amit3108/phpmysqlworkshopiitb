<?php

//'Send me an email' script

if($_POST['submit'])
{
//get data from form
$name = $_POST['name'];
$message = $_POST['message'];

if($name && $message) // existence check
	{
		$namelen=20;
		$messagelen=300;
		if(strlen($name)<=$namelen && strlen($message)<=$messagelen) //length  check
		{
			ini_set("SMTP","smtp.gmail.com");
			ini_set("smtp_port","587");
			//setup variables
			$to = "example@gmail.com";
			$subject = "blah";
			$headers="From: example@gmail.com";
			$body ="This email from $name\n\n$message";

			$blah = mail($to, $subject, $body, $headers);
			echo $blah;

		}
		else
		    die("Max length for name is $namelen, and max length for message $messagelen");
 	}
else
	die("You must enter a name <u>and</u> message");

}
?>

<html>

<form action='q2_send_mail.php' method='POST'>
	Name: <input type='text' name='name' maxlength='20'><br />
	Message:<br /><textarea name='message'> </textarea><p>
	<input type='submit' name='submit' value='send me this'>
</form>

</html>