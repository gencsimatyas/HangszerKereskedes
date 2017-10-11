<html> 
  <body>
 
 <br/><br/>
    
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
						<tr align="center"><td>Új Hangszer Hozzáadása!</td></tr>
						<tr><td>
						<table align="center" border="0" bgcolor="#FFFFFF" background="pics/paper_by_francy84.jpg">
        					<form action="addinstSql.php" method="post" enctype="multipart/form-data">
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
                			 <tr>
                             	<td>Kép: </td>
								<td><input name="userfile" type="file" /></td>
                              </tr>
						      <tr>
                              	<td>Név: </td>
                              	<td><input name="nev" type="text" /></td>
                              </tr>
							  <tr>
                              	 <td>Ár: </td>
                                 <td><input name="ar" type="text" />
								 
								 	Pénznem: 
								 	<select name="arr">
										<option value="">Select...</option>
										<option value="Euro">Euro</option>
										<option value="HUF">HUF</option>
									</select>
								 </td>
                              </tr>
							  <tr>
									<td>Darabszám: </td>
									<td><input name="darab" type="text"></td>
								</tr>
                                <tr><td colspan="3" align="center"><input name="submit" type="submit" value="Hozzáadás!" /></td></tr>
							</form>
          				  </table>
						  </td></tr>
				  	</table>
						  ';
						  
						  
						  
						  mysql_close();
						  
						 
					}
			
				
				?>
				
                </body>
                </html>