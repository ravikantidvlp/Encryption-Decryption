<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//Define cipher 
// Display the original string
echo "Original String: " . $simple_string;
 
// Store the cipher method
$ciphering = "AES-256-CBC";
 
 
 
// Display the encrypted string
$text = 'Ravi';
$encryption = encrypt($text);
echo "Encrypted String: " . $encryption . "\n";
 

 
// Display the decrypted string
echo "Decrypted String: " . decrypt($encryption);

function encrypt($data){

    // Non-NULL Initialization Vector for encryption
    $encryption_iv = '1234567891011121';
    
    // Store the encryption key
    $encryption_key = "GeeksforGeeks";
    
    // Use openssl_encrypt() function to encrypt the data
    $encryption = openssl_encrypt($simple_string, "AES-256-CBC",
                $encryption_key, 0, $encryption_iv);
    return $encryption;
}

function decrypt($encrypted_data){
        // Non-NULL Initialization Vector for decryption
    $decryption_iv = '1234567891011121';
    
    // Store the decryption key
    $decryption_key = "GeeksforGeeks";
    
    // Use openssl_decrypt() function to decrypt the data
    $decryption=openssl_decrypt ($encrypted_data, "AES-256-CBC", 
            $decryption_key, 0, $decryption_iv);
    return $decryption;
}
?>