 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Universidad de colima
      </h1>
      <h2 class="subtitle">
        Facultad de colima
      </h2>
    </div>
  </div>
</section>

<div class="content has-text-centered" style="margin-left:10%; margin-right:10%;">
 <h1 class="title is-2">Control de usuario</h1>

<?php 
    include("connection.php");
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    /////////////////////////////////////////////////////////////////////

$nombre = $_POST['nombre'];
$correo = $_POST['email'];

$consulta = "SELECT * FROM usuarios WHERE nombre = '$nombre' and correo = '$correo'";

//$consulta = "SELECT * FROM `usuarios` WHERE 1";
$sql = mysqli_query($conn, $consulta);

    if (mysqli_num_rows($sql)>0)
    {
        PRINT<<<HERE
        <a href="newuser.php">
            <button class='button is-success' style="margin-left:70%;">Agregar usuario</button>
        </a>
<table class="table is-hoverable" ><tr>
<td><font ><b>Id</b></font></td>
<td><font ><b>Nombre</b></font></td>
<td><font ><b>Correo</b></font></td>
<td><font ><b>Login</b></font></td>
</tr>
</div>
HERE;
        $consulta = "SELECT * FROM `usuarios` WHERE 1";
        //$consulta = "SELECT * FROM `usuarios` WHERE 1";
        $sql = mysqli_query($conn, $consulta);
          while($row = mysqli_fetch_array($sql))
          {
             
            echo "<tr><td >" . $row["id"] . "</font></td>";
        	    echo "&nbsp&nbsp&nbsp&nbsp";
            echo "<td>" . $row["nombre"] . "</font></td>";
        	    echo "&nbsp&nbsp&nbsp";
            echo "<td>" . $row["correo"] . "</font></td>";
        	    echo "&nbsp&nbsp&nbsp";
            echo "<td>" . $row["login"]."
            <center>
               <a href=\"formedi.php?id=".$row["id"]."&nombre=".$row["nombre"]."&correo=".$row["correo"]."&login=".$row["login"]."\" class='button is-success' style='background-color:#097eda;'>
                     &nbsp;Editar&nbsp;
                </a>&nbsp;
                
                <a href=\"borrar.php?id=".$row["id"]."\" class='button is-success' style='background-color:red;'>
                        &nbsp;Borrar&nbsp;
                </a>
            </center>"."</td></tr>";   
        	echo "<br>";
          }
          
    } 
    else
    {
        PRINT<<<HERE
 <div class="container">
            <div class="columns is-centered">
                  
                <div class="content has-text-centered">
                    <br>
                 
                        <font size="5">El usuario no existe</font>
                  
    				<div class="control">
    				<a href="https://qwse33dd.000webhostapp.com/Actividad%2019/index.php">
                      <button id="enviar" name="enviar" class="button is-success" >&nbsp;Regresar&nbsp;</button>
                    </a>
                    </div>
                    
                    </div>
                    
    <br><br>
        	
            </div>
    </div>
        <footer class="footer">
      <div class="content has-text-centered">
        <p>
          <strong>&copy;Desarrollado</strong> por <a href="#">Marcelo Ramirez Morfin</a>. 
        </p>
      </div>
    </footer>
HERE;
    }
?> 


