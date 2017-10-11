<?php

	        $host="mysql.hostinger.ro";
            $username="u100450540_admin";
            $password="pepsi888pepsi";
            $db_name="u100450540_comment";
            $tableName = "comments";
			
			mysql_connect("$host", "$username", "$password") or die("Cannot connect to the mySql database!");
            mysql_select_db("$db_name") or die("Cannot select the database!");
			
							$sql2 = "SELECT count(*) as c from `comments`";
							$result2 = mysql_query($sql2);
							$sor2 = mysql_fetch_array($result2);
							$peroldal = 5;	
							$oldalakszama = ceil  ($sor2['c'] / $peroldal);
							$oldal = $_REQUEST['page'] - 1;
							
							mysql_close();

?>

<html>
<link href="vendegkonyv.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<body>
    
    <p class="cim22"><b>Írj valamit a vendégkönyvbe</b></p>
    
    	<table width="475" border="0" bgcolor="#CCCCCC" align="center" background="pics/paper_by_francy84.jpg">

				<form action="addComm.php" method="post">

            	 <tr><td><p style="font-size:24px; color:#000;"><b>Bejegyzés</b></p></td></tr>
            	 <tr><td><textarea name="comment" cols="80" rows="10"></textarea></td></tr>
                 <tr><td colspan="2" align="center"><input name="ok" type="submit" style="font-size:14px" value="Küldés!"></td></tr>
                 
              	</form>
        </table>
        
        <br/> <br/>
        
    
     <p class="cim22"><b>Vendégkönyv</b></p>
     <br/>
    
    <?php
	
	 		$host="mysql.hostinger.ro";
            $username="u100450540_admin";
            $password="pepsi888pepsi";
            $db_name="u100450540_comment";
            $tableName = "comments";
			
			mysql_connect("$host", "$username", "$password") or die("Cannot connect to the mySql database!");
            mysql_select_db("$db_name") or die("Cannot select the database!");
	
		$sql6 = "SELECT * FROM `comments` order by time desc limit " .($oldal * $peroldal).",".$peroldal;
		$eredmeny = mysql_query ($sql6);
		
		echo'
		
			<table align="center" border="1" width="1000" background="pics/paper_by_francy84.jpg">
				<tr><td>
				
				';
				
				//oldalazas start
				
				echo ' <br/> ';
				
				echo '<table align="center" background="pics/paper_by_francy84.jpg" width="400" border="1">
									<tr><td>
									';
												echo ' <table align="center" background="pics/paper_by_francy84.jpg"> ';
						echo ' <tr> ';
						
					
						
						if ($oldal + 1 != 1)
					echo  ' <td align="center"><a href="home.php?menupont=vendegkonyv&amp;page='.($oldal).'" style="color:#000; text-decoration:none;" >Előző</a></td>';
					
					$old = $_REQUEST['page'];
					
					for ($i = 1; $i <= $oldalakszama; $i++)
					{
						
						if ($i == $old)
						{
							echo ' <td align="center"><a href="home.php?menupont=vendegkonyv&amp;page='.$i.'" style="color:#F00; text-decoration:none; font-size:24px;">| '.$i.' |</a></td> ';
						}
						if ($i != $old)
						{
							echo ' <td align="center"><a href="home.php?menupont=vendegkonyv&amp;page='.$i.'" style="color:#000; text-decoration:none;">| '.$i.' |</a></td> ';
						}
					} 
					
					
					
					if ($oldal + 1 != $oldalakszama)
					echo  ' <td align="center"><a href="home.php?menupont=vendegkonyv&amp;page='.($oldal + 2).'" style="color:#000; text-decoration:none;" >Következő</a></td>';
					
					
					echo '</tr>';
					echo '</table>';
					
					echo '</td></tr></table>';
					
					echo '<br/>';
				
				//oldalazas end
				
				echo'
				
				
				<br/>
		
		';
		
		while ($sor = mysql_fetch_array($eredmeny))
		{
			echo "<table align='center' bgcolor='#FFFFFF' style='font-size:18px' style='color:#000'  width='900' border='1'>
					<form action='deleteCommentSql.php' method='post'> 
			<tr><td>
					<table>
					
						<tr>
							<td>Dátum: </td>
							<td>".date('Y.M.D h:i:s',$sor['time'])."</td>
						</tr>
						
						<tr>
							<td>Szerző: </td>
							<td>".$sor['user']."</td>
						</tr>
						
						<tr>
							<td>Bejegyzés: </td>
							<td>".$sor['comment']."</td>
						</tr>


					";
					
				if ($_SESSION['username'] == "admin")
			{
				echo '	   
						<tr>
							<td>Bejegyzés Törlése: </td>
							<td>	<a href="deleteCommentSql.php?ido='.$sor['time'].'"> <img src="pics2/vendeg.png" width="40" />	 </a>	</td>
						</tr>
							';
			}
					
					echo"

					</table>
					
						</form>
			</td></tr>
			</table>
			<br/>
				
				";

		}
		
		echo '

				</td></tr>
			</table>
		
		';
		
					
	?>
    
</body>

</html>

<?php
	mysql_close();
?>