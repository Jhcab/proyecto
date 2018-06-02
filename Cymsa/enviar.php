<?php
	$destino="mineros2@prodigy.net.mx";
	$name=$_Post["nombre"];
	$correo=$_Post["email"];
	$telefono=$_Post["telefono"];
	$servicio=$_Post["servicio"];
	$delegacion=$_Post["delegacion"];
	$mensaje=$_Post["mensaje"];
	$contenido="Nombre: ".$nombre."\Correo: ".$correo."\nTelefono: ".$telefono."\nUbicación:".$delegacion."\nTipo de servicio:".$servicio"\nMensaje: ".$mensaje;
	mail($destino,"Contacto",$contenido);
?>