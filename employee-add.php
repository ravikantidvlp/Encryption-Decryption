<?php
 include ("connection.php" ); 
$fname =  $_POST['firstname' ]; 
$lname =  $_POST['lastname' ]; 
$email =  $_POST['email' ]; 
$address =  $_POST['address' ]; 
$phone =  $_POST['phone' ]; 
$sql=  "INSERT  INTO `employees`(`firstname` , `lastname` , `email` , `address` , `phone`,`firstname_hash`)
 VALUE  ('".encrypt($fname)."'  , '".encrypt($lname)."' , '".encrypt($email)."' ,'".encrypt($address)."' , '".encrypt($phone)."','".hash('sha512', strtolower($fname))."')" ; 

if(mysqli_query($conn , $sql)){
    $response = [
        'status'=>'ok',
        'success'=>true,
        'message'=>'Record created Success!'
    ];
    print_r(json_encode($response));
}else{
    $response = [
        'status'=>'ok',
        'success'=>false,
        'message'=>'Record created failed!'
    ];
    print_r(json_encode($response));
} 
?> 