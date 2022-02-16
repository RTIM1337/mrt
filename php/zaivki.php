<?php 
    $Nickname = $_POST["Nickname"];
    $Description = $_POST["Description"];
    $name = $_FILES["fale"]["name"];
    move_uploaded_file($_FILES["fale"]["tmp_name"], $name);
        include 'db.php';
        $querys = "INSERT INTO `applications`(`Nickname`, `Description`, `Photo`) VALUES ('$Nickname','$Description','$name')";
        
        $link->query($querys) or dir( $link->error);
        $link->close();
        header("location:/");