<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/login.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        require_once "../multipagina/header.php";
        ?>
        <div class="jumbotron" style="margin-bottom: -30px">
            <div class="container text-center">
                <h3>Buscador</h3>
                <button type="submit" class="btn btn-default">salida</button>
                <button type="submit" class="btn btn-default">dias</button>
            </div>
            <div>
                <div class="container text-center">
                    <h3>Salidas</h3>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="well">
                                <h4>Users</h4>
                                <p>1 Million</p> 
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="well">
                                <h4>Pages</h4>
                                <p>100 Million</p> 
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="well">
                                <h4>Sessions</h4>
                                <p>10 Million</p> 
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="well">
                                <h4>Bounce</h4>
                                <p>30%</p> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="imagen">
                    <img style="width: 100%" src="../img/imagen_men_principal.jpg" alt="Jane" >
                    <div class="" style="text-align: center">
                        <h2>Jane Doe</h2>
                        <p class="title">CEO & Founder</p>
                        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                        <p>example@example.com</p>
                        <p><button class="button">Añadir coche</button></p>
                    </div>
                </div>
            </div>
        </div>
        <?php
        require_once "../multipagina/footer.php";
        ?>
    </body>
</html>
