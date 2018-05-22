<?php
session_start();
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    } else {
        echo "Esta pagina es solo para usuarios registrados.<br>";
        echo "<br><a href='login.php'>Login</a>";
        echo "<br><br><a href='registro.php'>Registrarme</a>";
    exit;
}
$now = time();
if($now > $_SESSION['expire']) {
session_destroy();
    echo "Su sesion a terminado,
    <a href='login.php'>Necesita Hacer Login</a>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Panel de Control</title>
    </head>
    <body>
        <h1>Panel de Control</h1>
    <ul>
        <li>Editar Perfil</li>
        <li>Editar Preferencias</li>
        <li>Editar Configuracion</li>
    </ul>
    <a href=cerrar.php>Cerrar Sesion X </a>
</body>
</html>


