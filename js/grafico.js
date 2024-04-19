let eje = JSON.parse(ejercicios);
let pesoE = JSON.parse(carga)[0]["peso"];
var arreglo = pesoE.split(",");
console.log(arreglo);

function filtrarPropiedades(datos) {
  return datos.map(function (item) {
    // Crear un nuevo objeto con las propiedades deseadas
    return [
      item.ejercicio_espalda1,
      item.ejercicio_espalda2,
      item.ejercicio_espalda3,
      item.ejercicio_espalda4,
      item.ejercicio_espalda5,
      item.ejercicio_pecho1,
      item.ejercicio_pecho2,
      item.ejercicio_pecho3,
      item.ejercicio_pecho4,
      item.ejercicio_pecho5,
      item.abdominales1,
      item.abdominales2,
      item.abdominales3,
      item["ejercicio-pierna1"],
      item["ejercicio-pierna2"],
      item["ejercicio-pierna3"],
      item["ejercicio-pierna4"],
      item["ejercicio-pierna5"],
      item["ejercicio-pierna6"],
      item["ejercicio-hombro1"],
      item["ejercicio-hombro2"],
      item["ejercicio-hombro3"],
      item.abdominales4,
      item.abdominales5,
      item.abdominales6,
      item["ejercicio-biceps1"],
      item["ejercicio-biceps2"],
      item["ejercicio-biceps3"],
      item["ejercicio-triceps1"],
      item["ejercicio-triceps2"],
      item["ejercicio-triceps3"],
    ];
  });
}

var canvas = document.getElementById("grafica");
var ctx = canvas.getContext("2d");

var datosFiltrados = filtrarPropiedades(eje)[0];

console.log(datosFiltrados);

var numEjercicios = datosFiltrados.length;

var barWidth = canvas.width / (numEjercicios * 1.95);

for (var i = 0; i < numEjercicios; i++) {
  var peso = parseInt(arreglo[i]);
  var x = i * (barWidth * 1.94) + barWidth / 2;
  var y = canvas.height - peso * 2;

  ctx.fillStyle = "blue";
  ctx.fillRect(x, y, barWidth, peso * 2);

  //ctx.fillText(datosFiltrados[i], x, canvas.height - 10);

  ctx.fillStyle = "black";
  ctx.font = "12px Arial";
  ctx.textAlign = "center";

  ctx.fillText(datosFiltrados[i], x + barWidth / 2, canvas.height - 5);

  ctx.fillText(peso, x + barWidth / 2, y - 5);
}
