<?php
session_start(); // Iniciar la sesión si aún no se ha hecho

$email_user = $_POST['email_user'];
$password_user = $_POST['password_user'];

$conexion = mysqli_connect("localhost:3307", "root", "", "jds_database");
$consulta = "SELECT * FROM usuario WHERE email_user='$email_user' AND password_user='$password_user'";
$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultado);

if ($filas > 0) {
    // Inicio de sesión exitoso
    $_SESSION['email_user'] = $email_user; // Guarda el email en la sesión

    // Ahora, realiza otra consulta para obtener el nombre del usuario
    $consulta_nombre = "SELECT name_user FROM usuario WHERE email_user='$email_user'";
    $resultado_nombre = mysqli_query($conexion, $consulta_nombre);
    $fila_nombre = mysqli_fetch_assoc($resultado_nombre);
    $nombre_usuario = $fila_nombre['name_user'];

    $_SESSION['name_user'] = $nombre_usuario; // Guarda el nombre en la sesión

    header("location: ../Vista/DOCS/indexlog.php");
} else {
    echo '<h1>Las credenciales no son válidas</h1>';
}

mysqli_free_result($resultado);
mysqli_free_result($resultado_nombre);
?>
