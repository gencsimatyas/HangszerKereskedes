<?php

						$host="mysql.hostinger.ro";
						$username="u100450540_user";
						$password="pepsi888pepsi";
           			    $db_name="u100450540_users";
			
						mysql_connect("$host", "$username", "$password") or die("Sikertelen csatlakozás az adatbázisra!");
						mysql_select_db("$db_name") or die("Adatbázis hiba!");
						
						$user = $_REQUEST['felhasz'];
						$inst = $_REQUEST['inst'];
						
						$sql = "UPDATE `kosar` SET `allapot`= 'sent' WHERE felhasznalo_nev = '".$user."' and hangszer_nev = '".$inst."' ";
						mysql_query ($sql);
						
						mysql_close();
						
						header("location:home.php?menupont=admin&almenu=rendeles");

?>