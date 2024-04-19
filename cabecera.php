<div class="cabecera">
    <a href="./index.php" class="enlace">
        <div class="contenedor-img-cabecera"><svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                fill="#FFFFFF">
                <path
                    d="M7 10v1c0 1.32 2 1.32 2 0v-1c0-1.32-2-1.32-2 0ZM11 9v1c0 1.32 2 1.32 2 0V9c0-1.32-2-1.32-2 0ZM7 15v1c0 1.32 2 1.32 2 0v-1c0-1.32-2-1.32-2 0ZM11 14v1c0 1.32 2 1.32 2 0v-1c0-1.32-2-1.32-2 0ZM18.5 7H17V5.08a2.5 2.5 0 0 0-3.29-2.37l-9 3A2.5 2.5 0 0 0 3 8.08V20a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V9.5A2.5 2.5 0 0 0 18.5 7ZM5 8.08c0-.22.14-.41.34-.47l9-3a.5.5 0 0 1 .66.47V19H5V8.08ZM19 19h-2V9h1.5c.28 0 .5.22.5.5V19Z">
                </path>
            </svg><br> Usuarios</div>
    </a>
    <a href="../YourTrainer/rutina.php" class="enlace">
        <div class="contenedor-img-cabecera"><svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                fill="#FFFFFF">
                <path
                    d="M19.5 6h-7.29a.47.47 0 0 1-.35-.15l-1.12-1.12A2.49 2.49 0 0 0 8.97 4H4.51a2.5 2.5 0 0 0-2.5 2.5v11a2.5 2.5 0 0 0 2.5 2.5h15a2.5 2.5 0 0 0 2.5-2.5v-9a2.5 2.5 0 0 0-2.5-2.5Zm-15 0h4.29c.13 0 .26.05.35.15l1.12 1.12c.47.47 1.1.73 1.77.73h7.46c.28 0 .5.22.5.5v1.85a3.45 3.45 0 0 0-1.5-.35H5.5c-.54 0-1.04.13-1.5.35V6.5c0-.28.22-.5.5-.5ZM20 17.5a.5.5 0 0 1-.5.5h-15a.5.5 0 0 1-.5-.5v-4c0-.83.67-1.5 1.5-1.5h13c.83 0 1.5.67 1.5 1.5v4Z">
                </path>
            </svg><br> Rutinas</div>
    </a>
    <a href="./estadisticas.php" class="enlace">
        <div class="contenedor-img-cabecera">
            <svg class="svg" id="Capa_1" enable-background="new 0 0 512.006 512.006" viewBox="0 0 512.006 512.006"
                xmlns="http://www.w3.org/2000/svg">
                <g>
                    <path
                        d="m512.006 401.751v-30h-25.003v-281.633h24.986v-90.112h-511.989v90.111h25.008v281.633h-25.002v30h240.666v26.03c-44.849 17.217-33.661 83.329 15.001 84.218 48.669-.894 59.844-67.01 14.999-84.218v-26.03h241.334zm-256.334 80.249c-7.413 0-13.443-6.031-13.443-13.444.676-17.811 26.215-17.805 26.888 0-.001 7.413-6.032 13.444-13.445 13.444zm-225.672-451.994h451.989v30.111h-451.989zm25.008 60.112h401.995v281.633h-401.995z" />
                    <path d="m300.674 120.122h-90.004v161.622h90.004zm-30 131.622h-30.004v-101.622h30.004z" />
                    <path d="m420.682 172.417h-90.004v109.327h90.004zm-30 79.327h-30.004v-49.327h30.004z" />
                    <path d="m180.666 157.416h-90.003v124.328h90.003zm-30 94.328h-30.003v-64.328h30.003z" />
                    <path d="m210.669 311.747h90.006v30h-90.006z" />
                    <path d="m90.662 311.747h90.005v30h-90.005z" />
                    <path d="m330.677 311.747h90.006v30h-90.006z" />
                </g>
            </svg><br> Estadisticas
        </div>
    </a>
    <?php if (!isset($_SESSION["usuario"])) {
         ?>
    <div class="contenedor-img-cabecera">
        <a href="./session.php" class="enlace"><svg class="svg" id="iniciar-sesion" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24" fill="#FFFFFF">
                <path
                    d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20Zm0 18.22a8.18 8.18 0 0 1-5.03-1.72 8.18 8.18 0 0 1 10.06 0A8.18 8.18 0 0 1 12 20.22Zm6.32-2.97C16.6 15.84 14.4 15 12 15s-4.6.84-6.32 2.25a8.22 8.22 0 1 1 12.64 0ZM12 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2Z">
                </path>
            </svg> <br>
            Iniciar Sesion
    </div>
    </a>
    <?php } else if (($_SESSION["usuario"] == "administrador")) {
       ;
        ?>
    <a href="./panel-de-administrador.php" class="enlace">
        <div class="contenedor-img-cabecera"><svg xmlns="http://www.w3.org/2000/svg" id="adinistrador"
                viewBox="0 0 24 24" fill="#FFFFFF">
                <path
                    d="M18.5 3h-13A2.5 2.5 0 0 0 3 5.5v9A2.5 2.5 0 0 0 5.5 17H11v2H8c-.55 0-1 .45-1 1s.45 1 1 1h8c.55 0 1-.45 1-1s-.45-1-1-1h-3v-2h5.5a2.5 2.5 0 0 0 2.5-2.5v-9A2.5 2.5 0 0 0 18.5 3Z">
                </path>
            </svg><br>
            <?php echo $_SESSION["usuario"]; ?></div>
    </a>
    <div class="contenedor-img-cabecera">
        <a href="./cerrar-session.php" class="enlace"><svg class="svg cerrar-session" id=""
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFFFFF">
                <path
                    d="m20.56 10.94-5-5c-.59-.59-1.54-.59-2.12 0s-.59 1.54 0 2.12l2.44 2.44H8.5c-.83 0-1.5.67-1.5 1.5s.67 1.5 1.5 1.5h7.38l-2.44 2.44a1.49 1.49 0 0 0 0 2.12c.29.29.68.44 1.06.44s.77-.15 1.06-.44l5-5c.59-.59.59-1.54 0-2.12ZM8.5 18H6V6h2.5c.83 0 1.5-.67 1.5-1.5S9.33 3 8.5 3H6C4.35 3 3 4.35 3 6v12c0 1.65 1.35 3 3 3h2.5c.83 0 1.5-.67 1.5-1.5S9.33 18 8.5 18Z">
                </path>
            </svg><br>
            Cerrar Sesion
    </div>
    </a>
    <?php } else {
        ?>
    <div class="contenedor-img-cabecera"><a href="./session.php" class="enlace">
            <svg class="svg" id="admin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFFFFF">
                <path
                    d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20Zm6.32 15.25C16.6 15.84 14.4 15 12 15s-4.6.84-6.32 2.25a8.22 8.22 0 1 1 12.64 0ZM12 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8Z">
                </path>
            </svg><br>
            <?php echo $_SESSION["usuario"]; ?></div>
    </a>
    <div class="contenedor-img-cabecera">
        <a href="./cerrar-session.php" class="enlace"><svg class="svg" id="admin" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24" fill="#FFFFFF">
                <path
                    d="m20.56 10.94-5-5c-.59-.59-1.54-.59-2.12 0s-.59 1.54 0 2.12l2.44 2.44H8.5c-.83 0-1.5.67-1.5 1.5s.67 1.5 1.5 1.5h7.38l-2.44 2.44a1.49 1.49 0 0 0 0 2.12c.29.29.68.44 1.06.44s.77-.15 1.06-.44l5-5c.59-.59.59-1.54 0-2.12ZM8.5 18H6V6h2.5c.83 0 1.5-.67 1.5-1.5S9.33 3 8.5 3H6C4.35 3 3 4.35 3 6v12c0 1.65 1.35 3 3 3h2.5c.83 0 1.5-.67 1.5-1.5S9.33 18 8.5 18Z">
                </path>
            </svg><br>
            Cerrar Sesion
    </div>
    </a><?php }
    ; ?>

</div>