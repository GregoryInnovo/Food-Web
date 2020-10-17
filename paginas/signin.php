<?php
	$servidor="localhost";
	$usuario="root";
	$clave="Admin_gr3g4ry_x64";
	$baseDeDatos="foodhy";

	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

	if(!$enlace){
		echo"Error en la conexion con el servidor";
  }  

 


if(isset($_POST['entrar'])){
  
  $email=$_POST["email"];
  $password=$_POST["password"];
  


  $consultarDatos = "SELECT * FROM cuentas WHERE correo= '$email' AND password= '$password' ";

  $ejecutarConsultar = mysqli_query($enlace, $consultarDatos);

  if(!$ejecutarConsultar){
    echo"Error En la linea de sql";
  }

  $nrws=mysql_num_rows($ejecutarConsultar);


  if($nrws=0){

    echo"Mal";

  } else {

    echo"Bien";
    
  }
  
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodhy Iniciar Sesión</title>

    <link rel="stylesheet" href="../styles/main.css">
    <!-- <script> alert("Hello! I am an alert box!!"); </script> -->
</head>
<body>
    <header>

    </header>
    <main>
      
        <section>
            <div>
              <form action="" id="forml" class="center-elements" name="formulario" method="POST">   
                <img src="../imagenes/image_default.png" alt="logo de Foodhy" width="150" height="150">
                <h1 id="top-Padelements" >Iniciar Sesión</h1>
                <label for="email" id="top-Padelements">
                  <input type="email" id="email" autocomplete="email" placeholder="Correo" name="email" required/>
                </label>
                <!-- <span >Cual es tu genero?</span>
                <input list="genero" for="genero" required>
                
                <datalist id="genero">
                  <option value="Masculino" id="Masculino" name="Masculino"></option>
                  <option value="Femenino" id="Femenino" name="Femenino"></option>
                  <option value="Binario" id="Binario" name="Binario"></option>
                  <option value="Otro" id="Otro" name="Otro"></option>
                </datalist> -->
                <label for="password">
                  <input type="password" id="password" placeholder="Contraseña" name="password" required/>  
                </label>
                <input type="submit" name="entrar" style="margin-top: 12px;" value="Iniciar Sesión"/>
              </form>

              
            </div>

            
          </section>
          
    </main>
    <footer>
        <!-- <div class="center-elements">
            <a href="../paginas/signup.html" style="text-decoration: none;" style="color: white;">Registrarse</a>
         </div> -->
    </footer>
</body>


</html>