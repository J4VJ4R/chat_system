<?php

$dbhost = "172.17.0.3";
$dbname = "chat";
$dbuser = "root";
$dbpass = "123";

try {
    
    $db = new PDO("mysql:host=$dbhost;dbname=$dbname", "$dbuser", "$dbpass");
    echo "Succesfull conection";
} catch (PDOException $e) {
    echo $e->getMessage();
}
