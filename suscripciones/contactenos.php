<?php
	$destino= "hotel@grupodionys.com.pe";
	$email=$_POST["email"];
	$contenido = "\nEmail: " . $email;

	mail($destino, "Hotel Dionys Web", $contenido);
	header("Location:contact.html");
 ?>
