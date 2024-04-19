<?php
$contrasenia = $_POST["contrasena"];
$url = "http://localhost:4000/validacion/dni/" . $_POST["dni"];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error al conectarse a la API: ' . curl_error($ch);
} else {
    if (empty($response)) {
        echo 'La respuesta está vacía. No se encontraron resultados.';
    } else {

        curl_close($ch);
    }
}
$json = json_decode($response, true);
error_reporting(0);
$documento = $_POST["dni"];

if ($json[0]["contrasenia"] == $contrasenia) {
    session_start();
    $_SESSION["usuario"] = $json[0]["nombre_y_apellido"];
    setcookie("dni", $documento);
    if ($json[0]["nombre_y_apellido"] !== "administrador") {
        header('Location: http://localhost/YourTrainer/rutina.php');
    } else {
        header('Location: http://localhost/YourTrainer/index.php');
    }
    ;

} else {
    echo '<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/cabecera.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Rutinas</title>
</head>
    <div class="d-grid gap-2">
    <h1 style="text-align: center;">Contraseña u usuario incorrecto</h1>
    <a href="http://localhost/YourTrainer/session.php" style="color: white;width: 100% !important; margin-left:0px;"><button
            class="btn btn-primary" type="button" style="width: 100% !important; margin-left:0px;">
            volver</button></a>
</div>';
}
;