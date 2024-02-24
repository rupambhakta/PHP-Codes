<?php
//Used to manage information accross different pages

//Verify the user login info
session_start();
$_SESSION['username']="Harry";
$_SESSION['favCat']="Books";
echo "We have saved your session";

?>