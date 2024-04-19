document.addEventListener('DOMContentLoaded', function() {
    var fechaHoraInput = document.getElementById('fechaHora');
    var fechaHoraActual = new Date();
    fechaHoraInput.value = fechaHoraActual.toLocaleString();
  
    // Obtener proyectos desde la base de datos
    fetch('obtener_proyectos.php')
      .then(response => response.json())
      .then(data => {
        var proyectoSelect = document.getElementById('proyecto');
        data.forEach(function(proyecto) {
          var option = document.createElement('option');
          option.textContent = proyecto.nombre;
          option.value = proyecto.id;
          proyectoSelect.appendChild(option);
        });
      });
  
    // Actualizar bloques según el proyecto seleccionado
    var proyectoSelect = document.getElementById('proyecto');
    var bloqueSelect = document.getElementById('bloque');
    proyectoSelect.addEventListener('change', function() {
      var proyectoId = proyectoSelect.value;
      bloqueSelect.innerHTML = ''; // Limpiar opciones anteriores
      fetch('obtener_bloques.php?proyecto=' + proyectoId)
        .then(response => response.json())
        .then(data => {
          data.forEach(function(bloque) {
            var option = document.createElement('option');
            option.textContent = bloque.nombre;
            option.value = bloque.id;
            bloqueSelect.appendChild(option);
          });
        });
    });
  
    // Cargar peso teórico de la pieza seleccionada
    var piezaSelect = document.getElementById('pieza');
    var pesoTeoricoInput = document.getElementById('pesoTeorico');
    piezaSelect.addEventListener('change', function() {
      var piezaId = piezaSelect.value;
      fetch('obtener_peso_teorico.php?pieza=' + piezaId)
        .then(response => response.json())
        .then(data => {
          pesoTeoricoInput.value = data.peso;
        });
    });
  
    // Validar que el peso real sea numérico
    var pesoRealInput = document.getElementById('pesoReal');
    pesoRealInput.addEventListener('input', function() {
      var pesoReal = pesoRealInput.value;
      if (!isNaN(pesoReal)) {
        pesoRealInput.classList.remove('invalid');
      } else {
        pesoRealInput.classList.add('invalid');
      }
    });
  
    // Manejar el envío del formulario
    var registroForm = document.getElementById('registroForm');
    registroForm.addEventListener('submit', function(event) {
      event.preventDefault(); // Evitar envío del formulario por defecto
      // Aquí deberías enviar los datos del formulario a través de AJAX
      var formData = new FormData(registroForm);
      fetch('registrar_datos.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.text())
      .then(data => {
        alert(data); // Muestra la respuesta del servidor
      })
      .catch(error => {
        console.error('Error:', error);
      });
    });
  });