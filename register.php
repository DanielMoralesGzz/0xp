<?php
    $servidor="localhost";
    $usuario="root";
    $clave="";
    $baseDeDatos="registro";

    $enlace = mysqli_connect($servidor,$usuario,$clave,$baseDeDatos);
    
    if(!$enlace){
        echo"Error en la conexión con el servidor";


    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilo.css">
<title>Registro</title>
</head>
<script>
function register(){

var nombre= document.getElementById('nombre').value;
var usuario= document.getElementById('usuario').value;
var mail= document.getElementById('correo').value;
var contraseña= document.getElementById('contraseña').value;

if (nombre[0]!=nombre[0].toUpperCase()){
alert('Favor de escribir la primera letra de tu nombre con mayúscula')
}

if (usuario.length>8){
alert('El usuario debe ser menor de 8 caracteres')
}

if(mail.includes("@")===false){
alert("Falta una arroba")
}

else{

alert('Gracias por registrarse, '+ nombre)

}}
</script>
<body>
   <section class="form-register">
   <form action="#" class="registro" id="registro" name="registro" method="POST">
    <h3>Registro</h3>
    <input class="inp" type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre ">
    <input class="inp"type="text" name="usuario" id="usuario" placeholder="Ingrese su usuario">
    <input class="inp"type="email" name="correo" id="correo" placeholder="Ingrese su correo">
    <input class="inp" type="password" name="contraseña" id="contraseña" placeholder="Ingrese su contraseña">
    <p>He leido y acepto los <a href="#">Terminos y Condiciones</a></p>
    <input class="boton" name="registrarse" type="submit" onclick="register()" value="Registrarse">
    <p><a href="login.php">¿Ya estoy registrado?</a></p>
</section>
</body>
</html>
<?php
    if(isset($_POST['registrarse'])){
        $Nombre=$_POST["nombre"];
        $Usuario=$_POST["usuario"];
        $Correo=$_POST["correo"];
        $Contraseña=$_POST["contraseña"];
        $id=rand(1,99);
         
        $insertarDatos = "INSERT INTO datos VALUES('$Nombre',
                                                    '$Usuario',
                                                    '$Correo',
                                                    '$Contraseña',
                                                    '$id')";
    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
    
    if(!$ejecutarInsertar){
        echo"Error En la linea de sql";

    }

    }
?>