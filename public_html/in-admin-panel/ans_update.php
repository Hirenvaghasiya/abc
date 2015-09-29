<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<?php
	$id=$_GET['id'];
	$sel_user="select * from answer where ans_id=$id";
	$tmp=mysql_query($sel_user) or die(mysql_error());
	$res=mysql_fetch_assoc($tmp);
	
?>
<h2>Edit Answer</h2>
     
         <div class="form">
         <form action="all_answers.php" method="post" class="niceform">
         
                <fieldset>
                    <dl>
                        <dt><label for="id">Answer ID:</label></dt>
                        <dd><input type="text" name="ans_id" id="" size="54" value="<?php echo $res['ans_id']?>" readonly="readonly" /></dd>
                    </dl>
                    
                    <dl>
                        <dt><label for="id">Question ID:</label></dt>
                        <dd><input type="text" name="que_id" id="" size="54" value="<?php echo $res['que_id']?>" readonly="readonly" /></dd>
                    </dl>
                    
                    <dl>
                        <dt><label for="password">User ID:</label></dt>
                        <dd><input type="text" name="user_id" id="" size="54" value="<?php echo $res['user_id']?>" readonly="readonly" /></dd>
                    </dl>
                    
                    
                    <dl>
                        <dt><label for="password">Answer</label></dt>
                        <dd><input type="text" name="ans" id="" size="54" value="<?php echo $res['ans_des']?>" /></dd>
                    </dl>
                    
                    
                    <dl>
                        <dt><label for="password">Date</label></dt>
                        <dd><input type="text" name="date" id="" size="54" value="<?php echo $res['ans_date']?>" /></dd>
                    </dl>
                    
                    
                    
                    
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="Submit" />
                     </dl>
                     
                     
                    
                </fieldset>
                
         </form>
     
</body>
</html>