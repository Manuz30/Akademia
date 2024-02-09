<?php

include_once("usuario.php");
$p = new Usuario ();

$p ->excluirUsuario ($_GET["pid"]);
echo "Usuario excluido";


?>