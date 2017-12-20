<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/login.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div id="demo">
            <?php
            require_once "../multipagina/header.php";
            ?>
        </div>
        <div>
            <img src="../img/fondo_cabecera_inicio.jpg" style="width: 100%" />   
        </div>
        <div class="jumbotron">
            <div class="container text-center">
                <h1>Share & GO</h1>
                <div class="col-sm-3">
                    <img src="../img/imagen para descrip.jpg" class="img-responsive" style="width:100%; border-radius: 10px" alt="Image">
                </div>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit interdum dui, 
                    vel venenatis risus dignissim ut. Maecenas sit amet arcu magna. Proin quis ante est. Etiam 
                    sagittis elit tellus, a vestibulum orci aliquet at. Vestibulum eu viverra nunc. Phasellus 
                    quis ligula leo. Proin facilisis orci non quam imperdiet, at rhoncus nulla gravida.</p>

                <p> Donec lacinia eros nulla, scelerisque faucibus felis facilisis vitae. Aenean scelerisque 
                    at massa ac euismod. Nam nisi sapien, aliquet eu ante id, semper volutpat augue. Duis accumsan 
                    ligula odio, nec hendrerit sem sodales ut. Proin odio velit, venenatis at ultricies non, 
                    interdum sed purus. Fusce auctor felis purus, ut mollis nisl venenatis ac. Curabitur bibendum 
                    risus pulvinar luctus porttitor. Praesent ut ante posuere arcu accumsan suscipit sit amet sed nibh. 
                    Fusce semper vel tellus ut posuere. Vivamus velit ante, semper at fermentum aliquet, posuere sed felis. </p>
            </div>
        </div>

        <div class="container">
            <h2>Ventajas de viajar con nosotros</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="../img/icono_ahorro.png" alt="Lights" style="width:50%">
                        <div class="caption">
                            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="../img/icono_amigos.png" alt="Nature" style="width:50%">
                        <div class="caption">
                            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="../img/icono_eco.png" alt="Fjords" style="width:50%">
                        <div class="caption">
                            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        require_once "../multipagina/footer.php";
        ?>
    </body>
</html>
