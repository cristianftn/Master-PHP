<?php

    //cookie: Es un fichero que se almacena en el ordenador del usuario que visita la web, ocn el fin de recordar datos o rastrear el comportamiento del mismo en la web

    //setcookie("nombre", "valor qu solo puede ser texto", caducidad, ruta, dominio);

    //cookie basica
    setcookie("miCookie", "valor de mi cookie");


    //cookie con expiracion
    setcookie("unAno","valor de mi cookie de 365 dias",time() +(60*60*24*365));

    header('location:ver_cookies.php');
?>



