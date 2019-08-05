<?php
    function table(){
        $y = 10;
        echo "<table>";
       for($column = 0 ; $column <=10; $column++){
           echo "<tr>";
            for ($row = 0; $row <= 10; $row++){
                echo "<td>";
                if($row==0){
                    echo $column;
                }else{
                    if($column==0)
                        echo $row;
                    else
                        echo ($row*$column);
                }
                echo "</td >";
            }
            echo "</tr>";
            echo "<br>";
        }
        echo "</table>";
    }
?>  