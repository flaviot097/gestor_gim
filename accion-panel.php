<?php
if ($_POST['usuario'] !== null || $_POST['usuario'] !== "" && $_POST['contrasena'] !== null || $_POST['contrasena'] !== "" && $_POST['dni'] !== null || $_POST['dni'] !== "") {
    $dni = $_POST['dni'];
    $pass = $_POST['contrasena'];
    $diciplina = $_POST["diciplina"];
    $fecha = $_POST["fecha"];
    $pago = $_POST["pago"];
    $nombre_usuario = $_POST["usuario"];

    ;

    $array = array(
        'dni' => $dni,
        'nombre_y_apellido' => $nombre_usuario,
        'contrasenia' => $pass,
        'fecha' => $fecha,
        'pago' => $pago,
        'diciplina' => $diciplina,
        'numero_de_usuario' => NULL,


    );
    $data_string = json_encode($array);
    $Ruta = "http://localhost:4000/creacion/user";

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

}
;
header("Location: http://localhost/YourTrainer/index.php");