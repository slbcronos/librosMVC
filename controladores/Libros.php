<?php
//llamar al modelo
require_once("modelos/Libros.php");
//crear una instancia de libros
$libro = new Libros();
$datos = $libro->getLibros();

//Llamamos a la vista
require_once("vistas/Libros.php");
?>
