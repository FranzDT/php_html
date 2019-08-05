<?php
    function palindrome($input){
        $revinput = strrev($input);
        if($input == $revinput)
            return "PALINDROME! <br>";
        else   
            return "NOT A PALINDROME! <br>";
    }
?>