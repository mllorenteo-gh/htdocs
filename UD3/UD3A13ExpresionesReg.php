<?php
    $miEdad = "Tengo 26 años\n";
    function cumpleanyos($edad){
        return $edad[0] + 1;
    }

    $miCumple = preg_replace_callback('/(\d{2})/', "cumpleanyos", $miEdad);
    echo $miCumple . "<br>";

    $cadenaAba="Estaba en mi casa cuando vi a mi amigo que estaba de visita.";
    preg_match_all('/aba/', $cadenaAba, $coincidencias, PREG_OFFSET_CAPTURE);
    var_dump($coincidencias);
    echo "<br>";

    $cadenabbb="bbbabbbabbbabbb";
    preg_match_all('/b{3}/', $cadenabbb, $coincidenciasbbb, PREG_OFFSET_CAPTURE);
    var_dump($coincidenciasbbb);
    echo "<br>";

    $cadenaComienzaaa="aaabbb aaaccc aaaddd bbbccc aaabbb";
    preg_match_all('/^(a{2})/', $cadenaComienzaaa, $coincidenciasComienzaaa, PREG_OFFSET_CAPTURE);
    var_dump($coincidenciasComienzaaa);
    echo "<br>";

    $cadenaTerminaba="amaba bailaba";
    preg_match_all('/(ba)$/', $cadenaTerminaba, $coincidenciasTerminaba, PREG_OFFSET_CAPTURE);
    var_dump($coincidenciasTerminaba);
    echo "<br>";

    $cadenaEmpiezaAFinb="abcdebabjhjkhb";
    preg_match_all('/^a.*b$/', $cadenaEmpiezaAFinb, $coincidenciasEmpiezaAFinb, PREG_OFFSET_CAPTURE);
    var_dump($coincidenciasEmpiezaAFinb);  
    echo "<br>";

    $cadenaSoloA="aaabaaaacaaaadaaaa aaaa";
    preg_match_all('/\ba+\b/', $cadenaSoloA, $coincidenciasSoloA, PREG_OFFSET_CAPTURE);    
    var_dump($coincidenciasSoloA);
    echo "<br>";

    $cadenabvariasa="baaa";
    preg_match_all('/^ba+[^b]$/', $cadenabvariasa, $coincidenciasbvariasa, PREG_OFFSET_CAPTURE);    
    var_dump($coincidenciasbvariasa);   
    echo "<br>";

    $cadenaayb="aaabbb ab abbb aabbbb aaaab";
    preg_match_all('/\ba+b+\b/', $cadenaayb, $coincidenciasayb, PREG_OFFSET_CAPTURE);    
    var_dump($coincidenciasayb);
    echo "<br>";

    $cadenai="aabbb aaaa abbbbb";
    preg_match_all('/\ba{1-3}b{1-3}\b/', $cadenai, $coincidenciasj, PREG_OFFSET_CAPTURE);
    var_dump($coincidenciasj);  
    echo "<br>";

    $cadenaj="abababab aaabbb abba aaaa";
    preg_match_all('/\b(ab)+\b/', $cadenaj, $coincidenciasj, PREG_OFFSET_CAPTURE); 
    var_dump($coincidenciasj);
    echo "<br>";

    $cadenal="aaabbb bbbb aaaa ababab";
    preg_match_all('/\b(a{2,}|b{2,})+\b/', $cadenal, $coincidenciasl, PREG_OFFSET_CAPTURE);
    var_dump($coincidenciasl);
    echo "<br>";

    $cadenam="aaabbb bbba aaaa ababab ab";
    preg_match_all('/\b(a+b+|b+a+)\b/', $cadenam, $coincidenciasm, PREG_OFFSET_CAPTURE);    
    var_dump($coincidenciasm);
    echo "<br>";


?>