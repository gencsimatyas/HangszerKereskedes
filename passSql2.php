<html>
	<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>



<?php

		

				$host="mysql.hostinger.ro";
				$username="u100450540_user";
				$password="pepsi888pepsi";
				$db_name="u100450540_users";
				$tableName = "Users";
				$Username = $_POST['myUsername'];

				mysql_connect("$host", "$username", "$password") or die("Cannot connect to the mySql database!");
				mysql_select_db("$db_name") or die("Cannot select the database!");
				
				$sql3 = 'SELECT email FROM `Users` WHERE username="'.$Username.'" ';
				$result = mysql_query ($sql3);
				
			   $result2 = mysql_fetch_array($result);
				
					$email = $result2['email']; 
				
				
					$name = $Username; 
					$subject = "Hangszerbolt.p.ht Jelszócsere!"; 
					$message = 
					
					"
					Kedves, $name!\n
					
					Rámentél arra az opcióra, hogy elfelejtettem a jelszavam!\n
					Ebben az esetben, annyit tudunk segíteni neked, hogy megadhatsz egy új jelszót!\n
					Erre a link-re kattintva, megadhatod az új jelszavadat: http://www.hangszerbolt.p.ht/passSql.php?user=$Username \n\n\n\n
					
					Üdv, Kiss Tibor (www.hanszerbolt.p.ht webmestere)
					
					";
					
					mail($email, $subject, $message, $name);
		
			
			
			

				
				mysql_close();
				
				
		
		
		header("location:index.php");
    

?>

</html>