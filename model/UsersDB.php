<?php
include("DB_Connector.php");

function add_user(){
    global $db;
    
    $query = "INSERT INTO users (username, password) VALUES ('".$_POST['username']."', '".$_POST['password']."')";
    $result = $db->query($query);
}

function get_users(){
}

function get_user(){
    global $db;
    
    $query = "SELECT id FROM users WHERE password = '".$_POST['password']."' AND username = '".$_POST['username']."'";
    $result = $db->query($query);
    
    echo json_encode($result->fetchAll());
}

function update_user(){
    global $db;
    
    $query = "UPDATE `finalproject`.`users` SET `password` = '".$_POST['password']."' WHERE `users`.`id` = 1;";
    $result = $db->query($query);
}

function delete_user(){
}

?>