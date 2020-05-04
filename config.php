<?php
/* Provide database credentials here, it varies depending on environment */
define('DB_SERVER', 'hostIP or localhost');
define('DB_USERNAME', 'mySQL user');
define('DB_PASSWORD', 'mySQL user pass');
define('DB_NAME', 'Name of the database');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect, check credentials. " . mysqli_connect_error());
}
?>
