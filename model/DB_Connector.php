<?php

try {
    $db = new PDO("mysql:dbname=finalproject;host=localhost", "root", "root");
} catch (PDOException $e) {
    echo "FAIL";
}
?>