<html>

	<link href="web.css" rel="stylesheet" type="text/css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body>
    
    <table width="591" border="1" align="center">
    	<form action="home.php?menupont=webaruhaz&amp;almenu=find" method="post" name="find">
    	<tr>
        	<td width="510">
            	
                <table width="586" border="0" align="center" background="pics/paper_by_francy84.jpg">
                	<tr>
                    	<td width="249" align="left">Hangszerek név szerinti keresése:</td>
                        <td width="153"><input name="keres" type="text"></td>
                        <td width="170"><input name="submit" type="submit" value="Keresés"></td>
                    </tr>
                </table>
                
            </td>
        </tr>
        </form>
    </table>
    
    <?php
	
    if(isset($_REQUEST['almenu']))
		 switch($_REQUEST["almenu"])
			 {
			  case 'find' : include "find.php";break;
			 }
    ?>
	
<p class="cim22">Kategóriák</p>

		
        
       <table align="center" border="1">
              <tr><td>
              <table width="800" border="0" align="center" bgcolor="#FFFFFF" background="pics/paper_by_francy84.jpg"> 
                
                <?php
				
				//kategoriak kepenek kilistazasa
					
						$host="mysql.hostinger.ro";
						$username="u100450540_user";
						$password="pepsi888pepsi";
           			    $db_name="u100450540_users";
			
						mysql_connect("$host", "$username", "$password") or die("Sikertelen csatlakozás az adatbázisra!");
						mysql_select_db("$db_name") or die("Adatbázis hiba!");					
					
					$sql2 = "SELECT `nev` FROM `Kategoriak`"; 
					$sql3 = "SELECT `kep` FROM `Kategoriak`"; 
		
					$result2 = mysql_query($sql2);
					$result3 = mysql_query($sql3);
					
					echo "<tr>";
					
					while (($kepp = mysql_fetch_array($result3))&&($nevv = mysql_fetch_array($result2)))
					{
						
						echo '
  								<td width="220"><a href="home.php?menupont=webaruhaz&amp;almenu='.$nevv['nev'].'"><img src="'.$kepp['kep'].'" width="100"></a></td>
						';
						
					}
					
					echo "</tr>";
					
					//kategoriak kepenek kilistazasa end
					
					mysql_close();
		?>
        
        <?php
		
			//kategoriak nevenek kilistazasa
		
						$host="mysql.hostinger.ro";
						$username="u100450540_user";
						$password="pepsi888pepsi";
           			    $db_name="u100450540_users";
			
						mysql_connect("$host", "$username", "$password") or die("Sikertelen csatlakozás az adatbázisra!");
						mysql_select_db("$db_name") or die("Adatbázis hiba!");					
					
					$sql2 = "SELECT `nev` FROM `Kategoriak`";
					$sql3 = "SELECT `kep` FROM `Kategoriak`;";
		
					$result2 = mysql_query($sql2);
					$result3 = mysql_query($sql3);
					
					
					echo "<tr>";

				while (($kepp = mysql_fetch_array($result3))&&($nevv = mysql_fetch_array($result2)))
					{
						
						echo '
  							<td><a href="home.php?menupont=webaruhaz&amp;almenu='.$nevv['nev'].'" class="link">'.$nevv['nev'].'</a></td>							
							';
						
					}
					
					echo "</tr>";
										
					mysql_close();
				
				//kategoriak nevenek kilistazasa end
					
				?>  
                
                </table>
                
              </td></tr>
</table>
                
                <br/><br/>
                
                <table width="1000" border="1" align="center" bgcolor="#FFFFFF" background="pics/paper_by_francy84.jpg">
                
                <?php
				
				//hangszerek kilistazasa
				
						$host="mysql.hostinger.ro";
						$username="u100450540_user";
						$password="pepsi888pepsi";
           			    $db_name="u100450540_users";
			
						mysql_connect("$host", "$username", "$password") or die("Sikertelen csatlakozás az adatbázisra!");
						mysql_select_db("$db_name") or die("Adatbázis hiba!");					
					
					$sql2 = "SELECT `nev` FROM `Kategoriak`";
					$sql3 = "SELECT `kep` FROM `Kategoriak`;";
		
					$result2 = mysql_query($sql2);
					$result3 = mysql_query($sql3);
					
					
					
				while (($kepp = mysql_fetch_array($result3))&&($nevv = mysql_fetch_array($result2)))
					{
						$nev = $nevv['nev'];
						$sql = " SELECT `kep`, `nev`, `ar`, `darab` FROM `Hangszerek` WHERE `kategoria_nev` = '$nev' ";
						$result = mysql_query($sql);
				
					 if(isset($_REQUEST['almenu']))
						 switch($_REQUEST["almenu"])
						 {
								  case $nevv['nev'] : {
									  
														while (($hangszer = mysql_fetch_array($result)))
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
									  
									  
														} ;break;
						 }
						 
					 
					 
					}
					
						
					
					
					
					
				
				?>         
        	
        </table>

            
    
</body>

</html>