<?php
    // This file contains database configuration assuming you are running mySql using user "root" and pass""

    define('DB_SERVER','localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
    define('DB_NAME','login');

    // Try connecting to the DB
     
    $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

//   check the connection 

if($conn == false){
    dir('Error: Cannot connect');
}
?>