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
<script> 
function _(el){ return document.getElementById(el); } 
function uploadFile(){ var file = _("file1").files[0]; (file.name+" | "+file.size+" | "+file.type); var formdata = new FormData(); formdata.append("file1", file); var ajax = new XMLHttpRequest(); ajax.upload.addEventListener("progress", progressHandler, false); ajax.addEventListener("load", completeHandler, false); ajax.addEventListener("error", errorHandler, false); ajax.addEventListener("abort", abortHandler, false); ajax.open("POST", "file_upload_parser.php"); ajax.send(formdata); } 
function progressHandler(event){ _("loaded_n_total").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total; var percent = (event.loaded / event.total) * 100; _("progressBar").value = Math.round(percent); _("status").innerHTML = Math.round(percent)+"% uploaded... please wait"; } 
function completeHandler(event){ _("status").innerHTML = event.target.responseText; _("progressBar").value = 0; } function errorHandler(event){ _("status").innerHTML = "Upload Failed"; } 
function abortHandler(event){ _("status").innerHTML = "Upload Aborted"; }
 </script>
<script type="text/javascript" src="js/tinymce/js/tinymce/tinymce.min.js"></script>
<meta charset=utf-8 />
<meta name="viewport" content="width=940" />
<title>..POST ARTICAL | ASK4U..</title>
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
</head>
<body>

<!-- Container Start -->
<div class="container_16">
  
  <!-- Top Back -->
  <div id="top"></div>
  <div id="top-back-two"></div>
  
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
    
    <li><a  href="index.php"><u>Home</u></a><!-- Begin Home Item -->
    
    </li><!-- End Home Item -->
    
   -
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
           
  <li><a  href="Post_Artical.php"><u>Post Article</a><!-- Begin Home Item -->
    
    </li><!-- End Home Item -->
	
    <li><a href="recent_questions.php"><u>Recent Question</a><!-- Begin Home Item -->
    
    </li><!-- End Home Item -->
    
    
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
  <?php
  	if(isset($_SESSION['user']) && isset($_SESSION['password']))
	{
		
  ?>
  <!-- Big Message -->
  <div class="grid_11 top-message">
    <h1>Post your Article Here</h1>
  </div>
  
  <!-- Emty Grid -->
  <div class="grid_5">
  </div>
  
  <div class="grid_12 blog-page">
    <h1>Post Article</h1>
 
    <!-- Elements-->
       <div class="" style="width:330px;height:750px; ">
                
      </div>
      
    	
        <div class="" style="width:800px;margin-top:-720px;">
          
       
      
      <br />
      
      <div style="height:430px">
      
      <font size="+3">
      	<u>
      	 	Submit a new Article
         </u>
       </font>
            <br />
            <br />
            <br />
           <font size="+2"> Option 1: Post directly using the Submission Page</font>
           <br />
            <br />
            
  		<div style=" margin-left:85px;">
            1. You can post your article directly to the site using the online submission page.
            <br />
            <br />
            
            2. You need to logon to use the submission page.
      	
     </div>
 
 <br />
 <br />    
      
          <font size="+2">  Option 2: Send your article to an editor and have us do the hard work</font>
            <br />
            <br />
            
        <div style=" margin-left:85px;">
           1. Write your article, gather your images and download files, and zip them all together in one file.
            <br />
            <br />
           2. Send the article package to us using the online form below, or email the files to us at <br><a href="#"><u>Submit@ask4u.com</u></a>
      		
            <br />
            <br />
           3. An editor will review, format and post your article, then email you to let you know the article <br> is now available for viewing. Articles posted by an editor in this fashion are not subject to community <br>moderation. Once posted by an editor they are immediately available
           
           <br />
            <br />
            We aim to process all submissions within 24-48 hrs (excluding weekends).
     </div>
      </div>
 </div>     
      <!-- Image -->
     <!-- Text -->
     <div class="grid_12 blog-page">
    <h1></h1>
 
    <!-- Elements-->
   
      <script type="text/javascript">
					tinymce.init({
    					selector: "textarea"
 					});
</script>
		<form action="post_artical.php" method="post" enctype="multipart/form-data">
       	</h1>
        <h1>
        Artical title:-<input type="text" name="txttitle" style="height:35px; width:400px" required/>
        </h1>
         <h1>Subject:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <select name="subject" style="height:35px; width:130px; text-align:center; font-size:16px; margin-bottom:10px">
         <option selected="selected">Subject</option>
         <?php
		 	$sel_sub="select * from subject";
			$tmp=mysql_query($sel_sub) or  die(mysql_errno());
			while($res=mysql_fetch_assoc($tmp))
			{
		?>
        		<option value="<?php echo $res['sub_id'];?> "><?php echo $res['sub_name'];?></option>
        <?php
			}
		 ?>
         </select>
         </h1>
         <h1>Write Artical:-</h1><textarea rows="20" name="txtans"></textarea><br>
        <h1>File:- <input type="file" name="file1" id="file1"><br> 
        	
     <br>
        <input  type="checkbox" name="terms" value="accept_terms" required/> I've Read And Agree To the Terms Of USE And Privacy Policy.<br /><br />

        <input type="submit" name="sub_artical" value="POST ARTICAL" style="width:170px; height:35px; color:white; background-color:#000;" class="button"/>
       <a href="index.php"> <input type="button" name="que_cancel" value="CANCLE( Go Back )"  class="button" 
    					style="width:170px; 
                        		height:35px; 
                                color:white; background-color:#000;" /></a>

        </form>
        


  <!-- Sidebar -->
  <div class="grid_4 alpha">
    <!-- Categories -->
    <div class="sidebar-categories" style="margin-top:-1300px; margin-left:800px">
      <h1>Advertisemet</h1>
      <h2></h2>
      <ul>
        <li><a href="#"><img src="Advertisemetn/ad24576545005a77497f8bae4dcfa014.jpg" height="250" width="250"></a></li>
        
        <li  style=" margin-top:250px;"><a href="#"><img src="Advertisemetn/PRINT_BCCAT_girl.jpg" height="250 " width="250" ></a></li>
       
          <li  style=" margin-top:250px;"><a href="#"><img  src="Advertisemetn/24273032_3.jpg" height="250 " width="250" ></a></li>
       
      </ul>
    </div>
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
					header("location:post_artical.php");
				}
				else
				{
		?>
        	<div style="background-color:#000; color:#F00;"><?php echo "Invalid Username/Password";?> </div>
        <?php
				}
		}
       ?>
        <?php
			if(isset($_POST['sub_artical']))
			{
				date_default_timezone_set('Asia/kolkata');
				$date = date("y/m/d h:i:s A");
				$email=$_POST['txtemail'];
				$title=$_POST['txttitle'];
				$subject=$_POST['subject'];
				$artical=$_POST['txtans'];
				move_uploaded_file($_FILES["file1"]["tmp_name"],"../Ask 4 U.com/article_files/".$_FILES["file1"]["name"]);
				$file="article_files/".$_FILES["file1"]["name"];
				$qry="insert into artical values('',$_SESSION[user_id],$subject,'$email','$title','$artical','$file',0,'$date','')";
				mysql_query($qry) or die(mysql_error());
			}
		?>
        
      </div>
          
        <br>
               
                <div  style="width:389px;" > 
                                    
   	    
    	
   </div>
   <div 	>

<br />
   
    
                       
      &nbsp&nbsp&nbsp
                                
    

 </div>
   
     
      
      <!-- Leave Comment-->
     </div>
    

  </div>
  
<!-- Footer Back-->
<div id="footer-back"></div>
<div class="container_16">
  <?php
  
  	include('footer1.php');
  
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
    <div id="slideout_inner">
    </div>
</body>
</html>
       
       <style type="text/css">
	   
	   

	   
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