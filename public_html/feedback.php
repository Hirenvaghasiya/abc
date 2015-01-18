<html>
<body>
<form action="index.php" method="post">
        	<fieldset style="border:2px solid #000;border-bottom-left-radius:10px;
                                                border-bottom-right-radius:10px;
                                                border-top-left-radius:10px;

                                                border-top-right-radius:10px;
                                                margin-top:-45px;
                                                margin-left:-5px;">
            	<legend align="center"  > Feed Back </legend>
        	<table>
            	<tr>
                	<td><b>Your Name</b></td>
                  <td>:</td>
                  <td><input type="text" required="required" name="txtname" style=" background:#FFF; 
                  								width:250px;
                                                height:27px;
                                               border:2px solid #151;
                                                border-bottom-left-radius:10px;
                                                border-bottom-right-radius:10px;
                                                border-top-left-radius:10px;
                                                border-top-right-radius:10px;
                                                color:#999;" /></td>
                </tr>
        
        <tr>
                	<td><b>Email</b></td>
                  <td>:</td>
                  <td><input type="text" name="txtemail" required="required" style=" background:#FFF; 
                  								width:250px;
                                                height:27px;
                                                border:2px solid #151;
                                                border-bottom-left-radius:10px;
                                                border-bottom-right-radius:10px;
                                                border-top-left-radius:10px;
                                                border-top-right-radius:10px;
                                                color:#999;"  /></td>
                </tr>
                
           <tr>
                	<td><b>Message</b></td>
                  <td>:</td>
                  <td><input type="text" name="txtmsg"  style=" background:#FFF; 
                  									width:250px;
                                                    height:100px;
                  							    border:2px solid #151;
                                                border-bottom-left-radius:10px;
                                                border-bottom-right-radius:10px;
                                                border-top-left-radius:10px;
                                                border-top-right-radius:10px;
                                                color:#999;
                                                margin-left:15px;" />
                       
                   </td>
                                                
                </tr>
         
                <tr>
                	
                  <td colspan="3" align="center"><input type="submit" value="Feed Back" name="feedback" class="button"  style="height:40px; width:150px; margin-left:95px; margin-top:6px;" />
                 </td>
        </tr>
       </table></fieldset>
       </form>
        
</body>
</html>
<?php
			include("cnn.php");
		if(isset($_POST['feedback']))
		{
			$name=$_POST['txtname'];
			$email=$_POST['txtemail'];
			$msg=$_POST['txtmsg'];
			$in="INSERT INTO feedback VALUES ('$name','$email','$msg')";
			mysql_query($in) or die(mysql_error());
			header("location:index.php");
			
		}
		?>