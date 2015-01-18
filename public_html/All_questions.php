<!DOCTYPE html> 
<html id="home" lang="en"> 
<head> 
<meta charset=utf-8 />
<meta name="viewport" content="width=940" />
<title>...All Questions|Ask4u...</title>
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
   
	<br />
    <ul class="sf-menu">
      <!-- Home -->
       
      
      <!-- Theme -->
      
      
    </ul>
  </div><!-- Mini Button -->
  
  
  
  <!-- Big Message -->
  <div class="grid_11 top-message">
    <h1>Here You Can Get All The Subjects questions & Answeres</h1>
  </div>
  
  <!-- Emty Grid -->
  <div class="grid_5">
  </div>
  
  <div class="grid_16 blog-page">
    <h1>All  Subjects Listed Here</h1>

  </div>
  
  <div class="grid_16 list-page">
  
  <!-- Filter-->
    <ul class="splitter">
      <li>
        <ul>
          
          <li><a href="#" id="job" class="filter middle-button" ><span class="middle-right"></span>Asp.net </a></li>
          <li><a href="#" id="card" class="filter middle-button" ><span class="middle-right"></span>PHP </a></li>
          <li><a href="#" id="web" class="filter middle-button" ><span class="middle-right"></span>JAVA </a></li>
           <li><a href="#" id="cplus" class="filter middle-button" ><span class="middle-right"></span>C++ </a></li>
           <li><a href="#" id="c" class="filter middle-button" ><span class="middle-right"></span>C </a></li>
           <li><a href="#" id="jsf" class="filter middle-button" ><span class="middle-right"></span>JSF </a></li>
           <li><a href="#" id="ruby" class="filter middle-button" ><span class="middle-right"></span>Ruby </a></li>
           <li><a href="#" id="perl" class="filter middle-button" ><span class="middle-right"></span>PERL </a></li>
           <li><a href="#" id="andr" class="filter middle-button" ><span class="middle-right"></span>Android </a></li>
           <li><a href="#" id="unix" class="filter middle-button" ><span class="middle-right"></span>Unix</a></li>
        </ul>
      </li>
    </ul>   
    <div style="clear:both"></div>
    
    <div id="listing">
      <!--  ------------------------------------------   Asp.net  ---------------------------------------------------------------------------------- -->  
  <!--  -------------------------------------------------------------------------------------------------------------------------------------------- -->   
    <!-- #1 -->
    <div class="discounted-item job portfolio-four">		
    <ul class="tab-menu">
    <?php
		include("cnn.php");
		$sel_asp="select * from question  where sub_id=1";
		$tmp=mysql_query($sel_asp) or die(mysql_error());
		while($res=mysql_fetch_assoc($tmp))
		{
	?>
           <li>
          		<a class="ajaxpicture" href="image/post/demo.jpg"><img src="image/post/tab-1.png" alt=""/></a>
        
         	 <span class="tab-date"><?php echo $res['date'];?></span>
        
        	        	 <a href="answer.php?id=<?php echo $res['que_id']; ?>&que=<?php echo $res['que'];?>&op=post" class="tab-menu-link" style=" margin-bottom::-40px;"><?php echo $res['que']; ?></a>

              </a>
        
       
          
         <?php echo "<br>"; ?>  
             
          <?php
		}
		  ?>
       </li>
  <!--  -------------------------------------------------------------------------------------------------------------------------------------------- -->   
       
       
   </a>
        
  <!--  -------------------------------------------------------------------------------------------------------------------------------------------- -->   

   
  <!--  -------------------------------------------------------------------------------------------------------------------------------------------- -->   
        </ul>
        
        </ul>
	</div>


  <!--  ------------------------------------------------------------------   2    ------------------------------------------------------------------ -->   
    
    <!-- #2 -->
 <!--   <div class="discounted-item job portfolio-four">		
     
	</div>
    
    <!-- #3 -->
    <div class="discounted-item job portfolio-four">		

	</div>
    
    <!-- #4 -->
    <div class="discounted-item job portfolio-four">		
     
	</div>
    
    <!-- #5 -->
   <!--  ------------------------------------------  PHP ---------------------------------------------------------------------------------- -->   
   
    <div class="discounted-item card portfolio-four">		
        <ul class="tab-menu">
        <?php
			$sel_php="select * from question where sub_id=2";
			$tmp=mysql_query($sel_php) or die(mysql_error());
			while($res1=mysql_fetch_assoc($tmp))
			{
		?>
           <li>
          		<a class="ajaxpicture" href="image/post/demo.jpg"><img src="image/post/tab-1.png" alt=""/></a>
        
         	 <span class="tab-date"><?php echo $res1['date']?></span>
        
        	         	 <a href="answer.php?id=<?php echo $res1['que_id']; ?>&que=<?php echo $res1['que'];?>&op=post" class="tab-menu-link" style=" margin-bottom::-40px;"><?php echo $res1['que']; ?></a>

                    
              </a>
        
          
          
       </li>
       <?php
			}
	   ?>
   <!--  -------------------------------------------------------------------------------------------------------------------------------------------- -->   

   
    

   
  <!--  -------------------------------------------------------------------------------------------------------------------------------------------- -->   
        </ul>
        
        </ul>
	</div>
    
    <!-- #6 -->
    <div class="discounted-item card portfolio-four">		
     
	</div>
    
    <!-- #7 -->
    <div class="discounted-item card portfolio-four">		
   
	</div>
    
    <!-- #8 -->
    <div class="discounted-item card portfolio-four">		
    
	</div>
  <!--  ------------------------------------------------------------     3     -------------------------------------------------------------------- -->   
      <!--  ------------------------------------------    JAVA  ---------------------------------------------------------------------------------- -->  
    <!-- #9 -->
    <div class="discounted-item web portfolio-four">		
       <ul class="tab-menu">
           <?php
			$sel_php="select * from question where sub_id=4";
			$tmp=mysql_query($sel_php) or die(mysql_error());
			while($res1=mysql_fetch_assoc($tmp))
			{
		?>
           <li>
          		<a class="ajaxpicture" href="image/post/demo.jpg"><img src="image/post/tab-1.png" alt=""/></a>
        
         	 <span class="tab-date"><?php echo $res1['date']?></span>
        
        	         	 <a href="answer.php?id=<?php echo $res1['que_id']; ?>&que=<?php echo $res1['que'];?>&op=post" class="tab-menu-link" style=" margin-bottom::-40px;"><?php echo $res1['que']; ?></a>

                    
              </a>
        
          
          
       </li>
       <?php
			}
	   ?>
  <!--  -------------------------------------------------------------------------------------------------------------------------------------------- -->   

       
 
  <!--  -------------------------------------------------------------------------------------------------------------------------------------------- -->   

  
  <!--  -------------------------------------------------------------------------------------------------------------------------------------------- -->   

        </ul>
        
        </ul>
	</div>
    
    <!-- #10 -->
    <div class="discounted-item web portfolio-four">		
     
	</div>
    
    <!-- #11 -->
    <div class="discounted-item web portfolio-four">		
   
	</div>
    
    <!-- #12 -->
    <div class="discounted-item web portfolio-four">		
    
	</div>
  <!--  ------------------------------------------------------------     3     -------------------------------------------------------------------- -->   
      <!--  ------------------------------------------   c++  ---------------------------------------------------------------------------------- -->  
    
    
    <div class="discounted-item cplus portfolio-four">		
        <ul class="tab-menu">
           <?php
			$sel_php="select * from question where sub_id=3";
			$tmp=mysql_query($sel_php) or die(mysql_error());
			while($res1=mysql_fetch_assoc($tmp))
			{
		?>
           <li>
          		<a class="ajaxpicture" href="image/post/demo.jpg"><img src="image/post/tab-1.png" alt=""/></a>
        
         	 <span class="tab-date"><?php echo $res1['date']?></span>
        
        	 <a href="answer.php?id=<?php echo $res1['que_id']; ?>&que=<?php echo $res1['que'];?>&op=post" class="tab-menu-link" style=" margin-bottom::-40px;"><?php echo $res1['que']; ?></a>
                 
                    
             
       </li>
       <?php
			}
	   ?>

   <!--  -------------------------------------------------------------------------------------------------------------------------------------------- -->   

   
  <!--  -------------------------------------------------------------------------------------------------------------------------------------------- -->   


      </ul>
        
        </ul>
	</div>
     <!--  ------------------------------------------------------------    5    -------------------------------------------------------------------- -->   
      <!--  ------------------------------------------    C  ---------------------------------------------------------------------------------- -->  
    
     <div class="discounted-item c portfolio-four">		
        <ul class="tab-menu">
            <?php
			$sel_php="select * from question where sub_id=5";
			$tmp=mysql_query($sel_php) or die(mysql_error());
			while($res1=mysql_fetch_assoc($tmp))
			{
		?>
           <li>
          		<a class="ajaxpicture" href="image/post/demo.jpg"><img src="image/post/tab-1.png" alt=""/></a>
        
         	 <span class="tab-date"><?php echo $res1['date']?></span>
        
        	         	 <a href="answer.php?id=<?php echo $res1['que_id']; ?>&que=<?php echo $res1['que'];?>&op=post" class="tab-menu-link" style=" margin-bottom::-40px;"><?php echo $res1['que']; ?></a>

                    
             
       </li>
       <?php
			}
	   ?>
       
   <!--  -------------------------------------------------------------------------------------------------------------------------------------------- -->   

  <!--  -------------------------------------------------------------------------------------------------------------------------------------------- -->   

     </ul>
        
        </ul>
	</div>
   <!--  ------------------------------------------------------------   6    -------------------------------------------------------------------- -->   
      <!--  ------------------------------------------   JSF  ---------------------------------------------------------------------------------- -->  
      
     <div class="discounted-item jsf portfolio-four">		
        <ul class="tab-menu">
           <?php
			$sel_php="select * from question where sub_id=6";
			$tmp=mysql_query($sel_php) or die(mysql_error());
			while($res1=mysql_fetch_assoc($tmp))
			{
		?>
           <li>
          		<a class="ajaxpicture" href="image/post/demo.jpg"><img src="image/post/tab-1.png" alt=""/></a>
        
         	 <span class="tab-date"><?php echo $res1['date']?></span>
        
        	        	 <a href="answer.php?id=<?php echo $res1['que_id']; ?>&que=<?php echo $res1['que'];?>&op=post" class="tab-menu-link" style=" margin-bottom::-40px;"><?php echo $res1['que']; ?></a>

             
       </li>
       <?php
			}
	   ?>
 
   <!--  -------------------------------------------------------------------------------------------------------------------------------------------- -->   

   
  
     </ul>
        
        </ul>
	</div>
     <!--  ------------------------------------------------------------   7    -------------------------------------------------------------------- -->   
      <!--  ------------------------------------------  Ruby ---------------------------------------------------------------------------------- -->  
    
     <div class="discounted-item ruby portfolio-four">		
       <ul class="tab-menu">
           <?php
			$sel_php="select * from question where sub_id=7";
			$tmp=mysql_query($sel_php) or die(mysql_error());
			while($res1=mysql_fetch_assoc($tmp))
			{
		?>
           <li>
          		<a class="ajaxpicture" href="image/post/demo.jpg"><img src="image/post/tab-1.png" alt=""/></a>
        
         	 <span class="tab-date"><?php echo $res1['date']?></span>
        
        	        	 <a href="answer.php?id=<?php echo $res1['que_id']; ?>&que=<?php echo $res1['que'];?>&op=post" class="tab-menu-link" style=" margin-bottom::-40px;"><?php echo $res1['que']; ?></a>

                    
             
       </li>
       <?php
			}
	   ?>
 
        </ul>
        
        </ul>
	</div>
    
     <!--  ------------------------------------------------------------   8   -------------------------------------------------------------------- -->   
      <!--  ------------------------------------------   PerL ---------------------------------------------------------------------------------- -->  
    
     <div class="discounted-item perl portfolio-four">		
      <ul class="tab-menu">
           <?php
			$sel_php="select * from question where sub_id=8";
			$tmp=mysql_query($sel_php) or die(mysql_error());
			while($res1=mysql_fetch_assoc($tmp))
			{
		?>
           <li>
          		<a class="ajaxpicture" href="image/post/demo.jpg"><img src="image/post/tab-1.png" alt=""/></a>
        
         	 <span class="tab-date"><?php echo $res1['date']?></span>
        
        	        	 <a href="answer.php?id=<?php echo $res1['que_id']; ?>&que=<?php echo $res1['que'];?>&op=post" class="tab-menu-link" style=" margin-bottom::-40px;"><?php echo $res1['que']; ?></a>

            
       </li>
       <?php
			}
	   ?>
   <!--  -------------------------------------------------------------------------------------------------------------------------------------------- -->   

      </ul>
        
        </ul>
	</div>
    <!--  ------------------------------------------------------------  9    -------------------------------------------------------------------- -->   
      <!--  ------------------------------------------   Android  ---------------------------------------------------------------------------------- -->  
     
     <div class="discounted-item andr portfolio-four">		
      <ul class="tab-menu">
           <?php
			$sel_php="select * from question where sub_id=9";
			$tmp=mysql_query($sel_php) or die(mysql_error());
			while($res1=mysql_fetch_assoc($tmp))
			{
		?>
           <li>
          		<a class="ajaxpicture" href="image/post/demo.jpg"><img src="image/post/tab-1.png" alt=""/></a>
        
         	 <span class="tab-date"><?php echo $res1['date']?></span>
        
        	         	 <a href="answer.php?id=<?php echo $res1['que_id']; ?>&que=<?php echo $res1['que'];?>&op=post" class="tab-menu-link" style=" margin-bottom::-40px;"><?php echo $res1['que']; ?></a>

                    
             
       </li>
       <?php
			}
	   ?>
 

        </ul>
        
        </ul>
	</div>
    
    <!--  ------------------------------------------------------------   10   -------------------------------------------------------------------- -->   
      <!--  ------------------------------------------  Unix ---------------------------------------------------------------------------------- -->  
     
     <div class="discounted-item unix portfolio-four">		
       <ul class="tab-menu">
           <?php
			$sel_php="select * from question where sub_id=10";
			$tmp=mysql_query($sel_php) or die(mysql_error());
			while($res1=mysql_fetch_assoc($tmp))
			{
		?>
           <li>
          		<a class="ajaxpicture" href="image/post/demo.jpg"><img src="image/post/tab-1.png" alt=""/></a>
        
         	 <span class="tab-date"><?php echo $res1['date']?></span>
        
        	        	 <a href="answer.php?id=<?php echo $res1['que_id']; ?>&que=<?php echo $res1['que'];?>&op=post" class="tab-menu-link" style=" margin-bottom::-40px;"><?php echo $res1['que']; ?></a>

           
       </li>
       <?php
			}
	   ?>
 
  </ul>
  </div>
  
    
    <div style="clear:both"></div>
    <!-- Page Navi -->
    <div class="page-navi" style="margin:-18px 0px 0px -10px;">
      <ul>
      </ul>
    </div>  
  </div>
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
		

		

   
</style>


