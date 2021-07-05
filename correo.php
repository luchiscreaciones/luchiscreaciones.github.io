<?php
    $destinatario = 'brianalvarez2000@gmail.com';

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    $asunto = "Estoy interesado en los cursos";

    $header = "Inscripcion desde la pagina Web";
    $mensajeCompleto = $mensaje . "\nAtentamente" . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header);

    echo "<script>alert('Inscripcion realizada exitosamente')</script>";
    echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";
?>