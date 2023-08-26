let tabla = document.querySelector(".tabla");
let info = [];

console.log(tabla);

// Crear un elemento <link> para cargar el archivo CSS
var linkElement = document.createElement("link");
linkElement.rel = "stylesheet";
linkElement.href = "styles.css"; // Ruta al archivo CSS

// Agregar el elemento <link> al head del documento
document.head.appendChild(linkElement);


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
          <th>Acciones</th>
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
        <td> 
        <input type="submit" class="btn_editar" value="Editar"> 
        <input type="submit" class="btn_eliminar" value="Eliminar">
        </td>

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


/*acciones para los botones de las tablas*/ 

document.addEventListener("DOMContentLoaded", function() {
    var btnEditar = document.querySelector(".btn_editar");
    var btnEliminar = document.querySelector(".btn_eliminar");

    btnEditar.addEventListener("click", function() {
        // Realizar acciones de edición
        alert("Acción de edición ejecutada");
    });

    btnEliminar.addEventListener("click", function() {
        // Realizar acciones de eliminación
        alert("Acción de eliminación ejecutada");
    });
});
