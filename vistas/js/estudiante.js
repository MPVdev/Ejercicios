$(document).ready(function () {
  $("#IngresoEstudiante").on('submit', function (e) {
    calcular(e);
  });

  function calcular(e) {
    e.preventDefault();
    var Data = new FormData($("#IngresoEstudiante")[0]);
    $.ajax({
      url: "../ajax/estudiante.php?op=IngreseEstudiante",
      type: "POST",
      contentType: false,
      processData: false,
      async: false,
      data: Data,
      success: function (datos) {
        if (datos === "1") {
          alert("Guardado exitosamente");
          tabla();
        } else if (datos === "0") {
          alert("Se modifico correctamente");
        }
      }
    });
  }

  tabla();

  function tabla() {
    $('#Estudiantes').DataTable().destroy();
    $('#Estudiantes').DataTable({
      ajax: {
        url: "../ajax/estudiante.php?op=listar",
        type: "POST",
        dataSrc: 'data'
      },
      columns: [{
          data: 'botones'
        },
        {
          data: 'cedula'
        },
        {
          data: 'nombre'
        },
        {
          data: 'apellido'
        },
        {
          data: 'usuario'
        },
      ]
    });

  }

});

function tabla() {
  $('#Estudiantes').DataTable().destroy();
  $('#Estudiantes').DataTable({
    ajax: {
      url: "../ajax/estudiante.php?op=listar",
      type: "POST",
      dataSrc: 'data'
    },
    columns: [{
        data: 'botones'
      },
      {
        data: 'cedula'
      },
      {
        data: 'nombre'
      },
      {
        data: 'apellido'
      },
      {
        data: 'usuario'
      },
    ]
  });
}

  function eliminar(cedula) {
    $.ajax({
      type: "POST",
      url: "../ajax/estudiante.php?op=eliminar&id=" + cedula,
      success: function (datos) {
        if (datos === "1") {
          alert("eliminado exitosamente");
          tabla();
        } else if (datos === "0") {
          alert("El usuario no existe");
        }
      }
    });
  }

  function editar(recibe) {
    var datos = recibe.split("*");
    $("#Cedula").val(datos[0]);
    $("#Cedula").prop("readonly", true);
    $("#Nombre").val(datos[1]);
    $("#Apellido").val(datos[2]);
    $("#Usuario").val(datos[3]);
    $("#nuevo").show();
    $("#guardar").text("Modificar");
  }

  function nuevo() {
    $("#Cedula").val("");
    $("#Cedula").prop("readonly", false);
    $("#Nombre").val("");
    $("#Apellido").val("");
    $("#Usuario").val("");
    $("#nuevo").hide();
    $("#guardar").text("Guardar");
  }