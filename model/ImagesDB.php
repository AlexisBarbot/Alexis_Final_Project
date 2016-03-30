<?php
include("DB_Connector.php");

function add_image(){
    global $db;
    
    $query = "INSERT INTO images (title, description, path, user_id) VALUES ('".$_POST['title']."', '".$_POST['description']."', '".$_POST['path']."', ".$_POST['user_id'].")";
    $result = $db->query($query);
}

function get_images(){
    global $db;
    
    $query = "SELECT title, path, user_id FROM images";
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
}

function get_images_user_id(){
    global $db;
    
    $query = "SELECT title, description, path FROM images WHERE user_id = ".$_POST['user_id'];
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
}

function update_image(){
}

function delete_image(){ 
}

?>