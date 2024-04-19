var userData;

fetch("http://localhost:4000/inicio/allUser")
  .then((response) => response.json())
  .then((data) => {
    userData = data;

    var usuariosPorMesCount = {};
    for (var i = 0; i < userData.length; i++) {
      var fecha = new Date(userData[i].fecha);
      var mes = fecha.getMonth() + 1;
      if (!usuariosPorMesCount[mes]) {
        usuariosPorMesCount[mes] = 0;
      }
      usuariosPorMesCount[mes]++;
    }

    var meses = [
      "Ene",
      "Feb",
      "Mar",
      "Abr",
      "May",
      "Jun",
      "Jul",
      "Ago",
      "Sep",
      "Oct",
      "Nov",
      "Dic",
    ];

    var canvas = document.getElementById("grafico-gimnacio");
    var ctx = canvas.getContext("2d");

    var barWidth = 20;
    var barSpacing = 20;
    var canvasWidth = 600;
    var canvasHeight = 200;

    canvas.width = canvasWidth;
    canvas.height = canvasHeight;

    var maxUsuarios = Math.max(...Object.values(usuariosPorMesCount));
    var scaleFactor = (canvasHeight - 40) / maxUsuarios;

    ctx.beginPath();
    ctx.moveTo(30, canvasHeight - 20);
    ctx.lineTo(canvasWidth - 20, canvasHeight - 20);
    ctx.moveTo(30, 20);
    ctx.lineTo(30, canvasHeight - 20);
    ctx.stroke();

    for (var mes = 0; mes < 12; mes++) {
      var x = 50 + (barWidth + barSpacing) * mes;
      ctx.fillText(meses[mes], x, canvasHeight - 5);
    }

    for (var i = 0; i <= maxUsuarios; i += 10) {
      var y = canvasHeight - 20 - i * scaleFactor;
      ctx.fillText(i.toString(), 5, y);
    }

    for (var mes = 1; mes <= 12; mes++) {
      var usuariosRegistrados = usuariosPorMesCount[mes] || 0;
      var x = 50 + (barWidth + barSpacing) * (mes - 1);
      var barHeight = usuariosRegistrados * scaleFactor;
      var y = canvasHeight - barHeight - 20;
      ctx.fillStyle = "#007bff";
      ctx.fillRect(x, y, barWidth, barHeight);
      ctx.fillStyle = "#000";
      ctx.fillText(usuariosRegistrados.toString(), x + barWidth / 2, y - 5);
    }
  })
  .catch((error) => console.error("Error cargando el archivo JSON:", error));
