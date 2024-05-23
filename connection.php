<?php
 $CFG=include ("environment.php" ); 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$server_name= "localhost";
$user_name= "root";
$password= "srib@123";
$database_name= "srib";
$conn= mysqli_connect($server_name , $user_name , $password , $database_name); 
if ($conn) { 
//echo "connected" ; 
}


function encrypt($data){
    $method = "AES-256-CBC";
    $key = "encryptionKey123";
    $options = 0;
    $iv = '1234567891011121';

    $encryptedData = openssl_encrypt($data, $method, $key, $options,$iv);
    return $encryptedData;
}

function decrypt($data){
    $method = "AES-256-CBC";
    $key = "encryptionKey123";
    $options = 0;
    $iv = '1234567891011121';
    
    $decryptedData = openssl_decrypt($data, $method, $key, $options, $iv);
    return $decryptedData;
}
?> 