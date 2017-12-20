<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <img src="../img/logo.png" style="height: 100px"/><br>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" data-toggle="modal" data-target="#iniciSesionPopUp"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href="#" data-toggle="modal" data-target="#registroPopUp"><span class="glyphicon glyphicon-user"></span> Registrate</a></li>
                <li><a href="#">Publicar viaje</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Mi cuenta</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>
    </div>
    <?php
    require_once 'PopUp/registro.php';
    require_once 'PopUp/login.php';
    ?>
</nav>