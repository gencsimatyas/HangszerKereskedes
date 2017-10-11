<html> 
  <body>
 
 <br/>
 
 		<p class="gm" align="center">Hangszer Törlése a Webárúházból!</p>
    
    	    	 	    <?php
			
					session_start();
					
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
						<tr align="center"><td>Hangszer Törlése!</td></tr>
						<tr><td>
						<table align="center" border="0" bgcolor="#FFFFFF" background="pics/paper_by_francy84.jpg">
        					<form action="" method="post" enctype="multipart/form-data">
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
                                <tr><td colspan="3" align="right"><input name="submit" type="submit" value="Ok!" /></td></tr>
							</form>
							';
							
							
							if (isset($_POST['submit'])) 
							
							{
								
								$katnev = $_POST['kategoria'];
								$sql2 = 'SELECT `nev` FROM `Hangszerek` WHERE kategoria_nev = "'.$katnev.'" ';
								$result2 = mysql_query($sql2);
						
								echo '
								
									<form action="deleteInstSql.php" method="post">
								
									<tr>
									
										<td><hr/>Hangszer kiválasztása:    </td>
										<td>
											
											<select name="hangszer">
									  <option value="">Select...</option>
									  ';
									  
									  while ($a = mysql_fetch_array($result2))
										{
											echo ' 
											
												<option value="'.$a['nev'].'">'.$a['nev'].'</option>
											
											';
										}
									  
									  echo '
									  
									  </select>
										
										</td>
									
									</tr>
									
									
									
									<tr align="right">
										<td align="right" colspan="3">
											<input name="delete" type="submit" value="Törlés!">
										</td>
									</tr>
									
									</form>
								';
								
							} 
							
							echo '
							
          				  </table>
						  </td></tr>
				  	</table>
						  ';
						  
						  
						  
						  mysql_close();
						  
						 
					}
			
				
				?>
				
                </body>
                </html>