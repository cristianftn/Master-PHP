<?php

    
    if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];

        for ($numero1; $numero1 <= $numero2; $numero1++) { 
            echo $numero1;
        }
    }else{
        echo'mal';
    }
?>