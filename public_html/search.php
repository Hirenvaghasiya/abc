<?php
	session_start();
?>
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
       
      
      <!-- Theme -->
      
      
    </ul>
  </div><!-- Mini Button -->
  
  
  
  <!-- Big Message -->
  <div class="grid_5" style="margin-left:800px; margin-top:-70px">
  <form action="search.php" method="post">
  <input type="text" placeholder="Search" name="search" style="background-color:#CCC; height:35px; width:200px; margin-top:-10000px; border-radius:5px; border:none;"/>
  <button type="submit" name="sub_search" style="background:none;border:none; position:absolute; margin-left:-35px;" ><img src="images/search.png" height="30px" style="margin:-8px 0px 0px -10px; position:relative; cursor:pointer; z-index:10;"/></button>
  </form>
  </div>  
  <div class="grid_11 top-message" >
    <h1>Searching result</h1>
    
  <fieldset style="border:12px; border-color:#000; margin-left:-140px"><legend style=" alignment-adjust:middle;background-color:#FFF; font-size:30px; border-color:#000; border-style:solid">Question</legend>
 	<div  style="float:left; overflow-x:auto; height:500px; width:550px;">
	<?php
		error_reporting(0);
		include("cnn.php");
		$search=$_POST['search'];
		$qry="select * from question where que like '%$search%' OR que_des like '%$search%'";
		$tmp=mysql_query($qry) or die(mysql_error());
		if(mysql_num_rows($tmp)==0)
		{
			echo "No Question Found for '$search'";
		}
		else
		{
			while($res=mysql_fetch_assoc($tmp))
			{
				$ans="select * from answer where que_id=$res[que_id]";
			 	$tmp3=mysql_query($ans) or die(mysql_error());
			 	$res3=mysql_fetch_assoc($tmp3);

		?>
			<fieldset>
           <a href="answer.php?id=<?php echo $res['que_id']; ?>&que=<?php echo $res['que'];?>&op=post" class="tab-menu-link" style=" margin-bottom::-40px;"><?php echo $res['que']; ?></a>
         <?php
		 if($res['que_status']==1)
		 {
		 ?><br><br>
           <a href="view_answer.php?id=<?php echo $res3['ans_id']; ?>" class="middle-button" style="float:right; margin-bottom:8px; margin-top:-18px;">
          			<span class="middle-right"></span>
             View Answer
           </a>
           
           <a href="answer.php?id=<?php echo $res['que_id']; ?>&que=<?php echo $res['que'];?>&op=post" class="middle-button" style="float:right; margin-letf:500px; margin-top:-18px; 	">
          			
                    <span class="middle-right"></span>
             Post Answer
           </a>
           <hr>
           <?php
		 }
		 else
		 {
		?>
			 <a href="answer.php?id=<?php echo $res['que_id']; ?>&que=<?php echo $res['que'];?>&op=post" class="middle-button" style="float:right; margin-right: 	">
          			
                    <span class="middle-right"></span>
             Post Answer
           </a>
          <?php
		 }
		   ?>  
          </fieldset>
		<?php	
			}
		}
		
	?> 
    </div>  
  </fieldset>
	<fieldset style="margin-top:-550px; margin-left:500px; width:900px;"><legend style=" alignment-adjust:middle;background-color:#FFF; font-size:30px; border-color:#000; border-style:solid">Articles</legend>
    <div  style="float:left; overflow-x:auto; height:500px; width:500px;">
    <?php
		$sel_article="select * from artical where title like '%$search%'";
		$tmp2=mysql_query($sel_article) or die(mysql_query());
		if(mysql_num_rows($tmp2)==0)
		{
			echo "No Articles found for '$search'";
		}
		else
		{
			while($res2=mysql_fetch_assoc($tmp2))
			{
		?><br>
     			<fieldset>
           <a href="view_article.php?id=<?php echo $res2['artical_id']; ?>" class="tab-menu-link" style=" margin-bottom::-40px;"><?php echo $res2['title']; ?></a>
           <a href="view_article.php?id=<?php echo $res2['artical_id']; ?>" class="middle-button" style="float:right; margin-bottom:8px; margin-top:-18px;">
          			<span class="middle-right"></span>
             View Article
           </a>  
          </fieldset>
        	
        <?php
			}
		}
	?></div>
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

</body>
</html>
    