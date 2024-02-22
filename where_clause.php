<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "rupam";

    $conn = mysqli_connect($servername,$username,$password,$database);
    if (!$conn) {
        die("Sorry we failed to connect : ".mysqli_connect_error());
    }else{
        echo "Connection was successful<br>";
    }

    $sql = "SELECT * FROM `phptrip` WHERE `dest` = 'Goa'";
    $result = mysqli_query($conn,$sql);

    $num = mysqli_num_rows($result);
    echo $num;
    echo " records found in the database<br>";

    $no = 1;
    if($num>0){
        while($row = mysqli_fetch_assoc($result)){
            echo $no .". Hello ".$row['name']." welcome to ".$row['dest'];
            $no++;
            echo "<br>";
        }
    }

?>