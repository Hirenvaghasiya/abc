<?php
	session_start();
	include("cnn.php");
	if(isset($_SESSION['admin']) && $_SESSION['pwd'])
	{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ask 4 U ADMIN PANEL</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="clockp.js"></script>
<script type="text/javascript" src="clockh.js"></script> 
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="ddaccordion.js"></script>
<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='images/plus.gif' class='statusicon' />", "<img src='images/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</script>

<script type="text/javascript" src="jconfirmaction.jquery.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>

<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />

</head>
<body>
<div id="main_container">

	<div class="header">
    <div class="logo"><a href="#"><img  src="../images/ask 4 u.png"   height="60" alt="" title="" border="0" /></a></div>
    
    <div class="right_header">Welcome <?php echo $_SESSION['admin']; ?>,   <a href="index.php?op=logout" class="logout">Logout</a></div>
    <div id="clock_a"></div>
    </div>
    
   
    <div class="main_content" >
    
                    <div class="menu" style=" font-size:12px;">
                    <ul>
                    <li><a class="current" href="index.php">Home</a></li>
                    <li><a >View All  Answers<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                        <ul>
                        <li><a href="question.php" title="">All Questions</a></li>
                        <li><a href="all_answers.php" title="">All Answers</a></li>                       </ul>
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                    </li>
                    
                   
                    <li><a>View All  Articles<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                        <ul>
                        <li><a href="all_article.php" title="">All Articles</a></li>
                        <li><a href="" title="">All Pending Articles</a></li>                       </ul>
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                    </li>
                    
                   
                    <li><a href="user.php">Manage Users<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                        <!--<ul>
                        <li><a href="" title="">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="" title="">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="" title="">Lorem ipsum dolor sit amet</a></li>
                        <li><a class="sub1" href="" title="">sublevel2<!--[if IE 7]><!--></a><!--<![endif]-->
                        <!--[if lte IE 6]><table><tr><td><![endif]-->
                            <!--<ul>
                                <li><a href="" title="">sublevel link</a></li>
                                <li><a href="" title="">sulevel link</a></li>
                                <li><a class="sub2" href="#nogo">sublevel3<!--[if IE 7]><!--></a><!--<![endif]-->
                        
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
                                <!--    <ul>
                                        <li><a href="#nogo">Third level-1</a></li>
                                        <li><a href="#nogo">Third level-2</a></li>
                                        <li><a href="#nogo">Third level-3</a></li>
                                        <li><a href="#nogo">Third level-4</a></li>
                                    </ul>
                        
                                <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                                </li>
                                <!--<li><a href="" title="">sulevel link</a></li>
                            </ul>
                        <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                        </li>
                    
                   <!--      <li><a href="" title="">Lorem ipsum dolor sit amet</a></li>
                        </ul>
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                    </li>
                    <li><a href="feedback.php">Feed Back<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                        <!--<ul>
                        <li><a href="" title="">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="" title="">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="" title="">Lorem ipsum dolor sit amet</a></li>
                        <li><a class="sub1" href="" title="">sublevel2<!--[if IE 7]><!--></a><!--<![endif]-->
                        <!--[if lte IE 6]><table><tr><td><![endif]-->
                            <!--<ul>
                                <li><a href="" title="">sublevel link</a></li>
                                <li><a href="" title="">sulevel link</a></li>
                                <li><a class="sub2" href="#nogo">sublevel3<!--[if IE 7]><!--></a><!--<![endif]-->
                        
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
                                <!--    <ul>
                                        <li><a href="#nogo">Third level-1</a></li>
                                        <li><a href="#nogo">Third level-2</a></li>
                                        <li><a href="#nogo">Third level-3</a></li>
                                        <li><a href="#nogo">Third level-4</a></li>
                                    </ul>
                        
                                <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                             <!--   </li>
                                <li><a href="" title="">sulevel link</a></li>
                            </ul>
                        <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                        <!--</li>
                    
                         <li><a href="" title="">Lorem ipsum dolor sit amet</a></li>
                        </ul>
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                    </li>
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                    </li>
                    </ul>
                    </div> 
                    
                    
                    
                              
    <div class="center_content">  
    
    
    
    <div class="left_content">
    
    		<div class="sidebar_search">
            <form>
            <input type="text" name="" class="search_input" value="search keyword" onclick="this.value=''" />
            <input type="image" class="search_submit" src="images/search.png" />
            </form>            
            </div>
    
            <div class="sidebarmenu">
            
                <a class="menuitem submenuheader" href="">All Questions</a>
                <div class="submenu">
                    <ul>
                    <li><a href="question.php">All Questions</a></li>
                    <li><a href="all_answers.php">All Answers</a></li>
                    </ul>
                </div>
                <a class="menuitem submenuheader" href="" >All Articles</a>
                <div class="submenu">
                    <ul>
                    <li><a href="all_article.php">All Pending Articles</a></li>
                    <li><a href="all_article.php">All Posted Articles</a></li>
                    </ul>
                </div>
                <a class="menuitem submenuheader" href="">All Users</a>
                <div class="submenu">
                    <ul>
                    </ul>
                </div>
                <a class="menuitem" href="feedback.php">Feed Back</a>
                    
            </div>         
            <div class="sidebar_box">
                
                <div class="sidebar_box_bottom"></div>
            </div>
            
            <div class="sidebar_box">
                <div class="sidebar_box_top"></div>
                
                <div class="sidebar_box_bottom"></div>
            </div>
              
    
    </div>  
    
    <div class="right_content">            
        
     
                    
                    
<table id="rounded-corner"  style="float:left;overflow-y:auto; height:100px">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded">Question ID</th>
            <th scope="col" class="rounded">User ID</th>
            <th scope="col" class="rounded">Question</th>
            <th scope="col" class="rounded">Status</th>
            <th scope="col" class="rounded">Edit</th>
            <th scope="col" class="rounded-q4">Delete</th>
        </tr>
    </thead>
        <tfoot>
    	<tr>
        	<td colspan="6" class="rounded-foot-left"></td>
        	<td class="rounded-foot-right">&nbsp;</td>

        </tr>
    </tfoot>
    <tbody >
     <?php
		 	if(isset($_GET['s']))
			{
		 ?>
         <div style="background-color:#9FF; color:#000; height:30px; width:250px; text-align:center; border-radius:5px">
		 <?php
		 	if($_GET['s']=='update')
			{
		  		echo "Question Successfully Updated..";
			}
			elseif($_GET['s']=='delete')
			{
				echo "Question Successfully Deleted..";
			}
		 ?></div>
         <?php
			}
		 ?>
         </div>  
    <h2>Manage Unanswer Question</h2>
    <div align="right">
    	<form action="question.php" method="post">
        <label>View Question For:-</label><select name="subject">
        <?php
			$sel_sub="select * from subject";
			$tmp1=mysql_query($sel_sub) or die(mysql_error());
			while($res1=mysql_fetch_assoc($tmp1))
			{
		?>
        <option value="<?php echo $res1['sub_id']?>"><?php echo $res1['sub_name'];?></option>
        <?php
			}
		?>
        </select>
        <input type="submit" name="submit_subject" value="submit" />
        </form>
    </div>
    
    <?php
	if(isset($_POST['submit_subject']))
	{
		$sub_id=$_POST['subject'];
		$sel_que="select * from question where sub_id=$sub_id  order by que_id desc ";
		$tmp=mysql_query($sel_que) or die(mysql_error());
		while($res=mysql_fetch_assoc($tmp))
		{
	?>
    	<tr>
        	<td><input type="checkbox" name="" /></td>
            <td><?php echo $res['que_id']; ?></td>
             <td><?php echo $res['user_id']; ?></td>
              <td><?php echo $res['que']; ?></td>
               <td><?php echo $res['que_status']; ?></td>
            
            <td><a href="question.php?id=<?php echo $res['que_id'];?>&op=edit_que"><img src="images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="question.php?id=<?php echo $res['que_id'];?>&op=delete_que" class="ask"><img src="images/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
        <?php
		}
	}
	else
	{
		$sel_que="select * from question where  que_status=0 order by que_id desc ";
		$tmp=mysql_query($sel_que) or die(mysql_error());
		while($res=mysql_fetch_assoc($tmp))
		{
	?>
    	<tr>
        	<td><input type="checkbox" name="" /></td>
            <td><?php echo $res['que_id']; ?></td>
             <td><?php echo $res['user_id']; ?></td>
              <td><?php echo $res['que']; ?></td>
               <td><?php echo $res['que_status']; ?></td>
            
            <td><a href="question.php?id=<?php echo $res['que_id'];?>&op=edit_que"><img src="images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="question.php?id=<?php echo $res['que_id'];?>&op=delete_que" class="ask"><img src="images/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
        <?php
		}
	
	}
		?>
    
    </tbody>
</table>

	 
     
        
     
     <h2></h2>
     <hr /> 
           
     <h2></h2>
     
         <div class="form">
         <form action="" method="post" class="niceform">
         
                <fieldset>
                <?php
					if(isset($_GET['op']) && $_GET['op']=='edit_que')
					{
						include("update_que.php");
						if(isset($_POST['submit']))
						{
							$que_id=$_POST['que_id'];
							$user_id=$_POST['user_id'];
							$que=$_POST['que_des'];
							$date=$_POST['date'];
							$status=$_POST['status'];
							$upd_ans="update question set que_des='$que', que_status=$status, lastmodified ='$date'  where que_id=$que_id";
							mysql_query($upd_ans) or die(mysql_error());
							unset($_GET['op']);
							header("location:question.php?s=update");
						}
					}
					if(isset($_GET['op']) && $_GET['op']=='delete_que')
					{
						$que_id=$_GET['id'];
						$del_ans="delete from question where que_id=$que_id";
						mysql_query($del_ans) or die(mysql_error());
						unset($_GET['op']);
						header("location:question.php?s=delete");
					}
					
				?>
                </fieldset>
                
         </form>
        
      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	
    
    <div class="footer">
    
    	<div class="left_footer" style="margin-left:600px">Ask 4 U | Powered by : V & V Technologies</div>
    	<div class="right_footer"></a></div>
    
    </div>

</div>		
</body>
</html>
<?php
	}
	else
	{
		header("location:index.php");
	}
?>