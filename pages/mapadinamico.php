<?php
    session_start();
?>
<?php
    include ("../sql/abre.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedrolos T2</title>
    <link rel="icon" href="../images/favicon.png" type="image/x-icon">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/main-mapa.css">
    <script src="https://mcapi.us/scripts/minecraft.min.js"></script>
    <script src="../javascript/serverstatus.js"></script>
    
</head>

<body>
    <header>
        <section>
            <section class="contenido-header">
                <div class="foto_central">
                    <a href=""><img src="../images/ajolotes.gif" alt="Logo de Pedrolos T2" width="20px"></a>                
                </div>
                <div id="info-header">
                    <div class="left-div" id="ip">
                        <div class="img">
                            <img src="../images/ip.png" alt="Foto de la IP">
                        </div>
                        <div class="text">
                            <p>pedrolos-t2.net<br>
                                <span class="server-online"></span><span class="server-offline"></span> · click para copiar</p>
                        </div>
                    </div>
                    <div class="right-div" id="discord">
                        <div class="img">
                            <img src="../images/discord.png" alt="Foto de Discord">
                        </div>
                        <div class="text">
                            <p>Discord Community<br>
                            click para entrar</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="navmenu">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid">
                    <button class="navbar-toggler" type="button btn-secondary" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="nav-link active menuid" href="../pages/mapadinamico.php"><i class="bi bi-map-fill active"></i> Mapa dinámico</a>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                        <a class="nav-link" aria-current="page" href="../"><i class="bi bi-house-door-fill"></i> Home</a>
                        <a class="nav-link active" href="../pages/mapadinamico.php"><i class="bi bi-map-fill active"></i> Mapa dinámico</a>
                        <a class="nav-link" href="../pages/integrantes.php"><i class="bi bi-people-fill"></i> Integrantes</a>
                        <a class="nav-link" href="../pages/galeria.php"><i class="bi bi-image-fill"></i> Galería</a>
                        <!-- INICIO -->
                        <button type='button' class='nav-link' data-bs-toggle='modal' data-bs-target='#iniciarsesion'>
                                <i class="bi bi-person-fill"></i>
                                <?php 
                                    if(!isset($_SESSION['user_name'])) {
                                        echo "Invitado";
                                        }
                                    else {
                                        echo $_SESSION['user_name'];
                                    } 
                                ?>
                            </button>
                            
                            <!-- Modal -->
                            <div class='modal fade' id='iniciarsesion' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog iniciarsesion_dialog'>
                                    <div class='modal-content iniciarsesion_content'>
                                        <div class='modal-header iniciarsesion_header'>
                                            <h1 class='modal-title fs-5' id='iniciarsesion'>
                                                <?php 
                                                    if(!isset($_SESSION['user_name'])) {
                                                        echo "Invitado";
                                                        }
                                                    else {
                                                        echo $_SESSION['user_name'];
                                                    }
                                                ?>
                                            </h1>
                                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                        </div>
                                        <div class='modal-body iniciarsesion_body'>
                                            <?php 
                                                if(!isset($_SESSION['user_name'])) {
                                                    echo "
                                                            <form name='form' method='post' action='../php/sesiones/iniciar_sesion.php' enctype='multipart/form-data'>
                                                                <input type='text' name='nombre_usuario_form' placeholder='Usuario' required='required'>
                                                                <input type='password' name='contrasena_form' placeholder='Contraseña' required='required'>
                                                                
                                                        </div>
                                                        <div class='modal-footer iniciarsesion_footer'>
                                                                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancelar</button>
                                                                <input type='submit' class='btn btn-success' name='submit' value='Iniciar Sesión'>
                                                            </form>
                                                        ";
                                                    }
                                                else {
                                                    echo "
                                                            ¿Ya te vas mamapinga?
                                                        </div>
                                                        <div class='modal-footer iniciarsesion_footer'>
                                                        <a href='../php/sesiones/cerrar_sesion.php'><button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cerrar Sesión</button></a>
                                                        
                                                        ";
                                                } 
                                            ?>                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- FIN -->
                        </div>
                    </div>
                    </div>
                </nav>
            </section>
        </section>
    </header>
    <main>
        <section class="contenido-main">
            <div id="mapa">
                <iframe class="mapa_f" src="https://mapa-dinamico-pedrolos-t2.on.drv.tw/www.dynmap-pedrolost2.com/#/13/64/195/-3/world/world-lighting"></iframe>
                <div class="mapa_t">
                    <div>
                        <h2>
                            Mapa dinámico
                        </h2>
                        <p>
                            En este mapa podemos ver con todo detalle la evolución de Villa Pedrolo, así como el resto
                            del mundo. Este mapa se actualiza semanalmente el viernes.
                            Gracias a este mapa podemos ver en una vista ceniatal todo el mundo.
                        </p>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>
</body>

<footer>

</footer>

</html>



