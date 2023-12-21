<?php
session_start();
$email = trim(strip_tags($_POST['login-email']));
$password = trim(strip_tags($_POST['login-password']));

$link = mysqli_connect('localhost', 'root', '', 'dental_clinic');

if (!$link) {
    die('Ошибка соединения с БД');
}

$query = "SELECT ID, PASSWORD, FIRSTNAME, LASTNAME, PHONE_NUMBER FROM USER WHERE EMAIL = ?";
$stmt = mysqli_prepare($link, $query);
 
if ($stmt) {
    // Привязываем параметр к запросу
    mysqli_stmt_bind_param($stmt, 's', $email);
    // Выполняем запрос
    mysqli_stmt_execute($stmt);
    // Привязываем результаты запроса к переменным
    mysqli_stmt_bind_result($stmt, $userID, $hashedPassword, $firstName, $lastName, $phoneNumber);
    // Извлекаем данные из запроса
    mysqli_stmt_fetch($stmt);

    // Проверяем хэшированный пароль с введенным паролем
    if (password_verify($password, $hashedPassword)) {
        echo "Вы успешно авторизовались. Ваше имя: $firstName Ваша фамилия: $lastName Ваш номер телефона: $phoneNumber";
        // Здесь можно установить сессию или выполнять другие действия после успешной авторизации
    } else {
        echo "Пользователь не найден";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Ошибка запроса";
}

mysqli_close($link);
?>
