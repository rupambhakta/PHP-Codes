<?php
    //Connecting to the database
    $servername = "localhost";
    $username = "root";
    $password = "";

    //Creat a connection
    $conn = mysqli_connect($servername,$username,$password);

    //Die if connection was not successful
    if(!$conn){
        die("Sorry we failed to connect: ".mysqli_connect_error());
    }else{
        echo "Connection was successful<br>";
    }

    // Create a database
    $sql = "CREATE DATABASE rupam";
    $result = mysqli_query($conn,$sql);

    //Check for the database success
    if($result){
        echo "The database was created successfully!<br>";
        echo "The result is ";
        echo var_dump($result)."<br>";
    }else{
        echo "The database was not created successfully because of this error --> ".mysqli_error($conn);
    }
   


?>