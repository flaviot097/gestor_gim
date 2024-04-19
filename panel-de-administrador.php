<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/cabecera.css">
    <link rel="stylesheet" href="./css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Panel</title>
</head>

<body>
    <div class="inicio">
        <header><?php require_once ("./cabecera.php"); ?> </header>
    </div>
    <div class="container">
        <div class="contenedor-panel" style=" margin-left: 10px; margin-top: 3%;box-shadow:  20px 20px 60px #b2b2b2,
                -20px -20px 60px #f0f0f0;">
            <div class="container-form-usuario">
                <div class="card">
                    <div class="icon">
                        <img class="imagenes-user"
                            src="data:image/png;base64,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"
                            alt="usuario">
                    </div>
                    <div class="content">
                        <span class="title">Crear Usuario</span>
                        <div class="desc">
                            <form action="./accion-panel.php" method="post" class="form">
                                <label for="usuario" class="usuario">Nombre y Apellido:</label>
                                <input type="text" name="usuario" class="usuario" required />
                                <br />
                                <label for="dni" class="contrasenia">Documento:</label>
                                <input type="number" name="dni" class="contrasena" required />
                                <br />
                                <label for="contrasena" class="contrasenia">Contraseña:</label>
                                <input type="number" name="contrasena" class="contrasena" required />
                                <br />
                                <label for="diciplinas" class="contrasenia">Diciplina:</label>
                                <input type="text" name="diciplina" class="contrasena" required />
                                <br />
                                <label for="fecha" class="contrasenia">Fecha:</label>
                                <input type="date" name="fecha" class="contrasena" required />
                                <br />
                                <label for="pago" class="contrasenia">Pago:</label>
                                <input type="number" name="pago" class="contrasena" required />
                                <br />
                        </div>
                        <div class="actions panel">
                            <div>
                                <button type="submit" class="notnow crear-usuario ">Crear Usuario</button>
                            </div>
                        </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="container-form-rutina">
                <div class="card rutina" style="margin-top: 150px;">
                    <div class="content">
                        <span class="title">Crear Rutina</span><br>
                        <div class="desc">
                            <form action="./accion-rutina.php" method="post" class="form">
                                <div class="contenedor-form-nombredni"><label for="DNI">Numero de
                                        documento:</label><input name="dni-rutina" type="number" required><label
                                        for="nombre">Nombre y
                                        Apellido:</label><input required name="nombre_apellido" type="text">
                                    <label for="DNI">Fecha:</label><input required id="fecha" name="fecha-rutina"
                                        type="date">
                                </div><br>
                                <label for="descripcion">Descripcion:</label><textarea required
                                    name="descripcion-rutina" id="descripcion-rutina" cols="22" rows="4"></textarea>
                                <table class="table table-bordered border-primary table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="encabezado-tabla">Dia</th>
                                            <th scope="col" class="encabezado-tabla">Musculo</th>
                                            <th scope="col" class="encabezado-tabla">Ejercicio</th>
                                            <th scope="col" class="encabezado-tabla">Repeticiones</th>
                                            <th scope="col" class="encabezado-tabla">Carga (kg)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="dia1"><input name="dia1" type="number" value="0">
                                            </th>
                                            <td>Espalda</td>
                                            <td><input name="ejercicio-espalda1" type="text" default="-" value="-"></td>
                                            <td><input name="repeticiones1" type="number" value="0"></td>
                                            <td><input name="carga1" type="number" value="0"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="dia2"><input name="dia2" type="number" value="0">
                                            </th>
                                            <td>Espalda</td>
                                            <td><input name="ejercicio-espalda2" type="text" value="-"></td>
                                            <td><input name="repeticiones2" type="number" value="0"></td>
                                            <td><input name="carga2" type="number" value="0"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="dia3"><input name="dia3" type="number" value="0">
                                            </th>
                                            <td>Espalda</td>
                                            <td><input name="ejercicio-espalda3" type="text" value="-"></td>
                                            <td><input name="repeticiones3" type="number" value="0"></td>
                                            <td><input name="carga3" type="number" value="0"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="dia4"><input name="dia4" type="number" value="0">
                                            </th>
                                            <td>Espalda</td>
                                            <td><input name="ejercicio-espalda4" type="text" value="-"></td>
                                            <td><input name="repeticiones4" type="number" value="0"></td>
                                            <td><input name="carga4" type="number" value="0"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="dia5"><input name="dia5" type="number" value="0">
                                            </th>
                                            <td>Espalda</td>
                                            <td><input name="ejercicio-espalda5" type="text" value="-"></td>
                                            <td><input name="repeticiones5" type="number" value="0"></td>
                                            <td><input name="carga5" type="number" value="0"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="dia6"><input name="dia6" type="number" value="0">
                                            </th>
                                            <td>Pecho</td>
                                            <td><input name="ejercicio_pecho1" type="text" value="-"></td>
                                            <td><input name="repeticiones6" type="number" value="0"></td>
                                            <td><input name="carga6" type="number" value="0"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="dia7"><input name="dia7" type="number" value="0">
                                            </th>
                                            <td>Pecho</td>
                                            <td><input name="ejercicio_pecho2" type="text" value="-"></td>
                                            <td><input name="repeticiones7" type="number" value="0"></td>
                                            <td><input name="carga7" type="number" value="0"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="dia8"><input name="dia8" type="number" value="0">
                                            </th>
                                            <td>Pecho</td>
                                            <td><input name="ejercicio_pecho3" type="text" value="-"></td>
                                            <td><input name="repeticiones8" type="number" value="0"></td>
                                            <td><input name="carga8" type="number" value="0"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="dia9"><input name="dia9" type="number"></th>
                                            <td>Pecho</td>
                                            <td><input name="ejercicio_pecho4" type="text" value="-"></td>
                                            <td><input name="repeticiones9" type="number" value="0"></td>
                                            <td><input name="carga9" type="number" value="0"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="dia10"><input name="dia10" value="0" type="number">
                                            </th>
                                            <td>Pecho</td>
                                            <td><input name="ejercicio_pecho5" type="text" value="-"></td>
                                            <td><input name="repeticiones10" type="number" value="0"></td>
                                            <td><input name="carga10" type="number" value="0"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="dia11"><input name="dia11" type="number" value="0">
                                            </th>
                                            <td>Adbdominal</td>
                                            <td><input name="abdominales1" type="text" value="-"></td>
                                            <td><input name="repeticiones11" type="number" value="0"></td>
                                            <td><input name="carga11" type="number" value="0"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="dia12"><input name="dia12" type="number" value="0">
                                            </th>
                                            <td>abdominal</td>
                                            <td><input name="abdominales2" type="text" value="-"></td>
                                            <td><input name="repeticiones12" type="number" value="0"></td>
                                            <td><input name="carga12" type="number" value="0"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="dia13"><input name="dia13" type="number" value="0">
                                            </th>
                                            <td>abdominal</td>
                                            <td><input name="abdominales3" type="text" value="-"></td>
                                            <td><input name="repeticiones13" type="number" value="0"></td>
                                            <td><input name="carga13" type="number" value="0"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="dia14"><input name="dia14" type="number" value="0">
                                            </th>
                                            <td>pierna</td>
                                            <td><input name="ejercicio_pierna1" type="text" value="-"></td>
                                            <td><input name="repeticiones14" type="number" value="0"></td>
                                            <td><input name="carga14" type="number" value="0"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="dia15"><input name="dia15" type="number" value="0">
                                            </th>
                                            <td>Pierna</td>
                                            <td><input name="ejercicio_pierna2" type="text" value="-"></td>
                                            <td><input name="repeticiones15" type="number" value="0"></td>
                                            <td><input name="carga15" type="number" value="0"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="dia16"><input name="dia16" type="number" value="0">
                                            </th>
                                            <td>Pierna</td>
                                            <td><input name="ejercicio_pierna3" type="text" value="-"></td>
                                            <td><input name="repeticiones16" type="number" value="0"></td>
                                            <td><input name="carga16" type="number" value="0"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="dia17"><input name="dia17" type="number" value="0">
                                            </th>
                                            <td>Pierna</td>
                                            <td><input name="ejercicio_pierna4" type="text" value="-"></td>
                                            <td><input name="repeticiones17" type="number" value="0"></td>
                                            <td><input name="carga17" type="number" value="0"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="dia18"><input name="dia18" type="number" value="0">
                                            </th>
                                            <td>Pierna</td>
                                            <td><input name="ejercicio_pierna5" type="text" value="-"></td>
                                            <td><input name="repeticiones18" type="number" value="0"></td>
                                            <td><input name="carga18" type="number" value="0"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="dia19"><input name="dia19" type="number" value="0">
                                            </th>
                                            <td>Pierna</td>
                                            <td><input name="ejercicio_pierna6" type="text" value="-"></td>
                                            <td><input name="repeticiones19" type="number" value="0"></td>
                                            <td><input name="carga19" type="number" value="0"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="dia20"><input name="dia20" type="number" value="0">
                                            </th>
                                            <td>Pierna</td>
                                            <td><input name="ejercicio_hombro1" type="text" value="-"></td>
                                            <td><input name="repeticiones20" type="number" value="0"></td>
                                            <td><input name="carga20" type="number" value="0"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="dia21"><input name="dia21" type="number" value="0">
                                            </th>
                                            <td>Hombro</td>
                                            <td><input name="ejercicio_hombro2" type="text" value="-"></td>
                                            <td><input name="repeticiones21" type="number" value="0"></td>
                                            <td><input name="carga21" type="number" value="0"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="dia22"><input name="dia22" type="number" value="0">
                                            </th>
                                            <td>Hombro</td>
                                            <td><input name="ejercicio_hombro3" type="text" value="-"></td>
                                            <td><input name="repeticiones22" type="number" value="0"></td>
                                            <td><input name="carga22" type="number" value="0"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="dia23"><input name="dia23" type="number" value="0">
                                            </th>
                                            <td>Hombro</td>
                                            <td><input name="abdominales4" type="text" value="-"></td>
                                            <td><input name="repeticiones23" type="number" value="0"></td>
                                            <td><input name="carga23" type="number" value="0"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="dia24"><input name="dia24" type="number" value="0">
                                            </th>
                                            <td>abdominal</td>
                                            <td><input name="abdominales5" type="text" value="-"></td>
                                            <td><input name="repeticiones24" type="number" value="0"></td>
                                            <td><input name="carga24" type="number" value="0"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="dia25"><input name="dia25" type="number" value="0">
                                            </th>
                                            <td>abdominal</td>
                                            <td><input name="abdominales6" type="text" value="-"></td>
                                            <td><input name="repeticiones25" type="number" value="0"></td>
                                            <td><input name="carga25" type="number" value="0"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="dia26"><input name="dia26" type="number" value="0">
                                            </th>
                                            <td>abdominal</td>
                                            <td><input name="ejercicio_biceps1" type="text" value="-"></td>
                                            <td><input name="repeticiones26" type="number" value="0"></td>
                                            <td><input name="carga26" type="number" value="0"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="dia27"><input name="dia27" type="number" value="0">
                                            </th>
                                            <td>biceps</td>
                                            <td><input name="ejercicio_biceps2" type="text" value="-"></td>
                                            <td><input name="repeticiones27" type="number" value="0"></td>
                                            <td><input name="carga27" type="number" value="0"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="dia28"><input name="dia28" type="number" value="0">
                                            </th>
                                            <td>biceps</td>
                                            <td><input name="ejercicio_biceps3" type="text" value="-"></td>
                                            <td><input name="repeticiones28" type="number" value="0"></td>
                                            <td><input name="carga28" type="number" value="0"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="dia29"><input name="dia29" type="number" value="0">
                                            </th>
                                            <td>biceps</td>
                                            <td><input name="ejercicio_triceps1" type="text" value="-"></td>
                                            <td><input name="repeticiones29" type="number" value="0"></td>
                                            <td><input name="carga29" type="number" value="0"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="dia30"><input name="dia30" type="number" value="0">
                                            </th>
                                            <td>Triceps</td>
                                            <td><input name="ejercicio_triceps2" type="text" value="-"></td>
                                            <td><input name="repeticiones30" type="number" value="0"></td>
                                            <td><input name="carga30" type="number" value="0"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="dia31"><input name="dia31" type="number" value="0">
                                            </th>
                                            <td>Triceps</td>
                                            <td><input name="ejercicio_triceps3" type="text" value="-"></td>
                                            <td><input name="repeticiones31" type="number" value="0"></td>
                                            <td><input name="carga31" type="number" value="0"></td>
                                        </tr>

                                    </tbody>
                                </table>
                        </div>
                        <div class="actions panel btn-rutina">
                            <button type="submit" class="notnow crear-rutina ">Crear rutina</button>
                        </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</body>

</html>