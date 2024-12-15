<?php

// modelo de libros, aqui estan las reglas del modelo

class Libros
{
    private $db;
    private $libros;
    function __construct()
    {
        $this->db = db::conexion();
        $this->libros = array();

    }

    public function getLibros()
    {
        $consulta = $this->db->query("SELECT * FROM libros");
        //creamos un arreglo de arreglos asociados
        while ($fila = $consulta->fetch_assoc()) {
            $this->libros[] = $fila;
        }

        return $this->libros;

    }
}



?>