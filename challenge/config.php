<?php   
$server = "localhost";
$dbname = "db";
$user = "root";
$pass = "";

try {
    
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);
    
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connected successfully";
    
} catch (PDOException $e) {
   
    echo "Error: " . $e->getMessage();
}
?>
