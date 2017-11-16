<?php
	$destino= "hotel@grupodionys.com.pe";
	$nombre=$_POST["userName"];
	$email=$_POST["userEmail"];
	$telefono=$_POST["userPhone"];
 	$mensaje=$_POST["userMsg"];

	$contenido = "Nombre: " . $nombre . "\nEmail: " . $email . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje ;
	mail($destino, "Consultas(Pagina Web Hostal)", $contenido);
	header("Location:contact.html");
 ?>
