<?php
    echo "Welcome to the world og Cookies<br>";
    
    // Cookies / Session

    //Syntax to set a cookie
    //echo time();

    setcookie("category","Books",time()+86400,"/");
    echo "The coocki is set<br>";
?>