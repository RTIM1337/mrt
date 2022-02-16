<?php 
    $fio = $_POST["fio"];
    $logun = $_POST["logun"];
    $Email = $_POST["Email"];
    $password = $_POST["password"];

        include 'db.php';
        $querys = "INSERT INTO `users`(`fuo`, `login`, `email`, `password`) VALUES ('$fio','$logun','$Email','$password')";
        
        $link->query($querys) or dir( $link->error);
        $link->close();
        header("location:/");