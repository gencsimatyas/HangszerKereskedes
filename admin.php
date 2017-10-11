<html>
<link href="admin.css" rel="stylesheet" type="text/css">

	<body>
    
    <?php
	
		if ($_SESSION['username'] == "admin")
		{
			echo'
			
    	<br/><br/>
        
        <p class="gm" align="center">Adminisztrációs Panel</p>
        
        <br/>
        
        <table width="1051" height="124" border="1" align="center" background="pics/paper_by_francy84.jpg" bgcolor="#FFFFFF">
            	<form action="" method="post"></form>
                    <tr>
                    
                            <td height="58" align="center"> <a href="home.php?menupont=admin&amp;almenu=addcat" class="link"> <input name="add" type="button" value="Új Kategória Hozzáadása a Webáruházhoz!" /> </a> </td>
                            <td align="center"> <a href="home.php?menupont=admin&amp;almenu=addinst" class="link"> <input name="add2" type="button" value="Új Hangszer Hozzáadása a Webáruházhoz!" /> </a> </td>
                            <td align="center"> <a href="home.php?menupont=admin&amp;almenu=users" class="link"> <input name="users" type="button" value="Felhasználok a Honlapon!" /> </a> </td>
                            <td align="center"> <a href="home.php?menupont=admin&amp;almenu=rendeles" class="link"> <input name="users" type="button" value="Felhasználok Hangszer Rendelései!" /> </a> </td>
                                                
                    </tr>
                    <tr>
                    
                            
                            <td height="52" align="center"> <a href="home.php?menupont=admin&amp;almenu=deleteCat" class="link"> <input name="cat" type="button" value="Kategóira törlése a Webárúházból!" /> </a> </td>
                            <td align="center"> <a href="home.php?menupont=admin&amp;almenu=deleteInst" class="link"> <input name="users" type="button" value="Hangszer törlése a Webárúházból!" /> </a> </td>
							<td align="center"> <a href="home.php?menupont=admin&amp;almenu=useremail" class="link"> <input name="users" type="button" value="E-mail Küldése egy Felhasználónak!" /> </a> </td>
                    		<td align="center"> <a href="home.php?menupont=admin&amp;almenu=log" class="link"> <input name="log" type="button" value="Bejelentkezések az Oldalra!" /> </a> </td>
                    </tr>
            	</form>
            </table>
            ';
             
			  
					 echo "<br/><br/>";
					
					 if(isset($_REQUEST['almenu']))
					 switch($_REQUEST["almenu"])
					 {
					  case 'addcat' : include "addcat.php";break;
					  case 'addinst' : include "addinst.php";break;
					  case 'users' : include "users.php";break;
					  case 'rendeles' : include "rendeles.php";break;
					  case 'useremail' : include "useremail.php";break;
					  case 'deleteInst' : include "deleteInst.php";break;
					  case 'deleteCat' : include "deleteCat.php";break;
					  case 'log' : include "log.php";break;
					 }
					 
		}
 			  ?>
    
    </body>
    
</html>