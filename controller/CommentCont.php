<?php

include("../model/UsersDB.php");

if($_POST['method'] == "insert"){
    insert_user();
}

if($_POST['method'] == "login"){
    get_user();
}

?>