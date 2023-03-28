<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $galeria = 'galeria';
    $noticias = 'noticias';
    $usuarios = 'usuarios';

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";
    // echo "<br>";

    // Create database
    $sql = "CREATE DATABASE IF NOT EXISTS pedrolost2";
    if ($conn->query($sql) === TRUE) {
        //echo "Database created successfully </br>";
    } else {
        //echo "Error creating database: " . $conn->error . "</br>";
    }  
    
    $dbname = "pedrolost2";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //TABLA GALERIA
    $sql = "CREATE TABLE IF NOT EXISTS `galeria` (
        `id` int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `id_foto` varchar(6) NOT NULL,
        `titulo` varchar(255) NOT NULL,
        `descripcion` varchar(1000) NOT NULL,
        `extension_foto` varchar(5) NOT NULL,
        `subido_por` varchar(20) NOT NULL,
        `subido_el` varchar(21) NOT NULL,
        `fecha` timestamp NOT NULL DEFAULT current_timestamp()
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

    if ($conn->query($sql) === TRUE) {
        //echo "Table galeria created successfully </br>";
    } else {
        //echo "Error creating table: " . $conn->error . "</br>";
    }

    //TABLA NOTICIAS
    $sql = "CREATE TABLE IF NOT EXISTS `noticias` (
        `id` int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `id_foto` varchar(6) NOT NULL,
        `titulo` varchar(255) NOT NULL,
        `descripcion` varchar(1000) NOT NULL,
        `extension_foto` varchar(5) NOT NULL,
        `subido_por` varchar(20) NOT NULL,
        `subido_el` varchar(21) NOT NULL,
        `fecha` timestamp NOT NULL DEFAULT current_timestamp()
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
    
    if ($conn->query($sql) === TRUE) {
        //echo "Table noticias created successfully </br>";
    } else {
        //echo "Error creating table: " . $conn->error . "</br>";
    }
    
    //TABLA USUARIOS
    $sql = "CREATE TABLE IF NOT EXISTS `usuarios` (
        `id` int(1) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `nombre_usuario` varchar(30) NOT NULL,
        `contrasena` varchar(30) NOT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

    if ($conn->query($sql) === TRUE) {
        //echo "Table usuarios created successfully </br>";
    } else {
        //echo "Error creating table: " . $conn->error . "</br>";
    }

    $sql = "INSERT IGNORE INTO `usuarios` (`id`, `nombre_usuario`, `contrasena`) VALUES
    (1, 'admin', 'password');";
    if ($conn->query($sql) === TRUE) {
        //echo "Usuario admin agregado correctamente </br>";
    } else {
        //echo "Error creating user: " . $conn->error . "</br>";
    }
?>