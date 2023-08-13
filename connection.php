<?php

$db_hostname = 'localhost';
$db_database = 'code labs';
$db_username = 'root';
$db_password = '';
$con = mysqli_connect($db_hostname,$db_username,$db_password,$db_database);

if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
function sanitize($input) {
    
    $input = trim($input);
    

    $input = stripslashes($input);
    
    
    $input = htmlentities($input, ENT_QUOTES, 'UTF-8');
    
    return $input;
}
?>
