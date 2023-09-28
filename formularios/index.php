<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>
    <h1>Formularios</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="nombre">nombre</label>    
        <p><input type="text" name="nombre"/></p>
        
        <label for="apellido">apellido</label>
        <p><input type="text" name="apellido"></p>

        <label for="boton">boton</label>
        <p><input type="button" name="boton" value="clicame"></p>

        <label for="sexo">Sexo:</label>
        <p>
            <input type="checkbox" name="sexo" value="hombre">
            <input type="checkbox" name="sexo" value="mujer">
        </p>

        <label for="color">color</label>
        <p><input type="color" name="color"></p>

        <label for="fecha">fecha</label>
        <p><input type="date" name="fecha"></p>

        <label for="archivo">archivo</label>
        <p><input type="file" name="archivo"></p>

        <label for="contrasena">contrasena</label>
        <p><input type="password" name="contrasena"></p>

        <label for="continente">continente</label>
        <p>
            America <input type="radio" name="continente" value="america">
            Europa  <input type="radio" name="continente" value="europa">
            Asia    <input type="radio" name="continente" value="asia">
        </p>

        <label for="web">pagina web</label>
        <p><input type="url" name="web"></p>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>