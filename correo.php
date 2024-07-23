<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $product = htmlspecialchars($_POST['product']);
    $quantity = htmlspecialchars($_POST['quantity']);

    $to = "sanelydelacruz899@gmail.com"; // Reemplaza con tu correo electrónico
    $subject = "Nueva Compra";
    $message = "Nombre: $name\nCorreo Electrónico: $email\nTeléfono: $phone\nDirección: $address\nProducto: $product\nCantidad: $quantity";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "El formulario se envió correctamente.";
    } else {
        echo "Hubo un problema al enviar el formulario.";
    }
}
?>
