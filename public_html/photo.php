<?php session_start(); ?>
<!DOCTYPE html> 
<html id="home" lang="en"> 
<head> 





<meta charset=utf-8 />
<meta name="viewport" content="width=940" />
<title>User Photo Upload</title>



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
    
    <li><a href="index.php"><u>Home</u></a><!-- Begin Home Item -->
    
    </li>
    
   
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
 <!-- End Home Item -->
    
    
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
  <div class="grid_11 top-message">
    <h1>Step 2:-  User Photo Upload</h1>
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
    <?php
		include("cnn.php");
		$sel_photo="select * from user_profile where user_id=$_SESSION[user_id]";
		$tmp=mysql_query($sel_photo) or die(mysql_error());
		$res=mysql_fetch_assoc($tmp);
	?>
          		
       			  <a class="ajaxpicture" href="uploads/<?php echo $_SESSION['user_id'];?>.jpg"><img src="uploads/<?php echo $_SESSION['user_id'];?>.jpg" alt="" height="400px" width="200px"/></a>        
             
                
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
 <input type="file" name="photoimg" id="photoimg" />
</form>
<a href="welcome.php">Goto Home Page</a>
        	
       </li>
                                                         
        </div>
       <?php
	   	if(isset($_POST['wel_submit']))
		{
			header("location:welcome.php ");
		}
		
	   ?>
  <!--  -------------------------------------------------------------------------------------------------------------------------------------------- -->   
  
  </div>
<!-- Footer Back-->
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


}
#preview
{
color:#cc0000;
font-size:12px
}


</style>


