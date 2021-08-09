<?php

    include 'db.php';

    $botonEnviar = $_POST['botonEnviar'];

    if($botonEnviar == 1){
        $nombreContacto = $_POST["nombreContacto"];
        $apellidosContacto = $_POST["apellidosContacto"];
        $correoElectronico = $_POST["correoElectronico"];
        $telefono = $_POST["telefono"];
        $celular = $_POST["celular"];
        $ciudad = $_POST["ciudad"];

        $insertarContacto = "insert into CONTACTO(nombreContacto, apellidosContacto, correoElectronico, telefono, celular, ciudad) values ('$nombreContacto', '$apellidosContacto',
        '$correoElectronico', '$telefono', '$celular', '$ciudad')";

        $resultadoQuery = mysqli_query($conexion, $insertarContacto);

        if($resultadoQuery){
            echo "<script>alert('Se han enviado los datos correctamente. ¡Nos pondremos en contacto contigo!'); window.location='../contacto.html'</script>";
        }else{
            printf("Errormessage: %s\n", mysqli_error($conexion));
            echo "<script>alert('No se han podido enviar los datos.'); window.location='../contacto.html'</script>";
        }
    }else if($botonEnviar == 2){
        $peliculaNombre = $_POST["peliculaNombre"];
        $horario = $_POST["horario"];
        $cantidadBoletos = $_POST["cantidadBoletos"];
        $nombreCompleto = $_POST["nombreCompleto"];
        $celular = $_POST["celular"];
        $correoElectronico = $_POST["correoElectronico"];
        $metodoPago = $_POST["metodoPago"];
        $total = $_POST["total"];

        $insertarBoleto = "insert into BOLETO(nombrePelicula, Horario, cantidadBoletos, nombreCompleto, celular, correoElectronico, metodoPago, total) values ('$peliculaNombre',
         '$horario', '$cantidadBoletos', '$nombreCompleto', '$celular', '$correoElectronico', '$metodoPago', '$total')";

        $resultadoQuery = mysqli_query($conexion, $insertarBoleto);

        if($resultadoQuery){
            mail($correoElectronico, "BOLETO VENADOS CINEMA", "Los datos de su compra son: \nNombre de la película: " . $peliculaNombre . "\nHorario de la película: " . $horario .
             "\nCantidad de boletos: " . $cantidadBoletos . "\nNombre del cliente: " . $nombreCompleto . "\nCelular: " . $celular . "\nCorreo electrónico: " . $correoElectronico . 
             "\nMétodo de pago: " . $metodoPago . "\nTotal: $" .$total . " MXN\n¡Gracias por su compra!");
            //mail("enriquegbazua@gmail.com", "prueba", "hola");
            echo "<script>alert('Se han enviado los datos correctamente, puedes verificar tus datos en tu correo electrónico.'); window.location='../boletos.html'</script>";
        }else{
            printf("Errormessage: %s\n", mysqli_error($conexion));
            echo "<script>alert('No se han podido enviar los datos.'); window.location='../boletos.html'</script>";
        }
    }
?>