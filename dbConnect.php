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
?>