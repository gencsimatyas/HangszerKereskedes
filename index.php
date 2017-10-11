<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gencsi Mátyás Hangszerüzlete</title>
<link rel="shortcut icon" href="pics/black_guitar.ico" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

    	<table border="1" align="center"  background="pics/paper_by_francy84.jpg">
        <tr><td>
          <table border="0" align="center" bgcolor="#FFFFFF" background="pics/paper_by_francy84.jpg">
            <tr><td><p class="cim">Üdvözlünk Gencsi Mátyás Hangszerüzletének Honlapján!</p></td>
            <td> <img src="pics2/female guitar.gif"  width="80"/> </td></tr>
          </table>
          </td></tr>
  		</table>
  
  <br /><br />
  
  <table border="0" align="center">
        	<tr><td align="center"><p class="iras">A folytatáshoz be kell jelentkezned!</p></td></tr>
      		<tr><td><p class="iras">Ha nem vagy beregisztrálva akkor azt <a href="registerForm.php" style="text-decoration:none">itt</a> megteheted!</p></td></tr>
  </table>
  
  <br /><br /><br />
  
  	<table width="300" border="1" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" background="pics/paper_by_francy84.jpg">
		<tr>
			<form name="form1" method="post" action="loginSql.php">
                <td>
                    <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF" background="pics/paper_by_francy84.jpg">
                        <tr>
                        	<td colspan="3" align="center"><strong>Bejelentkezés</strong></td>
                        </tr>
                        <tr>
                            <td width="78">Felhasználónév</td>
                            <td width="6">:</td>
                            <td width="294"><input name="myUsername" type="text" id="myUsername" width="250"></td>
                        </tr>
                            <tr>
                            <td>Jelszó</td>
                            <td>:</td>
                            <td><input name="myPassword" type="password" id="myPassword" width="250"></td>
                        </tr>
                        <tr>
                        	<td colspan="3" align="center"><input type="submit" name="submit" value="Bejelentkezés"></td>
                        </tr>
                        <tr>
                        	<td colspan="3"> <a href="index.php?menu=pass" style="text-decoration:none"> <img src="pics2/forgot-password.png" width="30" /> Elfelejtettem a jelszavam! </a></td>
                        </tr>
                    </table>
                </td>
			</form>
        </tr>
    </table>
    
               <?php
					 echo "<br/><br/>";
					 if(isset($_REQUEST['menu']))
					 switch($_REQUEST["menu"])
					 {
					  case 'pass' : include "pass.php";break;
					 }
		 	 ?>
  

    
</body>
</html>