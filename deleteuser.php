<?php

						$host="mysql.hostinger.ro";
						$username="u100450540_user";
						$password="pepsi888pepsi";
           			    $db_name="u100450540_users";
			
						
							mysql_connect("$host", "$username", "$password") or die("Sikertelen csatlakozás az adatbázisra!");
							mysql_select_db("$db_name") or die("Adatbázis hiba!");
		

							
								
									$nev = $_REQUEST['menu'];
									$sql2 = 'DELETE FROM `Users` WHERE username = "'.$nev.'"';
									mysql_query ($sql2);
									
									
									$sql = 'DELETE FROM `kosar` WHERE felhasznalo_nev = "'.$nev.'" ';
									mysql_query ($sql);
									
									mysql_close();
									
									header ("location:home.php?menupont=admin&almenu=users");
									
									


?>