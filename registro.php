<?php include('partials/header.php');?>
</body>
    <h1>SignUp!</h1>
    <span>or<br><a href="login.php">LogIn</a></span>
    <form class="form-login" action="registro.php" method="post">
        <label>Nombre</label><br>
            <input type="text" name="nombre" id="nombre" placeholder="Usuario" required><br>

        <label>Email</label><br>
            <input type="email" name="mail" id="mail" placeholder="Email" required><br>

        <label>Contraseña</label><br>
            <input type="password" name="password" id="password" placeholder="Password" required><br>

        <label>Confirmar contraseña</label><br>
            <input type="password" name="confirmacion" id="confirmacion" placeholder="Confirm Password" required><br>

            <label>Seleccione Rol</label><br>
                <select name="rol" id="rol"><br>
                    <option value="1">Administrador</option>
                    <option value="2">Empleado</option>
                </select><br>     
        <input type="submit" value="SignUp"><br>
        <input type="checkbox" name="accept" id="accept" required>  Acepto Términos y condiciones</input>
    </form>
    <?php
    include('partials/database.php');

    $nombre=$_POST['nombre'];
    $mail=$_POST['mail'];
    $pass=password_hash($_POST['password'],PASSWORD_BCRYPT);
    $rol=$_POST['rol'];
    $sqli="INSERT INTO registros (user,email,seña,rol)
           VALUES ('$nombre','$mail','$pass','$rol')";
        if(!mysqli_query($con,$sqli)){
            die('Error:' . mysqli_error($con));
        }else
        {
              
        } 
         
        echo"<a href='login.php'>LogIn</a>";
    ?>
</html>