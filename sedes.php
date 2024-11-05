<?php

require 'includes/config/database.php'; 
require 'includes/app.php'; 
include 'includes/templates/header.php'; // Se incluye el encabezado de la página

$db = conectar(); 
?>
<body>


<div class="margen">
    <!-- sedes -->
    <div class="sedees">
    <h1>Nuestras Sedes</h1>
    <div class="sed">
    <?php 

    // Realizar la consulta para obtener las sedes
    $consulta = obtenerdatosedes();
    
   

    if ($consulta) {

        
        while ($fila = mysqli_fetch_assoc($consulta)) {

            //se hace un div para cada sede
            echo "<div class='plan-sedes'>";

           
            echo "<h3>" . $fila['nombre'] . "</h3>";

            
            echo "<p>Telefono:  " . $fila['telefono'] . "</p>";

            
            echo "<p>Direccion:   " . $fila['direccion'] . "</p>";

            
            echo "</div>";
        }

      
    } else {
        echo "No se encontraron sedes.";
    }
    ?>


        </div>
    </div>


    <div class="elemento3">
    <?php 

    $consulta = obtenerdatosedes2();
    
    if ($consulta) {
        
        while ($fila = mysqli_fetch_assoc($consulta)) {

            //se hace un div para la 3 sede
            echo "<div class='plan-sedes2'>";

          
            echo "<h3>" . $fila['nombre'] . "</h3>";

            
            echo "<p>Telefono:  " . $fila['telefono'] . "</p>";

          
            echo "<p>Direccion:   " . $fila['direccion'] . "</p>";

           
            echo "</div>";
        }

       
    } else {
        echo "No se encontraron sedes.";
    }
    ?>

    
    
    </div>
</div>
    
    <?php
 include 'includes/templates/footer.php';
?>
</body>
</html>