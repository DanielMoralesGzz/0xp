<?php
    $servidor="localhost";
    $usuario="root";
    $clave="";
    $baseDeDatos="0xp";

    $enlace=mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

    if(!$enlace){
        echo"Error en la conexion";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <div class='encabezado'>
        <table style='margin-inline-start: 7.5%;'>
            <tr>
                <td class='en'><a href="index.html"><img src="img/aantah_logo.jpg"  height="50%" width="50%"></a> </a> </td>
                <td class='en'><a href="about.html">About Us</a></td>
                <td class='en'><a href="problemas.php">Problemas</a></td>
                <td class='en'><a href="contact.php">Contactanos</a></td>
                <td class='en'><a href="login.php">Login</a></td>
            </tr>
            </table>
    
    </div>
    <form action="#" class="0xp" id="0xp" name="0xp" method="POST">
        <div class='cont'><table>
        <tr>
            <td><label>Nombre completo</label></td>
        </tr>
        <tr>
            <td><input class="input" type="text" id="nombre" name="nombre"></td>
        </tr>
        <tr>
            <td><label>Mail</label></td>
        </tr>
        <tr>
            <td><input class="input" type="text" id="correo" name="correo"></td>
        </tr>
        <tr>
            <td><label>Mensaje:</label></td>
        </tr>
        
        <tr>
            <td><input class="input" type="text" id="mensaje" name="mensaje"></td>
        </tr>
        <tr>
            <td><input class="boton" type="submit" name="contactar" onclick="" value="Contactarse"></td>
        </tr>

</div>
    </form>
    
</body>
</html>
<?php
    if(isset($_POST['contactar'])){
        $nombre=$_POST["nombre"];
        $correo=$_POST["correo"];
        $mensaje=$_POST["mensaje"];
        $id=1;

        $insertarDatos = "INSERT INTO datos VALUES('$nombre',
                                                    '$correo',
                                                    '$mensaje',
                                                    '$id')";
        $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

        if(!$ejecutarInsertar){
            echo"Error en sql";
        }
    }
?>
