<?php

if(isset($_COOKIE['miCookie'])){
    unset($_COOKIE['miCookie']);
    setcookie('miCookie','',time()-100);
}else{
    echo 'No existe la cookie';
}

if(isset($_COOKIE['unAno'])){
    unset($_COOKIE['unAno']);
    setcookie('unAno','',time()-100);
}else{
    echo 'No existe la cookie';
}


header('location:ver_cookies.php');
?>