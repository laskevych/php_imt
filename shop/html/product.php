<?php $product = getProduct($products,$id) ?>

<h1><?php echo $product->name ?></h1>

<div>
    <div>
        <div>
            <div>
                <img src="files/images/product.jpg">
            </div>
        </div>
        <div>
            <div>
                <?php if(count($product->variants) > 1) :?>
                    <select name="variant">
                        <?foreach ($product->variants as $variant) :?>
                            <option><?php echo $variant->name ?> <?php echo ceil($variant->price) ?> грн.</option>
                        <?php endforeach;?>
                    </select>
                <?php else:?>
                    <span>Цена товара: <?php echo ceil($product->variant->price) ?> грн.</span>
                <?php endif;?>
                <div>
                    <form>
                        <input type="hidden" name="r" value="<?php echo $_GET['r'] ?>">
                        <input type="hidden" name="id" value="<?php echo $product->id ?>">
                        <!--<input type="number" name="amount" value="1" min="1" max="10">-->
                        <select type="number" name="amount">
                            <option value="1">Выберите количество</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <button type="submit" class="btn btn-success">Добавить в корзину</button>
                    </form>
                </div>
            </div>
            <?php if($product->description):?>
                <h2>Описание товара</h2>
                <div>
                    Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).
                </div>
            <?php endif;?>
        </div>
    </div>

</div>