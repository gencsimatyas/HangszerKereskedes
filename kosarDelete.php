<?php

						$host="mysql.hostinger.ro";
						$username="u100450540_user";
						$password="pepsi888pepsi";
           			    $db_name="u100450540_users";
			
						
							mysql_connect("$host", "$username", "$password") or die("Sikertelen csatlakozás az adatbázisra!");
							mysql_select_db("$db_name") or die("Adatbázis hiba!");
		
								session_start();
							
									$felhasz = $_SESSION['username'];
									$hnev = $_REQUEST['menu'];
									$sql2 = 'DELETE FROM `kosar` WHERE hangszer_nev = "'.$hnev.'" and felhasznalo_nev = "'.$felhasz.'" ';
									mysql_query ($sql2);
									
									
									$sql3 = "UPDATE `Hangszerek` SET `darab`=`darab`+1 WHERE `nev` = '$hnev' ";
									mysql_query($sql3);
									
									
									
									mysql_close();
									
									header ("location:home.php?menupont=kosar");
									
									


?>