<?php
	
	session_start();
	include("cnn.php");
	if(isset($_SESSION['user']) && isset($_SESSION['password']))
	{
		header("location:welcome.php");
	}
?>


<!DOCTYPE html> 
<html id="home" lang="en"> 
<head>


 
<meta charset=utf-8 />
<meta name="viewport" content="width=940" />
<title>....HOME | ASK4U...</title>
<link href="login_style.css" type="text/css" rel="stylesheet"/>	
<link rel="stylesheet" href="Design.css"/>
<link href="css/app/general.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/style/style.css" type="text/css" />
<link rel="stylesheet" href="css/style/default.css" type="text/css" />
<link rel="alternate stylesheet" type="text/css" title="casette" href="css/style/casette.css" />
<link rel="alternate stylesheet" type="text/css" title="tape" href="css/style/tape.css" />
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<link rel="stylesheet" type="text/css" href="../Ask 4 U.com/my_account.css" />


<!-- App Plugin Style -->
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />

<!--[if IE 7]> <style> @import url("css/style/ie7.css"); </style> <![endif]-->

<!-- JS -->

<script src=" js/jquery-1.4.2.min.js"></script>
<script src=" fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script src=" js/general.js"></script>
<script src=" js/function.js"></script>
<script src=" js/styleswitch.js"></script>
<script>
	$(document).ready(function(){
    $("#loginico").click(function(){
    $("#x").hide();
	$("#err").hide();
	$(".overlay").hide();
    });
    });
	
	$(document).ready(function(){
    $("#loginshow").click(function(){
    $("#x").show();
	$("#err").show();
	$(".overlay").show();
    });
    });
</script>
</head>
<meta charset="UTF-8">




<body style="overflow-x:hidden">


<!-- Container Start -->
<div class="container_16">
  
  <!-- Top Back -->
  <div id="top"></div>
  <div id="top-back"></div>
  
  <!-- Logo -->
  <div class="grid_3 logo">
   <a href="index.php"> <img src="images/ask 4 u.png" height="60" alt=""  style="margin-left:-160px;"/></a>
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

       <li><a href="Ask_question.php"><u>Ask A question</u></a><!-- Begin Home Item -->
    
    </li>
     <li><a   href="All_questions.php"><u>All Answeres</u></a><!-- Begin Home Item -->
    
    </li> 

           
  <li><a  href="post_artical.php"><u>Post Article</u></a><!-- Begin Home Item -->
    
    </li><!-- End Home Item -->
	
    <li><a  href="recent_questions.php"><u>Recent Question</u></a><!-- Begin Home Item -->
    
    </li><!-- End Home Item -->
    
    
    <!-- Begin Home Item -->
    
    </li><!-- End Home Item -->
	
    
<!--    <li><a href="#" class="drop" > <u>My Acount</u></a>
            <div class="dropdown_5columns1">
        
            <div class="col_5">
                <h2></h2>
            </div>
            
            <div class="col_1">
    			<a href="#"> My Questions</a>
                
                   <br />
           	<a href="#"> My Article</a>
            
            
                   <br />
           	<a href="#"> Profile</a>
            
                   <br />
           	<a href="#"> Logout</a>
             </div>
            
        </div><!-- End 5 columns container -->
    
    </li><!-- End 5 columns Item -->
    
    <li> 
    
   </li>
    
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
      
    
    </ul>
  </div>


  <!-- Mini Button -->
  <div class="grid_2 nav-button">
  </div>
  
  
  <!-- Big Message -->
  <div class="grid_11 top-message"   style=" height:200px; margin-top:-70px;">
    <h1 >Welcome To <u>Ask 4 U </u></h1>
    <a href="ajax-chat/ajax-chat.html"><img src="live-chat.png" height="100" width="160"  style="margin-left:970px;"></a>
  </div>
  <div class="grid_5" style="margin-left:700px; margin-top:-180px">
  <form action="search.php" method="post">
  <input type="text" placeholder="Search" name="search" style="background-color:#CCC; height:35px; width:200px; margin-top:-10000px; border-radius:5px;"/>
  <button type="submit" name="sub_search" style="background:none;border:none; position:absolute; margin-left:-35px;" ><img src="images/search.png" height="30px" style="margin:-8px 0px 0px -10px; position:relative; cursor:pointer;"/></button>
  </form>
  </div>  
  <!-- Emty Grid -->
  <div class="grid_5">
  </div>

  
  <!-- Slide Show-->
  <div class="grid_16">
  <div id="slider-ribbon"></div>
  <div id="slider">
    <div id="slide-backs"></div>
    <div id="slides">
      <div class="slides_container">
	<!-- Start WOWSlider.com BODY section -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
<li><img src="data1/images/1.jpg" alt="Get Answers" title="Get Answers" id="wows1_0"/></li>
<li><img src="data1/images/2.jpg" alt="Helps In Porblems" title="Helps In Porblems" id="wows1_1"/></li>
<li><img src="data1/images/3.jpg" alt="Group discussion" title="Group discussion" id="wows1_2"/></li>
<li><img src="data1/images/4.jpg" alt="chat Facility" title="chat Facility" id="wows1_3"/></li>
<li><img src="data1/images/5.jpg" alt="Good Answers" title="Good Answers" id="wows1_4"/></li>
<li><img src="data1/images/6.jpg" alt="Helps in Query Solving" title="Helps in Query Solving" id="wows1_5"/></li>
</ul></div>
<div class="ws_bullets"><div>
<a href="#" title="Get Answers"><img src="data1/tooltips/1.jpg" alt="Get Answers"/>1</a>
<a href="#" title="Helps In Porblems"><img src="data1/tooltips/2.jpg" alt="Helps In Porblems"/>2</a>
<a href="#" title="Group discussion"><img src="data1/tooltips/3.jpg" alt="Group discussion"/>3</a>
<a href="#" title="chat Facility"><img src="data1/tooltips/4.jpg" alt="chat Facility"/>4</a>
<a href="#" title="Good Answers"><img src="data1/tooltips/5.jpg" alt="Good Answers"/>5</a>
<a href="#" title="Helps in Query Solving"><img src="data1/tooltips/6.jpg" alt="Helps in Query Solving"/>6</a>
</div></div>
    </div>
    </div>
  </div>
  
  <!-- Hot News-->
  <div id="hotnews-style" class="grid_12 hotnews-homepage">
    <h1><img src="image/theme/hotnews.png" alt=""  />Welcome to Ask 4 U </h1>
   <br>
   
  
   <br>
    <ul id="news">
      <li> Ask 4 U is a question and answer site for professional and enthusiast programmers. It's built and run by you as part of the Ask A Questions To Q&A sites. With your help, we're working together to build a library of detailed answers to every question about programming.

    </ul>
  </div>
  
   
<div class="grid_4" id="login-signup">
  <a href="login.php" id="homepage-login-button" >
  		<span ></span>
        		</a>
                
                
  <a href="signup.html" id="homepage-signup-button" >
  		<span></span>
        		 </a>





  </div>
 
</div>


<!-- Dot-->
<div class="dot"></div>

<!-- Top4 Start-->
<div class="container_16" >
 <a href="#login_form" id="homepage-login-button" class="green-button2">
  		<span class="green-right2"></span>
        		<img src="image/theme/login-icon.png" alt="" class="button-icon"   /><div id="loginshow">Login</div></a>
                    


              <a href="#x" class="overlay" id="login_form"></a>

           <div class="popup" id="hidelogin">
              
	
	<link rel="stylesheet"  href="login/HTML/style.css" type="text/css" />

	

	<body>
		<div class="container" style="margin-top:180px; height:10px;" id="x">
	<section id="content" style="height:300px">
			<img src="images/close.png" id="loginico" style="margin-top:-210px; margin-left:370px;"/>
        <form action="index.php" method="post" name="login_form">
		
            <h1>Ask4U Login </h1>
             
			<div>
				<input type="text" placeholder="Username" required id="username" name="username" />
			</div>
			<div>
				<input type="password" placeholder="Password" requi- id="password" name="password" />
			</div>
			<div>
				<input type="submit" value="Log in" name="submit_login" />
				<a href="reset_pwd.php">Lost your password?</a>
				<a href="Sign_up1.php">Register</a>
			</div>
		</form><!-- form -->
			</section><!-- content -->
</div><!-- container -->
 		<?php
			if(isset($_POST['submit_login']))
			{
				include("cnn.php");
				$user="select * from login where email='$_POST[username]' and password='$_POST[password]'";
				$tmp=mysql_query($user) or die(mysql_error());
				$res=mysql_fetch_assoc($tmp);
				if(mysql_num_rows($tmp)==1)
				{
					$_SESSION['user']=$_POST['username'];
					$_SESSION['password']=$_POST['password'];
					$user_id=mysql_query("select user_id from user_profile where email='$_SESSION[user]'");
					$res5=mysql_fetch_assoc($user_id);
					$_SESSION["user_id"]=$res5["user_id"];
					header("location:welcome.php");
				}
				else
				{
		?>
        	<div style="background-color:#000; color:#F00;"><?php echo "Invalid Username/Password";?> </div>
        <?php
				}
			}
		?>


</div>  

                
                
  <a href="Sign_up1.php" id="homepage-signup-button" class="red-button2">
  		<span class="red-right2"></span>
        		<img src="image/theme/icon-signup.png" alt="" class="button-icon"  /> Signup</a>

  <!-- Go!Music-->
  
  
  
  <div style="margin-left:-52px; " class="grid_4 mini-advert">
    <div id="image-hover" ><a href="#"><img src="images/call-post.png" alt=""   /></a></div>
    
  </div>
  
  <!-- Go!Video-->
  <div class="grid_4 mini-advert" style="margin-left:52px;">
 
    <a href="video.html" class="grey-button" style=" margin-left:5px;"><span class="grey-right"></span><img src="image/theme/icon-video.png" alt="" class="button-icon"  /> </a>
  </div>
  
  <!-- Go!Picture-->
  <div class="grid_4 mini-advert" >
    <div id="image-hover-three"><a href="Ask_question.php"><img  src="images/call-ask.png" alt="" /></a></div>

   
    <a href="blog.html" class="grey-button" style=" margin-left:5px;"><span class="grey-right"></span><img src="image/theme/icon-okay.png" alt="" class="button-icon"  /> </a>
  </div>
  
  <!-- Go!Billboard-->
  <div class="grid_4 mini-advert"  style="margin-left:112px;">
    <div id="image-hover-four"><a href="#"><img  src="images/call-search.png" alt="" /></a></div>
 
    <a href="blog.html" class="grey-button" style=" margin-left:5px;"><span class="grey-right"></span><img src="image/theme/icon-okay.png" alt="" class="button-icon"  /></a>
  </div>
  
</div>

<!-- Dot-->
<div class="dot" style="margin-top:26px;"></div>

<!-- Latest Elements and New Videos Start-->
<div class="container_16">


  <!-- Tab Menu Start -->
 <div style="margin-left:1px; margin-top:-10px;" class="grid_8 latest-elements">
    <h1>Recent Questions</h1>
        
    <!-- Tab Title -->
    <div class='tabbed_content'>
      <div class='tabs'>
        <div class='moving_bg'>&nbsp;</div>
        <span class='tab_item'><span class="tabs-right"></span>Recent</span>
        <span class='tab_item'><span class="tabs-right"></span>Recently Answered</span>
        <span class='tab_item'><span class="tabs-right"></span>Most Responced</span>
        <span class='tab_item'><span class="tabs-right"></span>Unanswered</span>
      </div>
    
      <!-- Tab Content -->
      <div class='slide_content' style="width:480px; height:350px;">
      <div class='tabslider'>
        
      
        <!-- #1 -->
         <ul class="tab-menu-list" style="float:left;  overflow-y:auto; height:500px">
        <?php 
			include("cnn.php");
			$qry_qns="select * from question where que_status=0 order by date desc limit 10";
			$tmp1=mysql_query($qry_qns) or die(mysql_error());
			while($res1=mysql_fetch_assoc($tmp1))
			{			
		?>
          <li><a class="ajaxpicture" href="uploads/<?php echo $res1['user_id'];?>.jpg"><img src="uploads/<?php echo $res1['user_id'];?>.jpg" alt="" height="50px" width="50"/></a>
          <span class="tab-date" style=" margin-top:-15px;"><?php echo $res1['date']; ?></span><a href="#" class="tab-menu-link" style=" margin-top:-15px;"><?php echo $res1['que_des']; ?></a><br/>
          
             <a href="answer.php?id=<?php echo $res1['que_id']; ?>&que=<?php echo $res1['que_des'];?>&op=post" class="middle-button" style="float:right;">
          			<span class="mi	ddle-right"></span>
             Post Answer
           </a>
          
          <?php
			}
		  ?>
        </ul>
  
<!--  -----------------------------------------------------------------------------------------------------------------------------------------  -->       
        <!-- #2 -->
        <ul class="tab-menu" style="float:left;  overflow-y:auto; height:500px">
        <?php
		$qry1="SELECT * FROM `question` WHERE que_status =1 ORDER BY  lastmodified desc LIMIT 4";
		$tmp2=mysql_query($qry1)or die(mysql_error());
		while($res2=mysql_fetch_assoc($tmp2))
		{
			$ans="select * from answer where que_id=$res2[que_id]";
			 $tmp3=mysql_query($ans) or die(mysql_error());
			 $res3=mysql_fetch_assoc($tmp3);

		?>
           <li><a class="ajaxpicture" href="uploads/<?php echo $res2['user_id'];?>.jpg"><img src="uploads/<?php echo $res1['user_id'];?>.jpg" alt="" height="50px" width="50"/></a>
         	 <span class="tab-date"><?php echo $res2['date'];?></span></span>
        
        	 <a href="#" class="tab-menu-link">
                 	<?php
                    echo $res2['que_des'];
					?>
                    
              </a>
        
          <a href="view_answer.php?id=<?php echo $res3['ans_id']; ?>" class="middle-button" style="float:right; margin-left:360px; margin-bottom:8px; margin-top:-18px;">
          			<span class="middle-right"></span>
             View Answer
           </a>
       </li>
       <?php
		}
	   ?>
   </ul>
<!--  -----------------------------------------------------------------------------------------------------------------------------------------  -->       
        
        <!-- #3 -->
        <ul class="tab-menu-picture-list" style="float:left;  overflow-y:auto; height:500px">
           <?php
		   		$most_res="select * from question order by num_ans desc limit 5";
				$tmp4=mysql_query($most_res) or die(mysql_error());
				while($res4=mysql_fetch_assoc($tmp4))
				{
					$ans="select * from answer where que_id=$res4[que_id]";
			 $tmp3=mysql_query($ans) or die(mysql_error());
			 $res3=mysql_fetch_assoc($tmp3);

		   ?>
           <li>
          		<a class="ajaxpicture" href="uploads/<?php echo $res4['que_id'];?>.jpg"><img href="uploads/<?php echo $res4['que_id'];?>.jpg" alt="" height="50 " width="50"/></a>
        
         	 <span class="tab-date"><?php echo $res4['date'];?></span>
        
        	 <a href="answer.php?id=<?php echo $res4['que_id']; ?>&que=<?php echo $res4['que_des'];?>&op=post" class="tab-menu-link">
                 	<?php echo $res4['que']; ?>
                    
              </a>
        
          </li>
         <a  href="view_answer.php?id=<?php echo $res3['ans_id']; ?>" class="middle-button" style="float:right; margin-left:80px; margin-bottom:8px; margin-top:-18px;">
          			<span class="middle-right"></span>
             View Answer
           </a>
       </li>
       <?php
				}
	   ?>
       
   </ul>
<!--  -----------------------------------------------------------------------------------------------------------------------------------------  -->       
        
        <!-- #4 -->
        <ul class="tab-menu-list" style="float:left;    overflow-y:auto; height:500px">
        <?php 
			$qry_qns="select * from question where que_status=0 order by date desc limit 10";
			$tmp1=mysql_query($qry_qns) or die(mysql_error());
			while($res1=mysql_fetch_assoc($tmp1))
			{			
		?>
         <li><a class="ajaxpicture" href="uploads/<?php echo $res1['user_id'];?>.jpg"><img src="uploads/<?php echo $res1['user_id'];?>.jpg" alt="" height="50px" width="50"/></a>
          <span class="tab-date" style="margin-top:0px;"><?php echo $res1['date']; ?></span><a href="#" class="tab-menu-link" style=" margin-top:-15px;"><?php echo $res1['que_des']; ?></a><br/>
           <a href="answer.php?id=<?php echo $res1['que_id']; ?>&que=<?php echo $res1['que_des'];?>&op=post" class="middle-button" style="float:right; margin-right: 	">
          			<span class="middle-right"></span>
             Post Answer
           </a>
          
          
          <?php
			}
		  ?>
        </ul>
        
      </div>
      </div>
      <!-- Content Finish -->    
    </div>
    <!-- Tab Finish -->  
  </div>
  <div style="margin-left:500px; margin-top:-450px;" class="grid_8 latest-elements">
    <h1>Recent Articles</h1>
        
    <!-- Tab Title -->
    <div class='tabbed_content' >
      <div class='tabs'>
        <div class='moving_bg'>&nbsp;</div>
        <span class='tab_item'><span class="tabs-right"></span>Recent</span>
        <span class='tab_item'><span class="tabs-right"></span>Recently Post</span>
        <span class='tab_item'><span class="tabs-right"></span>Panding</span>
      </div>
    
      <!-- Tab Content -->
      <div class='slide_content' style="width:480px; height:350px;">
      <div class='tabslider'>
        
      
        <!-- #1 -->
         <ul class="tab-menu-list" style="float:left;  overflow-y:auto; height:500px">
        <?php 
			include("cnn.php");
			$qry_qns="select * from artical where status=0 order by date desc limit 10";
			$tmp1=mysql_query($qry_qns) or die(mysql_error());
			while($res1=mysql_fetch_assoc($tmp1))
			{			
				$file="uploads/".$res1['user_id'].".jpg";
		?>
          <li> 
          <li><a class="ajaxpicture" href="uploads/<?php echo $res1['user_id'];?>.jpg"><img src="uploads/<?php echo $res1['user_id'];?>.jpg" alt="" height="50px" width="50"/></a>
		  	
          <span class="tab-date" style=" margin-top:-15px;"><?php echo $res1['date']; ?></span><a href="#" class="tab-menu-link" style=" margin-bottom::-40px;"><?php echo $res1['title']; ?></a><br/>
             
             <a href="view_article.php?id=<?php echo $res1['artical_id']; ?>" class="middle-button" style="float:right; margin-right: 	">
          			
                    <span class="middle-right"></span>
             view Article
           </a>
          
          <?php
			}
		  ?>
        </ul>
  
<!--  -----------------------------------------------------------------------------------------------------------------------------------------  -->       
        <!-- #2 -->
        <ul class="tab-menu" style="float:left;  overflow-y:auto; height:500px">
        <?php
		$qry1="SELECT * FROM artical WHERE status =1 ORDER BY  lastmodified desc LIMIT 4";
		$tmp2=mysql_query($qry1)or die(mysql_error());
		while($res2=mysql_fetch_assoc($tmp2))
		{
			$ans="select * from answer where que_id=$res2[artical_id]";
			 $tmp3=mysql_query($ans) or die(mysql_error());
			 $res3=mysql_fetch_assoc($tmp3);

		?>
           <li><a class="ajaxpicture" href="uploads/<?php echo $res1['user_id'];?>.jpg"><img src="uploads/<?php echo $res1['user_id'];?>.jpg" alt="" height="50px" width="50"/></a>
         	 <span class="tab-date"><?php echo $res2['date'];?></span></span>
        
        	 <a href="#" class="tab-menu-link">
                 	<?php
                    echo $res2['title'];
					?>
                    
              </a>
        
          <p>
          	
          </p>
          
        <a href="view_article.php?id=<?php echo $res2['artical_id']; ?>" class="middle-button" style="float:right; margin-right: 	">
          			
                    <span class="middle-right"></span>
             view Article
           </a>
       </li>
       <?php
		}
	   ?>
   </ul>
<!--  -----------------------------------------------------------------------------------------------------------------------------------------  -->       
        
        
<!--  -----------------------------------------------------------------------------------------------------------------------------------------  -->       
        
        <!-- #4 -->
        <ul class="tab-menu-list" style="float:left;    overflow-y:auto; height:500px">
        <?php 
			$qry_qns="select * from artical where status=0 order by date desc limit 10";
			$tmp1=mysql_query($qry_qns) or die(mysql_error());
			while($res1=mysql_fetch_assoc($tmp1))
			{			
		?>
          <li><a class="ajaxpicture" href="uploads/<?php echo $res1['user_id'];?>.jpg"><img src="uploads/<?php echo $res1['user_id'];?>.jpg" alt="" height="50px" width="50"/></a>
          <span class="tab-date" style=" margin-top:-15px;"><?php echo $res1['date']; ?></span><a href="#" class="tab-menu-link" style=" margin-top:-15px;"><?php echo $res1['title']; ?></a><br/>
           
          
          
          <?php
			}
		  ?>
        </ul>

        
      </div>
      </div>
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
 </div>
 <?php
 
 include('footer.php');
 
 ?>

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

  background: #090909;;
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


</style>