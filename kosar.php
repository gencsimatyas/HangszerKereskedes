<html>
<link href="kosar.css" rel="stylesheet" type="text/css" />
<body>

	<p class="cim222" align="center">Kosár</p>

<?php

			session_start();
		
				$user = $_SESSION['username'];
				
		
		
						$host="mysql.hostinger.ro";
						$username="u100450540_user";
						$password="pepsi888pepsi";
           			    $db_name="u100450540_users";
			
						mysql_connect("$host", "$username", "$password") or die("Sikertelen csatlakozás az adatbázisra!");
						mysql_select_db("$db_name") or die("Adatbázis hiba!");
						
					$sql = "SELECT  `hangszer_nev`, `hangszer_kep`, `hangszer_ar`, `allapot` FROM `kosar` WHERE `felhasznalo_nev` = '$user' ";
					$result = mysql_query($sql);
					$count=mysql_num_rows($result);
					
					if ($count > 0)
					
					{
					
							echo ' <table align="center" background="pics/paper_by_francy84.jpg" border="1" width="1000"> ';
							echo ' <tr align="center"><td>Hangszer neve</td><td>Hangszer Képe</td><td>Hangszer Ára</td><td width="200">Hangszer Törlése a Kosárból</td></tr> ';
							
							
							while ($kosar = mysql_fetch_array($result))
							{
								$ar = $ar + $kosar['hangszer_ar']." Euro + 5000 HUF Szállítási költség! <br/> ";
								if ($kosar['allapot'] == "igen")
								{
									$all = "<p class='hihi'>Megrendelve! Az adminisztrátor még nem látta!</p>";
									$xyz = '<img src="pics2/Cancel.png" width="80" />';
								}
								
								if ($kosar['allapot'] == "sent")
								{
									$all = '<img src="pics2/ok.png" width="40" /> <p class="haha"> Az adminisztrátor postára tette! </p>';
									$xyz = '<img src="pics2/Cancel.png" width="80" />';
									$ok = '
									
										<form action="ok.php" method="post"> <input name="submit" type="submit" value="Ok!"> </form>
									
									';
								}
								
								if ($kosar['allapot'] == "nem")
								{
									$all = "Nincs Megrendelve!";
									$xyz = '<a href="kosarDelete.php?menu='.$kosar['hangszer_nev'].'"> <img src="pics2/shopping_cart_delete.png" width="80" /> </a>';
									$zz = '<form action="rendelSql.php" method="post"> <input name="comm" type="submit" value="Hangszer/ek megrendelése!"> </form>';
								}
								
								echo '
									
										<tr align="center">
											<td>'.$kosar['hangszer_nev'].'</td>
											<td><a href="'.$kosar['hangszer_kep'].'" target="new" ><img src="'.$kosar['hangszer_kep'].'" width="100" /></a></td>
											<td>'.$kosar['hangszer_ar'].'</td>
											<td align="center"> '.$xyz.'  </td>
										</tr>
										
								';
								
								
							}
							
							echo '
							
								<tr>
									<td align="right" colspan="2">Megrendelési Ár: <br/> Megrendelés: <br/> Rendelési Állapot:</td>
									<td  align="right" colspan="2">'.$ar.' '.$zz.' '.$all.' '.$ok.'</td>
									
								</tr>
							
							';
							
							mysql_close();
							
							echo ' </table> ';
					}
					
					else
					{
						echo ' <p class="cim222" align="center">A kosarad üres!</p> ';
					}
?>

</body>
</html>
