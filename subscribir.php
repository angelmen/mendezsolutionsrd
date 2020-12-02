<?php

    $name = $apellido = $correo = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = test_input($_POST["subscribe-nombre"]);
        $correo = test_input($_POST["subscribe-correo"]);
        $apellido = test_input($_POST["subscribe-apellido"]);
        $direccion = test_input($_POST["subscribe-direccion"]);
    }
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    include "modules/dbconection.php";
    $sql = "INSERT INTO usuarios (nombre, apellido, correo, direccion) VALUES (?,?,?,?)";
    $conn->prepare($sql)->execute([$nombre, $apellido, $correo, $direccion]);
    ?>
        <script>window.location.href="/subscribe.php?success=true"</script>
    <?php
?>