<?php

//'Send me an email' script

$to = "rpmuthuemedia@gmail.com";
$subject = "Email from PHPAcademy";

?> 

<html>

<form action='Sending_Email_Part1_1.php' method='POST'>
	<input type='text' name='name' maxlength='20'><br />
	<textarea name='message'> </textarea><p>
	<input type='submit' name='submit' value='send me this'>
</form>

</html>