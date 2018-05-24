CODIGO PHP


 <h2>Registro de Miembros</h2>

<?php

 // recupera los datos del envío POST

 $nombre = $_POST['nombre'];

 $email = $_POST['email'];

 $direccion = $_POST['direccion'];

 $edad = $_POST['edad'];

 $profesion = $_POST['profesion'];

 

 

 // valida los datos enviados

 // verifica el nombre

 if(empty ($nombre)){
  die ('ERROR: Por favor proporcione su nombre.');
  }

 // verifica la dirección

 if(empty ($direccion)) {
   die ('ERROR: Por favor proporcione su dirección.');
 }

 // verifica la edad

 if(empty ($edad)) {
   die ('ERROR: Por favor proporcione su edad');
   } else if ($edad < 18 || $edad >60){
     die ('ERROR: Las membresías sólo están disponibles para mayores
    de 18 y menores de 60 años.');
 }

 // verifica la profesión

 if(empty ($profesion)) {

 die ('ERROR: Por favor proporcione su profesión.');

 }

 // verificar estatus residencial

 if(strcmp ($residencia, 'no') == 0) {

 die ('ERROR: Las membresías sólo están abiertas para residentes.');

 }

 // si llegamos a este punto

 // todos los datos de entrada han pasado la validación

 // entonces crea y envía el mensaje de correo electrónico

 $to = 'webmaster@algun.dominio.com';

 $from = $email;

 $subject = 'Solicitud de membresía';

 $body = "Nombre: $nombre\r\nDirección: $direccion\r\n

 Edad: $edad\r\nProfesión: $profesion\r\n";

 

 if (mail($to, $subject, $body, "From: $from")){

 echo 'Gracias por enviar su solicitud.';

 } else {

 die ('ERROR: Error al enviar el mensaje');

 }

?>

