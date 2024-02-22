<?php

    //This is called index array
    $arr = array('this','that','what');

    //This is called associative array
    $favCol = array("Rupam"=>"Red","Rahul"=>"green","Sohom"=>"Blue");
    echo $favCol['Rupam'];
    echo $favCol['Rahul'];
    echo $favCol['Sohom'];
    foreach ($favCol as $key => $value) {
        echo"<br>";
        echo "$key -> $value";
    }
?>