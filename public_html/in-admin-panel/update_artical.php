<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<?php
	$id=$_GET['id'];
	$sel_que="select * from artical where artical_id=$id";
	$tmp=mysql_query($sel_que) or die(mysql_error());
	$res=mysql_fetch_assoc($tmp);
	
?>
<h2>Edit Answer</h2>
     
         <div class="form">
         <form action="all_article.php" method="post" class="niceform">
         
                <fieldset>
                    <dl>
                        <dt><label for="id">artical ID:</label></dt>
                        <dd><input type="text" name="artical_id" id="" size="54" value="<?php echo $res['artical_id']?>" readonly="readonly" /></dd>
                    </dl>
                    
                    <dl>
                        <dt><label for="id">User ID:</label></dt>
                        <dd><input type="text" name="user_id" id="" size="54" value="<?php echo $res['user_id']?>" readonly="readonly" /></dd>
                    </dl>
                    
                    <dl>
                        <dt><label for="password">Title:</label></dt>
                        <dd><input type="text" name="title" id="" size="54" value="<?php echo $res['title']?>"  /></dd>
                    </dl>
                    
                    
                    <dl>
                        <dt><label for="password">Status:</label></dt>
                        <dd><input type="text" name="status" id="" size="54" value="<?php echo $res['status']?>" /></dd>
                    </dl>
                    
                    
                    <dl>
                        <dt><label for="password">Date:</label></dt>
                        <dd><input type="text" name="date" id="" size="54" value="<?php echo $res['date']?>" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="password">Description:</label></dt>
                        <dd ><divstyle="float:left; height:100px; overflow-y:auto;"><textarea name="des"><?php echo $res['description'];  ?></textarea></div></dd>
                    </dl>
                    

					                    
                    
                    
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="Submit" />
                     </dl>
                     
                     
                    
                </fieldset>
                
         </form>
     
</body>
</html>