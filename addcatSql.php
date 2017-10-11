

	<?php
			if (isset($_POST['submit']))
						{	
							 
							$paths= "kategoriak";
							 
							$filep=$_FILES['userfile']['tmp_name'];
							 
							$ftp_server= "hangszerbolt.p.ht";
							 
							$ftp_user_name= "u100450540";
							 
							$ftp_user_pass= "pepsi888pepsi";
							 
							$name=$_FILES['userfile']['name'];
							
							
						$conn_id = ftp_connect($ftp_server);
						$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
						 
						 
						$upload = ftp_put($conn_id, $paths.'/'.$name, $filep, FTP_BINARY);
						 
						 
						ftp_close($conn_id);							
						
						
						}
					
						$kep = "kategoriak/".$name;
						$nev = $_POST['nev'];
				
				
						$host="mysql.hostinger.ro";
						$username="u100450540_user";
						$password="pepsi888pepsi";
           			    $db_name="u100450540_users";
			
						if (isset($_POST['submit']))
						{
							mysql_connect("$host", "$username", "$password") or die("Sikertelen csatlakozás az adatbázisra!");
							mysql_select_db("$db_name") or die("Adatbázis hiba!");
		
							$sql = "INSERT INTO `Kategoriak`(`id`, `nev`, `kep`) VALUES (0, '$nev', '$kep');";
							mysql_query ($sql);
							
							mysql_close();
							header("location:home.php?menupont=admin");
						}
						
					
					
					?>