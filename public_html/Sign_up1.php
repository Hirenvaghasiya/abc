<?php
	session_start();
?>
<!DOCTYPE html> 
<html id="home" lang="en"> 
<head> 
<meta charset=utf-8 />
<meta name="viewport" content="width=940" />
<title>User Sign Up</title>



<link href="css/app/general.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/style/style.css" type="text/css" />
<link rel="stylesheet" href="css/style/default.css" type="text/css" />
<link rel="alternate stylesheet" type="text/css" title="happy" href="css/style/happy.css" />
<link rel="alternate stylesheet" type="text/css" title="piano" href="css/style/piano.css" />
<link rel="alternate stylesheet" type="text/css" title="city" href="css/style/city.css" />
<link rel="alternate stylesheet" type="text/css" title="play" href="css/style/play.css" />
<link rel="alternate stylesheet" type="text/css" title="casette" href="css/style/casette.css" />
<link rel="alternate stylesheet" type="text/css" title="tape" href="css/style/tape.css" />
<link rel="stylesheet" type="text/css" href="reg_style.css" />

<!-- App Plugin Style -->
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />

<!--[if IE 7]> <style> @import url("css/style/ie7.css"); </style> <![endif]-->


<!-- JS -->
<script src="js/jquery-1.4.2.min.js"></script>
<script src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script src="js/general.js"></script>
<script src="js/function.js"></script>
<script type="text/javascript" src="js/filter.js"></script>
<script src="js/styleswitch.js"></script>






<body>


<!-- Container Start -->
<div class="container_16">
  
  <!-- Top Back -->
<div id="top"></div>
<div id="top-back-two"></div>
  
 <div class="grid_3 logo">
    <a href="index.php"><img src="images/ask 4 u.png" height="60" alt=""  style="margin-left:-160px;"/></a>
</div>
  
  <!-- Menu -->
  <div class="grid_11 menu">
  
  <div id="nav">
<link rel="stylesheet" href="menu.css" type="text/css" media="screen" />


<!--[if IE 6]>
<style>
body {behavior: url("csshover3.htc");}
#menu li .drop {background:url("img/drop.gif") no-repeat right 8px; 
</style>
<![endif]-->


<ul id="menu">
    
    <li><a  href="index.php"><u>Home</u></a><!-- Begin Home Item -->
    
    </li><!-- End Home Item -->
    
   
   
     <li><a href="#" class="drop"><u>SubJect</a><!-- Begin 5 columns Item -->
    
        <div class="dropdown_5columns"><!-- Begin 5 columns container -->
        
            <div class="col_5">
                <h2></h2>
            </div>
            
            <div class="col_1">
           
               <a href="subject.php?id=1"> <img src="images/aspnet.png" height="50" width="80"  />
                 <br />
                   <br />
                  <a href="subject.php?id=6"><img   src="images/jsf-mini-logo.png" height="50" width="80"/> </a>
            </div>
            
            <div class="col_1">
                <a href="subject.php?id=2"> <img src="images/php.png" height="50" width="80"  />
                
                 <br />
               <br />
                	<a href="subject.php?id=7"><img src="images/ruby.png" height="50" width="80"/></a>
               </div>
            
            <div class="col_1">
                  <a href="subject.php?id=5"><img src="images/Java.png" height="50" width="80"/> </a>
                   <br />
              
                  
                  <a href="subject.php?id=8"><img src="images/perl.png" height="50" width="80"/></a>
            </div>
            
            <div class="col_1">
              <a href="subject.php?id=4"><img src="images/c++.png" height="50" width="80"></a>
               </div>
            
            <div class="col_1">
           <a href="subject.php?id=3"><img src="images/c.png" height="50" width="80"/></a>
               </div>
               
               <div class="col_1">
           <a href="subject.php?id=9"><img src="images/ANDROID.png" height="90" width="80"/ style="margin-top:8px;"></a>
               </div>
               
               <div class="col_1">
           <a href="subject.php?id=10"><img  src="images/unix.png" height="50" width="80"/ style="margin-top:20px;"></a>
               </div>
        
            <div class="col_5">
            
          </div>
           
            <div class="col_3">
            
               
            
          </div>
            
            <div class="col_2">
            
                           
            </div>
        
        </div><!-- End 5 columns container -->
    
    </li><!-- End 5 columns Item -->

  <!--  <li><a href="#" class="drop"></a><!-- Begin 4 columns Item 
    
      <li><a href="#"></a> -->
       <li><a href="Ask_question.php"><u>Ask A question</a><!-- Begin Home Item -->
    
    </li> 
<li><a   href="All_questions.php"><u>All Answeres</a><!-- Begin Home Item -->
    
</li> 
           
  <li><a  href="post_artical.php"><u>Post Article</a><!-- Begin Home Item -->
    
</li><!-- End Home Item -->
	
    <li><a href="recent_questions.php"><u>Recent Question</a><!-- Begin Home Item -->
    
    </li><!-- End Home Item -->
    
    
	</li>
 <!--    <div class="search">
          		<form method="get" id="searchform" action="#s">
    		
        		    	<input type="text" value="Find a Question" name="s" id="s" class="textfield" 
                		   onfocus="if (this.value == &#39;Find a Question&#39;) {this.value = &#39;&#39;;}" 
                    	   onblur="if (this.value == &#39;&#39;) {this.value = &#39;Find a Question&#39;;}">
                       
    						<input type="image" class="b_search"
                            	   src="./Transform your WP install in Question Answer PortalÂ  Â Answers_files/b_search.png"
          						    alt="Submit button">
  				
                </form>
             </div>-->

        </font>
      
   </font>
   </div>   
   
	<br />
    <ul class="sf-menu">
      <!-- Home -->
       
      
      <!-- Theme -->
      
      
    </ul>
  </div><!-- Mini Button -->
  
  
  
  <!-- Big Message -->
  <div class="grid_11 top-message">
    <h1>Sign Up </h1>
  </div>
  
  <!-- Emty Grid -->
  <div class="grid_5">
  </div>
  
  <div class="grid_16 blog-page">

  </div>
  
 
  <!--  ------------------------------------------   Asp.net  ---------------------------------------------------------------------------------- -->  
 

 
 
    <!-- #1 -->
 
    <div class="discounted-item job portfolio-four" style="margin-left:350px;">		
    <ul class="tab-menu">
<div>
 
<!--validation -->
<?php 
		include("cnn.php");
		if(isset($_POST['submit']))
		{
			$fname=$_POST['txtfname'];
			$lname=$_POST['txtlname'];
			$email=$_POST['txtemail'];
			$pwd=$_POST['txtpass'];
			$cpwd=$_POST['txtcpass'];
			$year=$_POST['year'];
			$month=$_POST['month'];
			$day=$_POST['day'];
			$mono=$_POST['txtmono'];
			$chk_email="select email from login where email='$email'";
			$tmp=mysql_query($chk_email) or die(mysql_error());
			$res=mysql_fetch_assoc($tmp);
			
			if(!preg_match("/^[a-zA-Z]/",$fname))
			{
				$err="*Error:-Invalid First Name";
			
			}
			elseif(!preg_match("/^[a-zA-Z]/",$lname))
			{
				$err="*Error:-Invalid Last Name";
			
			}
			elseif(!preg_match("/^[789]{1}[0-9]{9}/",$mono))
			{
				$err="*Error:-Invalid Mobile Number";
			}
			elseif(strlen($pwd)<5)
			{
				$err="Error:-Very Short Pasword";
			}
			elseif(strcmp($pwd,$cpwd))
			{
				$err="Error:-Password mismatch";
			}
			elseif(mysql_num_rows($tmp)==1)
			{
				$err="*ERROR:-Email Already Register";
			}
			else
			{
				   $from ="Ask4u.com"; // sender
    $subject ="Registration";
     $code=rand();
    $message ="welcome, $fname On Ask 4 U.......Please confirm Your Email Address.....Please Enter Varification Code Which Was <a href='email_con.php?code=$code'> $code</a>";
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
    // send mail
    mail($email,$subject,$message,"From: $from\n");
    echo "Thank you for sending us feedback";


                                date_default_timezone_set('Asia/kolkata');
				$date = date("y/m/d h:i:s A");
				$email=$_POST['txtemail'];
				$qry="insert into login values('$email','$pwd',$code,0)";
				mysql_query($qry)or die(mysql_error());
				$in_reg="insert into user_profile values('','$email','$fname','$lname','$year/$month/$day',$mono,'','$date')";
				mysql_query($in_reg)or die(mysql_error());
				$sel_id=mysql_insert_id();
				$_SESSION['user_id']=$sel_id;
				header("location:confirm_acc.php");
			}

			if(isset($err))
			{
				echo "<div class=error>$err</div>";
			}
			
		}
 ?>
 <!--Validation end-->
 <form method="post" action="Sign_up1.php">
 <table class="table"  cellspacing="15">
 <tr><td> <h1 style="font-family:Times New Roman, Times, serif; font-size:40px;" align="left">Sign Up</h1>
<hr style="border-style:solid" align="left" />
 </td></tr>
 <tr class="td">
 <td ><input type="text" name="txtfname" required title="Enter First name" placeholder="First Name"  class="tbox" value="<?php if(isset($_POST['txtfname'])){echo $_POST['txtfname'];} ?>"/> </td>
 
  <td ><input type="text" name="txtlname" required placeholder="Last Name" title="Enter Lsst name" class="tbox" value="<?php if(isset($_POST['txtlname'])){echo $_POST['txtlname'];}?>" /></td>
<?php
 			 ?>
 </tr>
 <tr>
 <td>&nbsp;</td></tr>
 
 
 <tr>
 <td colspan="2"><input type="email" name="txtemail" title="Enter Email" required placeholder="Email" class="email" value="<?php if(isset($_POST['txtemail'])){echo $_POST['txtemail'];}?>" /></td>
 </tr>
 
 <tr>
 <td>&nbsp;</td></tr>
 
 
  <tr>
 <td colspan="2"><input type="text" name="txtmono" class="email" title="Enter Mobile number" required placeholder="Mobile Number" maxlength="10" value="<?php if(isset($_POST['txtmono'])){echo $_POST['txtmono'];}?>" /></td>
 </tr>


<tr>
 <td>&nbsp;</td></tr>
 
<tr>
<td><input id="pwd" type="password" name="txtpass" class="tbox" title="Enter Password" placeholder="Password" required /></td>
<td><input type="password" name="txtcpass" class="tbox" placeholder="Confirm Password" title="ReEnter password " required /></td>
</tr>
 
 
 <tr>
 <td>&nbsp;</td></tr>
 
 
 <tr>
 <td colspan="2" style="font-size:18px; font-family:'Times New Roman', Times, serif">Birth Date:-</td>
 </tr>
 
 <tr>
 <td>&nbsp;</td></tr>
 
 
 <tr>
 <td colspan="2"><select class="dropdown" name="day">
 	<option selected="selected" >Day</option>
 	<?php
	for($i=1;$i<=31;$i++)
	{
	?>
	 <option value="<?php echo $i;?>"><?php echo $i;?></option> 
 	<?php
	}
	?>
 </select>
 <select class="dropdown" name="month">
 	<option selected="selected" >Month</option>
 	<?php
	for($i=1;$i<=12;$i++)
	{
	?>
	 <option value="<?php echo $i;?>"><?php echo $i;?></option> 
 	<?php
	}
	?>
 </select>
 <select class="dropdown" name="year">
 	<option selected="selected" >Year</option>
 	<?php
	for($i=1990;$i<=2011;$i++)
	{
	?>
	 <option value="<?php echo $i;?>"><?php echo $i;?></option> 
 	<?php
	}
	?>
 </select>

 </td>
 </tr>
 
 
 <tr>
 <td>&nbsp;</td></tr>
 
 
 
 
 <tr>
 <td><input type="checkbox" name="accept" required /> Accept Terms & condidtion</td>
 </tr>
 
 <tr>
 <td>&nbsp;</td></tr>
 
 
  <tr>
 <td colspan="2" align="center">
 <input type="submit" name="submit" value="submit"  />
 <input type="reset"  />
 </td>
 </tr>
 </table>
</form>
 </div>

  </div>
<!-- Footer Back-->
<?php

include('footer.php');

?>


</div>


<div id="slideout">
  <h3><font  color="#FFFFFF" face="Times New Roman, Times, serif" > F<br />
e  <br />e  <br />d  <br />&nbsp <br />B  <br />a  <br />c  <br />k </h3></font>	
    <div id="slideout_inner">
    	<form action="#">
        	<fieldset style="border:2px solid #151;border-bottom-left-radius:10px;
                                                border-bottom-right-radius:10px;
                                                border-top-left-radius:10px;

                                                border-top-right-radius:10px;
                                                margin-top:-40px;
                                                margin-left:-5px;">
            	<legend align="center"  > Feed Back </legend>
        	<table>
            	<tr>
                	<td><b>Email</b></td>
                  <td>:</td>
                  <td><input type="text" style=" background:#FFF; 
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
                	<td><b>Your Name</b></td>
                  <td>:</td>
                  <td><input type="text" style=" background:#FFF; 
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
                  <td><textarea rows="20"  style=" background:#FFF; 
                  									width:250px;
                  							    border:2px solid #151;
                                                border-bottom-left-radius:10px;
                                                border-bottom-right-radius:10px;
                                                border-top-left-radius:10px;
                                                border-top-right-radius:10px;
                                                color:#999;
                                                margin-left:12px;" />
                       </textarea>
             </td>
                                                
</tr>
                
        
        <tr>
                	<td></td>
                  <td></td>
                  <td><input type="button" value="Feed Back"  class="button" style="width:170px; height:35px; color: #FFF;  margin-left:12px; 
                  																		margin-bottom:12px;"/></td>
</tr>
        
       </div>
</div>
</body>
</html>
       
       <style type="text/css">
	   
	   

	   #slideout {
    position: fixed;
    top: 130px;
    right: 0;
 
	height:253px;
	padding: 10px ;
    text-align: center;
    background: #000  ;
    -webkit-transition-duration: 0.3s;
    -moz-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -o-transition-duration: 0.3s;
    -webkit-border-radius: 0 5px 5px 0;
    -moz-border-radius: 0 5px 5px 0;
    border-radius: 5px 5px 5px 5px;
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
		

		

.preview
{
width:200px;
border:solid 1px #dedede;
padding:10px;


}
#preview
{
color:#cc0000;
font-size:12px
}


</style>


		