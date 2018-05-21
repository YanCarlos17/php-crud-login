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
    $sqli="SELECT * FROM registro";
    $result=mysqli_query($con,$sqli);
        
         
    ?>
<!-- echo "<script>alert('Formulario enviado'); location.href='inicio.php'</script>"; -->
    <table>
        <tr>
            <td><?php ?></td>
            <td><?php ?></td>
            <td><?php ?></td>
            <td><?php ?></td>
        </tr>  
    </table>

</body>
</html>