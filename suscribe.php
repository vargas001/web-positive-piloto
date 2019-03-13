<?php
$destino= "info@positivecompliance.com";

$correo= $_POST ["correo"];

$contenido= "Correo: "  . $correo ;
mail($destino, "Contacto", $contenido);
header("Location:web/index.html");
?>