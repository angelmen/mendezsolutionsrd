<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php @ include("./modules/nav.html") ?>
    <?php @ include("./modules/header.html") ?>   
    <div class="container">
    <div class="blog">
                <h1 class="big-title">Enterate de las últimas noticias</h1>
                <?php
                include './modules/dbconection.php';
                $sql = "SELECT id, titulo, fecha, imagen, texto FROM noticias ORDER BY fecha LIMIT 3";
                foreach ($conn->query($sql) as $entry) {
                    $blogId = $entry['id'];
                    $blogTitle = $entry['titulo'];
                    $blogDate = $entry['fecha'];
                    $blogImage = $entry['imagen'];
                    $texto = $entry['texto'];
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
    <?php @ include("./modules/footer.html") ?>   
    <script src="./js/base.js"></script>
</body>
</html>