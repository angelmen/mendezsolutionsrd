<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribirse</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php @ include("./modules/nav.html") ?>
    <?php @ include("./modules/header.html") ?>
    <div class="container">
        <?php
            if(isset($_REQUEST["success"])){
                if($_REQUEST["success"]==true){
                    ?>
                        <script>alert("Gracias por preferirnos, recibiras nuevas noticias!")</script>
                    <?php
                }
            }
        ?>
        <div class="subscribe-container">
            <div class="subscribe-title">
                <h1>Suscríbete a nuestro News Letter y recibe las últimas noticias y mejores ofertas en tu correo!</h1>
            </div>
            <form action="subscribir.php" method="POST" class="subscribe-form">
                <div class="subscribe-form-upper">
                    <div class="subscribe-form-nombre">
                        <label for="subscribe-nombre">Nombre:</label>
                        <input type="text" name="subscribe-nombre" id="subscribe-nombre" required>
                    </div>
                    <div class="subscribe-form-apellido">
                        <label for="subscribe-apellido">Apellido:</label>
                        <input type="text" name="subscribe-apellido" id="subscribe-apellido" required>
                    </div>
                </div>
                <div class="subscribe-form-below">
                    <div class="subscribe-form-correo">
                        <label for="subscribe-correo">Correo:</label>
                        <input type="email" name="subscribe-correo" id="subscribe-correo" required>
                    </div>
                    <div class="subscribe-form-correo">
                        <label for="subscribe-correo">Dirección:</label>
                        <input type="text" name="subscribe-direccion" id="subscribe-direccion" required>
                    </div>
                </div>
                <div class="subscribe-form-submit">
                    <input type="submit" value="Subscribeme">
                </div>
            </form>
        </div>
    </div>   
    <?php @ include("./modules/footer.html") ?>   
    <script src="./js/base.js"></script>
</body>
</html>