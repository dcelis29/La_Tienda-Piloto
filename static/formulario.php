<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
 
//Preparamos el mensaje de contacto
$cabeceras = "From: $email\n" //La persona que envia el correo
 . "Reply-To: $email\n";
$asunto = "Mensaje desde la pagina Web"; //asunto aparecera en la bandeja del servidor de correo
$email_to = "latiendaquindio@gmail.com"; //cambiar por tu email
$contenido = "$nombre ha enviado un mensaje desde la web www.miweb.com\n"
. "\n"
. "Nombre: $nombre\n"
. "Email: $email\n"
. "Telefono: $telefono\n"
. "Mensaje: $mensaje\n"
. "\n";
 
//Enviamos el mensaje y comprobamos el resultado
if (mail($email_to, $asunto ,$contenido ,$cabeceras )) {
 
//Si el mensaje se envía muestra una confirmación
?>
<script>alert("Gracias, su mensaje se envio correctamente.")</script>
<?php
die();
}else{
?>
//Si el mensaje no se envía muestra el mensaje de error
<script>alert("Error: Su información no pudo ser enviada, intente más tarde")</script>
<?php
die();
}
?>