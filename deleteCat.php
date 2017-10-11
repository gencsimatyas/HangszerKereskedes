<p class="gm" align="center">Kategória Törlése a Webárúházból!</p>

<?php

		if ($_SESSION['username'] == "admin")
					{
						
						$host="mysql.hostinger.ro";
						$username="u100450540_user";
						$password="pepsi888pepsi";
           			    $db_name="u100450540_users";
			
						mysql_connect("$host", "$username", "$password") or die("Sikertelen csatlakozás az adatbázisra!");
						mysql_select_db("$db_name") or die("Adatbázis hiba!");	
						
						
						$sql = 'SELECT `nev` FROM `Kategoriak`;';
						$eredmeny = mysql_query($sql);
						
						
						
						
						
						echo       
						'
					<table align="center" border="1" bgcolor="#FFFFFF" background="pics/paper_by_francy84.jpg">	
						<tr align="center"><td>Kategória Törlése!</td></tr>
						<tr><td>
						<table align="center" border="0" bgcolor="#FFFFFF" background="pics/paper_by_francy84.jpg">
        					<form action="deleteCatSql.php" method="post" enctype="multipart/form-data">
							 <tr>
							 	<td>Kategória: </td>
							 	<td>
											
									<select name="kategoria">
									  <option value="">Select...</option>
									  ';
									  
									  while ($kat = mysql_fetch_array($eredmeny))
										{
											echo ' 
											
												<option value="'.$kat['nev'].'">'.$kat['nev'].'</option>
											
											';
										}
									  
									  echo '

									</select>		
								</td>
							 </tr>
                                <tr><td colspan="3" align="right"><input name="submit" type="submit" value="Törlés!" /></td></tr>
							</form>
							';
							
							echo '</table> </table>';
					}

?>