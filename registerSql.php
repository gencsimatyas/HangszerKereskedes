<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gencsi Mátyás Hangszerüzletje</title>
<link rel="shortcut icon" href="pics/black_guitar.ico" />
</head>

<body>

<?php

	$myUsername = $_POST['myUsername'];
	$myPassword1 = $_POST['myPassword1'];
	$myPassword2 = $_POST['myPassword2'];
	$email = $_POST['email'];
	$cim = $_POST['adress'];
	
	if (($myUsername != "")&&($myPassword1 != "")&&($myPassword2 != "")&&($email != "")&&(strlen($myUsername)>5)&&(strlen($myUsername)<21)&&(strlen($myPassword1)>5)&&(strlen($myPassword1)<21)&&(strlen($email)<31)&&(strlen($email)>7))
	 {
		if ($myPassword1 == $myPassword2)
		{
			$host="mysql.hostinger.ro";
			$username = "u100450540_user";
			$password = "pepsi888pepsi";
			$dbName = "u100450540_users";
			$tableName = "Users";
			
			mysql_connect("$host", "$username", "$password") or die("Sikertelen csatlakozás az adatbázisra!");
			mysql_select_db("$dbName") or die("Adatbázis hiba!");
			
			$sql = "SELECT `username` FROM `Users`";
			$result = mysql_query($sql);
			
			$usernameExists = '0';
				while ($dbUsername = mysql_fetch_array($result))
				{
					if ($dbUsername['username'] == $myUsername)
					{
						$usernameExists = '1';
					}
				}
			
				if ($usernameExists == '0')
				{
					$sql = "INSERT INTO `Users`(`username`, `password`, `email`, `cim`) VALUES ('$myUsername', md5('$myPassword1'), '$email', '$cim');";
					$result = mysql_query($sql);
					session_start();
					$_SESSION['username'] = $myUsername;
					$_SESSION['email'] = $email;
					header("location:index.php");
				}
				else
				{
					echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
					echo "<p align='center' style='font-size:38px'>A felhasználó név már létezik, válassz másikat!</p>";
					echo "<hr/>";
				}
					mysql_close();
		}
		else
		{
					echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
					echo "<p align='center' style='font-size:38px'>A két jelszó nem egyezik, próbáld meg újra!</p>";
					echo "<hr/>";
		}
		
	 }
	 else
	 {
		 
	 if ((strlen($myUsername)<5)||(strlen($myUsername)>21))
			 {
				 echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
				 echo "<p align='center' style='font-size:38px'>Nem tartottad be a karakter hosszúságokat a felhasználónévnél!</p>";
				 echo "<hr/>";
				 
			 }
			 else
			 if ((strlen($myPassword1)<5)||(strlen($myPassword1)>21))
			 {
				 echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
				 echo "<p align='center' style='font-size:38px'>Nem tartottad be a karakter hosszúságokat a jelszónál!</p>";
				 echo "<hr/>";
			 }
			 else
			 if ((strlen($email)>31)||(strlen($email)<7))
			 {
				 echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
				 echo "<p align='center' style='font-size:38px'>Nem tartottad be a karakter hosszúságokat az e-mailnél!</p>";
				 echo "<hr/>"; 
			 }
			 else
			 
		 if (($myUsername == "")&&($myPassword1 == "")&&($myPassword2 == ""))
		 {
			 echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
			 echo "<p align='center' style='font-size:38px'>Nem töltötted ki a mezőket!</p>";
			 echo "<hr/>";
		 }
			else
			 if (($myUsername == "")&&($myPassword1 != "")&&($myPassword2 != ""))
			 {
				 echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
				 echo "<p align='center' style='font-size:38px'>Nem töltötted ki a felhasználónév mezőt!</p>";
				 echo "<hr/>";
			 }
			else
			 if (($myUsername != "")&&($myPassword1 == "")||($myPassword2 == ""))
			 {
				 echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
				 echo "<p align='center' style='font-size:38px'>Nem töltötted ki valamelyik jelszó mezőt!</p>";
				 echo "<hr/>";
			 }
			 else
			 if (($myUsername != "")&&($myPassword1 != "")&&($myPassword2 != "")&&($email == ""))
			 {
				 echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
				 echo "<p align='center' style='font-size:38px'>Nem töltötted ki az E-mail mezőt!</p>";
				 echo "<hr/>";
			 }
			 
			
		 
	 }
	 
	
?>

</body>

</html>