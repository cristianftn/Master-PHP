<?php
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    for ($numero1; $numero1 <= $numero2 ; $numero1++) { 
       /*  echo$numero1;
        echo'<br>'; */
       

        if($numero1 % 2 != 0){
            echo $numero1;
            echo'<br>';
        }

     
    }

?>