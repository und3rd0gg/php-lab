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
                <li id="home-tab" class="tab-link tab-link-active"><a href="#">Главная</a></li>
                <li id="news-tab" class="tab-link"><a href="#">Новости</a></li>
                <li id="info-tab" class="tab-link"><a href="#">О клинике</a></li>
                <li id="services-tab" class="tab-link"><a href="#">Услуги</a></li>
                <li id="appointment-tab" class="tab-link"><a href="#">Запись на прием</a></li>
            </ul>
            <div id="auth-buttons">
                <button id="register-btn">Регистрация</button>
                <button id="login-btn">Авторизация</button>
                <button id="cart-btn" onclick="openCart()">Корзина</button>
            </div>
        </nav>
    </header>

    <section id="main-content">
        <!-- Главная вкладка -->
        <div id="home" class="tab-content-disabled tab-link-active">
            <h2>Добро пожаловать в нашу стоматологическую клинику!</h2>
            <p>Заботимся о вашем улыбке с профессионализмом и заботой.</p>
            <img src="img/dentists.jpg">
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
                <!-- ... (ваша текущая форма регистрации) -->
            </form>
        </div>

        <!-- Вкладка Авторизация -->
        <div id="login" class="tab-content-disabled">
            <h2>Авторизация</h2>
            <form action="login.php" method="POST" id="login-form">
                <!-- ... (ваша текущая форма авторизации) -->
            </form>
        </div>

        <!-- Вкладка Запись на прием -->
        <div id="appointment" class="tab-content-disabled">
            <h2>Запись на прием</h2>
            <form id="appointment-form">
                <!-- ... (ваша текущая форма записи на прием) -->
            </form>
        </div>

        <!-- Вкладка Услуги -->
        <div id="services" class="tab-content-disabled">
            <h2>Наши услуги</h2>
            <p>Предлагаем широкий спектр стоматологических услуг для обеспечения вашего здоровья и красивой улыбки.</p>

            <div class="service-card">
                <img src="img/cleaning.jpg" alt="Профессиональная чистка зубов">
                <h3>Профессиональная чистка зубов</h3>
                <p>Эффективное удаление зубного налета и предотвращение заболеваний десен.</p>
                <p class="price">Цена: $50</p>
                <button class="add-to-cart-btn" onclick="addToCart('Профессиональная чистка зубов', 50)">Добавить в корзину</button>
            </div>

            <div class="service-card">
                <img src="img/cavity.jpg" alt="Лечение кариеса">
                <h3>Лечение кариеса</h3>
                <p>Комплексное лечение кариеса с использованием современных материалов.</p>
                <p class="price">Цена: $100</p>
                <button class="add-to-cart-btn" onclick="addToCart('Лечение кариеса', 100)">Добавить в корзину</button>
            </div>

            <img src="services-image.jpg" alt="Наши услуги">
        </div>

        <!-- Вкладка Корзина -->
        <div id="cart" class="tab-content-disabled">
            <?php include('cart.php'); ?>
        </div>

    </section>

    <script src="js/main.js"></script>
</body>

</html>
