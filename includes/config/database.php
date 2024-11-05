<?php

function conectar() : mysqli {
  $db = mysqli_connect('localhost', 'root', 'wahapenxd123', 'gimnasio');

  if(!$db) {
    echo 'no se pudo conectar';
    exit;
  }
  return $db;
}


//funcion para extraer todso los datos

function obtenerdato() {
    global $db; 
    try {
        // Consulta SQL para obtener los datos de los planes
        $sql = "SELECT * FROM plan";
        
        
        $consulta = mysqli_query($db, $sql);
        
       
        if ($consulta && mysqli_num_rows($consulta) > 0) { 
            return $consulta; 
        } else {
            return false; 
        }

    } catch (\Throwable $th) {
        
        echo "Error al obtener los datos de los planes: " . $th->getMessage();
        return false; 
    }
}



function obtenerdatoprom() {
    global $db; 
    try {
        // Consulta SQL para obtener los datos de promocion
        $sql = "SELECT * FROM promocion";
        
        
        $consulta = mysqli_query($db, $sql);
        
        
        if ($consulta && mysqli_num_rows($consulta) > 0) { 
            return $consulta; 
        } else {
            return false; 
        }

    } catch (\Throwable $th) {
        
        echo "Error al obtener los datos de las promociones: " . $th->getMessage();
        return false; 
    }
}



function obtenerdatosedes() {
    global $db; 
    try {
        // Consulta SQL para obtener los datos de las sedes
        $sql = "SELECT * FROM gimnasio limit 2";
        
        
        $consulta = mysqli_query($db, $sql);
        
       
        if ($consulta && mysqli_num_rows($consulta) > 0) { 
            return $consulta; 
        } else {
            return false; 
        }

    } catch (\Throwable $th) {
        
        echo "Error al obtener los datos de las sedes: " . $th->getMessage();
        return false;
    }
}



function obtenerdatosedes2() {
    global $db; 
    try {
        // Consulta SQL para obtener la ultima sede
        $sql = "SELECT * FROM gimnasio where codigo = 3";
        
        
        $consulta = mysqli_query($db, $sql);
        
       
        if ($consulta && mysqli_num_rows($consulta) > 0) { 
            return $consulta; 
        } else {
            return false; 
        }

    } catch (\Throwable $th) {
        
        echo "Error al obtener los datos de las sedes: " . $th->getMessage();
        return false; 
    }
}


function obtenerdatoemp() {
    global $db; 
    try {
        // Consulta SQL para obtener los datos de los empleados
        $sql = "SELECT * FROM persona where dni >70000003 and dni <70000010";
    
        $consulta = mysqli_query($db, $sql);
        
       
       if ($consulta && mysqli_num_rows($consulta) > 0) { 
            return $consulta;
        } else {
            return false; 
        }

    } catch (\Throwable $th) {
        
        echo "Error al obtener los datos de los empleados: " . $th->getMessage();
        return false; 
    }
}

