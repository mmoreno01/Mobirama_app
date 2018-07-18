<?php
$destino="luis.mondragon@jbglobalgroup.com.mx,margarita.higareda@jbglobalgroup.com.mx";
    $nombre = $_POST["Nombre"];
    $correo = $_POST["Correo"];
    $telefono= $_POST["Telefono"];
    $mensaje = $_POST["mensaje"];
    
    $contenido = "Nombre:". $nombre. "\nCorreo:". $correo. "\nTelefono:". $telefono. "\nmensaje:".$mensaje;
    
    if(mail($destino, "JBGG",$contenido))
    {
        echo "Tu correo ha sido enviado correctamente"
    }else{
        echo "Ocurrio un error al envir tu correo"
    }
    
    header("Location:http://www.jbglobalgroup.com.mx");
?>