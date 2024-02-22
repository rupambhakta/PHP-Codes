<?php
    echo "Welcome to Scope Local & Global variables in PHP<br>";
    $a =97;
    function printValue(){
        // $a = 98; // Local variable
        global $a;
        echo "The value of a is $a<br>";
    }
    printValue();
    echo $a;
?>