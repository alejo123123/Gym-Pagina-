<?php 
  include './includes/templates/header.php';
?>
<body>
   
    <div class="content">
        
        <div class="contentimc"> 
            <div class="imc">

                <h2>Estatura</h2>
                <p>En Metros</p>
                <input id='estatura' class="estatura" type="number" placeholder="ejem:1.70">

                <h2>Peso</h2>
                <p>En Kg</p>
                <input id='peso' class="peso" type="number" placeholder="ejem:70">
            </div>
         
            <button id="calcular" class="boton">Calcular</button>
            <input id='resultado'  class="resultado " type="number" placeholder="Resultado">
            <img src="src/img/maquina-de-gimnasio.png" class="img2" alt="logo">
        </div>

        <!-- contenedor tabla -->
        <main class="tabla">
            <table>
                <tr>
                    <img src="src/img/maquina-de-gimnasio.png" class="img2" alt="logo">
                    <!-- Este encabezado describe la primera columna de la tabla -->
                    <th class="th">Composición corporal</th>
                    <!-- Este encabezado describe la segunda columna de la tabla -->
                    <th class="th">Índice de masa corporal </th>
                </tr>
                <!-- Cada una de estas filas representa un tipo de composición corporal y su respectivo índice de masa corporal -->
                <tr>
                    <td class="mal">Peso inferior al normal</td>
                    <td>Menos de 18.5</td>
                </tr>
                <tr>
                    <td class="bien">Normal</td>
                    <td>18.5 – 24.9</td>
                </tr>
                <tr>
                    <td class="superior">Peso superior al normal</td>
                    <td>25.0 – 29.9</td>
                </tr>
                <tr>
                    <td class="obs" >Obesidad</td>
                    <td>Más de 30.0</td>
                </tr>
            </table>
        </main>S
    </div>

    <?php
 include 'includes/templates/footer.php';
?>
    
    <script src="./src/js/calculadoraimc.js"></script>
</body>
</html>
