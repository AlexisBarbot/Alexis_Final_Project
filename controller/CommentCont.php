<?php

include("../model/CommentsDB.php");

if($_POST['method'] == "insert"){
    add_comment();
}

if($_POST['method'] == "display"){
    display_comments();
}

?>