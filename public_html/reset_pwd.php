<?php
	session_start();
	include("cnn.php");
?>
<!DOCTYPE html> 
<html id="home" lang="en"> 
<head>


 
<meta charset=utf-8 />
<meta name="viewport" content="width=940" />
<title>....HOME | ASK4U...</title>
<link href="my_account.css" type="text/css" rel="stylesheet"/>
<link rel="stylesheet" href="Design.css"/>
<link href="reg_style.css" type="text/css" rel="stylesheet"/>
<link href="css/app/general.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/style/style.css" type="text/css" />
<link rel="stylesheet" href="css/style/default.css" type="text/css"  />
<link rel="alternate stylesheet" type="text/css" title="casette" href="css/style/casette.css" />
<link rel="alternate stylesheet" type="text/css" title="tape" href="css/style/tape.css" />


<!-- App Plugin Style -->
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />

<!--[if IE 7]> <style> @import url("css/style/ie7.css"); </style> <![endif]-->

<!-- JS -->
<script src=" js/jquery-1.4.2.min.js"></script>
<script src=" fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script src=" js/general.js"></script>
<script src=" js/function.js"></script>
<script src=" js/styleswitch.js"></script>



<meta charset="UTF-8">




<body style="overflow-x:hidden">


<!-- Container Start -->
<div class="container_16">
  
  <!-- Top Back -->
  <div id="top"></div>
  <div id="top-back2"></div>
  
  <!-- Logo -->
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
    
    <li><a href="index.php"><u>Home</u></a><!-- Begin Home Item -->
    
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
	
    <li><a href="#"><u>Recent Question</a><!-- Begin Home Item -->
    
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
    

        </font>
      
   </font>
   </div>   
   
	<br />
    <ul class="sf-menu">
      <!-- Home -->
      
    
    </ul>
  </div>

  
  <!-- Mini Button -->
 <!-- <div class="grid_2 nav-button">
  	<a href="login.php"  id="allpage-login-top"  title="Open Login Box" class="buton-login-mini"></a>
    <a href="signup.html" id="allpage-signup-top" title="Open Signup Modal Box" class="buton-signup-mini"></a>
    <a href="search.html" id="allpage-search-top" title="Open Search Area" class="buton-search-mini"></a><br>
  <div  align="right" style="margin-top:150px; margin-left:-80px; ">
          		<form method="get" id="searchform" action="#s">
    		
        		    	<input type="text" value="Find a Question" name="s" id="s"
                		   onfocus="if (this.value == &#39;Find a Question&#39;) {this.value = &#39;&#39;;}" 
                    	   onblur="if (this.value == &#39;&#39;) {this.value = &#39;Find a Question&#39;;}" style="border-radius:20px; height:40px; width:200px">
                       
    						<input type="image" class="b_search"
                            	   src="./Transform your WP install in Question Answer Portal   Answers_files/b_search.png"
          						    alt="Submit button">
  				
                </form>
             </div>
  
  </div>
  -->
  <!-- Big Message -->
  <div class="grid_11 top-message"   style=" height:200px; margin-top:70px;">
    <h1><b>Reset Password</b></h1>
  </div>
  
  <!-- Emty Grid -->
  <div class="grid_5" style="margin-left:800px; margin-top:-340px">
  <form action="search.php" method="post">
  <input type="text" placeholder="Search" name="search" style="background-color:#CCC; height:35px; width:200px; margin-top:-10000px; border-radius:5px;"/>
  <button type="submit" name="sub_search" style="background:none;border:none; position:absolute; margin-left:-35px;" ><img src="images/search.png" height="30px" style="margin:-8px 0px 0px -10px; position:relative; cursor:pointer; z-index:10;"/></button>
  </form>
  </div>  
  <div class="grid_5" style="margin-top:-100px;">
  
<div>
<form action="reset_pwd.php" method="post">
  	<table>
    
    
    <tr>
    <td>Email</td>
    <td>:</td>
    <td colspan="2" align="left"><input type="email" name="txtemail" placeholder="Email" required class="email"/></td>
    </tr>
    <tr>
    <td colspan="4" align="center"><input type="submit" name="next_sub" value="Next" /></td>
    </tr>
    </table>
    </form>
  </div>
 
  <?php
  	if(isset($_POST['next_sub']))
	{
		
		$email=$_POST['txtemail'];
		$sel_user="select * from login where  email='$email'";
		$tmp=mysql_query($sel_user) or die(mysql_error());
		if(mysql_num_rows($tmp)==0)
		{
			echo "No User Found For $email";
		}
		else
		{
			$res=mysql_fetch_assoc($tmp);
			$from="Ask4u.com";
			$subject="Pasword";
			$message="Dear user your Ask4U.com username:$email and Passwowd:$res[password].....Login into Ask4U:ask4u.hostoi.com";
			mail($email,$subject,$message,"From: $from\n");
    echo "Password Send into your Email:$email";
				
      
		}
		

	}
	?>
   </div>
  <!-- Slide Show-->
  <!--<div class="grid_16">
  <div id="slider-ribbon"></div>
  <div id="slider">
    <div id="slide-backs"></div>
    <div id="slides">
      <div class="slides_container">
        <a href="#"><img src="images/1.jpg" width="919" height="326" alt=""  /></a>
        <a href="#"><img  src="images/2.jpg" width="919" height="326" alt=""  /></a>
        <a href="#"><img src="images/3.jpg" width="919" height="326" alt=""  /></a>
        <a href="#"><img  src="images/4.jpg" width="919" height="326" alt=""  /></a>
        <a href="#"><img  src="images/5.jpg" width="919" height="326" alt=""  /></a>
        <a href="#"><img  src="images/6.jpg" width="919" height="326" alt=""  /></a>
      </div>
    </div>
    </div>
  </div> -->
  
  <!-- Hot News-->
 
  
  <!-- Login and Signup-->
 <!-- <div class="grid_4" id="login-signup">
  <a href="login.php" id="homepage-login-button" class="green-button">
  		<span class="green-right"></span>
        		<img src="image/theme/login-icon.png" alt="" class="button-icon"  />Login</a>
                
                
  <a href="signup.html" id="homepage-signup-button" class="red-button">
  		<span class="red-right"></span>
        		<img src="image/theme/icon-signup.png" alt="" class="button-icon"  /> Signup</a>
  </div>
  
</div>
-->
<!-- Dot-->
<div class="dot"></div>

<!-- Top4 Start-->
<
  
</div>

<!-- Dot-->
<div class="dot" style="margin-top:26px;"></div>

<!-- Latest Elements and New Videos Start-->
<div class="container_16">

  <!-- Tab Menu Start -->
  
      <!-- Content Finish -->    
    </div>
    <!-- Tab Finish -->  
  </div>
<!--  -----------------------------------------------------------------------------------------------------------------------------------------  -->       

  <!-- Grid End -->
  
  <!-- New Video Start -->
  
  <!-- <div style="margin-left:9px; margin-top:-10px;" class="grid_8 latest-elements">
    <h1>New Video</h1>
    <p>Lorem Ipsum is simply dummy printing.</p>
    <div class="new-video">
      <iframe src="http://player.vimeo.com/video/10858472?title=0&amp;byline=0&amp;portrait=0" width="460" height="345"> </iframe>
      <h2>Lorem Ipsum is simply text convert dummy printing</h2>
      <p>Lorem Ipsum is simply text convert dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing. Lorem Ipsum is simply text convert dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing.</p>
      <a href="#" class="middle-button" style="float:right; margin-bottom:8px; margin-top:3px;"><span class="middle-right"></span>More</a>
      <a href="#" class="middle-button" style="float:right; margin-bottom:8px; margin-top:3px;"><span class="middle-right"></span>Video</a>
    </div>
  </div>
  <!-- End
</div>  -->

<!-- Dot-->

<div class="dot" style="margin-top:26px;"></div>

<!-- Poster Back-->
<div id="random-poster-back"></div>

<div class="container_16" >
</div>
  
  <!-- Random Poster Start-->
  <div id="random-poster" class="grid_16" style="margin-top:-450px; margin-left:100px;">
 
    <div style="height:500px; float:left; overflow-y:auto; width:900px; margin-top:-160px;">
 
  </div>
  </div>
  
  
  
 
<div id="footer-back"></div>

<div class="container_16">
  <div id="footer-register" class="grid_8" style="background-color:#CCC;">
  <center>
   <table>
   				<tr>
    				<td><p class="box" style="height:40px; width:130px;"><a href="#" style=" margin-left:45px; color: #FFF;">
                    <h4 style=" margin-top:-50px;">    Home</h4>  </a></p></td>
                    
                    <td><p class="box" style="height:40px; width:130px;"><a href="#" style=" margin-left:25px; color: #FFF;"> 
                      <h4 style=" margin-top:-50px;"> Contact US</a> </p></td>
               
                    <td><p class="box" style="height:40px; width:130px;"><a href="#" style=" margin-left:25px; color: #FFF;">  
                      <h4 style=" margin-top:-50px;"> About US </a> </p></td>
                      
                    <td><p class="box" style="height:40px; width:130px;"><a href="#" style=" margin-left:15px; color: #FFF;"> 
                      <h4 style=" margin-top:-50px;"> Help & Privacy</a> </p></td>
                      
                    <td><p class="box" style="height:40px; width:130px;"><a href="#" style=" margin-left:35px; color: #FFF;"> 
                      <h4 style=" margin-top:-50px;">  Licence </a> </p></td>
                    
               </tr>
               </table>
    <br>
      <p>Copright © 2014 V&V Technologies All rights reserved.</p></center>
  </div>
  
  <div id="footer-social" class="grid_8">
    <ul>
      <li><a href="#"><img src="image/theme/twitter.png" alt="" /></a></li>
      <li><a href="#"><img src="image/theme/facebook.png" alt="" /></a></li>
      <li><a href="#"><img src="image/theme/rss.png" alt="" /></a></li>
    </ul>
  </div>
</div>



<script> 
$("#allpage-login-top").pageSlide({ width: "350px", direction: "left" });
$("#allpage-signup-top").pageSlide({ width: "350px", direction: "right" });
$("#allpage-search-top").pageSlide({ width: "350px", direction: "left", modal: true });
$("#homepage-login-button").pageSlide({ width: "350px", direction: "left" });
$("#homepage-signup-button").pageSlide({ width: "350px", direction: "right" });
</script>


<div id="slideout">
  <h3><font  color="#FFFFFF" face="Times New Roman, Times, serif" > F<br />e  <br />e  <br />d  <br />&nbsp <br />B  <br />a  <br />c  <br />k </h3></font>	
    <div id="slideout_inner">
    	<?php include("feedback.php");?>
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
		

   

.box {

  background: rgb(2, 114, 167);
  text-shadow:#FFF;
  color:#0FF;
  border-radius: 6px;
  transition-property: background, border-radius;
  transition-duration: .2s, 1s;
  transition-timing-function: linear, ease-in;
}
.box:hover {
  background: #09C;
  border-radius: 50%;
  text-shadow:#000;
}

</style>