<?php
include("connection.php");

$id = $_COOKIE['id'];
$nombre = $_POST["nombre"]; 
$login = $_POST["login"]; 
$correo = $_POST["correo"];
$pass = $_POST["pass"]; 

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    /////////////////////////////////////////////////////////////////////

$consulta = "UPDATE `usuarios` SET `nombre`='$nombre',`correo`='$correo',`login`='$login',`password`='$pass' WHERE id='$id'";
$sql = mysqli_query($conn, $consulta);


?>

<script>alert("Registro guardado correctamente"); javascript:history.go(-1)</script>

