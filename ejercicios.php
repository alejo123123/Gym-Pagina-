<?php 
  include './includes/templates/header.php';
?>

<body>
<div class="split-screen">
  <div class="panel panel-superior">
    <div class="panel-content">
      <h2 class="panel-title">Superior</h2>
      <button class="panel-btn" onclick="window.location.href='/superior.php'">Entrenar</button>
    </div>
  </div>
  <div class="panel panel-inferior">
    <div class="panel-content">
      <h2 class="panel-title">Inferior</h2>
      <button class="panel-btn" onclick="window.location.href='/inferior.php'">Entrenar</button>
    </div>
  </div>
</div>
<?php
 include 'includes/templates/footer.php';
?>
</body>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const panelSuperior = document.querySelector('.panel-superior');
  const panelInferior = document.querySelector('.panel-inferior');

  function togglePanel(panelToExpand, panelToShrink) {
    panelToExpand.style.flex = '3'; // Expandir el panel seleccionado
    panelToShrink.style.flex = '0'; // Colapsar el panel no seleccionado
  }

  // Escucha los eventos de clic en los paneles
  panelSuperior.addEventListener('click', () => {
    togglePanel(panelSuperior, panelInferior);
  });

  panelInferior.addEventListener('click', () => {
    togglePanel(panelInferior, panelSuperior);
  });

  // Función para restablecer la vista
  function resetView() {
    panelSuperior.style.flex = '1';
    panelInferior.style.flex = '1';
  }

  // Evento para restablecer la vista al hacer clic fuera de los paneles
  document.addEventListener('click', (event) => {
    if (!panelSuperior.contains(event.target) && !panelInferior.contains(event.target)) {
      resetView();
    }
  });
});
</script>

</html>