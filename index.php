
<!DOCTYPE html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
        <title>Inicio</title>
    </head>
    <body>
        <?php 
        @ include("./modules/nav.html");     ?>

        <?php
        @ include("./modules/header.html");  ?>
        

        <div class="container">
            <div class="ofertas">
            <h1 class="big-title">Las mejores ofertas actuales</h1>
            <?php
                include './modules/dbconection.php';
                echo "<div class='products-container'>";
                $sql = "SELECT imagen, nombre, estado, precio FROM productos WHERE stock > 0 LIMIT 4";
                foreach ($conn->query($sql) as $item) {
                    $imagen = $item['imagen'];
                    $nombre = $item['nombre'];
                    $estado = $item['estado'];
                    $precio = $item['precio'];

                    ?>
                        <div class="products-item" onClick="window.location.href = '/catalogo.php'">
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
            <div class="blog">
                <h1 class="big-title">Enterate de las últimas noticias</h1>
                <?php
                $sql = "SELECT id, titulo, fecha, imagen, texto FROM noticias ORDER BY fecha LIMIT 3";
                foreach ($conn->query($sql) as $entry) {
                    $blogId = $entry['id'];
                    $blogTitle = utf8_decode($entry['titulo']);
                    $blogDate = utf8_decode($entry['fecha']);
                    $blogImage = $entry['imagen'];
                    $texto = utf8_decode($entry['texto']);
                    $blogResumen = strip_tags($texto);
                    if (strlen($blogResumen) > 500) {
                        $stringCut = substr($blogResumen, 0, 500);
                        $endPoint = strrpos($stringCut, ' ');
                        $blogResumen = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                        $blogResumen .= '... <a class="seguir-leyendo" href="/blogs/' . rawurlencode($blogTitle) . '.php">Seguir leyendo</a>';
                    }
                    ?>
                    <div class='blog-resumen-container'>
                        <div class="blog-imagen">
                            <img style="width: 100%;" src="./img/noticias/<?php echo htmlspecialchars($blogImage)?>">
                        </div>
                        <div class="blog-resumen">
                            <h2 ><?php echo $blogTitle?></h2>
                            <h3><?php echo $blogDate?></h3>
                            <hr/>
                            <p><?php echo $blogResumen?></p>
                        </div>
                    </div>

                    <?php

                }
            ?>
                
                    
            </div>
        </div>



        <?php
        @ include("./modules/footer.html");  ?>

        <script src="./js/base.js"></script>
    </body>
</html>