<?php

						$host="mysql.hostinger.ro";
						$username="u100450540_user";
						$password="pepsi888pepsi";
           			    $db_name="u100450540_users";
			
						mysql_connect("$host", "$username", "$password") or die("Sikertelen csatlakozás az adatbázisra!");
						mysql_select_db("$db_name") or die("Adatbázis hiba!");
						
						$find = $_REQUEST['keres'];
						
						if ($find != "")
						
						{
						
								$sql = "SELECT * FROM `Hangszerek` WHERE nev like "."'%".$find."%'".";";
								$eredmeny = mysql_query($sql);
								
								$count=mysql_num_rows($eredmeny);
								
								if ($count > 0)
								{
								
										echo '<br/>';
										echo '<p align="center" class="cim22">Találatok a(z) <u>'.$find.'</u> kulcsszóra:</p>';
										echo '<br/>';
										echo '<table width="1000" border="1" align="center" bgcolor="#FFFFFF" background="pics/paper_by_francy84.jpg">';
										
										while ($hangszer = mysql_fetch_array($eredmeny))
										{
											if ($hangszer['darab'] > 0) 
													{
															$db = '<p class="van">Raktáron van: '.$hangszer["darab"].' darab</p>';
															$link = ' Kosárba Tesz!<br /><a href="kosarSql.php?menu='.$hangszer['nev'].'"><img src="pics/cart1.png" width="50" /></a> ';
													}
											else
													{
															 $db = '<p class="nincs">Jelenleg Nincs Raktáron!</p>';
															 $link = '<img src="pics2/shopping_cart_empty.png" width="50" />';
													}
																				
												echo '
																					
													<tr align="center">
														<td width="101"><a href="'.$hangszer['kep'].'" target="new"><img src="'.$hangszer['kep'].'" width="70" /></a></td>
														<td width="288">'.$hangszer['nev'].'</td>
														<td width="116">Ár: '.$hangszer['ar'].'</td>
														<td width="150">'.$db.'</td>
														<td width="114"> '.$link.' </td>
													</tr>
													
													';
										}
										
										echo '</table>';
								
								}
								
								else
								{
										echo '<br/>';
										echo '<p align="center" class="cim22">Nincs Találat a(z) <u>'.$find.'</u> kulcsszóra!</p>';
										echo '<br/>';
								}
						
						}
						
						if ($find == "")
						{
							echo '<br/>';
							echo '<p align="center" class="cim22">Nem írta be, hogy mit szeretne kereseni!</p>';
							echo '<br/>';
						}
						
						mysql_close();

?>