<?php

require("funciones.php");

switch($_REQUEST["accion"])
{
    case "alta":
        crearMascota($_POST["nombre"],$_POST["tipo"],$_POST["raza"],$_POST["edad"],$_POST["dniDuenio"]); 
    break;

    case "buscar":
        buscarMascota($_POST["dniBuscar"]);
    break;
    case "borrar":
        borrarMascota($_POST["dniBorrar"]);
    break;
}


    
?>