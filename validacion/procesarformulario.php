<?php
$error =  true;
if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['edad']) && isset($_POST['email']) && isset($_POST['contrasena'])) {
    $error='ok';
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad= (int)$_POST['edad'];
    $email=$_POST['email'];
    $pass=$_POST['contrasena'];

    //vlaidar nombre
    if (!is_string($nombre) || preg_match("/[0-9]/", $nombre)) {
        $error='nombre';
    }

    if (!is_string($apellido) || preg_match("/[0-9]/", $apellido)) {
        $error='apellido';
    }

    if (!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)) {
        $error='edad';
    }

    if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error='email';
    }

    if (!is_string($pass) || !strlen($pass)>5) {
        $error='nombre';
    }

}else {
    $error='faltan valores';
}

if ($error!= 'ok') {
    header("Location:index.php?error=".$error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if ($error == 'ok') :?>
        <h1>Datos validados correctamente</h1>
        <p><?=$nombre?></p>
        <p><?=$apellido?></p>
        <p><?=$edad?></p>
        <p><?=$email?></p>
    <?php endif ;?>
</body>
</html>