


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
    }else {
        // si la carrera seleccionada es IA
        if (selectedCarrera === "IA") {
        var grupos = ["A", "B"];
        for (var i = 0; i < grupos.length; i++) {
            var option = document.createElement("option");
            option.value = grupos[i];
            option.text = grupos[i];
            grupoSelect.appendChild(option);
        }
      }else {
        // si la carrera seleccionada es LE
        if (selectedCarrera === "LE") {
        
        var grupos = ["G", "M", "N","L"];
        for (var i = 0; i < grupos.length; i++) {
            var option = document.createElement("option");
            option.value = grupos[i];
            option.text = grupos[i];
            grupoSelect.appendChild(option);
        }
      }else{
        // si la carrera seleccionada es LN
        if (selectedCarrera === "LNS") {
        
            var grupos = ["P", "Q"];
            for (var i = 0; i < grupos.length; i++) {
                var option = document.createElement("option");
                option.value = grupos[i];
                option.text = grupos[i];
                grupoSelect.appendChild(option);
            }
      }else{
        // si la carrera seleccionada es CP
        if (selectedCarrera === "CP") {
        
            var grupos = ["H", "I"];
            for (var i = 0; i < grupos.length; i++) {
                var option = document.createElement("option");
                option.value = grupos[i];
                option.text = grupos[i];
                grupoSelect.appendChild(option);
            }
      }else{
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

  