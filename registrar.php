<?php
	$servidor="localhost";
	$usuario="root";
	$clave="Admin_gr3g4ry_x64";
	$baseDeDatos="persona";

	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

	if(!$enlace){
		echo"Error en la conexion con el servidor";
  }  

 


if(isset($_POST['registrarse'])){
  
  $nombre=$_POST["nombre"];
  $genero=$_POST["genero"];
  


  $insertarDatos = "INSERT INTO usuario (nombre,genero) VALUES('$nombre','$genero')";

  $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

  if(!$ejecutarInsertar){
    echo"Error En la linea de sql";
  }

  header('Location: index.php');

  
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foodhy</title>

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no" />

     <!-- Disable tap highlight on IE -->
     <meta name="msapplication-tap-highlight" content="no">

    <!-- Web Application Manifest -->
    <!-- <link rel="manifest" href="manifest.json"> -->

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Foodhy">
    <link rel="icon" sizes="192x192" href="./imagenes/background_image_signin.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Foodhy">
    <link rel="apple-touch-icon" href="./imagenes/background_image_signin.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="./imagenes/background_image_signin.png">
    <meta name="msapplication-TileColor" content="#2F3BA2">

    <!-- Color the status bar on mobile devices -->
    <meta name="theme-color" content="#2F3BA2" />

    <link rel="stylesheet" href="./styles/ma.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body class="text-center">
    
      <header>

        <div class="navbar" style="background-color: #333;">
          <a href="index.html">Home</a>
          <a href="registrar.php">Escaner</a>
          <a href="prueba.html">Original</a>
          <a href="#contact">Perfil</a>
        </div>
      </header>
      <main>
          
      <!--  New camara  -->
          <section>
            <div id="forml">

              
            <div id="resultado">Resultado</div>
            <div id="camera"></div>

            <script src="quagga.min.js"></script>

            <script id="formulario">

                Quagga.init({
                    inputStream: {
                        name: "Live",
                        type: "LiveStream",
                        target: document.querySelector('#camera')    // Or '#yourElement' (optional)
                    },
                    decoder: {
                        readers: ["ean_reader"]
                    }
                }, function (err) {
                    if (err) {
                        console.log(err);
                        return
                    }
                    console.log("Initialization finished. Ready to start");
                    Quagga.start();
                });

                Quagga.onDetected(function (data) {
                    console.log(data);
                    console.log(data.codeResult.code);
                    document.querySelector('#resultado').innerText = data.codeResult.code;
                });

            </script>
              
            </div>
          </section>


          <section>
            <div>
              <form action="index.php" class="form-signin" id="forml"  name="formulario" method="POST" >   
                <img src="./imagenes/image_default.png" alt="logo" width="100" height="100">
                <h1 class="h3 mb-3 font-weight-normal">Iniciar Sesión</h1>
                <label for="nombre" class="sr-only"></label>
                  <input type="text" id="nombre" autocomplete="name" placeholder="Nombre" name="nombre" required/>
                
                <!-- <span >Cual es tu genero?</span>
                <input list="genero" for="genero" required>
                
                <datalist id="genero">
                  <option value="Masculino" id="Masculino" name="Masculino"></option>
                  <option value="Femenino" id="Femenino" name="Femenino"></option>
                  <option value="Binario" id="Binario" name="Binario"></option>
                  <option value="Otro" id="Otro" name="Otro"></option>
                </datalist> -->
                <label for="genero"></label>
                  <input type="text" id="genero" placeholder="Genero" name="genero" required/>  
                
                <input type="submit" class="btn-primary" name="registrarse" value="Registrate"/>
              </form>
            </div>
          </section>
      </main>
      
    

    <footer>
      <div>
        <a href="https://www.google.com" >Extra2</a>
      </div>
    </footer>


  </body>
</html>

