<?php
    $name = "Rupam is a good boy";
    echo $name;
    echo "<br>";
    echo strlen($name);
    echo "<br>";
    echo "The length of " . "My String is " . strlen($name);
    echo "<br>";
    echo str_word_count($name);
    echo "<br>";
    echo strrev($name);
    echo "<br>";
    echo strpos($name, "is");
    echo "<br>";
    echo str_replace("Rupam", "Arpan", $name);
    echo "<br>";
    echo str_repeat($name,"100");
    echo "<br>";
    echo rtrim("<pre>  this is a good boy.  </pre>");
    echo "<br>";
    echo "<br>";
    echo "<br>";
?>