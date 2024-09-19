<?php
//Configuracion de la conexion a base de datos
$servidor = "localhost:3306";
$username = "root";
$password = "";
$dbname = "tvirtual";
// Create connection-
$conn = new mysqli($servidor, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("FALLA CONEXIÓN AL SERVIDOR: " . $conn->connect_error);
} 
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $genero = $_POST['genero'];
    $year = $_POST['año'];
    $imagen = $_POST['imagen'];
    $video = $_POST['video'];
   
// nombre de la tabla los campos de la tabla que se encuentra e la base de datos y las variables php 
$sql = "INSERT INTO registrar (nombre,descripcion,genero,año,imagen,video) VALUES ('$nombre','$descripcion','$genero','$year','$imagen','$video')";
if ($conn->query($sql) === TRUE) {
    
//va a probar proceso y modificar esta pagina para que diga envio correcto
header("Location: modal.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>