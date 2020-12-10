<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$login = $_POST['login'];
$pass = $_POST['pass'];


 include("connection.php");
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    /////////////////////////////////////////////////////////////////////

$consulta = "INSERT INTO `usuarios`( `nombre`, `correo`, `login`, `password`) VALUES ('$nombre', '$correo', '$login', '$pass')";

//$consulta = "SELECT * FROM `usuarios` WHERE 1";
$sql = mysqli_query($conn, $consulta);
?>

<script>alert("Registro guardado correctamente"); javascript:history.go(-1)</script>