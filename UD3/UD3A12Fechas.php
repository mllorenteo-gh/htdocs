<?php

    date_default_timezone_set("Europe/Madrid");
    $fechaActual = date("Y-m-d H:i:s"); 
    echo "Fecha y hora actual: " . $fechaActual. "<br>";

    date_default_timezone_set("Europe/London");
    $fechaOporto= date("D-m-Y H:i:s");
    echo "<br>Fecha y hora en Oporto: " . $fechaOporto . " " .date_default_timezone_get()."<br>";

    $timestamp = strtotime("1971-06-25");
    $fechaCumple= date("d/m/Y", $timestamp);
    echo "<br>Mi fecha de cumpleaños es: " . $fechaCumple . "<br>";

    $timestampFuturo = strtotime("+60 day");
    $info=getdate($timestampFuturo);
    echo "<br>Fecha dentro de 60 días: " . $info['mday'] . "/" . $info['mon'] . "/" . $info['year'] . "<br>";
    echo "<br>Día de la semana dentro de 60 días: " . $info['weekday'] . "<br>";

?>