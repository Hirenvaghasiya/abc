<?php
	session_start();
	include("cnn.php");
?>

<!DOCTYPE html> 
<html id="home" lang="en"> 
<head> 
<script type="text/javascript"> 
tinyMCE.init({
    mode : "textareas",
        editor_selector : "mceEditor",
   theme : "advanced",
    theme_advanced_toolbar_location : "top",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true
});
</script>
<script type="text/javascript" src="js/tinymce/js/tinymce/tinymce.min.js"></script>
<meta charset=utf-8 />
<meta name="viewport" content="width=940" />
<title>Answer</title>
<link href="my_account.css" type="text/css" rel="stylesheet">
<link href="css/app/general.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/style/style.css" type="text/css" />
<link rel="stylesheet" href="css/style/default.css" type="text/css" />
<link rel="alternate stylesheet" type="text/css" title="happy" href="css/style/happy.css" />
<link rel="alternate stylesheet" type="text/css" title="piano" href="css/style/piano.css" />
<link rel="alternate stylesheet" type="text/css" title="city" href="css/style/city.css" />
<link rel="alternate stylesheet" type="text/css" title="play" href="css/style/play.css" />
<link rel="alternate stylesheet" type="text/css" title="casette" href="css/style/casette.css" />
<link rel="alternate stylesheet" type="text/css" title="tape" href="css/style/tape.css" />

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


<!-- ------------------------------------------------Side bar --------------------------------------------------------------------------->
  <!---- ------------------------------------------------Side bar  End--------------------------------------------------------------------------->



<body  style="overflow-x:hidden">

<!-- Container Start -->
<div class="container_16">
  
  <!-- Top Back -->
  <div id="top"></div>
  <div id="top-back-two"></div>
  
 <div class="grid_3 logo">
    <img src="images/ask 4 u.png" height="60" alt=""  style="margin-left:-160px;"/>
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
	
-    <li><a href="recent_questions.php"><u>Recent Question</a><!-- Begin Home Item -->
    
    </li><!-- End Home Item -->
    
    
    
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
  </div><!-- Mini Button -->
  <div class="grid_5" style="margin-left:800px; margin-top:-70px">
  <form action="search.php" method="post">
  <input type="text" placeholder="Search" name="search" style="background-color:#CCC; height:35px; width:200px; margin-top:-10000px; border-radius:5px; border:none"/>
  <button type="submit" name="sub_search" style="background:none;border:none; position:absolute; margin-left:-35px;" ><img src="images/search.png" height="30px" style="margin:-8px 0px 0px -10px; position:relative; cursor:pointer; z-index:10;"/></button>
  </form>
  </div>  
  
  
  <!-- Big Message -->
  <?php
  if(isset($_SESSION['user']) && isset($_SESSION['password']))
  {
  ?>
  <div class="grid_11 top-message" >
    <h1>Post your Answer</h1>
  </div>
  
  <!-- Emty Grid -->
 <!-- <div class="grid_5" style="margin-left:-700px; margin-top:0px">
  <form action="search.php" method="post">
  <input type="text" placeholder="Search" name="search" style="background-color:#CCC; height:35px; width:200px; margin-top:-10000px; border-radius:5px; border:none;"/>
  <button type="submit" name="sub_search" style="background:none;border:none; position:absolute; margin-left:-35px;" ><img src="images/search.png" height="30px" style="margin:-8px 0px 0px -10px; position:relative; cursor:pointer; z-index:10;"/></button>
  </form>-->
  <div class="grid_12 blog-page">
    <h1><?php  
			if(isset($_GET['op']))
			{
				include("cnn.php");
				$que=$_GET['que'];
				$id=$_GET['id'];
				echo "Que.:- $_GET[que]";
			}
			?></h1>
 
    <!-- Elements-->
   
      <script type="text/javascript">
					tinymce.init({
    					selector: "textarea"
 					});
</script>
		<form action="answer.php" method="post" enctype="multipart/form-data">
         <input type="hidden" name="que_id" value="<?php if (isset($id)){echo $id;}?>"/>
        <h1>Post Answer:-</h1><textarea rows="20" name="txtans"></textarea><br>
        <h1>File:-<h1><input type="file" name="myfile" /><br/>
        <input type="submit" name="sub_ans" value="POST ANSWER" style="width:170px; height:35px; color:white;" class="submit"/>
        </form>
        <?php
  }
  else
  {
?>
	<div class="grid_11 top-message">
    <h1>Login First</h1>
  </div>
     <div  style="width:389px;" > 
                                    
   	    
    	<font face="Times New Roman, Times, serif"   color="#0066FF" size="+2" ><u><h2> Existign User </h2>	</u> </font><br /> Sign in To your Account
        
        <table>
            	<form action="answer.php" method="post">
                <tr>
                	<td><b>Email</b></td>
                  <td>:</td>
                  <td><input type="text" name="username"   class="queemail" /></td>
                </tr>
                <tr>
                	<td><b>Password</b></td>
                  <td>:</td>
                  <td><input type="password" name="password" class="queemail"/></td>
                </tr>
                <tr>
                <td></td>
                <td colspan="2" align="center">  <input type="submit" name="submit_login" value="LOGIN" style="width:170px; height:35px; color:white;" class="submit"/></td>
               </tr>
               <tr> 
                <td colspan="3"  align="center"><p style="margin-left:70px;"><a href="#"> Forgot Your Password ? </a></p></td>
                </tr>
                </form>
             </table>
   <?php
	}

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
					$res1=mysql_fetch_assoc($user_id);
					$_SESSION["user_id"]=$res1["user_id"];
					header("location:answer.php");
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
<?php
  
 
	if(isset($_POST['sub_ans']))
	{
		$id=$_POST['que_id'];
		$ans=$_POST['txtans'];
		date_default_timezone_set('Asia/kolkata');
		$date = date("y/m/d h:i:s A");
		move_uploaded_file($_FILES['myfile']['tmp_name'],"../Ask 4 U.com/answer_files".$_FILES['myfile']['name']);
		$file="../Ask 4 U.com/answer_files/".$_FILES['myfile']['name'];
		$in_ans="insert into answer values('',$id,$_SESSION[user_id],'$ans','$file','$date')";
		mysql_query($in_ans) or die(mysql_error());
		$cng_sts="update question set que_status=1 where que_id=$id";
		mysql_query($cng_sts) or die(mysql_error());
		$sel="select * from question where que_id=$_POST[que_id]";
		$tmp=mysql_query($sel) or die(mysql_error());
		$res=mysql_fetch_assoc($tmp);
		$num_ans=$res['num_ans']+1;
		$qry1="update question set num_ans=$num_ans where que_id=$id";
		mysql_query($qry1) or die(mysql_query());
		header("location:index.php");
		
	}
?>     
      </div>
    
    <!-- # Post-->
    <div id="post-blog-list-read" class="post-blog-read">
      <div style="display: none;">
        <div id="blog-mp3" style="width:400px;height:110px;overflow:auto;">
        </div>
      </div>
      <!-- Image -->
     <!-- Text -->
     <br>
               
                <div  style="width:389px; height:500px;" > 
                                    
        
             
        
   </div>
   <div>

 </div>
   
     
      
      <!-- Leave Comment-->
     
      <div style="display: none;">
        <div id="write-comment" class="popup-comment">
          <h1 style="margin-left:16px; padding-top:16px;">Leave Comments</h1>
          <form action="#">
            <fieldset><input name="Name" type="text" value="Name:" onfocus="if(this.value=='Name:')this.value='';" onblur=	"if(this.value=='')this.value='Name:';"/></fieldset>  
            <fieldset><input name="Mail" type="text" value="E-Mail:" onfocus="if(this.value=='E-Mail:')this.value='';" onblur=	"if(this.value=='')this.value='E-Mail:';"/></fieldset>
            <fieldset><input name="Web" type="text" value="Web:" onfocus="if(this.value=='Web:')this.value='';" onblur=	"if(this.value=='')this.value='Web:';"/></fieldset>
            <fieldset><textarea name="Message" onfocus="if(this.value=='Message:')this.value='';" onblur=	"if(this.value=='')this.value='Message:';">Message:</textarea></fieldset>
            <fieldset><input type="submit" value="Send" /></fieldset>
          </form>
        </div>
      </div>
      
    </div>
    

  </div>
  
  <!-- Sidebar -->
  <div class="grid_4 alpha">
    <!-- Categories -->
    <div class="sidebar-categories">
    </div>
    <!-- Tags -->
    <div class="sidebar-tags">
      <h1</h1>
      <h2></h2>
    </div>
    <div style="clear:both; margin-bottom:-8px;"></div>
    <!-- Archives -->
    <div class="sidebar-archives">
     
  </ul>
</div>
  </div> 
</div>

<!-- Footer Back-->
<div id="footer-back"></div>
<?php
	include("footer1.php");
?>
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







<div id="slideout">
  <h3><font  color="#FFFFFF" face="Times New Roman, Times, serif" > F<br />e  <br />e  <br />d  <br />&nbsp <br />B  <br />a  <br />c  <br />k </h3></font>	
    <div id="slideout_inner">
    	<?php
			include("feedback.php");
		?>
        
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
		


.que
{
	width:450px;
	height:27px;
	border-radius:3px;
		
	
}

.queemail
{
	width:220px;
	height:27px;
	border-radius:3px;
		
	
}
.submit {
        border: 0;
        background: #333;
        border-radius: 4px;
       box-shadow: 0 1px 0 rgba(255, 255, 255, 0.15), 0 5px 0   #FFFFFF;
         
        
        font-weight: bold;
    transition: all .1s linear;
		
        }
        .submit:hover 
		{
			color: #333;
         
		
        }
        .submit:active {
		
        
        transform: translateY(3px);
        }
		


</style>