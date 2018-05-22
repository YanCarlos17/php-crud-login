<?php 
session_start();
include 'partials/database.php';
if(isset($_SESSION['user'])){
    echo'<script> window.location="inicio.php"; </script>';
}
?>
<?php include('partials/header.php');?>
<h1>Login</h1>
<span>or <br><a href="registro.php">SignUp</a></span>

    <form class="form-login" action="validar.php" method="POST">

        <label>Usuario</label><br>
        <input type="text" name="user" id="user" placeholder="Usuario" required><br>

        <label>Contraseña</label><br>
        <input type="password" name="pass" id="pass" placeholder="Password" required><br>

        <input type="submit" name="login" value="ENTRAR"><br>

        <a href="https://www.youtube.com/watch?v=UxQv0SGRt8g">Olvide mi contraseña</a>
    </form>
</body>
</html>