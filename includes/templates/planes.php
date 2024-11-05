<div class="planes">
    <h2>Elige Un <span class="span">Plan</span> y Empieza A <span class="span">Entrenar</span></h2>
    <div class="plan">
    <?php 

    // Realizar la consulta para obtener los planes
    
    $consulta = obtenerdato();
    
    if ($consulta) {
        
        while ($fila = mysqli_fetch_assoc($consulta)) {

            //se hace un div para cada plan

            echo "<div class='plan-item'>";

            
            echo "<h3>" . $fila['nombre'] . "</h3>";

            
            echo "<p>Precio: " . $fila['precio'] . "</p>";

            
            echo "<p>Descripcion:  " . $fila['descripcion'] . "</p>";

            
            echo "</div>";
        }

        
    } else {
        echo "No se encontraron planes.";
    }
    ?>
    </div>
</div>