<?php
$id = $_GET["id"]; 
setcookie("id", $id);
$nombre = $_GET["nombre"]; 
$login = $_GET["login"]; 
$correo = $_GET["correo"]; 
?>


<style>
.anterior
{
    margin-left:36%;
}
.g
{
    margin-top:16px;
    position:absolute;
}
</style>

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
    <h1 class="title is-2">Edicion de usuario</h1>
 </div>
 
 
 <!--Formulario/////////////////////////////////////////////////////////////////////////-->
 <div style="padding-left:30%; padding-right:30%;">
 <form method="post" action="editar.php">
        <div class="field">
          <label class="label">Nombre</label>
          <div class="control">
            <input name="nombre" class="input" type="text" placeholder="<?php echo $nombre?>">
          </div>
        </div>
        
         <div class="field">
          <label class="label">Login</label>
          <div class="control">
            <input name="login"  class="input" type="text" placeholder="<?php echo $login?>">
          </div>
        </div>
        
        <div class="field">
          <label class="label">Contraseña</label>
          <div class="control">
            <input name="pass" class="input" type="text" placeholder="Tu contraseña">
          </div>
        </div>
        
        <div class="field">
          <label class="label">Correo</label>
          <div class="control">
            <input name="correo" class="input" type="text" placeholder="<?php echo $correo?>">
          </div>
        </div>
        
       
        <div class="field is-grouped">
          <div class="g">
            <button type="submit" class="button is-link" style="background:#09dab7;">Editar</button>
          </div>
         </div>
       </form>
    </div>
    
    
        <div class="anterior">
            <input class="button is-link is-light" style="background:red; color:white;" type="button" value="Cancelar" onClick="history.go(-1);">
        </div>
    
    
    
    <!--Pie de pagina-->
    <div style="padding-top:150px;">
     <footer class="footer">
      <div class="content has-text-centered">
        <p>
          <strong>&copy;Desarrollado</strong> por <a href="#">Marcelo Ramirez Morfin</a>. 
        </p>
      </div>
      </footer>
    </div>
    
    








