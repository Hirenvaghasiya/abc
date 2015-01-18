<?php
  if (isset($_op["send_mail"]))
    {
	$to = $_GET["to"];
    $from = "Ask4U.com"; // sender
    $subject = "Ask4U Registration";
    $message = "wellcome to Ask4U.com pleas Comfirm This Code:- rand()";
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
    // send mail
    mail($to,$subject,$message,"From: $from\n");
    echo "Thank you for sending us feedback";
	
    }
  
?>