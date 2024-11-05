<div class="planes">
   <h2>Conoce Nuestros <span class="span">Empleados</span></h2>
</div>

<div class="empleados"> 
<?php 
    // Realizar la consulta para obtener los empleados
    $consulta = obtenerdatoemp();
    
  
    if ($consulta) {
        // si se encontraron resultados escribir sobre los resultados y mostrarlos
        while ($fila = mysqli_fetch_assoc($consulta)) {

            
            echo "<div class='emp-item'>";

            
            echo "<h3>" . $fila['nombre'] . "</h3>";

            echo "<h2>" . $fila['ocupacion'] . "</h2>";
          
            echo "<p>Cedula: " . $fila['dni'] . "</p>";

            echo "<p>Correo:  " . $fila['correo'] . "</p>";

            echo "<p>Fecha De Nacimiento:  " . $fila['fecha_nacimiento'] . "</p>";

            
            echo "</div>";
        }

        
    } else {
        echo "No se encontraron empleados.";
    }
    ?>

</div>
