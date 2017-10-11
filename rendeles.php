<link href="kosar.css" rel="stylesheet" type="text/css" />
<?php


						$host="mysql.hostinger.ro";
						$username="u100450540_user";
						$password="pepsi888pepsi";
           			    $db_name="u100450540_users";
			
						mysql_connect("$host", "$username", "$password") or die("Sikertelen csatlakozás az adatbázisra!");
						mysql_select_db("$db_name") or die("Adatbázis hiba!");
						
						$sql = " SELECT `felhasznalo_nev`, `hangszer_nev`, `hangszer_kep`, `hangszer_ar`, `cim` FROM `kosar` WHERE allapot = 'igen' ORDER BY felhasznalo_nev ";
						$result = mysql_query($sql);
						$count=mysql_num_rows($result);
						
						if ($count > 0)
						
						{
						
						
								echo ' <table align="center" background="pics/paper_by_francy84.jpg" border="1" width="1000"> ';
								echo ' <tr align="center">
											<td>Felhasználó neve</td>
											<td>Felhasználó Címe</td>
											<td>Hangszer neve</td>
											<td>Hangszer Képe</td>
											<td>Hangszer Ára</td>
											<td>Rendelés Elküldve</td>
										</tr> ';
								
								while ($kosar = mysql_fetch_array($result))
								{
									
									echo '
									
										<tr align="center">
											<td>'.$kosar['felhasznalo_nev'].'</td>
											<td>'.$kosar['cim'].'</td>
											<td>'.$kosar['hangszer_nev'].'</td>
											<td><a href="'.$kosar['hangszer_kep'].'" target="new" ><img src="'.$kosar['hangszer_kep'].'" width="100" /></a></td>
											<td>'.$kosar['hangszer_ar'].'</td>
											<td> <a href="sent.php?felhasz='.$kosar['felhasznalo_nev'].'&amp;inst='.$kosar['hangszer_nev'].'"> <img src="pics2/ok.png" width="50"> </a> </td>
										</tr>
										
								';
									
									
								}
								
								echo ' </table> ';
						
						}
						
						else echo ' <p class="cim222" align="center">Nincs Rendelés!</p> ';



?>