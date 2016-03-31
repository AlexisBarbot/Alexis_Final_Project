<?php
include("DB_Connector.php");

function add_image($path){
    global $db;
    echo $_POST['user_id'];
    echo $path;
    $query = "INSERT INTO `finalproject`.`images` (`id`, `title`, `description`, `path`, `user_id`) VALUES (NULL, '".$_POST['title']."', '".$_POST['description']."', '".$path."', '".$_POST['user_id']."')";
    echo $query;
    $result = $db->query($query);
}

function get_images(){
    global $db;
    
    $query = "SELECT title, description, path, user_id FROM images";
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
}

function get_images_user_id(){
    global $db;
    
    $query = "SELECT title, description, path FROM images WHERE user_id = ".$_POST['user_id'];
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
}

function display_images_user(){
    global $db;
    
    $query = "SELECT * FROM `images` WHERE user_id = ".$_POST['user_id']."";
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
}

function display_all_images(){
    global $db;
    
    $query = "SELECT * FROM `images`";
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
}

function update_image(){
    
}

function delete_image(){ 
}

?>