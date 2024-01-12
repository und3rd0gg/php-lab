<!-- cart.php -->

<h2>Корзина</h2>

<!-- Тестовые товары -->
<div id="cart-items">
    <!-- Тестовый товар 1 -->
    <div class="cart-item" data-item-name="Профессиональная чистка зубов" data-item-price="50">
        <span class="item-name">Профессиональная чистка зубов</span>
        <span class="item-price-per-unit">$50 за шт.</span>
        <label for="quantity-item1">Количество:</label>
        <input type="number" id="quantity-item1" class="item-quantity" value="1" min="1" onchange="updateTotal()">
        <button class="remove-item-btn" onclick="removeCartItem('Профессиональная чистка зубов')">Удалить</button>
    </div>

    <!-- Тестовый товар 2 -->
    <div class="cart-item" data-item-name="Лечение кариеса" data-item-price="100">
        <span class="item-name">Лечение кариеса</span>
        <span class="item-price-per-unit">$100 за шт.</span>
        <label for="quantity-item2">Количество:</label>
        <input type="number" id="quantity-item2" class="item-quantity" value="1" min="1" onchange="updateTotal()">
        <button class="remove-item-btn" onclick="removeCartItem('Лечение кариеса')">Удалить</button>
    </div>

    <!-- Добавьте другие тестовые товары по аналогии -->

</div>

<!-- Общая информация -->
<div id="cart-summary">
    <p>Выбранный врач: <span id="selected-doctor">Специалист</span></p>
    <p>Общая стоимость: $<span id="total-price">0</span></p>
    <button id="checkout-btn" onclick="checkout()">Оформить заказ</button>
</div>
