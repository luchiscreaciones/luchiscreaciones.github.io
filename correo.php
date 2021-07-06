<?php
        //En el destino colocar el correo alque quieres que lleguen los datos del contacto de tu formulario
if(isset($_POST['enviar'])){
    $destino = "brianalvarez2000@gmail.com";
    $nombre = $_POST["nombre"];
    $asunto = "Inscripcion al cruso";
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];
    $contenido = "Nombre: " . $nombre . "\nCorreo: " . $email . "\nAsunto: " . $mensaje;
    $mail = @mail($destino,$asunto,$mensaje);
    if($mail)
    {
        header("Location: index.html");
    }
    else
    {
        echo "<script>Error en la inscripcion</script>";
    }
}
 
//Esto es opcional, aqui pueden colocar un mensaje de "enviado correctamente" o redireccionarlo a algun lugar
?>