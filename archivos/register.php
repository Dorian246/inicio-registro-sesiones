<?php 

include("con_db.php");
if (isset($_POST['register'])) {
    if (strlen($_POST['user']) >= 1 &&  strlen($_POST['pass']) >= 1 ){

    $usuario = trim($_POST['user']);
      $password = trim($_POST['pass']);
      
$consulta = "INSERT INTO usuarios ( user, pass) VALUES ('$usuario','$password')";
   $resultado = mysqli_query($conex, $consulta);
   if ($resultado) {
    ?> 
    <h3 class="ok">Te has registrado</h32>
    <?php
   }
   else {
    ?> 
    <h3 class="bad">Error!</h3>
    <?php
   }
    }

    else {
      ?> 
    <h3 class="bad">complete los campos</h3>
    <?php
    }
}

?>