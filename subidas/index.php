<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subir archivos PHP</title>
</head>
<body>
    <h1>Subir archivos php</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="archivo">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>