<?php

include("../model/CommentsDB.php");

if($_POST['method'] == "insert"){
    add_comment();
}

?>