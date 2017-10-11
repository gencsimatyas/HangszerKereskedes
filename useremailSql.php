<?php

			$host="mysql.hostinger.ro";
            $username="u100450540_user";
            $password="pepsi888pepsi";
            $db_name="u100450540_users";
            $tableName = "Users";
			$felhasznalonev = $_POST['user'];
			$name = "A Hangszerbolt.p.ht Adminisztrátora!";
			$subject = "Üzenet a Hanszerbolt.p.ht Adminisztrátorától!";
			$message = $_POST['uzi'];
			
    
    
            mysql_connect("$host", "$username", "$password") or die("Cannot connect to the mySql database!");
            mysql_select_db("$db_name") or die("Cannot select the database!");
			
			$sql = "SELECT `email` FROM `Users` WHERE username = '$felhasznalonev' ";
			$result = mysql_query($sql);
			
			while ($ema = mysql_fetch_array($result))
			{
				$email = $ema['email'];
			}
			
				
				
				
				mail($email, $subject, $message, $name);
			
			
			
			mysql_close();
			
			header("location:home.php?menupont=admin");

?>