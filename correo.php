<?php
        //En el destino colocar el correo alque quieres que lleguen los datos del contacto de tu formulario
 $destino = "brianalvarez2000@gmail.com";
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];
    $contenido = "Nombre: " . $nombre . "\nCorreo: " . $email . "\nAsunto: " . $mensaje;
    $mail = @mail($destino, "Inscripcion", $contenido);
    if($mail)
    {
        echo "<script>Incripcion realizada correctamente</script>";
    }
    else
    {
        echo "<script>Error en la inscripcion</script>";
    }

//Esto es opcional, aqui pueden colocar un mensaje de "enviado correctamente" o redireccionarlo a algun lugar
?>