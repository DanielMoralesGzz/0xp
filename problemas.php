<?php
    $servidor="localhost";
    $usuario="root";
    $clave="";
    $baseDeDatos="prob";

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

<body style="width: 100%; height: 100%; float: left; padding: 0%;">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />

    <div class='encabezado'>
        <table style="margin-inline-start: 7.5%;">
            <tr>
                <td class='en'><a href="index.html"><img src="img/aantah_logo.jpg"  height="50%" width="50%"></a> </a> </td>
                <td class='en'><a href="about.html">About Us</a></td>
                <td class='en'><a href="problemas.php">Problemas</a></td>
                <td class='en'><a href="contact.php">Contactanos</a></td>
                <td class='en'><a href="login.php">Login</a></td>
            </tr>
            </table>
    
</div>
<form action="#" class="prob" id="prob" name="prob" method="POST">
<div class='cont2'>
    <tr>
        <td><label id='q1'>Nombre completo</label></td>
        </tr>
        <tr>
        <td><input class="input" type="text" id="nombre" class="nombre"></td>
        </tr>
        <tr>
        <td><label>Dirección</label></td>
        </tr>
        <tr>
        <td><input class="input" type="text" id="direccion" class="direccion"></td>
        </tr>
        <tr>
        <td><label>Codigo Postal:</label></td>
        </tr>
        <tr>
        <td><input class="input" type="number" id="codigop" class="codigop"></td>
        </tr>
        <tr>
        <td><label>Estado:</label></td>
        </tr>
        <tr>
        <td>
        <select name="Estado">
            <option value="Aguascalientes">Aguascalientes</option>
            <option value="Baja California">Baja California</option>
            <option value="Baja California Sur">Baja California Sur</option>
            <option value="Campeche">Campeche</option>
            <option value="Coahuila">Coahuila</option>
            <option value="Colima">Colima</option>
            <option value="Chiapas">Chiapas</option>
            <option value="Chihuahua">Chihuahua</option>
            <option value="Ciudad de México">Ciudad de México</option>
            <option value="Durango">Durango</option>
            <option value="Estado de México">Estado de México</option>
            <option value="Guanajuato">Guanajuato</option>
            <option value="Guerrero">Guerrero</option>
            <option value="Hidalgo">Hidalgo</option>
            <option value="Jalisco">Jalisco</option>
            <option value="Michoacán">Michoacán</option>
            <option value="Morelos">Morelos</option>
            <option value="Nayarit">Nayarit</option>
            <option value="Nuevo León">Nuevo León</option>
            <option value="Oaxaca">Oaxaca</option>
            <option value="Puebla">Puebla</option>
            <option value="Querétaro">Querétaro</option>
            <option value="Quintana Roo">Quintana Roo</option>
            <option value="San Luis Potosí">San Luis Potosí</option>
            <option value="Sinaloa">Sinaloa</option>
            <option value="Sonora">Sonora</option>
            <option value="Tabasco">Tabasco</option>
            <option value="Tamaulipas">Tamaulipas</option>
            <option value="Tlaxcala">Tlaxcala</option>
            <option value="Veracruz">Veracruz</option>
            <option value="Yucatán">Yucatán</option>
            <option value="Zacatecas">Zacatecas</option>
        </select>
        </td>
        </tr>
        <br>
        <br>
        <tr>
        <td><label>Imagen:</label></td>
        </tr>
        <tr>
        <td><input class="input" type="file" id="Imagen" accept="image/*" ></td>
        </tr>
        <tr>
        <td><input type="submit" value="submit" ></td>
        </tr>
</div>

<div class='cont2_1'>
    
        <tr>
        <td><label>Tipo de problema</label></td>
        
        <select name="Problema">
            <option value="Basura">Basura</option>
            <option value="Grafitti">Grafitti</option>
            <option value="Arboles">Falta de arboles</option>
            <option value="Baches">Baches</option>
            <option value="Banqueta">Falta de banqueta</option>

            

        </select>
<br>
<br>
<br>
        <tr>
            <td><input class="input" type="text" id="msjprob" class="msjprob"></td>
            </tr>
           

        </tr> 
    <table style="float: left;">
        
        
        <br><br>
        <input class="boton" type="submit" name="reportar" onclick="" value="Reportar">
</table>
</div>
</form>

 

<!--Mapa-->       

 <style media="screen">
    .google_canvas{
        margin-left: 15%;
        height: 43vh;
        width: 145vh;
        margin-top: 2%;
        float: left;
    }

    </style>
    </head>
    <body>
        <div id="google_canvas" class="google_canvas"></div>


        <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
(function(){
if(!!navigator.geolocation){

var map;
var mapOptions = {

    zoom:15,

    mapTypeId: google.maps.MapTypeId.ROADMAP
};

map = new google.maps.Map( document.getElementById("google_canvas"), mapOptions);

navigator.geolocation.getCurrentPosition(function(position){

var geolocate = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

var infoWindow = new google.maps.InfoWindow({

    map: map,
    position: geolocate,
    content:
    '<h1>Esta es tu ubicacion con Geolocation</h1>' +
    '<h2>latitud: '+position.coords.latitude+'</h2>' +
    '<h2>longitud: '+position.coords.longitude+'</h2>' 
});

map.setCenter(geolocate);
});


}else{

    document.getElementById("google_canvas").innerHTML = "La geolocalizacion no esta soportada ";
}
})();

</script>
</body>
</html>
<?php
    if(isset($_POST['reportar'])){
        $nombre=$_POST["nombre"];
        $direccion=$_POST["direccion"];
        $codigop=$_POST["codigop"];
        $msjprob=$_POST["msjprob"];
        $id=1;

        $insertarDatos = "INSERT INTO datos VALUES('$nombre',
                                                    '$direccion',
                                                    '$codigop',,
                                                    '$msjprob',
                                                    '$id')";
        $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

        if(!$ejecutarInsertar){
            echo"Error en sql";
        }
    }
?>
