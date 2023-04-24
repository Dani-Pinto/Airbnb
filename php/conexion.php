<?php
    // ::::::::::::: Conexión :::::::::::::
    // Variables de conexión
    $server = "127.0.0.1";
    $database = "airbnb";
    $username = "root";
    $password = "root";

    //Cadena de conexión
    $conn = mysqli_connect($server, $username, $password, $database);

    //Revisar la conexión
    if(!$conn) {
        die("Conexión fallida: " . mysqli_connect_error()); //Describe el error de conexión
    }

    //echo "¡Conexión Exitosa!";
?>