<?php

include_once("usuario.php");
$p = new Usuario ();

$p -> deleteUsuario($_GET["pid"]);
echo "Usuario excluido";


?>