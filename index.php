<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Модуль 14</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Модуль 14. SPA-салон</h1>
    </header>
    <main>
<?php
    session_start();

    $auth = $_SESSION['auth'] ?? null;

    if(!$auth) { ?>
        <form action="index.php" method="post">
            <input name="login" type="text" placeholder="Логин">
            <input name="password" type="password" placeholder="Пароль">
            <input name="submit" type="submit" value="Войти">
        </form>

    </main>
    <footer>
        <div class="SPA">FIO <span>&copy;&nbsp;SPA</span></div>
    </footer>
</body>
<?php }

// контент для администратора

?>
</html>