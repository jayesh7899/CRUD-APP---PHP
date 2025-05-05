<?php
    define("hostname","localhost");
    define("username","root");
    define("password","");
    define("database","crud_operation");

    $connection=mysqli_connect(hostname, username, password, database);


    if(!$connection){
        die("con");

    }
    else{
        echo "";
    }
?>