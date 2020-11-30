<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyectofinal";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php @ include("../modules/nav.html") ?>
    <?php @ include("../modules/header.html") ?>
    <?php
        $sql = "SELECT titulo, fecha, imagen, texto FROM noticias WHERE titulo = " . "'La tecnología y el 2020'";
        foreach ($conn->query($sql) as $entry) {
            $blogTitle = $entry['titulo'];
            $blogDate = $entry['fecha'];
            $blogImage = $entry['imagen'];
            $blogResumen = $entry['texto'];
            ?>
            <div class='blog-container'>
                <div class="blog-imagen">
                    <img style="width: 100%;" src="/img/noticias/<?php echo htmlspecialchars($blogImage)?>">
                </div>
                <div class="blog-resumen">
                    <h3><?php echo $blogDate?></h3>
                    <hr/>
                    <p><?php echo $blogResumen?></p>
                </div>
            </div>

            <?php

        }
    ?> 
    <?php @ include("../modules/footer.html") ?>   
    <script src="../js/base.js"></script>
    <?php echo 
    
    "<script>
        document.getElementById('header-text').innerText = '" . $blogTitle . "';
    </script>"
    
    ?>
</body>
</html>