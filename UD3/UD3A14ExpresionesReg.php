<?php
    $cadenaa="aaabbb bbbb aaaa ababab"; //contengan la cadena "aba" o "bab"
    preg_match_all('/(aba)|(bab)/', $cadenaa, $coincidenciasl, PREG_OFFSET_CAPTURE);
    var_dump($coincidenciasl);
    echo "<br>";

    $cadenab="aaabbb baba aaaa ababab ab"; //contengan la secuencia "ba" dos veces seguidas
    preg_match_all('/(ba){2}/', $cadenab, $coincidenciasm, PREG_OFFSET_CAPTURE);
    var_dump($coincidenciasm);
    echo "<br>";

    $cadenac="3878975 -487293 -5 1234 5678-90"; //números enteros positivos y negativos
    preg_match_all('/-?\b\d+\b/', $cadenac, $coincidenciasn, PREG_OFFSET_CAPTURE);
    var_dump($coincidenciasn);
    echo "<br>";

    $cadenad="45.67 732,589 -0.123 456 -78,9"; //números decimales positivos y negativos
    preg_match_all('/-?\b\d+[.,]\d+\b/', $cadenad, $coincidenciaso, PREG_OFFSET_CAPTURE);
    var_dump($coincidenciaso);
    echo "<br>";

    $cadenaf="986523987 626472651 def456 ghi789"; //números de teléfonos de 9 dígitos que empiecen por 9 o 6
    preg_match_all('/\b[96]\d{8}\b/', $cadenaf, $coincidenciasp, PREG_OFFSET_CAPTURE);
    var_dump($coincidenciasp);
    echo "<br>";

    $cadenag="49273 46762 76763 12345 67890"; //números de códigos postales de 5 dígitos que empiecen por 5 o menos
    preg_match_all('/\b[0-5]\d{4}\b/', $cadenag, $coincidenciasq, PREG_OFFSET_CAPTURE);
    var_dump($coincidenciasq);
    echo "<br>";

    $cadenah="11975732K 7878723j 1289473B"; //DNI (7-8 dígitos seguidos de una letra mayúscula)
    preg_match_all('/\b\d{7,8}[A-Z]\b/', $cadenah, $coincidenciasr, PREG_OFFSET_CAPTURE);
    var_dump($coincidenciasr);
    echo "<br>";

    $cadenai="12/12/2024 03/5/1999 31/04/2020 29/02/2021"; //fechas en formato dd/mm/aaaa
    preg_match_all('/\b(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/\d{4}\b/', $cadenai, $coincidenciass, PREG_OFFSET_CAPTURE);
    var_dump($coincidenciass);
    echo "<br>";

    $cadenaj="usuario1 usuario_2 user.name user-name user@name"; //palabras en minúsculas sin números
    preg_match_all('/\b[a-z]+\b/', $cadenaj, $coincidenciast, PREG_OFFSET_CAPTURE);
    var_dump($coincidenciast);
    echo "<br>";

    $cadenak="aba Abba aaba aaab Caaab ababab"; //palabras en las que solo la primera letra esté en mayúscula
    preg_match_all('/\b[A-Z][a-z]+\b/', $cadenak, $coincidenciasu, PREG_OFFSET_CAPTURE);
    var_dump($coincidenciasu);
    echo "<br>";

    $cadenal="casa libro mesa boli silla_2 cama"; //tres o cuatro palabras sin números
    preg_match_all('/(\b[a-zA-Z]+\s\b){3,4}/', $cadenal, $coincidenciasv, PREG_OFFSET_CAPTURE);
    var_dump($coincidenciasv);
    echo "<br>";


    ?>