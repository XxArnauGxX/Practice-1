<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $email = htmlspecialchars(trim($_POST['email']));

    if (!empty($nombre) && !empty($email)) {
        echo "<!DOCTYPE html>
        <html lang='es'>
        <head>
           <meta charset='UTF-8'>
           <meta name='viewport' content='width=device-width, initial-scale=1'>
           <title>Éxito</title>
           <link rel='stylesheet' href='styles.css'>
        </head>
        <body>
           <div class='container'>
              <h1>Gracias por contactar, $nombre.</h1>
              <a href='index.html'>Volver al formulario</a>
           </div>
        </body>
        </html>";
    } else {
        echo "Por favor, completa todos los campos del formulario.";
    }
} else {
    echo "Método no válido!";
}
