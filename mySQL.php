<?php
    echo "Connect SQL database with our php code!<br>";
    /*
        Ways to connect to a MySQL database
        1. MySQLi extension
        2.PDO
    */

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
        echo "Connection was successful";
    }

?>