<html>
<link href="log.css" rel="stylesheet" type="text/css" />
<body>
    	

	  <?php
        
                    $host="mysql.hostinger.ro";
                    $username="u100450540_user";
                    $password="pepsi888pepsi";
                    $db_name="u100450540_users";
                    $tableName = "Users";
            
            
                    mysql_connect("$host", "$username", "$password") or die("Cannot connect to the mySql database!");
                    mysql_select_db("$db_name") or die("Cannot select the database!");
					
					$sql = "SELECT * FROM `log` ORDER BY time desc;";
					$result = mysql_query($sql);
					$count=mysql_num_rows($result);
					
					if ($count > 0)
					
					{
						echo '
							
							<br /><br />
							
							<table align="center" border="0" background="pics/paper_by_francy84.jpg">
								<tr>
								  <td align="center">Log Ürítése</td>
								</tr>
								
								<tr>
								  <td align="center"> <a href="deleteLog.php"> <img src="pics2/vendeg.png" width="80" /> </a> </td>
								</tr>
							</table>
						
								<br /><br />
						';
						
						
						echo ' <table width="600" border="1" align="center" background="pics/paper_by_francy84.jpg">
        
									<tr align="center">
										
										<td>Időpont</td>
										<td>Felhasználó</td>
										<td>Ip 1</td>
										<td>Ip 2</td>
										
									</tr>';
					
						while ($log = mysql_fetch_array($result))
						{
							echo '
							
							 <tr>
								<td>'.date("Y.M.D h:i:s",$log['time']).'</td>
								<td>'.$log['username'].'</td>
								<td>'.$log['ip'].'</td>
								<td>'.$log['ip2'].'</td>
							 </tr>
							 
							';
						}
						
						echo '</table>';
						
					}
					else
					{
						echo '<p class="ir">A Log Üres!</p>';
					}
					
					
					mysql_close();
        
        ?>
        
   

</body>
</html>