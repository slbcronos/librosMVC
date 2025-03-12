<?php
class db{
    public static function conexion(){
        //xammp la clave es vacia
        //mamp la clave es root
        //mamp en pc requiere el numero de puesto de red
        $conn=new mysqli("mx78.hostgator.mx:3306", "modelost_AdminModelos", "Lomogel1511$", "modelost_anguiano") 
            or die("Error de Conexion a la Base de Datos");
 
        $conn->query("SET NAMES 'utf8'");

        //print_r("Conexion Exitosa <br/>");
        return $conn;

    }
	
}
?>