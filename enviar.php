<?php
$destino = "oriana_piliado@hotmail.com, emyteodia@gmail.com, macoymarcar@gmail.com, pabloromero2196@gmail.com";
$first_name = $_POST ["first_name"];
$last_name = $_POST ["last_name"];
$email = $_POST ["email"];
$telefono = $_POST ["telefono"];
$comments = $_POST ["comments"];
$contenido = "\nNombre: " . $first_name . "\nApellido: " . $last_name . "\nEmail: " . $email . "\nTelefono: " . $telefono . "\nComentarios: " . $comments;
mail($destino, "Contactanos cliente Chabtic Nuestra Miel", $contenido);
header("Location:gracias.html");
?>