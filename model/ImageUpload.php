<?php
    var_dump($_POST);
    var_dump($_FILES);
    
    if(!is_dir("../img/".$_POST['user_id'])){
        mkdir("../img/".$_POST['user_id'], 0755);
    }

    $filename = substr(md5(rand()), 0, 20);
    move_uploaded_file($_FILES["images"]["tmp_name"][0], "../img/".$_POST['user_id']."/".$filename.".jpg");


//    include("../model/msgdb.php");
?>