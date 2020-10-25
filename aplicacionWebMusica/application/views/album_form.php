<!DOCTYPE html>
<html>
    <head>
        <title> Ejemplo para Base de datos</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <br /><br /><br />
            <h3 align="center"> Insert Data using Codeigniter </h3><br/>
            <form action="<?php echo site_url('album/album_form'); ?>" method="post"> 
               
                    <label> Nombre Album</label>
                    <div>
                        <?php echo form_input(array('id'=>'nombreAlbum', 'name'=>'nombreAlbum',
                            'placeholder' => 'nombre Album', 'size' => 25));
                        ?>
                    </div>
                    <!--<input type="text" name="first_name" class="form-control"/>-->
            
               
                    <label> Fecha Lanzamiento </label>
                    <div>
                        <?php echo form_input(array('id'=>'fechaLanzamiento', 'type'=> 'datetime-local', 'name'=>'fechaLanzamiento',
                            'placeholder' => 'fecha Album', 'size' => 25));
                        ?>
                    </div>
                <!--<input type="text" name="fecha_Lanzamiento" class="form-control"/>-->
                
                <div>
                  <!--  <label> insertar </label>-->
                  <button type="submit" id="album-submit">ADD</button>
                </div> 
            </form>
        </div>
    </body>
</html>
