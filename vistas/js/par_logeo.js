$(document).ready(function () {
  $("#logeo").on('submit', function (e) {
    e.preventDefault();
    calcular();
  });

  function calcular() {
    var form = $("#logeo").serialize();
    $.ajax({
      url: "../ajax/par_controlador.php?op=logeo",
      type: "POST",
      data: form,
      success: function (datos) {
		if (datos === "1"){
			window.location.href = "par_menu.php";
		} else {
			alert ("usuario o contraseña incorrectas");
		}
      }
    });
  }
});
