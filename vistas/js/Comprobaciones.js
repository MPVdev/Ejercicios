// JavaScript Document
function Comprobar(conjun) {
  let id;
  const conjunto1 = document.getElementById("Conjunto1").value;
  const conjunto2 = document.getElementById("Conjunto2").value;
  const universoElemen = document.getElementById("universoelemen");
  if (conjun == "1") {
    id = "Conjunto1";
  } else if (conjun == "2") {
    id = "Conjunto2";
  } else if (conjun == "3") {
    id = "Universo";
  }

  const elemento = document.getElementById(id);
  elemento.value = elemento.value.replace(/\s+/g, "");
  let array = elemento.value.split(",");

  //elimina elementos vacio
  for (let i = 0; i < array.length; i++) {
    if (array[i] === "") {
      array.splice(i, 1);
      i--;
    }
  }

  elemento.value = "";
  for (let i = 0; i < array.length; i++) {
    elemento.value += array[i];
    if (i < array.length - 1) {
      elemento.value += ",";
    }
  }

  //comprobar longitud conjuntos
  if (conjunto1 !== "" && conjunto2 !== "") {
    const arrayConjunto1 = conjunto1.split(",");
    const arrayConjunto2 = conjunto2.split(",");
    if (arrayConjunto1.length !== arrayConjunto2.length) {
      alert("Los conjuntos deben tener la misma longitud");
      elemento.value = "";
    }
  }
  let valor = conjunto1 + "," + conjunto2 + ",";
  valor = valor.replace(/,+$/, '');

  let elementosUnicos = {};
  let arraySinDuplicados = valor.split(",").filter(function (elemento) {
    if (!elementosUnicos[elemento]) {
      elementosUnicos[elemento] = true;
      return true;
    }
    return false;
  });

  let resultado = "";
  for (let i = 0; i < arraySinDuplicados.length; i++) {
    resultado += arraySinDuplicados[i];
    if (i < (arraySinDuplicados.length - 1)) {
      resultado += ",";
    }
  }
  universoElemen.value = resultado + ",";
}
