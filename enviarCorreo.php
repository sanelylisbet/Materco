<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = 'materco08@gmail.com'; // Cambia esta dirección de correo a la tuya
    $subject = 'Nuevo mensaje desde el formulario de contacto';
    $message_body = "Nombre: $name\nCorreo: $email\nMensaje:\n$message";
    
    if (mail($to, $subject, $message_body)) {
        echo '<script>alert("Correo enviado correctamente.");</script>';
    } else {
        echo '<script>alert("Hubo un problema al enviar el correo. Por favor, inténtalo de nuevo más tarde.");</script>';
    }
}
?>
