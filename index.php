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
      <div class="bloks">
          <h3 class="Nickname">Кличка животного: <?php echo $row["Nickname"];?></h3>
          <img  class="Photo" src="php/<?php echo $row["Photo"];?>" alt="">
          <p><?php echo $row["Description"];?></p>
          <p class="metka"><?php echo $row["metka"];?></p>
        <p class="nomer"> <br> </p>
      <img src="">
    </div>
      <?php
        if (!empty($_POST)) {
            require __DIR__ . '/auth.php';
        
            $login = $_POST['login'] ?? '';
            $password = $_POST['password'] ?? '';
        
            if (checkAuth($login, $password)) {
                setcookie('login', $login, 0, '/');
                setcookie('password', $password, 0, '/');
                header('Location: /index.php');
            } else {
                $error = 'Ошибка авторизации';
            }
        }
        ?>
        <html>
        <head>
            <title>Форма авторизации</title>
        </head>
        <body>
        <?php if (isset($error)): ?>
        <span style="color: red;">
            <?= $error ?>
        </span>
        <?php endif; ?>
        <form action="/login.php" method="post">
            <label for="login">Имя пользователя: </label><input type="text" name="login" id="login">
            <br>
            <label for="password">Пароль: </label><input type="password" name="password" id="password">
            <br>
            <input type="submit" value="Войти">
        </form>
        </body>
        </html>
    </div>
</body>
</html>