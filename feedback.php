<html>
<body>
<form action="index.php" method="post">
        	<fieldset style="border:2px solid #000;border-bottom-left-radius:10px;
                                                border-bottom-right-radius:10px;
                                                border-top-left-radius:10px;

                                                border-top-right-radius:10px;
                                                margin-top:-30px;
                                                margin-left:-5px;
                                                height:250px;">
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
                                                margin-left:2px;" />
                       
                   </td>
                                                
                </tr>
                
        <tr><td></td></tr>
        <tr>
                	
       </table>        
        <input type="submit" value="Feed Back" name="feedback" class="button"  
                  			style="width:170px; height:35px; color: #FFF; 
                            				     margin-bottom:4px;
                                                 margin-top:px;"/>
        
       </fieldset>
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
        <style type="text/css">
#slideout {
    position: fixed;
    top: 130px;
    right: 0;
 
	height:250px;
	padding: 10px ;
    text-align: center;
    background: #000  ;
    -webkit-transition-duration: 0.3s;
    -moz-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -o-transition-duration: 0.3s;
    -webkit-border-radius: 0 5px 5px 0;
    -moz-border-radius: 0 5px 5px 0;
    border-radius: 0 5px 5px 0;
}
#slideout_inner {
    position: fixed;
    top: 130px;
    right: -575px;
    background: #ECECEC;
    width: 500px;
    padding: 37px;
    height: 200px;
    -webkit-transition-duration: 0.3s;
    -moz-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -o-transition-duration: 0.3s;
    text-align: left;
    -webkit-border-radius: 0 0 5px 0;
    -moz-border-radius: 0 0 5px 0;
    border-radius: 0 0 5px 0;
}
#slideout_inner textarea {
    width: 190px;
    height: 100px;
    margin-bottom:0;
}
#slideout:hover {
    right: 570px;
}
#slideout:hover #slideout_inner {
    right: 0;
}


        .button {
        border: 0;
        background: #333;
        border-radius: 4px;
		margin-left:90px;
       box-shadow: 0 1px 0 rgba(255, 255, 255, 0.15), 0 5px 0   #FFFFFF;
         
        
        font-weight: bold;
    transition: all .1s linear;
		
        }
        .button:hover 
		{
			color: #333;
         
		
        }
        .button:active {
		
        
        transform: translateY(3px);
        }
		

   
</style>