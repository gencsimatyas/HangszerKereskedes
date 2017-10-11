<?php

			function getRealIpAddr()
				{
					if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
					{
					  $ip=$_SERVER['HTTP_CLIENT_IP'];
					}
					elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
					{
					  $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
					}
					else
					{
					  $ip=$_SERVER['REMOTE_ADDR'];
					}
					return $ip;
				}

?>



<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gencsi Mátyás Hangszerüzletje</title>
<link rel="shortcut icon" href="pics/black_guitar.ico" />
</head>

<body>
	<?php
	
	
	
    	
		if (($_POST['myUsername'] != "")&&($_POST['myPassword'] != ""))
		{
                    session_start();
                    
            $host="mysql.hostinger.ro";
            $username="u100450540_user";
            $password="pepsi888pepsi";
            $db_name="u100450540_users";
            $tableName = "Users";
    
    
            mysql_connect("$host", "$username", "$password") or die("Cannot connect to the mySql database!");
            mysql_select_db("$db_name") or die("Cannot select the database!");
    
            
            $myUsername=$_POST['myUsername'];
            $myPassword=$_POST['myPassword'];
    
    
            $sql="SELECT * FROM $tableName WHERE username='$myUsername' and password='".md5($myPassword)."'";
            $result=mysql_query($sql);
			
			$ip = getenv ("REMOTE_ADDR");
			$ip2 = getRealIpAddr();
			
			$sql2 = 'INSERT INTO `log` (`time`, `username`, `ip`, `ip2`) VALUES ("'.time().'" , "'.$myUsername.'" , "'.$ip.'" , "'.$ip2.'")';
			
    
            $count=mysql_num_rows($result);
    
    
            if($count==1){
            
            $_SESSION['username'] = $myUsername;
			mysql_query($sql2);
            header("location:home.php");
            }
            else {
                    echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
                    echo "<p align='center' style='font-size:38px'>Hibásan adtad meg a felhasználónevet, vagy a jelszót!</p>";
                    echo "<hr/>"; 
                 }
		}
		else
		{
				if (($_POST['myUsername'] == "")&&($_POST['myPassword'] != ""))
				{
				    echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
                    echo "<p align='center' style='font-size:38px'>Nem adtad meg a felhasználónevet!</p>";
                    echo "<hr/>"; 
				}
				else
				if (($_POST['myUsername'] == "")&&($_POST['myPassword'] == ""))
				{
				    echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
                    echo "<p align='center' style='font-size:38px'>Nem töltötted ki a bejelentkezéshez szükséges mezőket!</p>";
                    echo "<hr/>"; 
				}
				else
				if (($_POST['myUsername'] != "")&&($_POST['myPassword'] == ""))
				{
				    echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
                    echo "<p align='center' style='font-size:38px'>Nem töltötted ki a jelszó mezőt!</p>";
                    echo "<hr/>"; 
				}
		}
    ?>
</body>

</html>