<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include 'php/db.php';
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ГрумRoom</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="contener">
      <?php
      include "php/header.php";
    $qerti = "SELECT * FROM `applications` WHERE 1";
    if($result = $link->query($qerti)){
        foreach($result as $row){
    
      ?>
      <div class="bloks">
          <h3 class="Nickname">Кличка животного: <?php echo $row["Nickname"];?></h3>
          <img  class="Photo" src="php/<?php echo $row["Photo"];?>" alt="">
          <p><?php echo $row["Description"];?></p>
          <p class="metka"><?php echo $row["metka"];?></p>
      </div>
      <?php
        }}
      ?>
    </div>
</body>
</html>