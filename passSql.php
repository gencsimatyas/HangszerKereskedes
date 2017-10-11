    <?php
	
		$user = $_REQUEST['user'];
	
	?>


<html>
<head>
<link rel="shortcut icon" href="pics/black_guitar.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Jelszócsere!</title>
</head>
	<body background="pics/1.gif">
    
    <br/><br/>
    
    <p align="center" style="color:#FFF; font-size:36px;">Add meg az új jelszavad!</p>
    
    <br/><br/><br/><br/><br/><br/>
    
    <table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" background="pics/paper_by_francy84.jpg">
		<tr>
			<?php echo '<form name="form1" method="post" action="submit.php?user='.$user.'">'; ?>
                <td width="400">
                    <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF" background="pics/paper_by_francy84.jpg">
                        <tr>
                        	<td colspan="3" align="center"><strong>Jelszócsere</strong></td>
                        </tr>
                         <tr>
                            <td>Új Jelszó</td>
                            <td>:</td>
                            <td width="271"><input name="newPassword" type="password" id="newPassword" width="250"></td>
                        </tr>
                        <tr>
                            <td>Új Jelszó ismét</td>
                            <td>:</td>
                            <td width="271"><input name="newPassword2" type="password" id="newPassword2" width="250"></td>
                        </tr>
                        <tr>
                        	<td colspan="3" align="center"><input type="submit" name="submit" id="submit" value="Jelszócsere!"></td>
                        </tr>
                    </table>
              </td>
			</form>
        </tr>
    </table>
    

    
    			
</body>
</html>



