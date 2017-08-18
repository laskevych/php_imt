<?php if(!empty($cart->items)) :?>
    <div class="cart-king">
        <div class="cart-img">Фото</div>
        <div class="cart-name">Наименование</div>
        <div class="cart-price">Цена</div>
        <div class="cart-amount">Кол-во</div>
        <div class="cart-sum">Сумма</div>
        <div class="cart-line"></div>
    </div>
    <?php foreach ($cart->items as $item) :?>
        <div class="cart-king">
            <hr class="cart-line-2">
            <div class="cart-img">
                <img src="files/images/product.jpg" width="75px">
            </div>
            <div class="cart-name"><?php echo $item->name?></div>
            <div class="cart-price"><?php echo $item->variant->price .' грн' ?></div>
            <div class="cart-amount">
                <input class="form-control" type="number" value="<?php echo $item->amount?>">
            </div>
            <div class="cart-sum">
                <?php echo $item->variant->price*$item->amount .' грн'  ?>
            </div>
            <div class="cart-line"></div>
        </div>
    <?php endforeach;?>
    <?php //print_r($cart);?>
    <div class="cart-total-price">
        <div>Итого: <?php echo $cart->total_price ?> грн.</div>
    </div>
    <div class="sendcart">
        <form action="action.php" method="post">
            <?php foreach ($cart->items as $item):?>
                <input type="hidden" name="productname" value="<?php echo $item->name;?>">
                <input type="hidden" name="productprice" value="<?php echo $item->variant->price;?>">
                <input type="hidden" name="productamount" value="<?php echo $item->amount;?>">
            <?php endforeach;?>

            <input type="text" name="username" placeholder="Имя">
            <input type="text" name="userlastname" placeholder="Фамилия">
            <input type="email" name="email" placeholder="Email">
            <input type="tel" name="phone" placeholder="Телефон">
            <input type="text" name="address" placeholder="Адрес доставки">
            <textarea name="comment" rows="2" placeholder="Комментарий к заказу"></textarea>
            <input name="button1" type="submit" value="Оформить заказ">
        </form>
    </div>

<?php else: ?>
    <h3>Корзина пуста</h3>
<?php endif;?>