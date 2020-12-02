<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php @ include("./modules/nav.html") ?>
    <?php @ include("./modules/header.html") ?>
    <div class="container" id="contactos-container">
        <?php
            if(isset($_REQUEST["success"])){
                if($_REQUEST["success"]==true){
                    ?>
                        <script>alert("Mensaje enviado")</script>
                    <?php
                } elseif ($_REQUEST["success"]!=true) {
                    ?>
                        <script>alert("Mensaje no enviado")</script>
                    <?php
                }
            }
        ?>
        <div class="contactos-message-container">
            <div class="contactos-message-title">
                <h1>Dejanos un mensaje, y lo responderemos tan pronto sea posible!</h2>
            </div>
            <div class="contactos-message-form">
                <form action="enviarcorreo.php" method="POST" class="contactos-form">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="contactos-form-nombre" class="contactos-form-input" required>
                    <label for="correo">Correo:</label>
                    <input type="email" name="correo" id="contactos-form-correo" class="contactos-form-input" required>
                    <label for="mensaje">Mensaje:</label>
                    <textarea name="mensaje" id="contactos-form-mensaje" cols="30" rows="10" style="resize:none;" class="contactos-form-input" required></textarea>
                    <input type="submit" value="Enviar" id="contactos-form-enviar">
                </form>
            </div>
        </div>
        <hr>
        <div class="contactos-contactos-container">
            <div class="contactos-contactos-title">
                <h1>O si prefieres, puedes contactarnos por:</h2>
            </div>
            <div class="contactos-contactos-vias">
                <div class="contactos-contactos-via">
                    <h2>Correo:</h2>
                    <h3><a href="mailto:info@mendezsolutions.com.do">info@mendezsolutions.com.do</a></h3>
                </div>
                <div class="contactos-contactos-via">
                    <h2>Teléfonos:</h2>
                    <h3><a href="tel:+18097778478">+1(809)-777-8478</a></h3>
                </div>
                <div class="contactos-contactos-via">
                    <h2>Redes Sociales:</h2>
                    <h3><a href="https://instagram.com/mendezsolutionsrd">@MendezSolutionsRD</a></h3>
                </div>
            </div>
        </div>

    </div>   
    <?php @ include("./modules/footer.html") ?>   
    <script src="./js/base.js"></script>
</body>
</html>