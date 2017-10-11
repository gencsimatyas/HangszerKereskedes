<?php

		    $host="mysql.hostinger.ro";
            $username="u100450540_user";
            $password="pepsi888pepsi";
            $db_name="u100450540_users";
            $tableName = "Users";
    
    
            mysql_connect("$host", "$username", "$password") or die("Cannot connect to the mySql database!");
            mysql_select_db("$db_name") or die("Cannot select the database!");
			
			$sql = "DELETE FROM `log`;";
			mysql_query($sql);
			
			mysql_close();
			
			header("location:home.php?menupont=admin&almenu=log");

?>