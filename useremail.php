<?php

			$host="mysql.hostinger.ro";
            $username="u100450540_user";
            $password="pepsi888pepsi";
            $db_name="u100450540_users";
            $tableName = "Users";
    
    
            mysql_connect("$host", "$username", "$password") or die("Cannot connect to the mySql database!");
            mysql_select_db("$db_name") or die("Cannot select the database!");
			
			$sql = "SELECT `username`, `email` FROM `Users`";
			$result = mysql_query($sql);

?>

<html> 
  <body>
 
 <br/><br/>
 
 <p class="gm" align="center">E-mail Küldése egy Felhasználónak!</p>
 
 		<table align="center" border="1" background="pics/paper_by_francy84.jpg">
        	<table background="pics/paper_by_francy84.jpg" align="center" border="0">
                    <form action="useremailSql.php" method="post">
                    
                        <tr>
                        	<td>
                            	Címzett:    <select name="user">
                            						<option value="">Select...</option>
                                                    <?php
													
														while ($fel = mysql_fetch_array($result))
														{
															echo '
															
																<option value="'.$fel['username'].'">'.$fel['username'].'</option>
															
															';
														}
													
													?>
                                             </select>
                            </td>
                        </tr>
                        
                        <tr>
                        	<td>
                            	Feladó:    A Hanszerbolt.p.ht Adminisztrátora!
                            </td>
                        </tr>
                        
                        <tr>
                        	<td>
                            	Tárgy: Üzenet a Hanszerbolt.p.ht Adminisztrátorától!
                            </td>
                        </tr>
                        
                        <tr>
                        	<td>
                            	Üzenet:
                            </td>
                        </tr>
                        <tr>
                        	<td>
                            	<textarea name="uzi" cols="100" rows="20"></textarea>
                            </td>
                        </tr>
                        <tr>
                        	<td align="center">
                            	<input name="submit" type="submit" value="Küldés!">
                            </td>
                        </tr>
                    
                    </form>
        	</table>
        </table>
 
 </body>
 </html>
 
 
 
<?php

	mysql_close();

?>