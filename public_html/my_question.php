<?php
	session_start();
	include("cnn.php");
	if(isset($_SESSION["user"]) && isset($_SESSION["password"]))
	{
?>
<!DOCTYPE html> 
<html id="home" lang="en"> 
<head> 
<meta charset=utf-8 />
<meta name="viewport" content="width=940" />
<title>...My question | Ask 4 U.com...</title>


<link href="my_account.css" type="text/css" rel="stylesheet" />
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






<body>

<?php
	}
	else
	{
		header("location:index.php");
	}
?>
<!-- Container Start -->
<div class="container_16">
  
  <!-- Top Back -->
<div id="top"></div>
  <div id="top-back-two"></div>
  
 <div class="grid_3 logo">
    <a href="index.php"><img src="images/ask 4 u.png" height="60" alt=""  style="margin-left:-160px;"/></a>
  </div>
  
  <!-- Menu -->
  <div class="grid_11 menu" >
  
  <div id="nav">
<link rel="stylesheet" href="menu.css" type="text/css" media="screen" />


<!--[if IE 6]>
<style>
body {behavior: url("csshover3.htc");}
#menu li .drop {background:url("img/drop.gif") no-repeat right 8px; 
</style>
<![endif]-->


<ul id="menu"  >
    
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
    
    
    <li><a href="#"><u>My Account</a><!-- Begin Home Item -->
    
    
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
            
   
    
    </li><!-- End Home Item -->
    
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
    <h1>My Question</h1>
  </div>
  
  <!-- Emty Grid -->
  <div class="grid_5" style="margin-top:100px; margin-left:-600px; float:left;  overflow-y:auto; height:300px; width:700px">
  <?php
  	$qry_sel_que="select * from question where user_id=$_SESSION[user_id] order by date desc";
	$tmp=mysql_query($qry_sel_que) or die(mysql_error());
	while($res=mysql_fetch_assoc($tmp))
	{
		echo "<h1>Que:-$res[que_des]</h1>";
		$qry_sel_ans="select * from answer where que_id=$res[que_id]";
		$tmp1=mysql_query($qry_sel_ans) or die(mysql_error());
		$res1=mysql_fetch_assoc($tmp1);
		echo "<h1>Ans:-</h1>$res1[ans_des]";
		echo "<hr/>";
	}
  ?>
  </div>
  
  <div class="grid_16 blog-page">
    <h1></h1>

  </div>
  
 
  <!--  ------------------------------------------   Asp.net  ---------------------------------------------------------------------------------- -->  


 
 
    <!-- #1 -->
 
   <div class="discounted-item job portfolio-four2" style="margin-left:300px;">		
    <ul class="tab-menu" style="margin-left:0px; margin-top:200px">
  
          		  
 <div style="margin-top:130px; margin-left:500px">
 
 </div>

  </div>

        </div>
  <!--  -------------------------------------------------------------------------------------------------------------------------------------------- -->   
  
  </div>
<!-- Footer Back-->
<div id="footer-back"></div>
<div class="container_16">
  <div id="footer-register" class="grid_8" style="background-color:#CCC; width:1355px; height:30px; margin-left:-200px;">
  <center>
   <table>
   				<tr>
    				<td><p class="box" style="height:40px; width:130px;"><a href="#" style=" margin-left:45px; color: #FFF;">
                    <h4 style=" margin-top:-50px;">    Home</h4>  </a></p></td>
                    
                    <td><p class="box" style="height:40px; width:130px;"><a href="contact.php" style=" margin-left:25px; color: #FFF;"> 
                      <h4 style=" margin-top:-50px;"> Contact US</a> </p></td>
               
                    <td><p class="box" style="height:40px; width:130px;"><a href="#" style=" margin-left:25px; color: #FFF;">  
                      <h4 style=" margin-top:-50px;"> About US </a> </p></td>
                      
                    <td><p class="box" style="height:40px; width:130px;"><a  href="Privacy policy.php" style=" margin-left:15px; color: #FFF;"> 
                      <h4 style=" margin-top:-50px;"> Privacy Policy</a> </p></td>
                      
                    <td><p class="box" style="height:40px; width:130px;"><a href="#" style=" margin-left:35px; color: #FFF;"> 
                      <h4 style=" margin-top:-50px;">  Licence </a> </p></td>
                    
               </tr>
               </table>
      <p>Copright © 2014 V&V Technologies All rights reserved.</p></center>
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


