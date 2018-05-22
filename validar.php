<?php 
include('partials/header.php'); 
?>
<?php
session_start();
?>
<?php
include('partials/database.php');
if ($con->connect_error) {
    die("La conexion falló: " . $con->connect_error);
}
$username = $_POST['user'];
$password = $_POST['pass'];
$sql = "SELECT * FROM registros WHERE user ='$username'";
$result = $con->query($sql);
    if ($result->num_rows > 0){     
    }
    $row = $result->fetch_array(MYSQLI_ASSOC);
        if (password_verify($password, $row['seña'])) { 
            $_SESSION['loggedin'] = true;            
            $_SESSION['user'] = $username;
            echo "<script> window.location='inicio.php'; </script>";
            echo "<br><br><a href=panel-control.php>Panel de Control</a>"; 
        }else{ 
            echo "Username o Password estan incorrectos.";
            echo "<br><a href='login.html'>Volver a Intentarlo</a>";
        }
    mysqli_close($conexion);
?>
