document.addEventListener('DOMContentLoaded', () => {
  const panelSuperior = document.querySelector('.panel-superior');
  const panelInferior = document.querySelector('.panel-inferior');
  const btnSuperior = document.getElementById('btnSuperior');
  const btnInferior = document.getElementById('btnInferior');
  const listaSuperior = document.getElementById('listaSuperior');
  const listaInferior = document.getElementById('listaInferior');
  const btnVolver = document.getElementById('btnVolver');

  function togglePanel(panelToExpand, panelToShrink, listaToShow) {
    panelToExpand.style.flex = '4';
    panelToShrink.style.flex = '0';
    listaToShow.style.display = 'block';
    btnVolver.style.display = 'block';
    // setTimeout(() => {
    //   listaToShow.scrollIntoView({ behavior: 'smooth', block: 'start' });
    // }, 500);
  }

  btnSuperior.addEventListener('click', () => {
    togglePanel(panelSuperior, panelInferior, listaSuperior);
    listaInferior.style.display = 'none';
  });

  btnInferior.addEventListener('click', () => {
    togglePanel(panelInferior, panelSuperior, listaInferior);
    listaSuperior.style.display = 'none';
  });

  function resetView() {
    panelSuperior.style.flex = '1';
    panelInferior.style.flex = '1';
    listaSuperior.style.display = 'none';
    listaInferior.style.display = 'none';
    btnVolver.style.display = 'none';
  }

  btnVolver.addEventListener('click', resetView);

  // Efecto de sonido al hacer clic en los botones
  const audio = new Audio('https://example.com/gym-steel/sounds/metal-clank.mp3');
  
  [btnSuperior, btnInferior, btnVolver].forEach(btn => {
    btn.addEventListener('click', () => {
      audio.currentTime = 0;
      audio.play();
    });
  });

  // Efecto de pulso al hacer hover sobre los botones
  [btnSuperior, btnInferior, btnVolver].forEach(btn => {
    btn.addEventListener('mouseover', () => {
      btn.style.animation = 'pulse 0.5s ease-in-out infinite';
    });
    btn.addEventListener('mouseout', () => {
      btn.style.animation = 'none';
    });
  });
});