<?php if(!empty($cart->items)) :?>
    <div class="row col-12" style="text-align: center">
        <div class="col-3">Фото</div>
        <div class="col-3">Наименование</div>
        <div class="col-2">Цена</div>
        <div class="col-2">Кол-во</div>
        <div class="col-2">Сумма</div>
        <div class="col-12" style="background-color: white; margin: 10px 0 10px 0"></div>
    </div>
    <?php foreach ($cart->items as $item) :?>
        <div class="row col-12" style="text-align: center">
            <!--<hr>-->
            <div class="col-3">
                <img src="files/images/product.jpg" width="150px">
            </div>
            <div class="col-3"><?php echo $item->name?></div>
            <div class="col-2"><?php echo $item->variant->price .' грн' ?></div>
            <div class="col-2">
                <input style="width: 60%" type="number" value="<?php echo $item->amount?>">
            </div>
            <div class="col-2">
                <?php echo $item->variant->price*$item->amount .' грн'  ?>
            </div>
            <div class="col-12" style="background-color: white; margin: 10px 0 10px 0"></div>
        </div>
    <?php endforeach;?>
    <?php //print_r($cart);?>
    <div class="col-12 row" style="text-align: right; font-size: 20px">
        <div class="col-4">К оплате: <?php echo $cart->total_price ?> грн.</div>
        <div class="col-8">
            <h3>Личная информация</h3>
            <form action="" method="post">
                <div class="form-group">
                    <label for="exampleName">Имя</label><br>
                    <input id="exampleName" type="text" name="username" placeholder="Имя">
                </div>
                <div class="form-group" style="margin-top: -15px">
                    <label for="exampleLastName">Фамилия</label><br>
                    <input id="exampleLastName" type="text" name="userlastname" placeholder="Фамилия">
                </div>
                <div class="form-group" style="margin-top: -15px">
                    <label for="exampleEmail">Email</label><br>
                    <input id="exampleEmail" type="email" name="email" placeholder="Email">
                </div>
                <div class="form-group" style="margin-top: -15px">
                    <label for="examplePhone">Телефон</label><br>
                    <input type="tel" name="phone" placeholder="Телефон">
                </div>
                <div class="form-group" style="margin-top: -15px">
                    <label for="exampleAddress">Адрес доставки</label><br>
                    <input type="text" name="address" placeholder="Адрес доставки">
                </div>
                <div class="form-group" style="margin-top: -15px">
                    <label for="exampleComment">Комментарий к заказу</label><br>
                    <textarea name="comment" rows="2" placeholder="Комментарий к заказу"></textarea>
                </div>
                <input name="button1" type="submit" value="Оформить заказ" class="btn btn-success">
            </form>
        </div>
    </div>
<?php else: ?>
    <h3>Корзина пуста</h3>
<?php endif;?>