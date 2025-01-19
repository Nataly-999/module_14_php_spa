<?php

$username = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;

// зададим книгу паролей
$users = [
     'admin' => ['id' => '0', 'password' => '132432'],
    // 'user1' => ['id' => '1', 'password' => '24680'],
    // 'user2' => ['id' => '2', 'password' => '13579'],
];


if (null !== $username || null !== $password) {

    // Если пароль из базы совпадает с паролем из формы
    if ($password === $users['admin']['password']) /*|| ($password === $users['user1']['password']) || ($password === $users['user2']['password'])*/{
    
         // Стартуем сессию:
        session_start(); 
        
   	 // Пишем в сессию информацию о том, что мы авторизовались:
        $_SESSION['auth'] = true; 
        
        // Пишем в сессию логин и id пользователя
        $_SESSION['id'] = $users['admin']['id']; 
        $_SESSION['login'] = $username; 

    }
}

    
$auth = $_SESSION['auth'] ?? null;

// если авторизованы
if ($auth) {
?>
// контент для администратора
    <a href="index.php">Вернуться на главную</a>

<?php }