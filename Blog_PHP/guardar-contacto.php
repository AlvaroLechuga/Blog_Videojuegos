<?php

if (isset($_POST)) {

    require_once 'includes/conexion.php';

    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $asunto = isset($_POST['asunto']) ? mysqli_real_escape_string($db, $_POST['asunto']) : false;
    $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;

    // Validación
    $errores = array();

    if (empty($nombre) || is_numeric($nombre) || preg_match("/[0-9]/", $nombre)) {
        $errores['nombre'] = 'El titulo no es válido';
    }

    if (empty($asunto) || is_numeric($asunto) || preg_match("/[0-9]/", $asunto)) {
        $errores['asunto'] = 'El asunto no es válido';
    }

    if (empty($descripcion)) {
        $errores['descripcion'] = 'La descripción no es válida';
    }


    if (count($errores) == 0) {

        $sql = "INSERT INTO contacto VALUES(null, '$nombre', '$asunto', '$descripcion')";
        
        $guardar = mysqli_query($db, $sql);

        if ($guardar) {
            header("Location: index.php");
        }
    } else {
        $_SESSION["errores_contactar"] = $errores;
        header("Location: contacto.php");
    }
}



