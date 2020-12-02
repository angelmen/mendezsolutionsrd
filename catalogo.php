<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php @ include("./modules/nav.html") ?>
    <?php @ include("./modules/header.html") ?>
    <div class="container">
    <div class="ofertas">
            <h1 class="big-title">Las mejores ofertas actuales</h1>
            <?php
                include './modules/dbconection.php';
                echo "<div class='products-container'>";
                $sql = "SELECT imagen, nombre, estado, precio FROM productos WHERE stock > 0";
                foreach ($conn->query($sql) as $item) {
                    $imagen = $item['imagen'];
                    $nombre = utf8_decode($item['nombre']);
                    $estado = utf8_decode($item['estado']);
                    $precio = number_format ( $item['precio'] , 2 , "." , "," );
                    $wamessage = "Hola!, me interesa saber más sobre el " . $nombre . " que vi en su página web.";
                    ?>
                        
                                <?php echo "<div class='products-item' onClick='window.location.href = " . "\"" . "https://wa.me/18097778478?text=" . rawurlencode($wamessage) . "\"" . "'>"?>
                                <div class="products-img-container"><img class="products-img" src="./img/productos/<?php echo htmlspecialchars($imagen); ?>"></div>
                                <div class="products-data-container">
                                    <h3><?php echo $nombre; ?></h3>
                                    <h5><?php echo $estado; ?></h5>
                                    <h4>RD$<?php echo $precio; ?></h4>
                                </div>
                        </div>

                    <?php

                }
                echo "</div>";
            ?>
            </div>
        </div>
    <?php @ include("./modules/footer.html") ?>   
    <script src="./js/base.js"></script>
</body>
</html>