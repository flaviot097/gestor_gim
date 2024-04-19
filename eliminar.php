<?php
require_once ("./index.php");
if (isset($_COOKIE["dni"])) {
    $dni = $_COOKIE["dni"];
}
;
$id = $_GET["id"];
$url = "http://localhost:4000/deleteuser/" . $id;
$cu = curl_init();
curl_setopt($cu, CURLOPT_URL, $url);
curl_setopt($cu, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($cu, CURLOPT_RETURNTRANSFER, true);
$resp = curl_exec($cu);
if (curl_errno($cu)) {
    $mensaje_error = curl_error($cu);
} else {
    $datosUsuario = json_decode($resp, true);
    curl_close($cu);
}

header('Location: http://localhost/YourTrainer/index.php');