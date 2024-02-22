<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
    <h1><pre>      Operatoes in PHP     </pre></h1>
    <?php
        $a = 53;
        $b = 5;
        // Arithmetic operators

        echo "For a - b the result is ". ($a - $b). "<br>";
        echo "For a * b the result is ". ($a * $b). "<br>";
        echo "For a + b the result is ". ($a + $b). "<br>";
        echo "For a / b the result is ". ($a / $b). "<br>";
        echo "For a % b the result is ". ($a % $b). "<br>";
        echo "For a ** b the result is ". ($a ** $b). "<br>";

        //Logical poerator
        $m = true;
        $n = false;
        echo "For m and n, the result is ";
        echo var_dump($m and $n);
        echo"<br>";
        echo "For m and n, the result is ";
        echo var_dump($m or $n);
        echo"<br>";

    ?>



</body>
</html>