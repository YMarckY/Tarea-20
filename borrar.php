<?php
include("connection.php");

$id = $_GET["id"]; 

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    /////////////////////////////////////////////////////////////////////

                 $consulta = "DELETE FROM `usuarios` WHERE id='$id'";
                 $sql = mysqli_query($conn, $consulta); 
?>
<script>
alert("Registro borrado correctamente"); 
javascript:history.go(-1)
</script>