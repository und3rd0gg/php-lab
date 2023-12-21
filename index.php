<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Стоматологическая клиника</title>
</head>
<body>

<header>
    <h1>Стоматологическая клиника</h1>
    <nav>
        <ul>
            <li id="home-tab" class="tab-link-active"><a href="#">Главная</a></li>
            <li id="news-tab"><a href="#">Новости</a></li>
            <li id="info-tab"><a href="#">О клинике</a></li>
            <li id="appointment-tab"><a href="#">Запись на прием</a></li>
        </ul>
        <div id="auth-buttons">
            <button id="register-btn">Регистрация</button>
            <button id="login-btn">Авторизация</button>
        </div>
    </nav>
</header>

<section id="main-content">
    <!-- Главная вкладка -->
    <div id="home" class="tab-content-disabled tab-link-active">
        <h2>Добро пожаловать в нашу стоматологическую клинику!</h2>
        <p>Заботимся о вашем улыбке с профессионализмом и заботой.</p>
        <img src="dental-care-image.jpg">
    </div>

    <!-- Вкладка Новости -->
    <div id="news" class="tab-content-disabled">
        <h2>Последние новости</h2>
        <p>Самые свежие новости о нашей клинике:</p>
        <ul>
            <li>Открытие нового отделения</li>
            <li>Внедрение современных технологий в лечение</li>
            <li>Скидки на профессиональную чистку зубов</li>
        </ul>
        <img src="news-image.jpg" alt="Новости">
    </div>

    <!-- Вкладка О клинике -->
    <div id="info" class="tab-content-disabled">
        <h2>О нашей клинике</h2>
        <p>Мы предоставляем высококачественные стоматологические услуги с 10-летним опытом.</p>
        <p>Наши преимущества:</p>
        <ul>
            <li>Опытные врачи</li>
            <li>Современное оборудование</li>
            <li>Индивидуальный подход к каждому пациенту</li>
        </ul>
        <img src="clinic-image.jpg" alt="Клиника">
    </div>

    <!-- Вкладка Регистрация -->
    <div id="register" class="tab-content-disabled">
        <h2>Регистрация</h2>
        <form action="registration.php" method="POST" id="registration-form">
            <label for="user-type">Группа пользователя:</label>
            <select id="user-type" name="user-type">
                <option value="client">Клиент</option>
                <option value="doctor">Врач</option>
                <option value="operator">Оператор</option>
            </select>

            <label for="email">Электронная почта:</label>
            <input type="email" id="email" name="email" required>

            <label for="first-name">Имя:</label>
            <input type="text" id="first-name" name="first-name" required>

            <label for="last-name">Фамилия:</label>
            <input type="text" id="last-name" name="last-name" required>

            <label for="phone-number">Номер телефона:</label>
            <input type="text" id="phone-number" name="phone-number" required>

            <label for="birthdate">Дата рождения:</label>
            <input type="date" id="birthdate" name="birthdate" required>

            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Зарегистрироваться</button>
        </form>
    </div>

    <div id="login" class="tab-content-disabled">
        <h2>Авторизация</h2>
        <form action="login.php" method="POST" id="login-form">
            <label for="login-email">Электронная почта:</label>
            <input type="email" id="login-email" name="login-email" required>

            <label for="login-password">Пароль:</label>
            <input type="password" id="login-password" name="login-password" required>

            <button type="submit">Войти</button>
        </form>
    </div>

    <!-- Вкладка Запись на прием -->
    <div id="appointment" class="tab-content-disabled">
        <h2>Запись на прием</h2>
        <form id="appointment-form">
            <label for="patient-name">Ваше имя:</label>
            <input type="text" id="patient-name" name="patient-name" required>

            <label for="email">Электронная почта:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Номер телефона:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="appointment-date">Дата приема:</label>
            <input type="date" id="appointment-date" name="appointment-date" required>

            <button type="submit">Записаться</button>
        </form>
    </div>
</section>

<script src="main.js"></script>
</body>
</html>
