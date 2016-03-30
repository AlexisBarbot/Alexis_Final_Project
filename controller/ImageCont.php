<?php
include("../model/ImagesDB.php");

if($_POST['method'] == "insert"){
    add_image();
}

if($_POST['method'] == "get_images_userID"){
    get_images_user_id();
}
?>