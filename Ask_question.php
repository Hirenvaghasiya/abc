<?php
	session_start();
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
<title>Post Question | ASK4U </title>
<link href="my_account.css" rel="stylesheet" type="text/css"/>
<link href="css/app/general.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/style/style.css" type="text/css" />
<link rel="stylesheet" href="css/style/default.css" type="text/css" />
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
<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>

<!-- ------------------------------------------------Side bar --------------------------------------------------------------------------->
    	<meta http-equiv="Content-Type" content="text/html; charset=utf8"/>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
		<script src="js/socialbars.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="css/social.css" />
	

<div id="socialside">
</div>
<div class="jquery-script-ads"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->

 </script><script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<script> 
function _(el){ return document.getElementById(el); } 
function uploadFile(){ var file = _("file1").files[0]; (file.name+" | "+file.size+" | "+file.type); var formdata = new FormData(); formdata.append("file1", file); var ajax = new XMLHttpRequest(); ajax.upload.addEventListener("progress", progressHandler, false); ajax.addEventListener("load", completeHandler, false); ajax.addEventListener("error", errorHandler, false); ajax.addEventListener("abort", abortHandler, false); ajax.open("POST", "file_upload_parser.php"); ajax.send(formdata); } 
function progressHandler(event){ _("loaded_n_total").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total; var percent = (event.loaded / event.total) * 100; _("progressBar").value = Math.round(percent); _("status").innerHTML = Math.round(percent)+"% uploaded... please wait"; } 
function completeHandler(event){ _("status").innerHTML = event.target.responseText; _("progressBar").value = 0; } function errorHandler(event){ _("status").innerHTML = "Upload Failed"; } 
function abortHandler(event){ _("status").innerHTML = "Upload Aborted"; }
 </script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- ------------------------------------------------Side bar  End--------------------------------------------------------------------------->



<body style="overflow-x:hidden">


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
	
    <li><a  href="recent_questions.php"><u>Recent Question</u></a><!-- Begin Home Item -->
    
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
  
        
    </ul>
  </div><!-- Mini Button -->
  <div class="grid_2 nav-button">
  	<a href="login.html"  id="allpage-login-top"  title="Open Login Box" class="buton-login-mini"></a>
    <a href="signup.html" id="allpage-signup-top" title="Open Signup Modal Box" class="buton-signup-mini"></a>
    <a href="search.html" id="allpage-search-top" title="Open Search Area" class="buton-search-mini"></a>
  </div>
  
  <div class="grid_5" style="margin-left:780px; margin-top:-70px">
  <form action="search.php" method="post">
  <input type="text" placeholder="Search" name="search" style="background-color:#CCC; height:35px; width:200px; margin-top:-10000px; border-radius:5px;"/>
  <button type="submit" name="sub_search" style="background:none;border:none; position:absolute; margin-left:-35px;" ><img src="images/search.png" height="30px" style="margin:-8px 0px 0px -10px; position:relative; cursor:pointer; z-index:10;"/></button>
  </form>
  </div>
     
   <?php
  	if(isset($_SESSION["user"]) && isset($_SESSION["password"]))
	{
  ?>
  <!-- Big Message -->
  <div class="grid_11 top-message">
    <h1>Ask Questions Here</h1>
  </div>
  
  <!-- Emty Grid -->
 
  
 
  <div class="grid_12 blog-page">
    <h1>Post Your Questions</h1>
 
    <!-- Elements-->
      <div id="post-elements-two">
        <ul>
          
        </ul>
      </div>
    
    <!-- # Post-->
    <div id="post-blog-list-read" class="post-blog-read">
      <div style="display: none;">
        <div id="blog-mp3" style="width:400px;height:110px;overflow:auto;">
          <embed allowscriptaccess="always" height="81" width="400" src="http://player.soundcloud.com/player.swf?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F8643855&amp;show_comments=false&amp;auto_play=false&amp;color=070707" type="application/x-shockwave-flash"> <span><a href="#">Blog Artist Song Name</a> by <a href="#">Artist Name</a></span>
        </div>
      </div>
      <!-- Image -->
     <!-- Text -->
 

     <form action="Ask_question.php" method="post" enctype="multipart/form-data">
     <table>
     	<tr>
        	<td><b>Question</b></td>
            <td>:</td>
            <td><input type="text" name="title" width="80"  class="que" required></td>
        </tr>
        
        <tr>
        	<td><b>Tags</b></td>
            <td>:</td>
            <td><select name="subject" style="background-color: #FFF; width:100px; ">
            <option selected="Subject">Subject</option>
            	<?php
				include("cnn.php");
                $sel_sub="select * from subject";
				$res=mysql_query($sel_sub)or die(mysql_error());
				while($tmp=mysql_fetch_assoc($res))
				{
				?>
            	<option value="<?php echo $tmp['sub_id'];?>"><?php echo $tmp['sub_name'];?></option>
                <?php
				}
				?>
                </select>
            </td>
        </tr>
        
        
               <tr>
            	  <td ><b>Description</b></td>
                 <script type="text/javascript">
					tinymce.init({
    					selector: "textarea"
 					});
</script>
                  <td>:</td>
                  <td><br/><textarea name="txtque" rows="20" ></textarea></td>

               </tr>
               
      		  <tr>
                  <td colspan="3" align="center" >
                  	
                   </td>
                        
                    
                    
        	<tr>
            	<td><b>Files</b></td>
                <td>:</td>
                <td><h1><input type="file" name="myfile" id="myfile"><br> 
        		       
            </td>
            </tr>
            <tr><td colspan="3">
            <input  type="checkbox" name="terms" value="accept_terms" required checked/> I've Read And Agree To the Terms Of USE And Privacy Policy.<br />
   
            <input type="submit" name="submit" value="submit your question"  class="submit" 
    					style="width:170px; 
                        		height:35px; 
                                color:white;" />
                                
    
     <a href="index.php"> <input type="button" name="que_cancel" value="cancel ( Go Back )"  class="submit" 
    					style="width:170px; 
                        		height:35px; 
                                color:white;" /></a>
</td></tr>
             </table>
			 </form>
                <?php
			 	include("cnn.php");
				if(isset($_POST['submit']))
				{
					date_default_timezone_set('Asia/kolkata');
				
					$date = date("y/m/d h:i:s A");
					$que=$_POST['title'];
					$subject=$_POST['subject'];
					$des=$_POST['txtque']; 
								//move the uploaded file to uploads folder;
    				move_uploaded_file($_FILES["myfile"]["tmp_name"],"../Ask 4 U.com/que_files/". $_FILES["myfile"]["name"]);
    				$file="../Ask 4 U.com/que_files/". $_FILES["myfile"]["name"];
					$qry1="insert into question values('',$_SESSION[user_id],$subject,'$que','$des',0,'$date','$file',0,'$date')";
					mysql_query($qry1) or die(mysql_error());
					header("location:recent_questions.php");
				
					
				}
			 ?>             
        <br>
     <?php
	}
	else
	{
	?>
    	 <div class="grid_11 top-message">
    <h1>Login First</h1>
  </div>
     <div  style="width:389px;" > 
  
    <?php
	 	include("login_article.html");     
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
					header("location:Ask_question.php");
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
   <div>

<br />
            </div>
      
                                
   


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
    <?php
	if(isset($_SESSION['user']) && isset($_SESSION['password']))
	{
?>
    <div class="sidebar-categories" style="margin-top:-800px; margin-left:900px;">
      <h1>Advertisemet</h1>
      <h2></h2>
      <ul>
        <li><a href="#"><img src="Advertisemetn/ad24576545005a77497f8bae4dcfa014.jpg" height="250" width="250"></a></li>
        
        <li  style=" margin-top:250px;"><a href="#"><img src="Advertisemetn/PRINT_BCCAT_girl.jpg" height="250 " width="250" ></a></li>
       
          <li  style=" margin-top:250px;"><a href="#"><img  src="Advertisemetn/24273032_3.jpg" height="250 " width="250" ></a></li>
       
      </ul>
    </div>
 <?php
	}
	?>
    <!-- Tags -->
    <div class="sidebar-tags">
      <h1</h1>
      <h2></h2>
      <ul>
       
      </ul>
    </div>
    <div style="clear:both; margin-bottom:-8px;"></div>
    <!-- Archives -->
    <div class="sidebar-archives">
     
      </ul>
    </div>
  </div> 
</div>

<!-- Footer Back-->
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
</body>
</html>







<div id="slideout">
  <h3><font  color="#FFFFFF" face="Times New Roman, Times, serif" > F<br />e  <br />e  <br />d  <br />&nbsp <br />B  <br />a  <br />c  <br />k </h3></font>	
    <div id="slideout_inner">
    <?php
	include("feedback.php");
	?>
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


</style>
