<?php
include('cnn.php');
if($_POST)
{
$q=$_POST['search'];
$sql_res=mysql_query("select que from question where que like '%$q%' or que_des like '%$q%' order by que_id LIMIT 5") or die(mysql_error());
while($row=mysql_fetch_assoc	($sql_res))
{
$que=$row['que'];
$b_que='<strong>'.$q.'</strong>';
$final_que = str_ireplace($q, $b_que, $que);
?>
<div class="show" align="left"><span class="name"><?php echo $final_que; ?></span><br/>
</div>
<?php
}
}
?>
