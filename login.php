<?php include('partials/header.php');?>
<h1>Login</h1>
<span>or <br><a href="registro.php">SignUp</a></span>
    <form class="form-login" action="login.php" method="post">
        <label>Usuario</label><br>
        <input type="text" name="user" id="user" placeholder="Usuario" required><br>
        <label>Contraseña</label><br>
        <input type="password" name="pass" id="pass" placeholder="Password" required><br>
        <input type="submit" name="log" value="LogIn"><br>
        <a href="https://www.youtube.com/watch?v=UxQv0SGRt8g">Olvide mi contraseña</a>
    </form>

    <?php
    include('partials/database.php');
    $usuario=mysqli_real_escape_string($con, $_POST['user']);   
    $pass=mysqli_real_escape_string($con, $_POST['pass']);
    $sqli="SELECT nombre,seña FROM registros WHERE nombre='$usuario'";
        if(!mysqli_query($con,$sqli)){
            die('Error:'.mysqli_error($con));
        }
        else
        {
            echo"<script>alert('Acceso autorizado');location.href='inicio.php'</script>";
        }
    ?>
</body>
</html>