<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $database = "rupam";

     //Creat a connection
     $conn = mysqli_connect($servername,$username,$password,$database);
     
     //Die if connection was not successful
    if(!$conn){
         die("Sorry we failed to connect: ".mysqli_connect_error());
    }else{
            echo "Connection was successful<br>";
    }

    $name = 'Birkant';
    $distination = 'Simla';
    $sql = "INSERT INTO `phptrip`(`name`,`dest`)
             VALUES('$name','$distination')";

    $result = mysqli_query($conn, $sql);

    // Check for the table creation success
    if($result){
        echo "Recoed has been inserted successfully!<br>";
    }
    else{
        echo "Recoed has not been created successfully because of this error ---> ". mysqli_error($conn);
    }
?>