<?php

// echo "Hello World";

try {
    $pdo = new PDO("mysql:host=localhost;dbname=basicoop", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connect success!";
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

?>