<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> ¡Resultados de datos!</title>
        <script src="https://kit.fontawesome.com/a71707a89a.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="dive2">
        <h1> Resultados!</h1>
        <center>        
        <img src="img/img1.png" alt="logrado" width="150">
        <?php
            $nombre = $_POST['Name'];
            $edad = $_POST['Age'];
            $ciudad = $_POST['City'];
            $pasatiempo = $_POST['Hobby'];

            echo '<p><a>Nombre: </a)> '.$nombre.'</p>';
            echo '<p><a>Edad: </a)> '.$edad.'</p>';
            echo '<p><a>Ciudad: </a)> '.$ciudad.'</p>';
            echo '<p><a>Pasatiempo: </a)> '.$pasatiempo.'</p>';
        ?>
        <h2>¡Bien Hecho!</h2>
        <div id="popUpOverlay"></div>
        <div id="popUpBox">
            <div id="box">
                <i class="fas fa-question-circle fa-5x"></i>
                <h1>¿Volver a ingresar datos?</h1>
                <div id="closeModal"></div>
            </div>
        </div>
        <button onclick="Alert.render('You look very pretty today')" class="btn"> Volver a Ingresar!</button>
        </center>
        <script src="js/app.js"></script>
    </div>
</body>                                        <!-- Ricardo Diaz-->
</html>