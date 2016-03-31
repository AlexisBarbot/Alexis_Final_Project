<?php
include("DB_Connector.php");

function add_comment(){
    global $db;
    echo $_POST["userId"];
    
  //  $query = "INSERT INTO comments (id, text, user_id, image_id) VALUES (NULL, '".$_POST['comment']."', '".$_POST['userId']."'), '".$_POST['imageId']."')";
    
    $query = "INSERT INTO `finalproject`.`comments` (`id`, `text`, `user_id`, `image_id`) VALUES (NULL, '".$_POST['comment']."', '".$_POST['userId']."', '".$_POST['imageId']."')";
    $result = $db->query($query);
}

function display_comments(){
    global $db;
    
    $query = "SELECT text FROM `comments` WHERE id = ".$_POST['imageId']."";
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
}

?>