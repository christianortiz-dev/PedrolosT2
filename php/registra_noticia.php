<?php
    session_start();
?>

<?php 
    $desc = $_POST['descripcion'];
    $titulo = $_POST['titulo'];
    $subido_por = $_SESSION['user_name'];

  if (($_FILES['my_file']['name']!="")){
    // Where the file is going to be stored
        $target_dir = "../images/noticias/";
        $file = $_FILES['my_file']['name'];
        $path = pathinfo($file);
        $filename = rand(1, 99999);
        $filename = "a".$filename;
        $ext = $path['extension'];
        $temp_name = $_FILES['my_file']['tmp_name'];
        $path_filename_ext = $target_dir.$filename.".".$ext;
     
    // Check if file already exists
    if (file_exists($path_filename_ext)) {
     echo "Sorry, file already exists.";
     }else{
     move_uploaded_file($temp_name,$path_filename_ext);
     echo "Congratulations! File Uploaded Successfully.";
     }
    }

    $fecha = date("d/m/Y");

    $id_foto = $filename;

    include("../sql/abre.php");

    $sql = "INSERT INTO $noticias (titulo, descripcion, id_foto, extension_foto, subido_el, subido_por)
    VALUES ('".$titulo."','".$desc."','".$id_foto."','".$ext."','".$fecha."','".$subido_por."')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }

    include("../sql/cierra.php");


    // echo $filename;
    // echo $fecha;

    header('Location:../')
?>

