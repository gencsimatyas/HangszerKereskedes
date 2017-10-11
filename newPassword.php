<?php
				
						if (($_POST['myPassword'] != "")&&($_POST['newPassword'] != "")&&($_POST['newPassword2'] != ""))
					{
						session_start();
								
						$host="mysql.hostinger.ro";
						$username="u100450540_user";
						$password="pepsi888pepsi";
						$db_name="u100450540_users";
						$tableName = "Users";
				
				
						mysql_connect("$host", "$username", "$password") or die("Cannot connect to the mySql database!");
						mysql_select_db("$db_name") or die("Cannot select the database!");
			
					
					$myUsername = $_SESSION['username'];
					$myPassword = $_POST['myPassword'];
			
			
					$sql="SELECT * FROM $tableName WHERE username='$myUsername' and password='".md5($myPassword)."'";
					$result=mysql_query($sql);
			
					$count=mysql_num_rows($result);
			
					if ($_POST['newPassword'] == $_POST['newPassword2'])
					{
						$newPass = $_POST['newPassword'];
						if($count==1){
						
								$sql2 = "UPDATE `Users` SET `password`='".md5($newPass)."' WHERE username= '$myUsername' ";
								if (isset($_POST['submit']))
								{
									mysql_query ($sql2);
								}
								header("location:home.php");
						
						}
					}
					else
					{
						echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
						echo "<p align='center' style='font-size:38px'>A két jelszó nem eggyezik meg!</p>";
						echo "<hr/>"; 
					}
				}
				
				else
				
				{
						echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
						echo "<p align='center' style='font-size:38px'>Nem töltötted ki valamelyik mezőt!</p>";
						echo "<hr/>"; 
				}
				
			?>