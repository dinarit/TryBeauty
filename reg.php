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
    <form action="reg.php" method="POST">
      <div class="container">
        <h1>Регистрация</h1>
        <p>Пожалуйста, заполните для создания аккаунта.</p>
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

        <button class="registerbtn" name="submit" type="submit">
          Зарегистрироваться
        </button>
      </div>
    </form>
    <h1>
      <?php
$connection = mysqli_connect ("localhost", "root", "", "mysql") or die(mysqli_error($connection));

if (isset($_POST['submit'])) 
{
    if (empty($_POST['login'])) 
    {
        $info_reg = 'Вы не ввели Логин';
    }          
    elseif (empty($_POST['email'])) 
    {
        $info_reg = 'Вы не ввели почту';
    }           
    elseif (empty($_POST['password'])) 
    {
        $info_reg = 'Вы не ввели пароль';
    }                      
    else 
    {
        $login = $_POST['login'];
        $email = $_POST['email'];               
        $password = $_POST['password'];
  
        $query = "INSERT INTO `users` (login, email, password)
        VALUES ('$login', '$email', '$password')";
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
                    
        $info_reg = 'Вы успешно зарегистрировались!';
    }
}

$info_reg = isset($info_reg) ? $info_reg : NULL;
echo $info_reg;
?>
    </h1>
    <footer>
      <h1>©Copyright Bagautdinov Inc</h1>
    </footer>
  </body>
</html>

