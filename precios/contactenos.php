<?php  
	$destino= "soporteti@grupodionys.com.pe";
	$Fentrada=$_POST["fechaentrada"];
	$Fsalida=$_POST["fechasalida"];
	$Gmail=$_POST["gmailprecio"];
	$Habitacion=$_POST["habitaciones"];	

	$contenido = "Fecha de Entrada: " . $Fentrada . "\nFecha de Salida: " . $Fsalida . "\nCorreo: " . $Gmail . "\nHabitación: " . $Habitacion;



	mail($destino, "Consulta de Precios (Pagina Web Hostal)", $contenido);
	header("Location:../index.html");
 ?>
