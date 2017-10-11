<?php

	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = "Meghívás! $name-tól";
	$message = 
	
	"
	Kedves Barátom!\n\n
	
	Találtam egy nagyon kreatív, és bőválasztékű hangszerüzletet!\n
	A minőség garantált, mindenre több év garancia van. :)\n
	Szerintem megérné, hogy vess rá egy pillantást.\n
	Itt a hangszerüzlet weboldalának a címe: http://www.hangszerbolt.p.ht\n
	Jó böngészét! :)\n\n\n\n
	
	Üdv, $name!
	
	";
	
	
	
	mail($email, $subject, $message, $name);
	
	header("location:home.php");


?>