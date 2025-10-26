<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos recibidos</title>
</head>
<body>
    <h1>Datos Recibidos correctamente</h1>
    <?php
        echo "<p><strong>Nombre:</strong> " . htmlspecialchars($_POST['nombre']) . "</p>";
        echo "<p><strong>Correo Electrónico:</strong> " . htmlspecialchars($_POST['email']) . "</p>";
        echo "<p><strong>Contraseña:</strong> " . htmlspecialchars($_POST['password']) . "</p>";
        echo "<p><strong>Edad:</strong> " . htmlspecialchars($_POST['edad']) . "</p>";
        echo "<p><strong>Género:</strong> " . htmlspecialchars($_POST['genero']) . "</p>";
        if(isset($_POST['aficiones'])) {
            echo "<p><strong>Aficiones:</strong> " . implode(", ", array_map('htmlspecialchars', (array)$_POST['aficiones'])) . "</p>";
        } else {
            echo "<p><strong>Aficiones:</strong> Ninguna seleccionada</p>";
        }  
        echo "<p><strong>País:</strong> " . htmlspecialchars($_POST['pais']) . "</p>";
        echo "<p><strong>Comentarios:</strong> " . nl2br(htmlspecialchars($_POST['comentarios'])) . "</p>";
        //echo htmlspecialchars($_FILES['foto']['name']) . "<br>";
        if(is_uploaded_file($_FILES['foto']['tmp_name'])) {
            echo "El fichero es válido y se subió con éxito.\n";
            echo $_FILES['foto']['tmp_name'];
        } else {
            echo "¡Posible ataque de subida de ficheros!\n";
        }
        
    ?>
</body>
</html>
<?php

?>