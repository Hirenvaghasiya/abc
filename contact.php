<!DOCTYPE html> 
<html id="home" lang="en"> 
<head> 
<meta charset=utf-8 />
<meta name="viewport" content="width=940" />
<title>The Multimedia | HTML Themes</title>

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
<script src="js/styleswitch.js"></script>
</head>
<body>
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
	<!-- Begin Home Item -->
    
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
   

  
  
  <!-- Big Message -->
  <div class="grid_11 top-message" style="margin-top:120px; margin-left:-155px;">
    <h1>Ask 4 U  Contact</h1>
  </div>
  
  <!-- Emty Grid -->
  <div class="grid_5">
  </div>
  
  <div class="grid_16 blog-page">
    <h1>Ask 4 U Contact</h1>
   </div>
  
  <!-- Detail -->
  <div style="margin:14px 0px 0px 0px;" class="grid_11 post-blog-read">
    <img src="image/post/left-image2.png" alt="" class="image-left" />
    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish.</p>
    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</p>
    
    <!-- Form-->
      <a id="code" href="#write-comment" title="Open Contact Form!" class="middle-button" style=" margin:0px 0px 0px 4px;"><span class="middle-right"></span>Contact</a>
      <div style="display: none;">
        <div id="write-comment" class="popup-comment">
          <h1 style="margin-left:16px; padding-top:16px;">Contact Form</h1>
          <form action="#">
            <fieldset><input name="Name" type="text" value="Name:" onfocus="if(this.value=='Name:')this.value='';" onblur=	"if(this.value=='')this.value='Name:';"/></fieldset>  
            <fieldset><input name="Mail" type="text" value="E-Mail:" onfocus="if(this.value=='E-Mail:')this.value='';" onblur=	"if(this.value=='')this.value='E-Mail:';"/></fieldset>
            <fieldset><input name="Web" type="text" value="Web:" onfocus="if(this.value=='Web:')this.value='';" onblur=	"if(this.value=='')this.value='Web:';"/></fieldset>
            <fieldset><textarea name="Message" onfocus="if(this.value=='Message:')this.value='';" onblur=	"if(this.value=='')this.value='Message:';">Message:</textarea></fieldset>
            <fieldset><input type="submit" value="Send" /></fieldset>
          </form>
      </div></div>
  </div>
  
  <div style="margin:28px 0px 0px 20px; margin-left:-230px;" class="grid_5">
    <!-- #1 -->
 <iframe width="1100" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Swastik+Plaza,+Nana+Varachha,+Surat,+Gujarat&amp;aq=0&amp;oq=swastik+pl&amp;sll=21.1592,72.822296&amp;sspn=0.366281,0.676346&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;ll=21.21484,72.888429&amp;spn=0.006295,0.006295&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Swastik+Plaza,+Nana+Varachha,+Surat,+Gujarat&amp;aq=0&amp;oq=swastik+pl&amp;sll=21.1592,72.822296&amp;sspn=0.366281,0.676346&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;ll=21.21484,72.888429&amp;spn=0.006295,0.006295&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small> </div>
  
</div>

<!-- Footer Back-->
<div id="footer-back"></div>
<?php
  include("footer.php");
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
    -webkit-transition-duration: 0.5s;
    -moz-transition-duration: 0.5s;
    transition-duration: 0.5s;
    -o-transition-duration: 0.5s;
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
    -webkit-transition-duration: 0.5s;
    -moz-transition-duration: 0.5s;
    transition-duration: 0.5s;
    -o-transition-duration: 0.5s;
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