<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilo.css">
<title>Login</title>
</head>
<script>
function login(){

}

</script>
<body>
<form action="validar.php"   method="POST">
<section class="form-register" >
    <h3>Iniciar sesión</h3>
    <input class="inp"type="text" name="usuario" id="usuario" placeholder="Ingrese su usuario">
    <input class="inp" type="password" name="contraseña" id="contraseña" placeholder="Ingrese su contraseña">
    <input class="boton" type="submit" onclick="login()" value="Iniciar sesión">
    <p>¿No tienes cuenta?<a href="register.php">Click aqui!</a></p>
</section>
</form>
</body>
</html>
