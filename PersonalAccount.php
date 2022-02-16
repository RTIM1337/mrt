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
      include "php/header.php"
      ?>
      <form action="php/zaivki.php" method="post" class="formRegustr" id="formRegustr" enctype="multipart/form-data">
          <h3>Авторизация </h3>

          <input class="formRegustrInput" type="text" name="Nickname" placeholder="Кличка домашнего животного" id="logun" required>
 
          <input class="formRegustrInput" type="text" name="Description" id="" placeholder="Описание запрашиваемых работ" required>
          <P> Фото питомца <input type="file" name="fale"> </P>
         
        
          <p class="erorses" id="edr"></p>
          <button class="buttons">Оставить заявку</button>
      </form>
    </div>
</body>
</html>