<?php
include 'includes/templates/header.php';
require 'includes/app.php';
include 'includes/config/conectar.php';
require 'includes/config/database.php';
?>


<img src="src/img/maquina-de-gimnasio.png" class="img" alt="logo">

<!-- el login -->
<main class="login contenedor">
    <div class="caja">
        <a class="mensajeria" href="mensajeria.php">Revisar Mensajes</a>
        <h1>Mensajes</h1>

        <form action="login.php" method="POST">

            <div class="input">
                <input id="nombre" name="nombre" type="text" placeholder="Nombre" required>
                <svg class="icons" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-hexagon" width="64" height="64" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M12 13a3 3 0 1 0 0 -6a3 3 0 0 0 0 6z" />
                    <path d="M6.201 18.744a4 4 0 0 1 3.799 -2.744h4a4 4 0 0 1 3.798 2.741" />
                    <path d="M19.875 6.27c.7 .398 1.13 1.143 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033z" />
                </svg>
            </div>

            <div class="input">
                <input id="correo" name="correo" type="text" placeholder="Correo Electronico" required>
                <svg class="icons" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock-access" width="64" height="64" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M4 8v-2a2 2 0 0 1 2 -2h2" />
                    <path d="M4 16v2a2 2 0 0 0 2 2h2" />
                    <path d="M16 4h2a2 2 0 0 1 2 2v2" />
                    <path d="M16 20h2a2 2 0 0 0 2 -2v-2" />
                    <path d="M8 11m0 1a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1v3a1 1 0 0 1 -1 1h-6a1 1 0 0 1 -1 -1z" />
                    <path d="M10 11v-2a2 2 0 1 1 4 0v2" />
                </svg>
            </div>

            <div class="input">
                <input class="mensaje" type="text" name="mensaje" placeholder="Mensaje" required>
            </div>

            <button class="boton" name="enviar" type="submit">Enviar</button>

            <?php 
            // Procesamiento del formulario
            include 'includes/config/remensaje.php';
            ?>

        </form>
    </div>
</main>

<?php
include 'includes/templates/footer.php';
?>

<script src="./src/js/login.js"></script>
</body>
</html>
