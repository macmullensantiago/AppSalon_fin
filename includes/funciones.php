<?php

function obtenerServicios() {
    try {

        // Importar una conexión
        require 'database.php';

        var_dump($db);

        // Escribir el código SQL
        $sql = "SELECT * FROM servicios;";

        $consulta = mysqli_query($db, $sql);

        // Areglo vacio
        $servicios = [];

        $i = 0;
    
        // Obtener los resultados
        while( $row = mysqli_fetch_assoc($consulta)) {
            $servicios[$i]['id'] = $row['id'];
            $servicios[$i]['nombre'] = $row['nombre'];
            $servicios[$i]['precio'] = $row['precio'];

            $i++;
        }

            //echo "<pre>";
            //var_dump( json_encode($servicios));
            //echo "</pre>"

            return $servicios;
            

        }

       

    } catch (\Throwable $th) {
        //throw $th;

        var_dump($th);
    }
}

obtenerServicios();