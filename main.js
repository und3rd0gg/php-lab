document.addEventListener('DOMContentLoaded', function () {
    // Получаем ссылки на элементы вкладок и их содержимое
    const homeTab = document.getElementById('home-tab');
    const newsTab = document.getElementById('news-tab');
    const infoTab = document.getElementById('info-tab');
    const appointmentTab = document.getElementById('appointment-tab');

    const homeContent = document.getElementById('home');
    const newsContent = document.getElementById('news');
    const infoContent = document.getElementById('info');
    const appointmentContent = document.getElementById('appointment');

    // Функция для отображения выбранной вкладки
    function showTab(tab, content) {
        tab.classList.add('tab-link-active');
        content.classList.remove('tab-content-disabled');
    }

    // Обработчики событий для каждой вкладки
    homeTab.addEventListener('click', function (event) {
        event.preventDefault();
        hideAllTabs();
        showTab(homeTab, homeContent);
    });

    newsTab.addEventListener('click', function (event) {
        event.preventDefault();
        hideAllTabs();
        showTab(newsTab, newsContent);
    });

    infoTab.addEventListener('click', function (event) {
        event.preventDefault();
        hideAllTabs();
        showTab(infoTab, infoContent);
    });

    appointmentTab.addEventListener('click', function (event) {
        event.preventDefault();
        hideAllTabs();
        showTab(appointmentTab, appointmentContent);
    });

    // По умолчанию показываем первую вкладку
    showTab(homeTab, homeContent);

    // Получаем ссылку на кнопку регистрации и вкладку регистрации
    const registerBtn = document.getElementById('register-btn');
    const registerTab = document.getElementById('register');

    // Обработчик события для кнопки регистрации
    registerBtn.addEventListener('click', function (event) {
        event.preventDefault();

        // Скрываем все вкладки
        hideAllTabs();

        // Показываем вкладку регистрации
        registerTab.classList.remove('tab-content-disabled');
        registerTab.classList.add('tab-link-active');
    });

    const loginBtn = document.getElementById('login-btn');
    const loginTab = document.getElementById('login');
    
    // Обработчик события для кнопки авторизации
    loginBtn.addEventListener('click', function (event) {
        event.preventDefault();

        // Скрываем все вкладки
        hideAllTabs();

        // Показываем вкладку авторизации
        loginTab.classList.remove('tab-content-disabled');
        loginTab.classList.add('tab-link-active');
    });

    function hideAllTabs() {
        homeContent.classList.add('tab-content-disabled');
        newsContent.classList.add('tab-content-disabled');
        infoContent.classList.add('tab-content-disabled');
        registerTab.classList.add('tab-content-disabled'); // Добавлено скрытие вкладки регистрации
        loginTab.classList.add('tab-content-disabled'); // Добавлено скрытие вкладки авторизации
        appointmentContent.classList.add('tab-content-disabled');

        homeTab.classList.remove('tab-link-active');
        newsTab.classList.remove('tab-link-active');
        infoTab.classList.remove('tab-link-active');
        registerTab.classList.remove('tab-link-active'); // Добавлено удаление подчеркивания у вкладки регистрации
        loginTab.classList.remove('tab-link-active'); // Добавлено удаление подчеркивания у вкладки авторизации
        appointmentTab.classList.remove('tab-link-active');
    }

    // Обработчик события для вкладки записи на прием
    appointmentTab.addEventListener('click', function (event) {
        event.preventDefault();

        // Скрываем все вкладки
        hideAllTabs();

        // Показываем вкладку записи на прием
        appointmentContent.classList.remove('tab-content-disabled');
        appointmentContent.classList.add('tab-link-active');
    });
});
