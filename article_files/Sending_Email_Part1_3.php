<?php

//'Send me an email' script

$to = "rpmuthuemedia@gmail.com";
$subject = "Email from PHPAcademy";

if($_POST['submit'])
{
//get data from form

$name = $_POST['name'];
$message = $_POST['message'];

echo $name. "". $message;
}


?> 

<html>

<form action='Sending_Email_Part1_3.php' method='POST'>
	Name: <input type='text' name='name' maxlength='20'><br />
	Message:<br /><textarea name='message'> </textarea><p>
	<input type='submit' name='submit' value='send me this'>
</form>

</html>