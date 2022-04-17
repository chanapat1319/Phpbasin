<?php
    $age=array("2"=>"35","1"=>"37","5"=>"43");
    krsort($age);
    
    foreach($age as $x=>$x_value){
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
    }
?>