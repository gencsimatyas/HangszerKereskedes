			<?php
                    
                    session_start();
								
						$host="mysql.hostinger.ro";
						$username="u100450540_user";
						$password="pepsi888pepsi";
						$db_name="u100450540_users";
						$tableName = "Users";
				
				
						mysql_connect("$host", "$username", "$password") or die("Cannot connect to the mySql database!");
						mysql_select_db("$db_name") or die("Cannot select the database!");
			
					$myUsername = $_SESSION['username'];
			
					$sql="DELETE FROM `Users` WHERE username = '$myUsername';";
					$result=mysql_query($sql);
					
					include "logout.php";
					
					header("location:index.php");
					
					mysql_close();
					
		      ?>