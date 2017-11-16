<?php
	$destino= "hotel@grupodionys.com.pe";
	$email=$_POST["email"];
	$contenido = "\nEmail: " . $email;

	mail($destino, "Web Hotel Dionys", $contenido);
	header("Location:conference.html");
 ?>
