<?php
	session_start();
		if(isset($_SESSION['user']) && isset($_SESSION['password']))
		{
		}
		else
		{
			header("location:index.php");
		}
?>
<!DOCTYPE html> 
<html id="home" lang="en"> 
<head> 





<meta charset=utf-8 />
<meta name="viewport" content="width=940" />
<title>User Profile</title>


<link href="my_account.css" rel="stylesheet" type="text/css"/>
<link href="css/app/general.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/style/style.css" type="text/css" />
<link rel="stylesheet" href="css/style/default.css" type="text/css" />
<link rel="alternate stylesheet" type="text/css" title="happy" href="css/style/happy.css" />
<link rel="alternate stylesheet" type="text/css" title="piano" href="css/style/piano.css" />
<link rel="alternate stylesheet" type="text/css" title="city" href="css/style/city.css" />
<link rel="alternate stylesheet" type="text/css" title="play" href="css/style/play.css" />
<link rel="alternate stylesheet" type="text/css" title="casette" href="css/style/casette.css" />
<link rel="alternate stylesheet" type="text/css" title="tape" href="css/style/tape.css" />
<link href="images" rel="stylesheet" type="text/css">
<!-- App Plugin Style -->
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />

<!--[if IE 7]> <style> @import url("css/style/ie7.css"); </style> <![endif]-->
<link rel="stylesheet" type="text/css" href="user.css" />


<!-- JS -->
<script src="js/jquery-1.4.2.min.js"></script>
<script src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script src="js/general.js"></script>
<script src="js/function.js"></script>
<script type="text/javascript" src="js/filter.js"></script>
<script src="js/styleswitch.js"></script>






<body style="overflow-x:hidden">


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
    
   
    <li><a href="#" class="drop">SubJect</a><!-- Begin 5 columns Item -->
    
        <div class="dropdown_5columns"><!-- Begin 5 columns container -->
        
            <div class="col_5">
                <h2></h2>
            </div>
            
            <div class="col_1">
           
               <a href="subject.php?id=1"> <img src="images/aspnet.png" height="50" width="80"  /></a>
                 <br />
                   <br />
                  <a href="subject.php?id=6"><img   src="images/jsf-mini-logo.png" height="50" width="80"/> </a>
            </div>
            
            <div class="col_1">
                <a href="subject.php?id=2"> <img src="images/php.png" height="50" width="80"  /></a>
                
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
    
<?php
		if(isset($_SESSION['user']) && isset($_SESSION['password']))
		{
	?>
    	<li><a href="#" class="drop" > <u>My Acount</u></a><!-- Begin 5 columns Item -->
            <div class="dropdown_5columns1"><!-- Begin 5 columns container -->
        
            <div class="col_5">
                <h2></h2>
            </div>
            
            <div class="col_1">
    			<a href="my_question.php" style="font-size:14px; font-family:Arial, Helvetica, sans-serif; font-style:bold"> My Questions</a>
                
                   <br />
           	<a href="my_article.php" style="font-size:14px; font-family:Arial, Helvetica, sans-serif; font-style:bold"> My Article</a>
            
            
                   <br />
           	<a href="user_profile.php" style="font-size:14px; font-family:Arial, Helvetica, sans-serif; font-style:bold"> Profile</a>
            
                   <br />
                   <hr/>
           	<a href="welcome.php?op=logout" style="font-size:14px; font-family:Arial, Helvetica, sans-serif; font-style:bold"> Logout</a>
             </div>
            
    </li>
    <?php
		}
	?>
	    
    </li><!-- End Home Item -->
	</li>
 <!--    <div class="search">
          		<form method="get" id="searchform" action="#s">
    		
        		    	<input type="text" value="Find a Question" name="s" id="s" class="textfield" 
                		   onfocus="if (this.value == &#39;Find a Question&#39;) {this.value = &#39;&#39;;}" 
                    	   onblur="if (this.value == &#39;&#39;) {this.value = &#39;Find a Question&#39;;}">
                       
    						<input type="image" class="b_search"
                            	   src="./Transform your WP install in Question Answer Portal   Answers_files/b_search.png"
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
   <div class="grid_5" style="margin-left:800px; margin-top:-70px">
  <form action="search.php" method="post">
  <input type="text" placeholder="Search" name="search" style="background-color:#CCC; height:35px; width:200px; margin-top:-10000px; border-radius:5px; border:none;"/>
  <button type="submit" name="sub_search" style="background:none;border:none; position:absolute; margin-left:-35px;" ><img src="images/search.png" height="30px" style="margin:-8px 0px 0px -10px; position:relative; cursor:pointer; z-index:10;"/></button>
  </form>
  </div> 
  <div class="grid_11 top-message">
    <h1>User Profile</h1>
  </div>
  
  <!-- Emty Grid -->
  <div class="grid_5">
  </div>
  
  <div class="grid_16 blog-page">
    <h1><U>Upload Photo Here</U>	</h1>

  </div>
  
 
  <!--  ------------------------------------------   Asp.net  ---------------------------------------------------------------------------------- -->  


 
 
    <!-- #1 -->
 
    <div class="discounted-item job portfolio-four2" style="margin-left:350px;">		

    <ul class="tab-menu">
<div style="margin-left:-250px; " >
    <?php
		include("cnn.php");
		$sel_user="select * from user_profile where user_id=$_SESSION[user_id] ";
		$tmp=mysql_query($sel_user) or die(mysql_error());
		$res=mysql_fetch_assoc($tmp);
	?>
    <a class="ajaxpicture" href="uploads/<?php echo $res['user_id'];?>.jpg"><img src="uploads/<?php echo $res['user_id'];?>.jpg" alt="" height="200px" width="200"/></a>        

 </div>
		

       			               

 
 
                 
 <?php
include('db.php');

$session_id='1'; //$session id
?>


<script type="text/javascript" src="scripts/jquery.form.js"></script>

<script type="text/javascript" >
 $(document).ready(function() { 
		
            $('#photoimg').live('change', function()			{ 
			           $("#preview").html('');
			    $("#preview").html('<img src="loader.gif"  alt="Uploading...."/>');
			$("#imageform").ajaxForm({
						target: '#preview'
		}).submit();
		
			});
        }); 
</script>



<form id="imageform" method="post" enctype="multipart/form-data" action='ajaximage.php'>
 <input type="file" name="photoimg" id="photoimg" style="margin-left:-300px;"/>
</form>
        	
       </li>

<?php
	if(isset($_POST['photoimg']))
	{
		header("location:user_profile.php");
	}
?>

<div style="margin-top:-200px">
<form action="user_profile.php" method="post">
	<table>
    <tr>
    <td>First Name</td>
    <td>:</td>
    <td><input type="text" name="fname" id="" class="tbox" value="<?php echo $res['fname'];?>" /></td>
    </tr>
    <tr>
    <td>Last Name</td>
    <td>:</td>
    <td><input type="text" name="lname" id="" class="tbox" value="<?php echo $res['lname'];?>" /></td>
    </tr>
    <tr>
    <td>Mobile</td>
    <td>:</td>
    <td><input type="text" name="mobile_no" id="" class="tbox" value="<?php echo $res['mobile_no'];?>" /></td>
    </tr>
    <tr>
    <td>Email</td>
    <td>:</td>
    <td><input type="text" name="email" id="" class="tbox" value="<?php echo $res['email'];?>" /></td>
    </tr>
    <tr>
    <td colspan="3" align="center"><br/><input type="submit" name="up_submit" value="Update" class="submit"/></td>
    </tr>
    </table>
    </form>
</div>

  <?php
  	if(isset($_POST['up_submit']))
	{
		$update="update user_profile set fname='$_POST[fname]', lname='$_POST[lname]', mobile_no='$_POST[mobile_no]' where user_id=$res[user_id]";
		$tmp1=mysql_query($update) or die(mysql_error());
		header("location:user_profile.php");
		
	}
  ?>
<a href="user_profile.php?op=chg_pwd">Change Password</a>
<?php
	if(isset($_GET['op']) && $_GET['op']=='chg_pwd')
	{
	?>
    <div style="margin:-300px 0 0px 300px">
    <h1><p style="margin-left:100px; margin-top:-340px; font-size:30px;"><u>Change Password</u></p></h1>
    	<form action="user_profile.php" method="post">
        <table>
        <tr><td>Old Password</td>
        <td>:</td>
        <td><input type="password" name="old_pwd" class="tbox" required/></td></tr>
        <tr><td>New Password</td>
        <td>:</td>
        <td><input type="password" name="new_pwd" class="tbox" required/></td></tr>
        <tr><td>Confirm Password</td>
        <td>:</td>
        <td><input type="password" name="newc_pwd" class="tbox" required/></td></tr>
        <tr>
        <td colspan="3" align="center"><input type="submit" name="sub_pwd" value="Change Password"  class="submit" style="margin-top:20px; margin-left:40px; width:auto;" required/></td></tr>
        
        </table>
        </form>
    </div>
    <?php
	}
	if(isset($_POST['sub_pwd']))
	{
		$old_pwd=$_POST['old_pwd'];
		$new_pwd=$_POST['new_pwd'];
		$newc_pwd=$_POST['newc_pwd'];
		$qry=mysql_query("select * from login where email='$res[email]'");
		$res1=mysql_fetch_assoc($qry);
		if($res1['password']==$old_pwd)
		{
			if($new_pwd==$newc_pwd)
			{
				$qry_upd="update set password=$new_pwd where email='$res1[email]'";
				mysql_query($qry_upd);
			?>
            <h2 style="color:#0C6; font-size:25px; margin-top:-400px;">
            <?php
				echo "Password Changed successfully";
			?>
            </h2>
            <?php
			}
			else
			{
			?>
                        <h2 style="color:#F00; font-size:20px; margin-top:-400px;">

            <?php
				echo "Error:-Password Mismatch";
				?>
                </h2>
                <?php
			}
			
		}
		else
		{
			?>
             <h2 style="color:#F00; font-size:20px; margin-top:-400px;">
            <?php
			
			echo "Error:-Incorrect password";
			?>
            </h2>
            <?php
		}
		?>
		</h2>
        <?php	
	}
?>
  <!--  -------------------------------------------------------------------------------------------------------------------------------------------- -->   
  <div style="margin-top:400px;">
  <?php
  
  	include('footer3.php');
  
  ?>
  </div>
</div>
<script> 
$("#allpage-login-top").pageSlide({ width: "350px", direction: "left" });
$("#allpage-signup-top").pageSlide({ width: "350px", direction: "right" });
$("#allpage-search-top").pageSlide({ width: "350px", direction: "left", modal: true });
$("#homepage-login-button").pageSlide({ width: "350px", direction: "left" });
$("#homepage-signup-button").pageSlide({ width: "350px", direction: "right" });
</script>


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
		

		

.box {

  background: #090909;
  text-shadow:#FFF;
  color:#0FF;
  border-radius: 6px;
  transition-property: background, border-radius;
  transition-duration: .2s, 1s;
  transition-timing-function: linear, ease-in;
}
.box:hover {
  background: #3D3D3D;
  border-radius: 50%;
  text-shadow:#000;
}

.preview
{
width:200px;
border:solid 1px #dedede;
padding:10px;
margin-left:-300px;
margin-top:-170px;

}
#preview
{
color:#cc0000;
font-size:12px
}


</style>


