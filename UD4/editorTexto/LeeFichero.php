<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nombreFichero = $_GET['nombre'];
        //echo $nombreFichero . "<br>";
        if(isset($_POST['texto'])) {
            $texto = file_get_contents($nombreFichero). " ";
            $texto.= $_POST['texto'];
            //echo $texto;
            file_put_contents($nombreFichero, $texto);
        }
    ?>
    <h2>Viendo: <?php echo $nombreFichero?></h2>
    <form name="lector" action="EditaFichero.php" method="post" enctype="multipart/form-data">
    <textarea id="texto" name="texto" rows="10" cols="50" placeholder="<?php echo $texto?>"></textarea><br><br>
    <intput type="submit" value="Editar otra vez">
    </form>
</body>
</html>