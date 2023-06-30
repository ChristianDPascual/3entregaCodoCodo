<?php

function crearMascota($nombre,$tipo,$raza,$edad,$dniDuenio)//post
{
    try {

        $conStr = "mysql:host=localhost;dbname=mascotas";
        $user ="yo";
        $pass ="cp35371754";
        $pdo = new PDO($conStr,$user,$pass);

        
        $sentencia = $pdo->prepare('INSERT INTO mascotas (nombre,tipo,raza,edad,dniDuenio) 
                                           VALUES (:nombre,:tipo,:raza,:edad,:dniDuenio)');
        $sentencia->bindValue(':nombre', $nombre);
        $sentencia->bindValue(':tipo', $tipo);
        $sentencia->bindValue(':raza', $raza);
        $sentencia->bindValue(':edad', $edad);
        $sentencia->bindValue(':dniDuenio', $dniDuenio);

        if($sentencia->execute())
        {
            echo "se creo con exito $nombre $tipo $raza $edad\n";
        }
        $pdo = null;

    }
    catch(PDOException $e)
    {
        $pdo = null;
        echo "Error: " .$e->getMessage();
    }

}

function buscarMascota($dniDuenio)//get
{
    try {

        $conStr = "mysql:host=localhost;dbname=mascotas";
        $user ="yo";
        $pass ="cp35371754";
        $pdo = new PDO($conStr,$user,$pass);
        
        $sentencia = $pdo->prepare('SELECT * FROM mascotas WHERE dniDuenio = :dniDuenio');
        $sentencia->bindValue(':dniDuenio', $dniDuenio);

        if($sentencia->execute())
        {
            $resultado = $sentencia->fetch(PDO :: FETCH_ASSOC);
            $nombre = $resultado["nombre"];
            $raza = $resultado["raza"];
            $tipo = $resultado["tipo"];
            $edad = $resultado["edad"];
        
            echo "nombre: $nombre tipo: $tipo raza: $raza edad: $edad dni del dueño: $dniDuenio";
        }
        else
        {
            echo "no hay ninguna mascota con el dni ingresado";
        }
        $pdo = null;

        }
    catch(PDOException $e)
    {
        $pdo = null;
        echo "Error: " .$e->getMessage();
    }
}


function borrarMascota($dniDuenio)//delete
{
    try {

        $conStr = "mysql:host=localhost;dbname=mascotas";
        $user ="yo";
        $pass ="cp35371754";
        $pdo = new PDO($conStr,$user,$pass);
        
        $sentencia = $pdo->prepare('DELETE FROM mascotas WHERE dniDuenio = :dniDuenio');
        $sentencia->bindValue(':dniDuenio', $dniDuenio);

        if($sentencia->execute())
        {
            echo "mascota borrada con exito\n";
        }
        else
        {
            echo "no hay ninguna mascota con el dni ingresado";
        }
        $pdo = null;

        }
    catch(PDOException $e)
    {
        $pdo = null;
        echo "Error: " .$e->getMessage();
    }
}

?>