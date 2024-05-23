<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);
    
    // Configura los detalles del correo
    $to = "tucorreo@ejemplo.com"; // Reemplaza esto con tu dirección de correo
    $subject = "Nuevo mensaje de $nombre";
    $body = "Nombre: $nombre\nEmail: $email\nMensaje:\n$mensaje";
    $headers = "From: $email";
    
    // Envía el correo
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Hubo un problema al enviar el mensaje. Por favor, inténtalo de nuevo.";
    }
}
?>