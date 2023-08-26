let tabla = document.querySelector(".right");
let info = [];

console.log(tabla);

function cambiaGrupo() {
  var carreraSelect = document.getElementsByName("Carrera")[0];
  var grupoSelect = document.getElementById("Grupo");
  var selectedCarrera = carreraSelect.value;

  grupoSelect.innerHTML = ""; // Limpiar las opciones actuales

  if (selectedCarrera === "ISC") {
    // Si la carrera seleccionada es "Ingeniero en sistemas computacionales"
    var grupos = ["E", "J", "F"];
    for (var i = 0; i < grupos.length; i++) {
      var option = document.createElement("option");
      option.value = grupos[i];
      option.text = grupos[i];
      grupoSelect.appendChild(option);
    }
  } else {
    // si la carrera seleccionada es IBI
    if (selectedCarrera === "IBI") {
      var grupos = ["C", "D"];
      for (var i = 0; i < grupos.length; i++) {
        var option = document.createElement("option");
        option.value = grupos[i];
        option.text = grupos[i];
        grupoSelect.appendChild(option);
      }
    } else {
      // si la carrera seleccionada es IA
      if (selectedCarrera === "IA") {
        var grupos = ["A", "B"];
        for (var i = 0; i < grupos.length; i++) {
          var option = document.createElement("option");
          option.value = grupos[i];
          option.text = grupos[i];
          grupoSelect.appendChild(option);
        }
      } else {
        // si la carrera seleccionada es LE
        if (selectedCarrera === "LE") {
          var grupos = ["G", "M", "N", "L"];
          for (var i = 0; i < grupos.length; i++) {
            var option = document.createElement("option");
            option.value = grupos[i];
            option.text = grupos[i];
            grupoSelect.appendChild(option);
          }
        } else {
          // si la carrera seleccionada es LN
          if (selectedCarrera === "LNS") {
            var grupos = ["P", "Q"];
            for (var i = 0; i < grupos.length; i++) {
              var option = document.createElement("option");
              option.value = grupos[i];
              option.text = grupos[i];
              grupoSelect.appendChild(option);
            }
          } else {
            // si la carrera seleccionada es CP
            if (selectedCarrera === "CP") {
              var grupos = ["H", "I"];
              for (var i = 0; i < grupos.length; i++) {
                var option = document.createElement("option");
                option.value = grupos[i];
                option.text = grupos[i];
                grupoSelect.appendChild(option);
              }
            } else {
              //si no es ninguna carrera
              var option = document.createElement("option");
              option.value = "ELIJA";
              option.text = "ELIJA";
              grupoSelect.appendChild(option);
            }
          }
        }
      }
    }
  }
}

let html = `
    <h2>Agenda de Salas</h2>    
    <table>
      <thead>
        <tr>
          <th>Fecha</th>
          <th>Hora</th>
          <th>Sala</th>
          <th>Carrera</th>
          <th>Grupo</th>
          <th>Semestre</th>

          <th>Materia</th>
          <th>Alumnos</th>
          <th>Maestro</th>
        </tr>
      </thead>
      <tbody>
`;

// Realizar una solicitud AJAX para obtener los datos del archivo PHP
var xhr = new XMLHttpRequest();
xhr.open("GET", "read.php", true);
xhr.onreadystatechange = function () {
  if (xhr.readyState === 4 && xhr.status === 200) {
    var data = JSON.parse(xhr.responseText);
  }

  data.forEach((element) => {
    html += `
      <tr>
        <td>${element.fecha}</td>
        <td>${element.hora}</td>
        <td>${element.sala}</td>
        <td>${element.carrera}</td>
        <td>${element.grupo}</td>
        <td>${element.semestre}</td>
        <td>${element.materia}</td>
        <td>${element.alumnos}</td>
        <td>${element.maestro}</td>
      </tr>
    `;
  });

  html += `
      </tbody>
    </table>
`;
  tabla.innerHTML = html;
};

xhr.send();
