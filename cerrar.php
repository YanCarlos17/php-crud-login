<?php
session_start();
session_destroy();//destruye toda la informaciopn de inicio de sesion
echo"<script> window.location='index.php'; </script>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Saliendo...</h2>
    <script type="text/javascript"> location.href="index.php"; </script>
</body>
</html>