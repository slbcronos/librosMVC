<?php
//llamar al modelo
require_once("modelos/Libros.php");
//crear una instancia de libros
$libro = new Libros();
$datos = $libro->getLibros();
var_dump($datos);
?>
