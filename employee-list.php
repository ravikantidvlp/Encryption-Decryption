<?php
include ("connection.php" ); 
$sql= "SELECT id,firstname,lastname,address,phone,email  FROM `employees`" ; 
$result = mysqli_query($conn ,  $sql); 
// get infos for all columns

$data = [];
while($row = mysqli_fetch_assoc($result)) {
    
    $data[] = array(
        'id' => $row['id'],
        'firstname' => decrypt($row['firstname']),
        'lastname' => decrypt($row['lastname']),
        'email' => decrypt($row['email']),
        'phone' => decrypt($row['phone']),
        'address' => decrypt($row['address'])
        );
}

print_r(json_encode($data));
?> 