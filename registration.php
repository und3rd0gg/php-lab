<?php
error_log("start form");
session_start();
$email        = trim(strip_tags($_POST['email']));
$groupId        = trim(strip_tags($_POST['user-type']));

if($groupId == 'client'){
    $groupId = 4;
} else if ($groupId == 'doctor'){
    $groupId = 3;
} else if($groupId == 'operator'){
    $groupId = 2;
}

$password    = trim(strip_tags($_POST['password']));
$lastname    = trim(strip_tags($_POST['last-name']));
$firstname    = trim(strip_tags($_POST['first-name']));
$birthdate    = trim(strip_tags($_POST['birthdate']));
$phoneNumber    = intval(trim(strip_tags($_POST['phone-number'])));

$link = mysqli_connect('localhost', 'root', '', 'dental_clinic');
if (!$link) die('Ошибка соединения с БД');
echo "Успешное соединение с БД. ";

$query = "SELECT EMAIL FROM USER WHERE EMAIL = '$email'";
$check_login = mysqli_query($link, $query);

// $_SESSION['message'] = '';
// if (mysqli_num_rows($check_login) > 0) {
//     $_SESSION['message']     = 'Введите другой логин. Введенный логин уже занят.';
//     $_SESSION['login']     = $login;
//     $_SESSION['password']    = $password;
//     $_SESSION['surname']     = $surname;
//     $_SESSION['name']     = $name;
//     $_SESSION['birthday']     = $birthday;
//     $_SESSION['telephone']     = $telephone;
//     header('Location: form_registration.php');
// }

$query = "INSERT INTO USER
        (ID_GROUP, EMAIL, PASSWORD, FIRSTNAME, LASTNAME, BIRTHDATE, PHONE_NUMBER)
		VALUES ('$groupId', '$email', '$password', '$firstname', '$lastname', '$birthdate', '$phoneNumber')";
$res = mysqli_query($link, $query);

if (!$res) {
    echo "ОШИБКА в запросе к БД";
} else {
    echo "Запись в базу данных прошла успешно";
}
?>