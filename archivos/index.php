<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="php.css">
    <title>registro</title>
</head>
<body>
<div class="containerPrincipal">
        <div class="form-group">
<form method="post">
    <h1>Registrate</h1>
  <input type="text" name="user" placeholder="Nombre completo">
  <input type="password" name="pass" placeholder="Contraseña">
  <input type="submit" name="register">
  <a href="ejemplo.html">Accede a tu cuenta</a>
</form>
</div>
</div>

    <?php
    include("register.php");
    
    ?>
    
</body>
</html>