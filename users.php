
<p class="gm" align="center">Felhasználók a Honlapon!</p>

	<table width="507" height="35" border="1" align="center" background="pics/paper_by_francy84.jpg">
    	<tr align="center">
        	<td>Sorszám</td>
        	<td>Felhasználónév</td>
            <td>E-mail cím</td>
            <td>Felhasználó törlése</td>
        </tr>

<?php

						$host="mysql.hostinger.ro";
						$username="u100450540_user";
						$password="pepsi888pepsi";
           			    $db_name="u100450540_users";
			
						
							mysql_connect("$host", "$username", "$password") or die("Sikertelen csatlakozás az adatbázisra!");
							mysql_select_db("$db_name") or die("Adatbázis hiba!");
		
							$sql = "SELECT `id` ,`username`, `email` FROM `Users`;";
							$result = mysql_query ($sql);
							
							
							
							while ($felhasznalok = mysql_fetch_array($result))
							{
								
								echo '
								
									<tr>
										<td align="center"> '.$felhasznalok['id'].'. </td>
										<td> '.$felhasznalok['username'].' </td>
										<td> '.$felhasznalok['email'].' </td>
										<td align="center"> <a href="deleteuser.php?menu='.$felhasznalok['username'].'"> <img src="pics2/button_cancel_256.png" width="40" /> </a> </td>		
									</tr>
								';
								
							}
							
							
							
							
								
								
							
							mysql_close();
						


?>
	
	</table>