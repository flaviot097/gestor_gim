<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/cabecera.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <title>ENERGYM</title>
</head>


<body>
    <div class="inicio">
        <header><?php require_once ("./cabecera.php");
        $result = 1213; ?> </header>
        <script>
        var data = <?php echo $result; ?>
        </script>
    </div>
    <?php
    if (isset($_SESSION["usuario"])) {
        if ($_SESSION["usuario"] == "administrador") {

            $ci = curl_init();
            $url = "http://localhost:4000/todosUsuarios";
            curl_setopt($ci, CURLOPT_URL, $url);
            curl_setopt($ci, CURLOPT_RETURNTRANSFER, true);
            $resultado = curl_exec($ci);
            $array = json_decode($resultado, true);
            curl_close($ci);

            ?>
    <div class="filtro">
        <form class="formulario" action="./accion-index.php">
            <label for="validationServer02" class="form-label">Nombre y aplellido:</label>
            <input type="text" class="form-control" id="validationServer02" placeholder="Juan Perez" required>
            <button class="btn btn-primary" id="formulario" type="button">Filtrar</button>
        </form>
    </div>

    <table class="table table-bordered border-primary">
        <thead>
            <tr>
                <th scope="col">Usuario N°:</th>
                <th scope="col">Nonmbre y apellido</th>
                <th scope="col">Disiplina</th>
                <th scope="col">Pago</th>
                <th scope="col">Dni:</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody class="cuerpo-tabla"><?php $cliente_N = 0;
                foreach ($array as $valor) { ?>

            <tr>
                <th scope="row"><?php if ($cliente_N == 0) {
                                $cliente_N = 1;
                                echo $cliente_N;
                            } else {
                                $cliente_N++;
                                echo $cliente_N;
                            } ?></th>
                <td><?php echo $valor["nombre_y_apellido"]; ?></td>
                <td><?php echo $valor["diciplina"]; ?></td>
                <td><?php if ($valor["pago"] == 0) {
                                echo "pago";
                            } else {
                                echo "no pago";
                            }
                            ;
                            ?></td>
                <td><?php echo $valor["dni"]; ?></td>
                <td><a href='./eliminar.php?id=<?php echo $valor["numero_de_usuario"];
                            ?>' class="btn-eliminar" id="<?php echo $valor["dni"];
                            ?>"><svg xmlns="http://www.w3.org/2000/svg" class="svg-eliminar"
                            id="<?php echo $valor["dni"]; ?>" viewBox="0 0 24 24" fill="#000000">
                            <path
                                d="M20 6h-4V4.5A2.5 2.5 0 0 0 13.5 2h-3A2.5 2.5 0 0 0 8 4.5V6H4c-.55 0-1 .45-1 1s.45 1 1 1h.12l.73 11.66A2.49 2.49 0 0 0 7.35 22h9.3c1.32 0 2.41-1.03 2.5-2.34L19.88 8H20c.55 0 1-.45 1-1s-.45-1-1-1ZM10 4.5c0-.28.22-.5.5-.5h3c.28 0 .5.22.5.5V6h-4V4.5Zm7.15 15.03a.51.51 0 0 1-.5.47h-9.3a.51.51 0 0 1-.5-.47L6.13 8h11.74l-.72 11.53ZM10 10c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1s1-.45 1-1v-6c0-.55-.45-1-1-1ZM14 10c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1s1-.45 1-1v-6c0-.55-.45-1-1-1Z">
                            </path>
                        </svg></a></td>
            </tr>
            <?php }
                ; ?>
        </tbody>
    </table>
    <?php }
        ;
    } ?>
</body>


<script src="./js/filtrado.js"></script>


</html>