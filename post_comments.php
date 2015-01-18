<?php
		session_start();
		if(isset($_GET['sub_com']))
		{
			mysql_query("insert into comment values($_SESSION[user_id],$que_id[que_id],$id,'$_GET[txtcom]')");
			
		}
		header("location:view_answer.php");

?>
