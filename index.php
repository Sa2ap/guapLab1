<!DOCTYPE html> 
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
    <Link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">    
</head> 
<body>
    <div class="container mt-4">
        <?php
            if($_COOKIE['user'] == ''):
        ?>
        <div class="row">
            <h1>Форма регистрации</h1>
            <form action="check.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
                <input type="password" class="form-control" name="pass" id = "pass" placeholder="Введите пароль"><br>
                <button class = "btn btn-success"type="submit">Зарегистрироваться</button>
            </form>
        </div>
        <div class="col">
            <h1>Форма Авторизации</h1>
            <form action="auth.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                <input type="password" class="form-control" name="pass" id = "pass" placeholder="Введите пароль"><br>
                <button class = "btn btn-success"type="submit">Авторизоваться</button>
            </form>
        </div>
        <?php else: ?>
            <p>Привет <?=$_COOKIE['user']?>.Чтобы выйти нажмите <a href="/exit.php">Здесь</a>.</p>
        <?php endif;?>
    </div>
</body>
</html>