document.addEventListener('DOMContentLoaded', function () {
    const homeTab = document.getElementById('home-tab');
    const newsTab = document.getElementById('news-tab');
    const infoTab = document.getElementById('info-tab');
    const servicesTab = document.getElementById('services-tab');
    const appointmentTab = document.getElementById('appointment-tab');
    const cartBtn = document.getElementById('cart-btn');

    const homeContent = document.getElementById('home');
    const newsContent = document.getElementById('news');
    const infoContent = document.getElementById('info');
    const servicesContent = document.getElementById('services');
    const appointmentContent = document.getElementById('appointment');
    const cartTab = document.getElementById('cart');

    function showTab(tab, content) {
        tab.classList.add('tab-link-active');
        content.classList.remove('tab-content-disabled');
    }

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

    servicesTab.addEventListener('click', function (event) {
        event.preventDefault();
        hideAllTabs();
        showTab(servicesTab, servicesContent);
    });

    cartBtn.addEventListener('click', function (event) {
        event.preventDefault();
        hideAllTabs();
        showTab(cartBtn, cartTab);
    });

    function hideAllTabs() {
        homeContent.classList.add('tab-content-disabled');
        newsContent.classList.add('tab-content-disabled');
        infoContent.classList.add('tab-content-disabled');
        appointmentContent.classList.add('tab-content-disabled');
        servicesContent.classList.add('tab-content-disabled');
        cartTab.classList.add('tab-content-disabled');

        homeTab.classList.remove('tab-link-active');
        newsTab.classList.remove('tab-link-active');
        infoTab.classList.remove('tab-link-active');
        appointmentTab.classList.remove('tab-link-active');
        servicesTab.classList.remove('tab-link-active');
        cartBtn.classList.remove('tab-link-active');
    }

    // Функция для открытия корзины
    function openCart() {
        hideAllTabs();
        showTab(cartBtn, cartTab);
    }

    // Функция для оформления заказа
    function checkout() {
        // Дополнительная логика для оформления заказа
        alert('Заказ успешно оформлен!');
        // Очищаем корзину после оформления заказа
        const cartItemsContainer = document.getElementById('cart-items');
        cartItemsContainer.innerHTML = '';
    }

    // Функция для добавления товара в корзину
    function addToCart(itemName, itemPrice) {
        const cartItemsContainer = document.getElementById('cart-items');
        const newItem = document.createElement('p');
        newItem.textContent = `${itemName}: $${itemPrice}`;
        cartItemsContainer.appendChild(newItem);
    }
});
