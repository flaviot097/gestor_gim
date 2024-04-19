<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/cabecera.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Rutinas</title>
</head>

<body>
    <div class="inicio">
        <header><?php require_once ("./cabecera.php");
        error_reporting(0); ?> </header>
    </div>
    <?php if (isset($_SESSION["usuario"])) {
        if ($_SESSION["usuario"] !== "administrador") { ?>
            <div class="card" style="width: 96%; margin-left: 10px; margin-top: 3%;box-shadow:  20px 20px 60px #b2b2b2,
             -20px -20px 60px #f0f0f0;">
                <?php
                $dni = $_COOKIE["dni"];
                $url = "http://localhost:4000/rutina/" . $dni;
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
                $jsonEjer = json_decode($response, true);






                //datos repeticiones y peso
                $cu = curl_init();
                $ruta = "http://localhost:4000/inicio/respuesta/" . urlencode($dni);
                curl_setopt($cu, CURLOPT_URL, $ruta);
                curl_setopt($cu, CURLOPT_RETURNTRANSFER, true);
                $users = curl_exec($cu);
                if (curl_errno($cu)) {
                    echo 'Error al conectarse a la API: ' . curl_error($cu);
                } else {
                    if (empty($users)) {
                        echo 'La respuesta está vacía. No se encontraron resultados.';
                    } else {

                        curl_close($cu);
                    }
                }
                $jsonUsers = json_decode($users, true);
                $repArreglo = explode(",", $jsonUsers[0]["repeticiones"]);
                $diasEjer = explode(",", $jsonUsers[0]["dia"]);
                $carga = explode(",", $jsonUsers[0]["peso"]);

                ?>
                <h4 class="text-center fs-3 fw-bold pt-3"><?php echo $jsonEjer[0]["nombre"]; ?></h4>
                <table class="table table-bordered border-primary rutina">
                    <thead>
                        <tr>
                            <th scope="col">Dia</th>
                            <th scope="col">Ejercicio</th>
                            <th scope="col">Repeticiones</th>
                            <th scope="col">Carga (kg)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $indice = "";
                        foreach ($jsonEjer[0] as $ejer => $value) {
                            if ($ejer !== "dni" && $ejer !== "musculo" && $ejer !== "fecha" && $ejer !== "nombre" && $ejer !== "descripcion") { ?>
                                <tr>
                                    <th scope="col"><?php if ($indice == "") {
                                        $indice = 0;
                                    } else {
                                        $indice = $indice + 1;
                                    }
                                    ;
                                    echo $diasEjer[$indice]; ?> </th>
                                    <th scope="row"><?php
                                    echo $value;
                                    ?></th>
                                    <td><?php
                                    echo $repArreglo[$indice];
                                    ?></td>
                                    <td><?php echo $carga[$indice]; ?></td>
                                </tr><?php }
                            ;
                        }
                        ; ?>
                    </tbody>
                    <div class="card-body">
                        <p class="card-text"><?php echo $jsonEjer[0]["descripcion"]; ?></p>
                    </div>
            </div>
            </div>
        <?php } else { ?>
            <div class="filtro">
                <form class="formulario" method="GET">
                    <label for="validationServer02" class="form-label">DNI:</label>
                    <input type="number" class="form-control" id="validationServer02" placeholder="Juan Perez" name="dni"
                        required>
                    <button class="btn btn-primary" id="formulario" type="submit">Filtrar</button>
                </form>
            </div> <?php
            if ($_GET) {
                $dni = $_GET["dni"];
                $url = "http://localhost:4000/rutina/" . urlencode($dni);
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
                $jsonEjer = json_decode($response, true);
                //echo $response;
    


                //datos repeticiones y peso
                $cu = curl_init();
                $ruta = "http://localhost:4000/inicio/respuesta/" . urlencode($dni);
                curl_setopt($cu, CURLOPT_URL, $ruta);
                curl_setopt($cu, CURLOPT_RETURNTRANSFER, true);
                $users = curl_exec($cu);
                if (curl_errno($cu)) {
                    echo 'Error al conectarse a la API: ' . curl_error($cu);
                } else {
                    if (empty($users)) {
                        echo 'La respuesta está vacía. No se encontraron resultados.';
                    } else {

                        curl_close($cu);
                    }
                }
                $jsonUsers = json_decode($users, true);
                $repArreglo = explode(",", $jsonUsers[0]["repeticiones"]);
                $diasEjer = explode(",", $jsonUsers[0]["dia"]);
                $carga = explode(",", $jsonUsers[0]["peso"]);

                ?>
                <div class="card" style="width: 96%; margin-left: 10px; margin-top: 3%;box-shadow:  20px 20px 60px #b2b2b2,
                        -20px -20px 60px #f0f0f0;">
                    <h4 class="text-center fs-3 fw-bold pt-3"><?php echo $jsonEjer[0]["nombre"]; ?></h4>
                    <table class="table table-bordered border-primary rutina">
                        <thead>
                            <tr>
                                <th scope="col">Dia</th>
                                <th scope="col">Ejercicio</th>
                                <th scope="col">Repeticiones</th>
                                <th scope="col">Carga (kg)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $indice = "";
                            foreach ($jsonEjer[0] as $ejer => $value) {
                                if ($ejer !== "dni" && $ejer !== "musculo" && $ejer !== "fecha" && $ejer !== "nombre" && $ejer !== "descripcion") { ?>
                                    <tr>
                                        <th scope="col"><?php if ($indice == "") {
                                            $indice = 0;
                                        } else {
                                            $indice = $indice + 1;
                                        }
                                        ;
                                        echo $diasEjer[$indice]; ?> </th>
                                        <th scope="row"><?php
                                        echo $value;
                                        ?></th>
                                        <td><?php
                                        echo $repArreglo[$indice];
                                        ?></td>
                                        <td><?php echo $carga[$indice]; ?></td>
                                    </tr><?php }
                                ;
                            }
                            ; ?>
                        </tbody>
                        <div class="card-body">
                            <p class="card-text"><?php echo $jsonEjer[0]["descripcion"]; ?></p>
                        </div>
                </div><?php
            }
            ;
        }
    }
    ;

    ; ?>

</body>

</html>