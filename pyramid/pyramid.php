<?php
    function pyramid($y){
        $ctr = 1;
        for($i = $y ; $i > 0 ; $i--){
            for($h=$i;$h>0;$h--){ //sets the whitespaces 
                echo "&nbsp; ";
            }
            for($j = 0 ; $j < $ctr ; $j++ ){
                echo "* &nbsp;"; //sets the amount of asterisk
            }
            echo "<br>";
            $ctr++;
        }
    }
?>