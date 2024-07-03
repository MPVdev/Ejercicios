$(document).ready(function () {
  $("#form1").on('submit', function (e) {
    logeo(e);
  });

  function logeo(e) {
    e.preventDefault();
    var Data = new FormData($("#form1")[0]);
    $.ajax({
      url: "../ajax/logeo.php?op=logeo",
      type: "POST",
      contentType: false,
      processData: false,
      async: false,
      data: Data,
      success: function (datos) {
        if(datos.length == 0){
			alert("Usuario o clave equivocados");
		} else {
			alert("Bienvenido al Sistema");
			$(location).attr("href", "estudiante.php");
		}
      }
    });
  }
});
