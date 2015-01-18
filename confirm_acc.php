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
    <h1><b>Confirm Account</b></h1>
  </div>
  
  <!-- Emty Grid -->
  <div class="grid_5" style="margin-left:800px; margin-top:-340px">
  
  </div>  
  <div class="grid_5" style="margin-top:-100px;">
  
<div>
	<?php
		if(isset($_GET['op']) && $_GET['op']=='confirm')
		{
			echo "First Confirm Your Accont";
		}
	?>
<div class="forgetpasscode">
                         <form action="confirm_acc.php" method="POST" name="forgetpassword">
                         <table>
                             <tr>
                                 <td style="color:darkgreen;font-size:25px;font-weight:bold;"><u>Confirm your Account</u></td>
                             </tr>
                             <tr><td style="padding-top:40px;">
                                   <p>&blacktriangleright;Enter Confirmation Code which is send into your email.</p>
                                 </td></tr>
                             <tr><td style="padding:20px 0 10px 0;font-weight:bold;">Enter Your Confirmation Code:-</td></tr>
                             <tr><td class="forgettxt"><input type="text" name="txtcode" id="forgetemail" /></td></tr>
                             <tr><td class="forgetbtn"><input type="submit" name="next_sub" id="emailsubmit" value="Confirm" /></td></tr>
                         </table>
                         </form>
                         </div>  </div>
 
  <?php
  	if(isset($_POST['next_sub']))
	{
		$qry1="select * from login where code=$_POST[txtcode]";
		$tmp=mysql_query($qry1) or die(mysql_error());
		$res=mysql_fetch_assoc($tmp);
		if($_POST['txtcode']==$res['code'])
		{
			//$tmp2="select * from login where code=$_POST[txtcode]";
		    //$qry2=mysql_query($tmp2) or die(mysql_error());
			//$res2=mysql_fetch_assoc($qry2);
			$tmp3="select * from user_profile where email=(select email from login where code=$_POST[txtcode])";
			$qry3=mysql_query($tmp3) or die(mysql_error());
			$res3=mysql_fetch_assoc($qry3);
			$_SESSION['user_id']=$res3['user_id'];
			mysql_query("update login set status=1 where code=$res[code]");

			header("location:photo.php");
		}
		else
		{
		?>
			<p style="color:#900; font-size:20px"><?php echo "Error:-invalid code";?></p>
		<?php
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


  
  
  
 
<?php
	include("footer2.php");
?>
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
		

   

}

</style>