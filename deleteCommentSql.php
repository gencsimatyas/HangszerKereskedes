<?php

			$host="mysql.hostinger.ro";
            $username="u100450540_admin";
            $password="pepsi888pepsi";
            $db_name="u100450540_comment";
            $tableName = "comments";
			
			mysql_connect("$host", "$username", "$password") or die("Cannot connect to the mySql database!");
            mysql_select_db("$db_name") or die("Cannot select the database!");
			
			$ido = $_REQUEST['ido'];
			
			$sql = "DELETE FROM `comments` WHERE time = '".$ido."' ";
			mysql_query($sql);
			
			mysql_close();
			
			header("location:home.php?menupont=vendegkonyv&page=1");

?>