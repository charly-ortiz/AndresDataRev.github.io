<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "andresdatarev@gmail.com"; // Reemplaza esto con el correo electrónico del propietario de la página
    $subject = "Nuevo mensaje de $name";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
}
?>