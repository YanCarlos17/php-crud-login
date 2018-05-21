<?php
$con=mysqli_connect('localhost','root','root','webpage');
   if(mysqli_connect_errno()){
       echo "Error de conexión".mysqli_connect_errno();
   }
?>