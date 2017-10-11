

	<?php
				
				
				
				$newpassowrd = $_POST['newPassword'];
				$newpassowrd2 = $_POST['newPassword2'];
				$myUsername = $_REQUEST['user'];
					
						$host="mysql.hostinger.ro";
						$username="u100450540_user";
						$password="pepsi888pepsi";
						$db_name="u100450540_users";
				
				
						mysql_connect("$host", "$username", "$password") or die("Cannot connect to the mySql database!");
						mysql_select_db("$db_name") or die("Cannot select the database!");
			
					
					
					 
					$myPassword = $_POST['myPassword'];
					
					
			
					$sql="SELECT * FROM `Users` WHERE username = '$myUsername'; ";
					$result=mysql_query($sql);
			
					$count=mysql_num_rows($result);
			
					if ($newpassowrd == $newpassowrd2)
					{
						$newPass = $newpassowrd;
						if($count==1){
						
								$sql2 = "UPDATE `Users` SET `password`='".md5($newPass)."' WHERE username= '$myUsername' ";

									mysql_query ($sql2);
									mysql_close();

								header("location:index.php");
						
						}
					}
					else
					{
						echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
						echo "<p align='center' style='font-size:38px'>A két jelszó nem eggyezik meg!</p>";
						echo "<hr/>"; 
					}
	
				?>

