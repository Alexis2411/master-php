<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de Formulario</title>
</head>

<body>
    <h1>Validacion de formulario</h1>

    <?php
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        if ($error == 'faltan datos') {
            echo "<strong style= 'color:red'>Introduce todos los dato</strong>";
        } else {
            echo "<strong style= 'color:red'>Revisa el campo $error </strong>";
        }
    }
    ?>

    <form action="validacion/procesarformulario.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" required pattern="[A-Za-záéíóúÁÉÍÓÚñÑ\s]+">


        <label for="apellido">apellido</label>
        <input type="text" name='apellido' required pattern="[a-zA-Z]+">

        <label for="edad">edad</label>
        <input type="number" name='edad' required='required' pattern="0-9">

        <label for="email">email</label>
        <input type="email" name='email' required='required'>

        <label for="contrasena">contrasena</label>
        <input type="password" name='contrasena' required='required'>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>