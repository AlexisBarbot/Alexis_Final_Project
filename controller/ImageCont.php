<?php
include("../model/ImagesDB.php");

if($_POST['method'] == "insert"){
    add_image();
}

if($_POST['method'] == "get_images_userID"){
    get_images_user_id();
}

if($_POST['method'] == "display"){
    display_images_user();
}

if($_POST['method'] == "display_all"){
    display_all_images();
}
?>