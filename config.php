<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'fancy_web');
    
    /* Attempt to connect to MySQL database */
    $db_connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    // Check connection
    if($db_connection === false){
        die("ERROR: Could not connect to the Database." . mysqli_connect_error());
    }
?>