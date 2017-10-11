			<?php
            
            $host="mysql.hostinger.ro";
            $username="u100450540_admin";
            $password="pepsi888pepsi";
            $db_name="u100450540_comment";
            $tableName = "comments";
			
			mysql_connect("$host", "$username", "$password") or die("Cannot connect to the mySql database!");
            mysql_select_db("$db_name") or die("Cannot select the database!");
		
		session_start();
		$felhasznalo = $_SESSION['username'];
		$comm = $_POST['comment'];
		
		$mit   = array(">","<","\n");
		$mire = array('&gt;','&lt;','<br/>');
		$hozzaszolas = str_replace($mit, $mire, $comm);
	
		if (isset($_POST['ok']))
		{
			if ($_REQUEST['comment'] != "")
			mysql_query ("INSERT INTO `comments`(`user`, `comment`, `time`) VALUES ('$felhasznalo','$hozzaszolas','".time()."')");
			mysql_close();
		}
		
		header("location:home.php?menupont=vendegkonyv&page=1");
        
        ?>