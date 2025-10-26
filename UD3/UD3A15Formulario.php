<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario de Registro</h1>
    <form name="formulario" action="UD3A15Procesar.php" enctype="multipart/form-data" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ\s]{3,}">
        <br><br>
        <label for="email">Correo Electrónico:</label><br>
        <input type="email" id="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
        <br><br>
        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password" required pattern="\w{6,}">
        <br><br>
        <label for="edad">Edad:</label><br>
        <input type="text" id="edad" name="edad" required pattern="[1-9]{1,2}">
        <br><br>
        <label for="genero">Género:</label>
        <input type="radio" id="masculino" name="genero" value="masculino"> Masculino
        <input type="radio" id="femenino" name="genero" value="femenino"> Femenino
        <br><br>
        <label for="aficiones">Aficiones:</label><br>
        <input type="checkbox" id="musica" name="aficiones" value="musica"> Música
        <input type="checkbox" id="deporte" name="aficiones" value="deporte"> Deporte
        <input type="checkbox" id="deporte" name="aficiones" value="cine"> Cine
        <input type="checkbox" id="lectura" name="aficiones" value="lectura"> Lectura
        <br><br>
        <label for="pais">País:</label><br>
        <select id="pais" name="pais" required>
            <option value="">Seleccione un país</option>
            <option value="espana">España</option>
            <option value="mexico">México</option>
            <option value="argentina">Argentina</option>
            <option value="colombia">Colombia</option>
        </select>
        <br><br>
        <label for="comentarios">Comentarios:</label><br>
        <textarea id="comentarios" name="comentarios" rows="4" cols="50"></textarea>
        <br><br>
        <label for="foto">Subir Foto:</label><br>
        <input type="file" id="foto" name="foto"/>
        <br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
<?php

?>