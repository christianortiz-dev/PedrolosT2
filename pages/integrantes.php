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
    <link rel="stylesheet" href="../css/main-integrantes.css">
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
                    <a class="nav-link active menuid" href="../pages/integrantes.php"><i class="bi bi-people-fill active"></i> Integrantes</a>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                        <a class="nav-link" aria-current="page" href="../"><i class="bi bi-house-door-fill"></i> Home</a>
                        <a class="nav-link" href="../pages/mapadinamico.php"><i class="bi bi-map-fill"></i> Mapa dinámico</a>
                        <a class="nav-link active" href="../pages/integrantes.php"><i class="bi bi-people-fill active"></i> Integrantes</a>
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
            <div class="integrantes">
                <div class="integranteindividual">
                    <div class="imagen">
                        <p><img src="../images/pico.png" alt="Pico"> elTitoChriss</p>
                        <img src="../images/elTitoChriss.png" alt="elTitoChriss">
                    </div>
                    <div class="datos izquierda">
                        <table class="table">
                            <thead>
                              <tr>
                                <th><img src="../images/elTitoChriss_C.png" alt="Cabeza elTitoChriss"></th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h3>Actividad favorita</h3>
                                        <p>Creación de mecanismos</p>                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3>Sobre mí</h3>
                                        <p>He diseñado y creado la mayor parte de mecanismos de este servidor.</p>                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="integranteindividual inreverse">
                    <div class="datos derecha">
                        <table class="table">
                            <thead>
                              <tr>
                                <th><img src="../images/DemonyWolfy_C.png" alt="Cabeza DemonyWolfy"></th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h3>Actividad favorita</h3>
                                        <p>Decoración de interiores</p>                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3>Sobre mí</h3>
                                        <p>Me gusta la decoración simple y elegante, así como se puede ver en Villa Pedrolo.</p>                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="imagen">
                        <p><img src="../images/fuego.png" alt="Fuego"> DemonyWolfy</p>
                        <img src="../images/DemonyWolfy.png" alt="DemonyWolfy">
                    </div>
                </div>
            </div>
            <div class="integrantes">
                <div class="integranteindividual">
                    <div class="imagen">
                        <p><img src="../images/arco.png" alt="Arco"> BluSaky</p>
                        <img src="../images/BluSaky.png" alt="BluSaky">
                    </div>
                    <div class="datos izquierda">
                        <table class="table">
                            <thead>
                              <tr>
                                <th><img src="../images/BluSaky_C.png" alt="Cabeza BluSaky"></th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h3>Actividad favorita</h3>
                                        <p>Investigación del mundo</p>                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3>Sobre mí</h3>
                                        <p>Me encanta salir a investigar mundo y conocer y amaestrar nuevos animales.</p>                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="integranteindividual inreverse">                    
                    <div class="datos derecha">
                        <table class="table">
                            <thead>
                              <tr>
                                <th><img src="../images/Sergio16_C.png" alt="Cabeza Sergio16"></th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h3>Actividad favorita</h3>
                                        <p>Recolección de recursos</p>                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3>Sobre mí</h3>
                                        <p>Suelo ir a por materiales que nos puedan ayudar en el desarrollo de Villa Pedrolo.</p>                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="imagen">
                        <p><img src="../images/cana.png" alt="Caña"> Sergio16</p>
                        <img src="../images/Sergio16.png" alt="Sergio16">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        .
    </footer>
</body>

<footer>

</footer>

</html>



