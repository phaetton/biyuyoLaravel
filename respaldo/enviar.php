<?php  
// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario ="silvia@mentorsinternational.org";
$asunto = "Esta persona desea contactar con un mentor";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

//Enviando Mensaje
mail($destinatario,$asunto,$carta);
header('Location:mensaje-de-envio.php');
?>