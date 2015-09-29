<!DOCTYPE html> 
<html id="home" lang="en"> 
<head> 
<meta charset=utf-8 />
<meta name="viewport" content="width=940" />
<title>...All Questions|Ask4u...</title>
<link href="my_account.css" type="text/css" rel="stylesheet"/>
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
       <li><a href="Ask_question.php"><u>Ask A question</u></a><!-- Begin Home Item -->
    
    </li>
     <li><a   href="All_questions.php"><u>All Answeres</u></a><!-- Begin Home Item -->
    
    </li> 

           
  <li><a  href="post_artical.php"><u>Post Article</u></a><!-- Begin Home Item -->
    
    </li><!-- End Home Item -->
	
    <li><a  href="recent_questions.php"><u>Recent Question</u></a><!-- Begin Home Item -->
    
    </li><!-- End Home Item -->
        
    
    
    </li>
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
    
    <li>
    <img src="images/aero.png" height="20" width="20"  style="margin-left:-110px;;">
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
       
      
      <!-- Theme -->
      
      
    </ul>
  </div><!-- Mini Button -->
  
  
  
  <!-- Big Message -->
  <div class="grid_11 top-message" >
    <h1>Articles</h1>
  <fieldset style="border:12px; border-color:#000;"><legend style=" alignment-adjust:middle;background-color:#FFF; font-size:30px; border-color:#000; border-style:solid">Article</legend>
 	<?php
		include("cnn.php");
		$id=$_GET['id'];
		$qry="select * from artical where artical_id=$id";
		$tmp=mysql_query($qry) or die(mysql_error());
		
			$res=mysql_fetch_assoc($tmp);
				
		?>
			<fieldset><legend><?php echo $res['title'];?></legend>
            <?php
				echo $res['description'];
				if(isset($res['file']))
				{
				?>
                <a href="<?php echo $res['file'];?>">Download File</a>
				<?php
                
				}
			?>
  </fieldset>
	 
  </div>
  
  
  
  <div class="grid_16 list-page">
     
    <div style="clear:both"></div>
    
    <div id="listing"></div>
      <!--  ------------------------------------------   Asp.net  ---------------------------------------------------------------------------------- -->  
  <!--  -------------------------------------------------------------------------------------------------------------------------------------------- -->   
    <!-- #1 -->
    <div class="discounted-item job portfolio-four">		
</div>
<!-- Footer Back-->
<div id="footer-back"></div>
<?php
	include("footer.php");
?>
  </div>
</div>
</body>
</html>
    