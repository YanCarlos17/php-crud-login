<?php include('partials/header.php'); ?>
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
        <input type="submit" value="SignUp"><br>
        <input type="checkbox" name="accept" id="accept">      Acepto Términos y condiciones</input>
    </form>
    <?php
    include('partials/database.php');

    $nombre=$_POST['nombre'];
    $mail=$_POST['mail'];
    $pass=password_hash($_POST['password'],PASSWORD_BCRYPT);
    $sqli="INSERT INTO registros (nombre,correo,seña)
           VALUES ('$nombre','$mail','$pass')";
        if(!mysqli_query($con,$sqli)){
            die('Erros:'.mysqli_error($con));
        }else{
            echo "<h3>Registro Exitoso<h3>";
        }
        echo"<a href='login.php'>LogIn</a>";
    ?>
</html>