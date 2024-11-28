<?php
require dirname(__DIR__) .'/vendor/autoload.php'; 

try {
    $uri = 'mongodb://localhost:27017/';
    $client = new MongoDB\Client($uri);
    return $client; 
} catch (Exception $e) {
    echo "Failed to connect to MongoDB: " . $e->getMessage();
    exit;
}
?>
