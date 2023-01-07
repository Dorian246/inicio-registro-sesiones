<?php
include("conexion.php");

$usuario = $_POST['user'];
$password = $_POST['pass'];

$sql = "SELECT * FROM usuarios WHERE user = '$usuario'";
$sql = "SELECT * FROM usuarios WHERE pass = '$password'";
$resultado = mysqli_query($conexion,$sql);

while ($row = mysqli_fetch_array($resultado)) {
    $user = $row['user'];
    $pass = $row['pass'];
}


if ($usuario == $user && $password ==  $pass ) {
    header('location: index.html');
    exit();
    echo "<h1>Hola $user</h1>";
} else {
    header('location: error.html');
    exit();
    echo 'No eres usuario de este sistema';
}
?>