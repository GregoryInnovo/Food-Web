<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
<!--        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />-->
        <title>Foodhy</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



        <!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
    </head>
    <body class="container">

        <header>

            <div class="navbar" style="background-color: #333;">
                <a href="<?php echo site_url('prueba'); ?>">Home</a>
                <a href="escaner.html">Escaner</a>
                <a href="<?php echo site_url('usuario/prueba_form'); ?>">Original</a>
                <a href="#contact">Perfil</a>
            </div>
        </header>
        <main>


            <section>
                <div>
                    <form action="<?php echo site_url('usuario/usuario_form'); ?>" method="post">   
                        <img src="./imagenes/image_default.png" alt="logo" width="100" height="100">
                        <h1>Iniciar Sesión</h1>

                        <label>Nombre persona</label>

                        <div>
                            <?php
                            echo form_input(array('id' => 'nombre', 'name' => 'nombre',
                                'placeholder' => 'nombre persona', 'size' => 25));
                            ?>
                        </div>
<!--                        <input type="text" id="nombre" autocomplete="name" placeholder="Nombre" name="nombre" required/>-->

                        <label> Genero </label>
                        <div>
                            <?php
                            echo form_input(array('id' => 'genero', 'name' => 'genero',
                                'placeholder' => 'genero persona', 'size' => 25));
                            ?>
                        </div>



                        <!--<label for="genero"></label>
                                                <input type="text" id="genero" placeholder="Genero" name="genero" required/>  -->

<!--  <input type="submit" class="btn-primary" name="registrarse" value="Registrate"/>-->
                        <div>
                            <!--  <label> insertar </label>-->
                            <button type="submit" id="usuario-submit">ADD</button>
                        </div> 
                    </form>
                </div>
            </section>
        </main>



        <footer>
            <div>
                <a href="<?php echo site_url('usuario_form.php'); ?>" >Extra2</a>
            </div>
        </footer>


    </body>
</html>