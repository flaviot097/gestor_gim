<?php $arregloEjercicio = array(
    "dni" => $_POST["dni-rutina"],
    "ejercicio_espalda1" => $_POST["ejercicio-espalda1"],
    "ejercicio_espalda2" => $_POST["ejercicio-espalda2"],
    "ejercicio_espalda3" => $_POST["ejercicio-espalda3"],
    "ejercicio_espalda4" => $_POST["ejercicio-espalda4"],
    "ejercicio_espalda5" => $_POST["ejercicio-espalda5"],
    "ejercicio_pecho1" => $_POST["ejercicio_pecho1"],
    "ejercicio_pecho2" => $_POST["ejercicio_pecho2"],
    "ejercicio_pecho3" => $_POST["ejercicio_pecho3"],
    "ejercicio_pecho4" => $_POST["ejercicio_pecho4"],
    "ejercicio_pecho5" => $_POST["ejercicio_pecho5"],
    "abdominales1" => $_POST["abdominales1"],
    "abdominales2" => $_POST["abdominales2"],
    "abdominales3" => $_POST["abdominales3"],
    "ejercicio-pierna1" => $_POST["ejercicio_pierna1"],
    "ejercicio-pierna2" => $_POST["ejercicio_pierna2"],
    "ejercicio-pierna3" => $_POST["ejercicio_pierna3"],
    "ejercicio-pierna4" => $_POST["ejercicio_pierna4"],
    "ejercicio-pierna5" => $_POST["ejercicio_pierna5"],
    "ejercicio-pierna6" => $_POST["ejercicio_pierna6"],
    "ejercicio-hombro1" => $_POST["ejercicio_hombro1"],
    "ejercicio-hombro2" => $_POST["ejercicio_hombro2"],
    "ejercicio-hombro3" => $_POST["ejercicio_hombro3"],
    "abdominales4" => $_POST["abdominales4"],
    "abdominales5" => $_POST["abdominales5"],
    "abdominales6" => $_POST["abdominales6"],
    "ejercicio-biceps1" => $_POST["ejercicio_biceps1"],
    "ejercicio-biceps2" => $_POST["ejercicio_biceps2"],
    "ejercicio-biceps3" => $_POST["ejercicio_biceps3"],
    "ejercicio-triceps1" => $_POST["ejercicio_triceps1"],
    "ejercicio-triceps2" => $_POST["ejercicio_triceps2"],
    "ejercicio-triceps3" => $_POST["ejercicio_triceps3"],
    "descripcion" => $_POST["descripcion-rutina"],
    "fecha" => $_POST["fecha-rutina"],
    "nombre" => $_POST["nombre_apellido"],
);

$array_peso_rep = array(
    "dia" => $_POST["dia1"] . "," . $_POST["dia2"] . "," . $_POST["dia3"] . "," . $_POST["dia4"] . "," . $_POST["dia5"] . "," .
        $_POST["dia6"] . "," . $_POST["dia7"] . "," . $_POST["dia8"] . "," . $_POST["dia9"] . "," . $_POST["dia10"] . "," .
        $_POST["dia11"] . "," . $_POST["dia12"] . "," . $_POST["dia13"] . "," . $_POST["dia14"] . "," . $_POST["dia15"] . "," .
        $_POST["dia16"] . "," . $_POST["dia17"] . "," . $_POST["dia18"] . "," . $_POST["dia19"] . "," . $_POST["dia20"] . "," .
        $_POST["dia21"] . "," . $_POST["dia22"] . "," . $_POST["dia23"] . "," . $_POST["dia24"] . "," . $_POST["dia25"] . "," .
        $_POST["dia26"] . "," . $_POST["dia27"] . "," . $_POST["dia28"] . "," . $_POST["dia29"] . "," . $_POST["dia30"] . "," .
        $_POST["dia31"],
    "repeticiones" => $_POST["repeticiones1"] . "," . $_POST["repeticiones2"] . "," . $_POST["repeticiones3"] . "," . $_POST["repeticiones4"] . "," . $_POST["repeticiones5"] . "," .
        $_POST["repeticiones6"] . "," . $_POST["repeticiones7"] . "," . $_POST["repeticiones8"] . "," . $_POST["repeticiones9"] . "," . $_POST["repeticiones10"] . "," .
        $_POST["repeticiones11"] . "," . $_POST["repeticiones12"] . "," . $_POST["repeticiones13"] . "," . $_POST["repeticiones14"] . "," . $_POST["repeticiones15"] . "," .
        $_POST["repeticiones16"] . "," . $_POST["repeticiones17"] . "," . $_POST["repeticiones18"] . "," . $_POST["repeticiones19"] . "," . $_POST["repeticiones20"] . "," .
        $_POST["repeticiones21"] . "," . $_POST["repeticiones22"] . "," . $_POST["repeticiones23"] . "," . $_POST["repeticiones24"] . "," . $_POST["repeticiones25"] . "," .
        $_POST["repeticiones26"] . "," . $_POST["repeticiones27"] . "," . $_POST["repeticiones28"] . "," . $_POST["repeticiones29"] . "," . $_POST["repeticiones30"] . "," .
        $_POST["repeticiones31"],
    "peso" => $_POST["carga1"] . "," . $_POST["carga2"] . "," . $_POST["carga3"] . "," . $_POST["carga4"] . "," . $_POST["carga5"] . "," .
        $_POST["carga6"] . "," . $_POST["carga7"] . "," . $_POST["carga8"] . "," . $_POST["carga9"] . "," . $_POST["carga10"] . "," .
        $_POST["carga11"] . "," . $_POST["carga12"] . "," . $_POST["carga13"] . "," . $_POST["carga14"] . "," . $_POST["carga15"] . "," .
        $_POST["carga16"] . "," . $_POST["carga17"] . "," . $_POST["carga18"] . "," . $_POST["carga19"] . "," . $_POST["carga20"] . "," .
        $_POST["carga21"] . "," . $_POST["carga22"] . "," . $_POST["carga23"] . "," . $_POST["carga24"] . "," . $_POST["carga25"] . "," .
        $_POST["carga26"] . "," . $_POST["carga27"] . "," . $_POST["carga28"] . "," . $_POST["carga29"] . "," . $_POST["carga30"] . "," .
        $_POST["carga31"],
    "dni" => $_POST["dni-rutina"]
);


$data_string = json_encode($array_peso_rep);
$Ruta = "http://localhost:4000/creacion/peso";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $Ruta);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");

curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt(
    $ch,
    CURLOPT_HTTPHEADER,
    array(


        'Content-Type: application/json',


        'Content-Length: ' . strlen($data_string)
    )
);

$result = curl_exec($ch);


if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    echo "<script> alert('usuario creado con exito');</script>";



}
;
curl_close($ch);

$data = json_encode($arregloEjercicio);
$Ruta = "http://localhost:4000/creacion/rutina";

$ci = curl_init();
curl_setopt($ci, CURLOPT_URL, $Ruta);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");

curl_setopt($ci, CURLOPT_POSTFIELDS, $data);
curl_setopt($ci, CURLOPT_RETURNTRANSFER, true);
curl_setopt(
    $ci,
    CURLOPT_HTTPHEADER,
    array(


        'Content-Type: application/json',


        'Content-Length: ' . strlen($data)
    )
);

$result = curl_exec($ci);


if (curl_errno($ci)) {
    echo 'Error:' . curl_error($ci);
} else {
    echo "<script> alert('usuario creado con exito');</script>";



}
;
curl_close($ci);

?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/cabecera.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Rutinas</title>
</head>
<div class="d-grid gap-2">
    <h1 style="text-align: center;">Rutina Creada Con exito</h1>
    <a href="./panel-de-administrador.php" style="color: white;width: 100% !important; margin-left:0px;"><button
            class="btn btn-primary" type="button" style="width: 100% !important; margin-left:0px;">
            volver</button></a>
</div>

</html>