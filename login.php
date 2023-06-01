<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TryBeauty</title>
    <link rel="stylesheet" href="./regstyle.css" />
  </head>
  <body>
    <header class="header">
      <div class="header__section">
        <div class="header__item headerlogo">TryBeauty</div>
        <a class="header__item headerButton" href="./index.html">Главная</a>
        <a class="header__item headerButton" href="./about.html">О нас</a>
      </div>
      <div class="header__section">
        <a class="header__item headerButton" href="./reg.php">Регистрация</a>

        <a class="header__item headerButton" href="./login.php">Войти</a>
      </div>
    </header>
    <form action="login.php" method="POST">
      <div class="container">
        <h1>Вход</h1>
        <p>Пожалуйста, заполните для входа.</p>
        <hr />

        <label for="login"><b>Логин</b></label>
        <input type="text" placeholder="Введите Логин" name="login" required />

        <label for="email"><b>Почта</b></label>
        <input type="text" placeholder="Введите Почту" name="email" required />

        <label for="password"><b>Пароль</b></label>
        <input
          type="password"
          placeholder="Введите Пароль"
          name="password"
          required
        />
        <hr />

        <button class="registerbtn" name="submit" type="submit">Войти</button>
      </div>
    </form>

    <h1 style="margin: auto">


<?php
$connection = mysqli_connect ("localhost", "root", "", "mysql") or die(mysqli_error());

if (isset($_POST['submit'])) 
{
    if (empty($_POST['login'])) 
    {
        $info_input = 'Вы не ввели логин';
    }
    elseif (empty($_POST['password'])) 
    {
        $info_input = 'Вы не ввели пароль';
    }
    else 
    {    
        $login = $_POST['login'];
        $password = $_POST['password'];            
        $user = mysqli_query($connection, "SELECT `id` FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
        $id_user = mysqli_fetch_array($user);
                
        if (empty($id_user['id'])) 
        {
            $info_input = 'Введенные данные не верны';
        }
        else 
        {
            $_SESSION['password'] = $password; 
            $_SESSION['login'] = $login; 
            $_SESSION['id'] = $id_user['id']; 

            $info_input = 'Вы успешно вошли в систему';         
        }     
    }
}
        
$info_input = isset($info_input) ? $info_input : NULL;
echo $info_input;
?>
    </h1>
</body>
</html>
