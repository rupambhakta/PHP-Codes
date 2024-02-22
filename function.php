<?php
    echo "PHP function<br>";

    function processMarks($marksArr){
        $sum = 0;
        foreach ($marksArr as  $value) {
            $sum +=$value;
        }
        return $sum;
    }
    function avgMarks($marksArr){
        $sum = 0;
        $i = 1;
        foreach ($marksArr as  $value) {
            $sum +=$value;
            $i++;
        }
        return $sum/$i;
    }
    $rohonDas = [34,87,90,79,99,17];
    $sumMarks = processMarks($rohonDas);
    $avgMarks = avgMarks($rohonDas);
    echo "Total marks scored by rohon out of 600 is $sumMarks<br>";
    echo "Average marks scored by rohon out of 600 is $avgMarks<br>";

    
?>