


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<body>

 <br /><br />
        
        	<table width="417" height="64" border="1" align="center" background="pics/paper_by_francy84.jpg" bgcolor="#FFFFFF">
            	<form action="" method="post"></form>
                    <tr>
                    
                            <td height="52" align="center"> <a href="home.php?menupont=beallit&amp;almenu=password" class="link"> <input name="password" type="button" value="Jelszócsere" /> </a> </td>
                            <td align="center"> <a href="home.php?menupont=beallit&amp;almenu=invite" class="link"> <input name="invite" type="button" value="Ismerős Meghívása" /> </a> </td>
                            <td align="center"> <a href="home.php?menupont=beallit&amp;almenu=delete" class="link"> <input name="delete" type="button" value="Fiók Törlése" /> </a> </td>
                    
                    </tr>
            	</form>
            </table>
            
              <?php
			  
					 echo "<br/><br/>";
					
					 if(isset($_REQUEST['almenu']))
					 switch($_REQUEST["almenu"])
					 {
					  case 'password' : include "password.php";break;
					  case 'invite' : include "invite.php";break;
					  case 'delete' : include "delete.php";break;
					 }
 			  ?>
          
          
          </body>
</html>