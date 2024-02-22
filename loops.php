<?php
    echo "While loops in PHP";
    echo "<br>";
    $a = 5;
    //While loop
    while ($a <= 10) {
        echo $a;
        $a++;
        echo "<br>";
    }
    //For loop
    for ($i=0; $i < 13; $i++) { 
        echo $i." ";
    }
    echo "<br>";
    //Do while loop
    $i = 0;
    do{
        echo "$i"."<br>";
        $i++;
    }while ($a < 5);

    //Foreach loop
    $arr = array("Apple","banana","Mango","Brade","Papaya","Lamon","Tomatom");
    foreach($arr as $values){
        echo "$values <br>";
    }
?>