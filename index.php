<?php
    session_start();

    error_reporting(0);
    ini_set('display_errors', 0);
?>

<?php
    include ("sql/abre.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedrolos T2</title>
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/main-index.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://mcapi.us/scripts/minecraft.min.js"></script>
    <script src="javascript/serverstatus.js"></script>    
</head>

<body>
    
    <header>
        <section>
            <section class="contenido-header">
                <div class="foto_central">
                    <a href=""><img src="images/ajolotes.gif" alt="Logo de Pedrolos T2" width="20px"></a>                
                </div>
                <div id="info-header">
                    <div class="left-div" id="ip">
                        <div class="img">
                            <img src="images/ip.png" alt="Foto de la IP">
                        </div>
                        <div class="text">
                            <p>pedrolos-t2.net<br>
                                <span class="server-online"></span><span class="server-offline"></span> · click para copiar</p>
                        </div>
                    </div>
                    <div class="right-div" id="discord">
                        <div class="img">
                            <img src="images/discord.png" alt="Foto de Discord">
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
                    <a class="nav-link active menuid" aria-current="page" href="index.php"><i class="bi bi-house-door-fill active"></i> Home</a>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="index.php"><i class="bi bi-house-door-fill active"></i> Home</a>
                            <a class="nav-link" href="pages/mapadinamico.php"><i class="bi bi-map-fill"></i> Mapa dinámico</a>
                            <a class="nav-link" href="pages/integrantes.php"><i class="bi bi-people-fill"></i> Integrantes</a>
                            <a class="nav-link" href="pages/galeria.php"><i class="bi bi-image-fill"></i> Galería</a>
                            <!-- Button trigger modal -->
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
                                                            <form name='form' method='post' action='php/sesiones/iniciar_sesion.php' enctype='multipart/form-data'>
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
                                                            ¿Ya te vas?
                                                        </div>
                                                        <div class='modal-footer iniciarsesion_footer'>
                                                        <a href='php/sesiones/cerrar_sesion.php'><button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cerrar Sesión</button></a>
                                                        
                                                        ";
                                                } 
                                            ?>                                        
                                        </div>
                                    </div>
                                </div>
                            </div>       
                        </div>
                    </div>
                    </div>
                </nav>
            </section>
        </section>
    </header>
    <main>
        <section class="contenido-main">
            <div id="fotolarga">
                <button class="btn fotolarga_f" data-bs-toggle="modal" data-bs-target="#VillaPedrolos"></button>
                <!-- Modal -->
                <div class="modal fade" id="VillaPedrolos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl">
                        <div class="modal-content sinfondo">
                            <div class="modal-body sinfondo">
                                <img src="images/foto_larga.png" alt="Foto de withers">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fotolarga_t">
                    <div>
                        <h2>
                            Villa Pedrolos
                        </h2>
                        <p>
                            Muchos pueblos tienen una historia ilustre, y muchos de estos pueblos se han 
                            convertido en atracciones turísticas por derecho propio. 
                            Los residentes de estos pueblos están felices de 
                            tener fama en forma de recuerdos nostálgicos de los visitantes del pasado.
                        </p>
                    </div>                    
                </div>
            </div>            
            <section class="ultimasNoticias">
                <div>
                    <h1>Últimas noticias</h1>
                    <hr>
                </div>
            </section>
            <?php 
            include("sql/abre.php");
            $nombre_usuario = $_SESSION['user_name'];
            $sql = "SELECT nombre_usuario FROM $usuarios WHERE nombre_usuario = '" . $nombre_usuario."';";
            $query=mysqli_query($conn,$sql);
            $counter=mysqli_num_rows($query);
            if ($counter==1){
                $form_subir_noticia = "                    
                    <section class='subir_noticia'>                    
                        <!-- Button trigger modal -->
                        <button type='button' class='btn btn-secondary boton_subir' data-bs-toggle='modal' data-bs-target='#subir_noticia'>
                            Subir una noticia de PedrolosT2
                        </button>
                        <!-- Modal -->
                        <div class='modal fade' id='subir_noticia' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                            <div class='modal-dialog modal-dialog-centered modal-dialog_noticia '>
                                <div class='modal-content modal-content_noticia'>
                                <div class='modal-header_noticia'>
                                    <h1 class='modal-title fs-5' id='exampleModalLabel'>Subir una noticia</h1>
                                </div>
                                <div class='modal-body'>
                                    <form name='form' method='post' action='php/registra_noticia.php' enctype='multipart/form-data' >
                                        <input type='text' name='titulo' placeholder='Escribe un titulo para la noticia' required='required'>
                                        <textarea rows='10' name='descripcion' placeholder='Escribe una descripción de la noticia' maxlength='1000' required='required'></textarea>
                                        <input type='file' name='my_file' required='required'>
                                </div>
                                <div class='modal-footer modal-footer_noticia'>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancelar</button>
                                    <input type='submit' class='btn btn-success' name='submit' value='Subir noticia'>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                    </section>                    
                ";
            } else {
                $form_subir_noticia = "";
            }            

            echo $form_subir_noticia;
            
            
            ?>
            <section id="publicaciones">
                <?php  
                    

                    include("sql/abre.php");


                    $sql = "SELECT id, titulo, descripcion, id_foto, extension_foto, subido_el, subido_por FROM $noticias";
                    
                    $result = $conn->query($sql);

                    while ($noticias = $result->fetch_assoc()){ 

                        if ($noticias['subido_por'] == $_SESSION['user_name']) {
                            $eliminar_publi = "
                            <!-- Button trigger modal Eliminar-->                                  
                            <button type='button' class='btn btn-secondary bi bi-trash-fill eliminar' data-bs-toggle='modal' data-bs-target='#eliminar".$noticias['id_foto']."'></button>
                            <!-- Modal Eliminar -->
                            <div class='modal fade' id='eliminar".$noticias['id_foto']."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog modal-dialog-centered eliminar_modal'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h1 class='modal-title fs-5' id='exampleModalLabel'>Eliminar publicación <i class='bi bi-exclamation-triangle-fill'></i></h1>
                                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                        </div>
                                        <div class='modal-body'>
                                            <p>¿Seguro que quieres eliminar la publiación?</p>
                                            <p>Esta acción no es reversible</p>
                                        </div>
                                        <div class='modal-footer'>
                                            <button type='button' class='btn btn-secondary botones_footer_eliminar' data-bs-dismiss='modal'>Cancelar</button>
                                            <form method='post' action='images/noticias/borra_noticia.php'>
                                                <input type='hidden' name='extension_foto' value='".$noticias['extension_foto']."'>
                                                <button type='submit' class='btn btn-danger botones_footer_eliminar' name='id_foto' value='".$noticias['id_foto']."'>Eliminar publicación</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                        } else {
                            $eliminar_publi = "";
                        }

                        echo "                        
                            <!-- PUBLICACION -->
                            <div class='publicacion'>
                                <button type='button' class='fecha_de_subida'>Subido el: ".$noticias['subido_el']." por ".$noticias['subido_por']."</button>
                                <button class='btn publicacion_f' data-bs-toggle='modal' data-bs-target='#".$noticias['id_foto']."'>
                                    <img class 'fotolarga_f' src='images/noticias/".$noticias['id_foto'].".".$noticias['extension_foto']."' alt=''>
                                    ".$eliminar_publi."
                                </button>
                                <!-- Modal -->
                                <div class='modal fade' id='".$noticias['id_foto']."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                    <div class='modal-dialog modal-dialog-centered modal-xl'>
                                        <div class='publicaciones modal-content' id='sinfondo'>
                                            <div class='publicaciones modal-body'>
                                                <img class 'fotolarga_f' src='images/noticias/".$noticias['id_foto'].".".$noticias['extension_foto']."' alt=''>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='publicacion_t'> 
                                    <div class='texto'>
                                        <h2>".$noticias['titulo']."</h2>       
                                        <hr>               
                                        <p>".$noticias['descripcion']."</p>
                                    </div>                        
                                </div>
                            </div>
                        ";                
                    }

                    include("sql/cierra.php");



                ?>
            </section>
        </section>
    </main>
    <footer>
        .
    </footer>
</body>

<footer>

</footer>

</html>