$(document).ready(function () {
      $("#Formulario1").on('submit', function (e) {
          e.preventDefault();
              calcular();
          });

        function calcular() {
          $("#div1").hide();
          $("#resultados").show();
          var form = $("#Formulario1").serialize();
          $.ajax({
            url: "../ajax/Conjunto.php",
            type: "POST",
            data: form,
            success: function (datos) {
              var resultados = datos.split("--");
              $("#union").text(resultados[0]);
              $("#interseccion").text(resultados[1]);
              $("#diferencia").text(resultados[2]);
              $("#diferenciaSimetrica").text(resultados[3]);
              $("#complemento1").text(resultados[4]);
              $("#complemento2").text(resultados[5]);
              $("#conjuntoalternado").text(resultados[6]);
              $("#suma").text(resultados[7]);
              $("#resta").text(resultados[8]);
              $("#multi").text(resultados[9]);
            }
          });
        }
      });
