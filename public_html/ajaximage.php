<?php
session_start();
include('cnn.php');


$path = "uploads/";

	$valid_formats = array("jpg", "png", "gif", "bmp","JPG","JPEG");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{
			$name = $_FILES['photoimg']['name'];
			$size = $_FILES['photoimg']['size'];
			$ext=pathinfo($name,PATHINFO_EXTENSION);
			$_SESSION['ext']=$ext;
			if(strlen($name))
				{
					list($txt, $ext) = explode(".", $name);
					if(in_array($ext,$valid_formats))
					{
					if($size<(1024*1024))
						{
							$tmp = $_FILES['photoimg']['tmp_name'];
							if(move_uploaded_file($tmp, "uploads/".$_SESSION['user_id'].".$ext"))
								{
									$file="uploads/".$_SESSION['user_id'].".$ext";
									$_SESSION['photo']=$file;
								mysql_query("UPDATE user_profile SET profile_pic='$file' WHERE user_id=$_SESSION[user_id]");
				?>
									<img src="<?php echo $file;?>"   class='preview'>
								
                  <?php
                                }
							else
								echo "failed";
						}
						else
						echo "Image file size is maximum 1 MB";					
						}
						else
						echo "Invalid file format..";	
				}
				
			else
				echo "Please select image..!";
				
			exit;
		}
?>