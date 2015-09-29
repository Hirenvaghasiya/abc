<?php
	$id=$_GET['id'];
	$sel_user="select * from user_profile where user_id=$id";
	$tmp=mysql_query($sel_user) or die(mysql_error());
	$res=mysql_fetch_assoc($tmp);
	$sel_pwd="select * from login where email='$res[email]'";
	$tmp2=mysql_query($sel_pwd) or die(mysql_error());
	$pwd=mysql_fetch_assoc($tmp2);
?>
<h2>User Profile Information</h2>
     
         <div class="form">
         <form action="user.php" method="post" class="niceform">
         
                <fieldset>
                    <dl>
                        <dt><label for="id">User ID</label></dt>
                        <dd><input type="text" name="user_id" id="" size="54" value="<?php echo $res['user_id']?>" /></dd>
                    </dl>
                    
                    <dl>
                        <dt><label for="id">Email</label></dt>
                        <dd><input type="text" name="email" id="" size="54" value="<?php echo $res['email']?>" /></dd>
                    </dl>
                    
                    <dl>
                        <dt><label for="password">Password:</label></dt>
                        <dd><input type="text" name="passwd" id="" size="54" value="<?php echo $pwd['password']?>" /></dd>
                    </dl>
                    
                    
                    <dl>
                        <dt><label for="password">First Name</label></dt>
                        <dd><input type="text" name="fname" id="" size="54" value="<?php echo $res['fname']?>" /></dd>
                    </dl>
                    
                    
                    <dl>
                        <dt><label for="password">Last Name</label></dt>
                        <dd><input type="text" name="lname" id="" size="54" value="<?php echo $res['lname']?>" /></dd>
                    </dl>
                    
                    
                    
                    <dl>
                        <dt><label for="password">Date Of Birth</label></dt>
                        <dd><input type="text" name="date_of_birth" id="" size="54" value="<?php echo $res['date_of_birth']?>" /></dd>
                    </dl>
                    
                    
                    <dl>
                        <dt><label for="password">Mobile Number</label></dt>
                        <dd><input type="text" name="mobile_no" id="" size="54" value="<?php echo $res['mobile_no']?>" /></dd>
                    </dl>
                    
                    
                    <dl>
                        <dt><label for="password">Profile Picture</label></dt>
                        <dd><input type="text" name="mobile_no" id="" size="54" /></dd>
                    </dl>
                    
                    
                    <dl>
                    
                    </dl>
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="Submit" />
                     </dl>
                     
                     
                    
                </fieldset>
                
         </form>
     
