<?php
    require_once ('conexion.php');
    
function crear()   {
    
}

function leer(){
    global $dsn,$user,$pass;
    try{
    $conexion = new PDO($dsn, $user, $pass);

    $sql = "SELECT * FROM productos";
    $stmt= $conexion->prepare($sql);

    $stmt->execute();
    echo "<table border='1'>";
    echo "<tr>
            <th>Referencia</th>
            <th>Producto</th>
            <th>Stock</th>
            <th>Precio</th>
            <th>Fecha_ultima_venta</th>
            <th colspan='2'>Acciones</th></tr>";
    foreach ($stmt as $row){    
        echo "<tr>";  
        echo "<td>" . $row['referencia'] . "</td>";
        echo "<td>" . $row['producto'] . "</td>";
        echo "<td>" . $row['stock'] . "</td>";
        echo "<td>" . $row['precio'] . "</td>";
        echo "<td>" . $row['fecha_ultima_venta'] . "</td>";
        echo "<td><a href=''>Editar</a></td>";
        echo "<td><a href=''>Borrar</a></td>";
        echo "</tr>";
    }
    echo "</table>";

    } catch (PDOException $e){
    die("Fallo de conexión a la base de datos: ". $e->getMessage());
    } finally{
        unset($conexion);
    }
}
    


?>