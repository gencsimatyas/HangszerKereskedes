<?php

	
		session_start();
		
		$user = $_SESSION['username'];
		$hangszer = $_REQUEST['menu'];
		
		
						$host="mysql.hostinger.ro";
						$username="u100450540_user";
						$password="pepsi888pepsi";
           			    $db_name="u100450540_users";
			
						mysql_connect("$host", "$username", "$password") or die("Sikertelen csatlakozás az adatbázisra!");
						mysql_select_db("$db_name") or die("Adatbázis hiba!");	
						
			$sql = "SELECT  `kep`, `nev`, `ar`, `darab` FROM `Hangszerek` WHERE `nev` = '$hangszer' ";
			$result = mysql_query($sql);
			
			$qsl = "SELECT `cim` FROM `Users` WHERE username = '$user' ";
			$sult = mysql_query($qsl);
			$re = mysql_fetch_array($sult);
			
			$cim = $re['cim'];
			
			while ($inst = mysql_fetch_array($result))
			{
				$hangszer_nev = $inst['nev'];
				$hangszer_kep = $inst['kep'];
				$hangszer_ar = $inst['ar'];
				$darab = $inst['darab'];
				
				$sql3 = "UPDATE `Hangszerek` SET `darab`='$darab'-1 WHERE `nev` = '$hangszer' ";
				mysql_query($sql3);
				
				$sql2 = "INSERT INTO `kosar`(`felhasznalo_nev`, `hangszer_nev`, `hangszer_kep`, `hangszer_ar`, `allapot`, `cim`) VALUES ('$user','$hangszer_nev','$hangszer_kep','$hangszer_ar', 'nem', '$cim');";
				mysql_query($sql2);
				
				mysql_close();
				header("location:home.php?menupont=kosar");
			}
		
	

?>