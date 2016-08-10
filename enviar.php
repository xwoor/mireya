<?php 

$destino ="gerencia.scania@gmail.com";
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$contenido = "Nombre: ".$nombre."\n"." Telefono: ". $telefono."\n"." Email: ".$email."\n"." Mensaje: ".$mensaje;

mail($destino,"Contacto ", $contenido);
header("Location:index.html");
 ?>