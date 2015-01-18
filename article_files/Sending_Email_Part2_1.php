<?php

//'Send me an email' script

$to = "rpmuthuemedia@gmail.com";
$subject = "Email from PHPAcademy";

if($name&&$message) // existance check
{	
	$namelen=20;
	$messagelen=300;
	if(strlen($name)<=$namelen && strlen($message)<=$messagelen) // length check
		{
		
		
		}
		else
		die("Max length for name is $namelen, and max length for message $messagelen");

}


?> 

<html>

<form action='Sending_Email_Part2_1.php' method='POST'>
	Name: <input type='text' name='name' maxlength='20'><br />
	Message:<br /><textarea name='message'> </textarea><p>
	<input type='submit' name='submit' value='send me this'>
</form>

</html>