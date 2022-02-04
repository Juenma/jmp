<?php 
  $destino= "juanmapinna@gmail.com";
  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $email = $_POST["email"];
  $mensaje = $_POST["mensaje"];
  $contenido = "Nombre: " . $nombre . "\nApellido" .$apellido . "\nEmail" . $email . "\nMensaje" .$mensaje;
  mail($destino,"Contacto", $contenido);
  header("Location:gracias.html");



?>
