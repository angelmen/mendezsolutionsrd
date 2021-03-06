<?php
    $nombre = $correo = $mensaje = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = test_input($_POST["nombre"]);
        $correo = test_input($_POST["correo"]);
        $mensaje = test_input($_POST["mensaje"]);
    }
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    include "modules/dbconection.php";
    $sql = "INSERT INTO mensajes (nombre, email, contenido) VALUES (?,?,?)";
    $conn->prepare($sql)->execute([$nombre, $correo, $mensaje]);
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = "smtp";
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "smtp.gmail.com";
    $mail->Username   = getenv("APPMAIL");
    $mail->Password   = getenv("APPMAILPASS");
    $mail->IsHTML(true);
    $mail->AddAddress(getenv("APPMAILDEST"));
    $mail->SetFrom($correo, $nombre);
    $mail->Subject = utf8_decode($nombre . " a través del web site del proyecto final");
    $content = utf8_decode($correo . " a través del web site del proyecto final dijo: \n\n" . $mensaje);

    $mail->MsgHTML($content); 
    if(!$mail->Send()) {
        ?>
            <script>window.location.href="/contactos.php?success=false"</script>
        <?php
    } else {
        ?>
            <script>window.location.href="/contactos.php?success=true"</script>
        <?php
    }

?>


