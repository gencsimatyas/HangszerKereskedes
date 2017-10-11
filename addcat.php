<html> 
  <body>
 
 <br/><br/>


<?php

				
					session_start();
					
					if ($_SESSION['username'] == "admin")
					{
						
						echo       
						'
					<table align="center" border="1" bgcolor="#FFFFFF" background="pics/paper_by_francy84.jpg">	
						<tr align="center"><td>Új Kategória Hozzáadása</td></tr>
						<tr><td>
						<table align="center" border="0" bgcolor="#FFFFFF" background="pics/paper_by_francy84.jpg">
        					<form action="addcatSql.php" method="post" enctype="multipart/form-data">
                			 <tr>
                             	<td>Kép: </td>
								<td><input name="userfile" type="file" /></td>
                              </tr>
						      <tr>
                              	<td>Név: </td>
                              	<td><input name="nev" type="text" /></td>
                              </tr>
                                <tr><td colspan="3" align="center"><input name="submit" type="submit" value="Hozzáadás!" /></td></tr>
							</form>
          				  </table>
						  </td></tr>
				  	</table>
						  ';
						  
					}
						  
			
				
				?>
                
                </body>
                </html>
