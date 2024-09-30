document.addEventListener('DOMContentLoaded', () => {
    const panelSuperior = document.querySelector('.panel-superior');
    const panelInferior = document.querySelector('.panel-inferior');
    const btnSuperior = document.getElementById('btnSuperior');
    const btnInferior = document.getElementById('btnInferior');
    const listaSuperior = document.getElementById('listaSuperior');
    const listaInferior = document.getElementById('listaInferior');
  
    function togglePanel(panelToExpand, panelToShrink, listaToShow) {
      panelToExpand.style.flex = '3';
      panelToShrink.style.flex = '0';
      listaToShow.style.display = 'block';
      setTimeout(() => {
        listaToShow.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }, 500);
    }
  
    btnSuperior.addEventListener('click', () => {
      togglePanel(panelSuperior, panelInferior, listaSuperior);
      listaInferior.style.display = 'none';
    });
  
    btnInferior.addEventListener('click', () => {
      togglePanel(panelInferior, panelSuperior, listaInferior);
      listaSuperior.style.display = 'none';
    });
  
    // Función para restablecer la vista
    function resetView() {
      panelSuperior.style.flex = '1';
      panelInferior.style.flex = '1';
      listaSuperior.style.display = 'none';
      listaInferior.style.display = 'none';
    }
  
    // Evento para restablecer la vista al hacer clic fuera de los paneles
    document.addEventListener('click', (event) => {
      if (!panelSuperior.contains(event.target) && !panelInferior.contains(event.target)) {
        resetView();
      }
    });
  });
  