<?php

include("../model/CommentsDB.php");

if($_POST['method'] == "insert"){
    add_comment();
}

if($_POST['method'] == "display"){
    display_comments();
}

if($_POST['method'] == "display_comments"){
    display_user_comments();
}

if($_POST['method'] == "delete"){
    delete_comment();
}

if($_POST['method'] == "update"){
    update_comment();
}

?>