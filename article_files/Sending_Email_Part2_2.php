<?php

//'Send me an email' script

if($name&&$message) // existance check
{	
	$namelen=20;
	$messagelen=300;
	if(strlen($name)<=$namelen && strlen($message)<=$messagelen) // length check
		{
		//everything is ok
		
		//setup variables
		$to = "rpmuthuemedia@gmail.com";
		$subject = "Email from PHPAcademy";
		
		$body ="This email from $name\n\n$message";
		
		mail($to, $subject, $body);
		
		}
		else
		die("Max length for name is $namelen, and max length for message $messagelen");



//get data from form
$name = $_POST['name'];
$message = $_POST['message'];

echo $name. "". $message;
}


?> 

<html>

<form action='Sending_Email_Part2_2.php' method='POST'>
	Name: <input type='text' name='name' maxlength='20'><br />
	Message:<br /><textarea name='message'> </textarea><p>
	<input type='submit' name='submit' value='send me this'>
</form>

</html>