    <?php
    $archivo = $_FILES['archivo'];
    $nombre = $archivo['name'];
    $tipo = $archivo['type'];

    // Lista de tipos de archivo permitidos
    $tiposPermitidos = array("image/jpg", "image/png", "image/gif");

    if (in_array($tipo, $tiposPermitidos)) {
        if (!is_dir('images')) {
            mkdir('images');
        }
        move_uploaded_file($archivo['tmp_name'], 'images/' . $nombre);
        echo "<h1>Imagen subida</h1>";
    } else {
        header("Refresh: 5; URL=index.php");
        echo "<h1>Sube una imagen con un formato correcto (jpg, png o gif).</h1>";
    }
