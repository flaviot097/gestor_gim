<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/cabecera.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Estadisticas</title>
</head>

<body>
    <div class="inicio">
        <header><?php require_once ("./cabecera.php");
        error_reporting(0); ?> </header>
    </div>
    <?php if (isset($_SESSION["usuario"])) {
        if ($_SESSION["usuario"] == "administrador") { ?>
            <div class="conteiner-estadisticas" style="width: 100%;">
                <div class="card" style="width: 98%; margin-left: 10px; margin-top: 3%;box-shadow:  20px 20px 60px #b2b2b2,
             -20px -20px 60px #f0f0f0;">
                    <h4 class="text-center fs-3 fw-bold pt-3">Usuario</h4>
                    <div id="chartsContainer">
                        <div id="text-grafico">
                            <canvas id="grafico-gimnacio" width="800" height="300"></canvas>
                        </div>
                    </div>
                    <script src="./js/grafico-gimnacio.js"></script>
                </div>

            </div>
        <?php } else { ?>
            <div class="conteiner-estadisticas" style="width: 100%;">
                <div class="card" style="width: 98%; margin-left: 10px; margin-top: 3%;box-shadow:  20px 20px 60px #b2b2b2,
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
                    <div id="chartsContainer">
                        <div id="text-chart">
                            <style>
                                #grafico {
                                    width: 80%;
                                    margin: auto;
                                }
                            </style>
                            </head>

                            <body>
                                <canvas id="grafica" width="2300" height="400"></canvas>
                        </div>
                    </div>
                </div>
                <script>
                    var ejercicios = '<?php echo json_encode($jsonEjer); ?>';
                    var carga = '<?php echo json_encode($jsonUsers); ?>';
                </script>";
            </div>
            <script src="./js/grafico.js"></script>
        <?php }
        ; ?>
    <?php }
    ; ?>
</body>



</html>