<?php include('partials/header.php'); ?>
<h1>Login</h1>
<span>or <br><a href="registro.php">SignUp</a></span>
    <form class="form-login" action="login.php" method="post">
        <label>Usuario</label><br>
        <input type="text" name="user" id="user" placeholder="Usuario" required><br>
        <label>Contraseña</label><br>
        <input type="password" name="pass" id="pass" placeholder="Password" required><br>
        <input type="submit" value="LogIn"><br>
        <input type="checkbox" name="forget" id="forgte">Olvide mi contraseña</input>
    </form>
</body>
</html>