<?php
	$destino= "hotel@grupodionys.com.pe";
	$Gmail=$_POST["gmail"];
	$contenido = "Fecha de Entrada: " . $Gmail ;
	mail($destino, "Suscriptores(Pagina Web Hostal)", $contenido);
	header("Location:../clasicas.html");
 ?>
