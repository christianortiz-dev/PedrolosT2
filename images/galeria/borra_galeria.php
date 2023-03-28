<?php 

    $id_foto = $_POST['id_foto'];
    $ext = $_POST['extension_foto'];

    include("../../sql/abre.php");

    $sql = "DELETE FROM galeria WHERE id_foto = '$id_foto'";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }

    include("../../sql/cierra.php");

    $filename = $id_foto.'.'.$ext;

    if (unlink($filename)) {
        echo 'The file ' . $filename . ' was deleted successfully!';
    } else {
        echo 'There was a error deleting the file ' . $filename;
    }

    header('Location:../../pages/galeria.php')

?>