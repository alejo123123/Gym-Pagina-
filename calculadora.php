<?php 
  include './includes/templates/header.php';
?>
<body>

    <!-- Este es el contenido principal, envuelto en una caja -->

<main class="caja2">


    <div class="contenedor">



        <input id="libras" class="campos libras" type="number" placeholder="libras" required>

        <!-- botón -->

        <button id='convertir' class="boton campos">Convertir</button>



        <input id='kilos' class="campos kilos" type="number" placeholder="kilos" required>

        <img src="src/img/maquina-de-gimnasio.png" class="img2" alt="logo">
    </div>
</main>

<!-- footer -->
<?php
 include 'includes/templates/footer.php';
?>

    <script src="./src/js/calculadoralb.js"></script>

</body>
</html>