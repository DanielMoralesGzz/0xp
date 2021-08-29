<?php

$Usuario=$_POST["usuario"];
$Contraseña=$_POST["contraseña"];
session_start();
$_SESSION['usuario']=$Usuario;

$enlace = mysqli_connect("localhost","root","","registro");

$consulta="SELECT*FROM datos where usuario='$Usuario' and contraseña='$Contraseña'";
$resultado=mysqli_query($enlace,$consulta);


$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:index.php"); 
}else{

?>
<?php
include("login.php");
?>
<h1 class="mal">Contraseña o usuario incorrecto</h1>
<?php
}

mysqli_free_result($resultado);
mysqli_close($enlace);


?>




