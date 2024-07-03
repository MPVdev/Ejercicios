$(document).ready(function () {
  $("#info").on('submit', function (e) {
    e.preventDefault();
    calcular();
  });

  function calcular() {
    var form = $("#info").serialize();
    $.ajax({
      url: "../ajax/par_controlador.php?op=info",
      type: "POST",
      data: form,
      success: function (datos) {
          alert(datos);
          window.location.href = "par_menu.php";
      }
    });
  }
});
