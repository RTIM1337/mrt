<?php
include "db.php";

    $login = $_POST["logun"];
    $qerti = "SELECT * FROM `users` WHERE  `login`='$login'";
    if($result = $link->query($qerti)){
        foreach($result as $row){
    $_SESSION["user"]=$row["id"];
    echo $_SESSION["user"];
        }
    }
    header("location: /");
